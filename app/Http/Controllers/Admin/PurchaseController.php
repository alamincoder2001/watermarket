<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\PurchaseDetail;
use App\Models\ProductInventory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.purchase.index");
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
        $purchases = DB::select("SELECT
                            p.*,
                            s.id as supplier_id,
                            s.name,
                            s.supplier_code as code,
                            CONCAT(s.supplier_code, ' - ', s.name) as display_name,
                            s.address,
                            s.mobile,
                            s.supplier_type,
                            u.name AS user_name
                        FROM
                            purchases AS p
                        LEFT JOIN suppliers AS s
                        ON s.id = p.supplier_id
                        LEFT JOIN users AS u
                        ON u.id = p.added_by
                        WHERE 1=1
                        $clauses ORDER BY p.invoice DESC                            
                        ");

        foreach ($purchases as $purchase) {
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



    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            if ($request->purchase['id'] == null) {
                $data = new Purchase();
            } else {
                $data = Purchase::find($request->purchase['id']);
            }

            if ($request->supplier['supplier_type'] == 'G') {
                if ($request->supplier['id'] != null) {
                    $s = Supplier::find($request->supplier['id']);
                } else {
                    $s                = new Supplier();
                }
                $s->name          = isset($request->supplier['name']) ? $request->supplier['name'] : "";
                $s->mobile        = isset($request->supplier['mobile']) ? $request->supplier['mobile'] : "";
                $s->address       = isset($request->supplier['address']) ? $request->supplier['address'] : "";
                $s->supplier_type = isset($request->supplier['supplier_type']) ? $request->supplier['supplier_type'] : "G";
                $s->save();

                $supplier_id = $s->id;
            } else {
                $supplier_id = $request->supplier['id'];
            }

            $data->invoice         = $request->purchase['invoice'];
            $data->date            = $request->purchase['date'];
            $data->supplier_id     = $supplier_id;
            $data->subtotal        = $request->purchase['subtotal'];
            $data->total           = $request->purchase['total'];
            $data->paid            = $request->purchase['paid'];
            $data->due             = $request->purchase['due'];
            $data->previous_due    = $request->purchase['previous_due'];
            $data->vat             = $request->purchase['vat'];
            $data->vat_amount      = $request->purchase['vat_amount'];
            $data->discount        = $request->purchase['discount'];
            $data->discount_amount = $request->purchase['discount_amount'];
            $data->transport_cost  = $request->purchase['transport_cost'];
            $data->note            = $request->purchase['note'];
            $data->added_by        = Auth::guard('admin')->user()->id;
            $data->save();

            if ($request->purchase['id'] != null) {
                $last_id = $request->purchase['id'];
                $purchaseqtys = PurchaseDetail::where("purchase_id", $last_id)->get();
                foreach($purchaseqtys as $inventoryqty){
                    $inventoryQtyUpdate = ProductInventory::where("product_id", $inventoryqty->product_id)->first();
                    $inventoryQtyUpdate->purchase_qty = $inventoryQtyUpdate->purchase_qty-$inventoryqty->quantity;
                    $inventoryQtyUpdate->save();
                }
                PurchaseDetail::where("purchase_id", $last_id)->delete();
            } else {
                $last_id = $data->id;
            }
            foreach ($request->carts as $item) {
                $details                = new PurchaseDetail();
                $details->purchase_id   = $last_id;
                $details->product_id    = $item['product_id'];
                $details->quantity      = $item['quantity'];
                $details->purchase_rate = $item['purchase_rate'];
                $details->selling_rate  = $item['selling_rate'];
                $details->total_amount  = $item['total_amount'];
                $details->save();

                //inventory-update
                $inventory_check = ProductInventory::where("product_id", $item['product_id'])->first();

                if (!empty($inventory_check)) {
                    $inventory_check->purchase_qty = $inventory_check->purchase_qty+$item['quantity'];
                    $inventory_check->save();
                } else {
                    $new_inventory = new ProductInventory();
                    $new_inventory->product_id = $item['product_id'];
                    $new_inventory->purchase_qty = $item['quantity'];
                    $new_inventory->save();
                }

                //update product price
                $productchange = Product::where("id", $item['product_id'])->first();
                $productchange->purchase_rate = $item['purchase_rate'];
                $productchange->selling_rate = $item['selling_rate'];
                $productchange->save();
            }

            DB::commit();

            if ($request->purchase['id'] == null) {
                return response()->json(['invoice' => $request->purchase['invoice'], 'msg' => "Purchase save successfully"]);
            } else {
                return response()->json(['invoice' => $request->purchase['invoice'], 'msg' => "Purchase updated successfully"]);
            }
        } catch (\Throwable $e) {
            DB::rollback();
            return "Opps! something went wrong";
        }
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



    // Purchase List
    public function purchaseList()
    {
        return view("admin.purchase.purchase_list");
    }

    public function edit($id = null){
        return view("admin.purchase.edit", compact('id'));
    }
}
