<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Auth::guard("web")->check()) {
            if (Cart::content()->count() > 0) {
                return view("checkout");
            }else{
                return redirect("/product");
            }
        }else{
            return redirect("/login");
        }
    }

    public function CheckOut(Request $request)
    {
        try{
            DB::beginTransaction();


            DB::commit();
        }catch(\Throwable $e){
            DB::rollBack();
            return "Opps! something went wrong";
        }
    }
}
