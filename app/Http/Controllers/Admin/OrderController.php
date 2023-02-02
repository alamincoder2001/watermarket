<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.order.index");
    }

    public function fetch(Request $request)
    {
        $clauses = '';
        if (isset($request->dateFrom) && !empty($request->dateFrom)) {
            $clauses .= " AND p.date BETWEEN '$request->dateFrom' AND '$request->dateTo'";
        }
        if (isset($request->invoice) && !empty($request->invoice)) {
            $clauses .= " AND p.invoice = '$request->invoice'";
        }
        if (isset($request->supplier_id) && !empty($request->supplier_id)) {
            $clauses .= " AND p.supplier_id = '$request->supplier_id'";
        }
        $orders = DB::select("SELECT
                            o.*,
                            s.id as supplier_id,
                            s.name,
                            s.supplier_code as code,
                            CONCAT(s.supplier_code, ' - ', s.name) as display_name,
                            s.address,
                            s.mobile,
                            s.supplier_type,
                            u.name AS user_name
                        FROM
                            orders AS o
                        LEFT JOIN suppliers AS s
                        ON s.id = p.supplier_id
                        LEFT JOIN users AS u
                        ON u.id = p.added_by
                        WHERE 1=1
                        $clauses ORDER BY o.invoice DESC                            
                        ");

        foreach ($orders as $purchase) {
            $purchase->purchaseDetails = DB::select("SELECT
                                    pd.*,
                                    p.name,
                                    un.name as unit_name
                                FROM
                                    purchase_details AS pd
                                LEFT JOIN products AS p ON p.id = pd.product_id
                                LEFT JOIN units AS un ON un.id = p.unit_id
                                WHERE pd.purchase_id = ?", [$purchase->id]);
        }

        $invoice = $this->invoiceGenerate("Purchase", "PI");
        return response()->json(['invoice' => $invoice, 'purchases' => $purchases]);
    }

    public function destroy(Request $request)
    {
        $details = PurchaseDetail::where("purchase_id", $request->id)->get();
        foreach ($details as $item) {
            $inventory = ProductInventory::where("product_id", $item->product_id)->first();
            $inventory->purchase_qty = $inventory->purchase_qty - $item->quantity;
            $inventory->save();
        }
        Purchase::find($request->id)->delete();
        return "Purchae Delete Successfully";
    }
} 
