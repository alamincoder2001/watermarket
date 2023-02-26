<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $orders = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->orderBy("invoice", "DESC")->get();
            $pending = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->where("status", "pending")->orderBy("invoice", "DESC")->get();
            $complete = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->where("status", "delivery")->orderBy("invoice", "DESC")->get();
            $wishlists = Wishlist::with("product")->where('customer_id', Auth::guard('web')->user()->id)->where("ipAddress", request()->ip())->get();
            return view("dashboard.customer-dashboard", compact("wishlists", "orders", "pending", "complete"));
        } else {
            return redirect("/login");
        }
    }

    public function update(Request $request)
    {
        try {
            $customer = Auth::guard('web')->user();
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                $validator = Validator::make($request->all(), [
                    "name"             => "required",
                    "username"         => "required|unique:users,username," . $customer->id,
                    "email"            => "required|unique:users,email," . $customer->id,
                    "mobile"           => "required",
                    "district_id"      => "required",
                    "thana_id"         => "required",
                    "address"          => "required",
                    "old_password"     => "required",
                    "new_password"     => "required",
                    'confirm_password' => 'required_with:new_password|same:new_password'
                ]);
            } else {
                $validator = Validator::make($request->all(), [
                    "name"        => "required",
                    "username"    => "required|unique:users,username," . $customer->id,
                    "email"       => "required|unique:users,email," . $customer->id,
                    "mobile"      => "required",
                    "district_id" => "required",
                    "thana_id"    => "required",
                    "address"     => "required",
                ]);
            }
            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data = User::find($customer->id);
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                if (Hash::check($request->old_password, $customer->password)) {
                    $data->password = Hash::make($request->new_password);
                } else {
                    return response()->json(["errors" => "Old password does not match"]);
                }
            }
            $data->name        = $request->name;
            $data->username    = $request->username;
            $data->email       = $request->email;
            $data->mobile      = $request->mobile;
            $data->district_id = $request->district_id;
            $data->thana_id    = $request->thana_id;
            $data->address     = $request->address;
            $data->save();
            return "Customer Profile Updated";
        } catch (\Throwable $e) {
            return "Opps! Something went wrong";
        }
    }

    public function imageUpdate(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "image" => "mimes:jpg,png,jpeg"
            ]);
            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data = User::find(Auth::guard('web')->user()->id);
            if ($request->hasFile('image')) {
                $old = $data->image;
                if (File::exists($old)) {
                    File::delete($old);
                }
                $data->image = $this->imageUpload($request, "image", "uploads/customers");
            }
            $data->save();
            return "Image upload successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }

    public function logout()
    {
        if (Auth::guard("web")->check()) {
            Auth::guard("web")->logout();
            return redirect("/");
        }
    }
}
