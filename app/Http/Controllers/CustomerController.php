<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        if(Auth::guard('web')->check()){
            return view("dashboard.customer-dashboard");
        }else{
            return redirect("/login");
        }
    }

    public function logout()
    {
        if(Auth::guard("web")->check()){
            Auth::guard("web")->logout();
            return redirect("/");
        }
    }
}
