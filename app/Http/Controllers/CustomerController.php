<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            $wishlists = Wishlist::with("product")->where("ipAddress", request()->ip())->get();
            return view("dashboard.customer-dashboard", compact("wishlists"));
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
