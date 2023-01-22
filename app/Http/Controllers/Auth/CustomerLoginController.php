<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomerLoginController extends Controller
{
    
    public function showSignUpForm()
    {
        return view("auth.frontend.signup");
    }

    public function CustomerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "username" => "required",
            "password" => "required"
        ],["username.required" => "Username or Email required"]);

        if($validator->fails()){
            return response()->json(["error" => $validator->errors()]);
        }
        if (Auth::guard('technician')->attempt($this->credentials($request->username, $request->password))) {
            return response()->json("Successfully Login");
        } else {
            return response()->json(["errors" => "Password or Email Not Match"]);
        }
    }

    //credentials checkb 
    public function credentials($username, $password)
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return ['email' => $username, 'password' => $password];
        }else{
            return ['username' => $username, 'password' => $password];
        }
    }
}
