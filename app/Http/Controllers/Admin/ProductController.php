<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.product.index");
    }

    public function fetch($id = null)
    {
        $product_code = $this->generateCode("Product", "P");
        $data = DB::select("SELECT
                    p.*,
                    concat(p.product_code, '-', p.name) AS display_name,
                    b.name AS brand_name,
                    sc.name AS subcategory_name,
                    c.id AS category_id,
                    c.name AS category_name,
                    u.name AS unit_name
                FROM
                    products p
                    LEFT JOIN brands b ON b.id = p.brand_id
                    LEFT JOIN subcategories sc ON sc.id = p.subcategory_id
                    JOIN categories c ON c.id = p.category_id
                    LEFT JOIN units u ON u.id = p.unit_id");

        return response()->json(["data" => $data, "product_code"=> $product_code]);
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required"
            ]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            if (!empty($request->id)) {
                $data = Product::find($request->id);
                $old = $data->image;
                $data->updated_at = Carbon::now();
            } else {
                $data = new Product();
                $data->created_at = Carbon::now();
            }

            $data->product_code   = $request->product_code;
            $data->name           = $request->name;
            $data->brand_id       = $request->brand_id;
            $data->category_id    = $request->category_id;
            $data->subcategory_id = $request->subcategory_id;
            $data->unit_id        = $request->unit_id;
            $data->vat            = $request->vat;
            $data->re_order       = $request->re_order;
            $data->purchase_rate  = $request->purchase_rate;
            $data->selling_rate   = $request->selling_rate;
            $data->wholesale_rate = $request->wholesale_rate;

            if ($request->hasFile("image")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->image = $this->imageUpload($request, 'image', 'uploads/products') ?? '';
            }
            $data->save();

            if (!empty($request->id)) {
                return "Product updated successfully";
            } else {
                return "Product insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong".$e->getMessage();
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Product::find($request->id);
            $old = $data->image;
            if (File::exists($old)) {
                File::delete($old);
            }
            $data->delete();
            return "Product Delete successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }
}
