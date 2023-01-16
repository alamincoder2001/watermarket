<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.supplier.index");
    }

    public function fetch($id = null)
    {
        $supplier_code = $this->generateCode("Supplier", "S");
        if ($id != null) {
            $data = Supplier::find($id);
        } else {
            $data = DB::select("SELECT s.*, CONCAT(s.supplier_code,' - ',s.name) as display_name FROM suppliers s");
        }
        return response()->json(["data" => $data, "supplier_code"=> $supplier_code]);
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
                $data = Supplier::find($request->id);
                $old = $data->image;
                $data->updated_at = Carbon::now();
            } else {
                $data = new Supplier();
                $data->created_at = Carbon::now();
            }

            $data->supplier_code = $request->supplier_code;
            $data->name          = $request->name;
            $data->owner_name    = $request->owner_name;
            $data->address       = $request->address;
            $data->mobile        = $request->mobile;
            $data->email         = $request->email;
            $data->previous_due  = $request->previous_due;
            $data->supplier_type = "retail";
            if ($request->hasFile("image")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->image = $this->imageUpload($request, 'image', 'uploads/suppliers') ?? '';
            }
            $data->save();

            if (!empty($request->id)) {
                return "Supplier updated successfully";
            } else {
                return "Supplier insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Supplier::find($request->id);
            $old = $data->image;
            if (File::exists($old)) {
                File::delete($old);
            }
            $data->delete();
            return "Supplier Delete successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }
}
