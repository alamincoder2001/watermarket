<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $date = date("Y-m-d");
        $total = [];
        $total['today_order'] = DB::select("SELECT
                                        o.*
                                    FROM orders o
                                    WHERE o.status != 'cancel' AND o.date = '$date'");
        $total['monthly_order'] = DB::select("SELECT
                                        o.*
                                    FROM orders o
                                    WHERE o.status != 'cancel' AND month(o.date) = date('m-d')");
        $total['yearly_order'] = DB::select("SELECT
                                        o.*
                                    FROM orders o
                                    WHERE o.status != 'cancel' AND year(o.date) = date('Y')");

        $total['today_sold'] = DB::select("SELECT
                                    IFNULL(SUM(o.total), 0) as total_amount
                                    FROM orders o
                                    WHERE o.status = 'delivery' AND o.updated_at = '$date'");
        $total['monthly_sold'] = DB::select("SELECT
                                    IFNULL(SUM(o.total), 0) as total_amount
                                    FROM orders o
                                    WHERE o.status = 'delivery' AND month(o.updated_at) = date('m-d')");
        $total['yearly_sold'] = DB::select("SELECT
                                    IFNULL(SUM(o.total), 0) as total_amount
                                    FROM orders o
                                    WHERE o.status = 'delivery' AND year(o.updated_at) = date('Y')");

        return view("admin.dashboard", compact('total'));
    }


    // admin profile updated
    public function profileIndex()
    {
        $data = Auth::guard('admin')->user();
        return view("admin.profile", compact('data'));
    }

    public function profileUpdate(Request $request)
    {
        try {
            $admin = Auth::guard('admin')->user();
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                $validator = Validator::make($request->all(), [
                    "name"             => "required",
                    "username"         => "required|unique:admins,username," . $admin->id,
                    "email"            => "required|unique:admins,email," . $admin->id,
                    "old_password"     => "required",
                    "new_password"     => "required",
                    'confirm_password' => 'required_with:new_password|same:new_password'
                ]);
            } else {
                $validator = Validator::make($request->all(), [
                    "name"     => "required",
                    "username" => "required|unique:admins,username," . $admin->id,
                    "email"    => "required|unique:admins,email," . $admin->id,
                ]);
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data = Admin::find($admin->id);
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                if (Hash::check($request->old_password, $admin->password)) {
                    $data->password = Hash::make($request->new_password);
                } else {
                    return response()->json(["errors" => "Old password does not match"]);
                }
            }
            $data->name = $request->name;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->save();
            return "Admin Profile Updated";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function imageUpdate(Request $request)
    {
        try {

            $admin = Auth::guard('admin')->user();

            $validator = Validator::make($request->all(), [
                "image" => "mimes:jpg,png,jpeg|dimensions:width=200,height=200"
            ], ["image.dimensions" => "Image dimension must be (200 x 200)"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data = Admin::find($admin->id);
            $old = $data->image;

            if (!empty($old) && isset($old)) {
                if (File::exists($old)) {
                    File::delete($old);
                }
            }
            $data->image = $this->imageUpload($request, 'image', 'uploads/admins') ?? '';

            $data->save();
            return "Image Upload successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function AdminLogout()
    {
        Auth::guard("admin")->logout();
        return redirect("/");
    }
}
