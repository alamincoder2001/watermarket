<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $orders = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->orderBy("invoice", "DESC")->get();
            $pending = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->where("status", "pending")->orderBy("invoice", "DESC")->get();
            $complete = Order::with("orderDetails")->where("customer_id", Auth::guard("web")->user()->id)->where("status", "delivery")->orderBy("invoice", "DESC")->get();
            $wishlists = Wishlist::with("product")->where("ipAddress", request()->ip())->get();
            return view("dashboard.customer-dashboard", compact("wishlists", "orders", "pending", "complete"));
        } else {
            return redirect("/login");
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
