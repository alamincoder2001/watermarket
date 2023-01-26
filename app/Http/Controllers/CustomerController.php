<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        return view("dashboard.account");
    }

    public function Register(Request $request)
    {
        try{
            if (isset($request->technician)) {
                return $this->Technician($request);
            }else{
                return $this->Customer($request);
            }
        }catch(\Throwable $e){
            return "Opps something went wrong";
        }
    }

    public function Technician($request)
    {
        return "Technician";
    }
    public function Customer($request)
    {
        return "Customer";
    }
}
