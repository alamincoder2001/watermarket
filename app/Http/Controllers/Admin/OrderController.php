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
            $clauses .= " AND o.date BETWEEN '$request->dateFrom' AND '$request->dateTo'";
        }
        if (isset($request->invoice) && !empty($request->invoice)) {
            $clauses .= " AND o.invoice = '$request->invoice'";
        }
        if (isset($request->customer_id) && !empty($request->customer_id)) {
            $clauses .= " AND o.customer_id = '$request->customer_id'";
        }
        $orders = DB::select("SELECT
                            o.*,
                            c.id as customer_id,
                            c.name,
                            c.customer_code as code,
                            c.address,
                            c.mobile
                        FROM
                            orders AS o
                        LEFT JOIN users AS c
                        ON c.id = o.customer_id
                        WHERE 1=1
                        $clauses ORDER BY o.invoice DESC                            
                        ");

        foreach ($orders as $order) {
            $order->orderDetails = DB::select("SELECT
                                    od.*,
                                    p.name,
                                    un.name as unit_name
                                FROM
                                    order_details AS od
                                LEFT JOIN products AS p ON p.id = od.product_id
                                LEFT JOIN units AS un ON un.id = p.unit_id
                                WHERE od.order_id = ?", [$order->id]);
        }

        $invoice = $this->invoiceGenerate("Order", "PI");
        return response()->json(['invoice' => $invoice, 'orders' => $orders]);
    }

    // public function destroy(Request $request)
    // {
    //     $details = PurchaseDetail::where("purchase_id", $request->id)->get();
    //     foreach ($details as $item) {
    //         $inventory = ProductInventory::where("product_id", $item->product_id)->first();
    //         $inventory->purchase_qty = $inventory->purchase_qty - $item->quantity;
    //         $inventory->save();
    //     }
    //     Purchase::find($request->id)->delete();
    //     return "Purchae Delete Successfully";
    // }
} 
