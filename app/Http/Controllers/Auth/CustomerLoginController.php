<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Technician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerLoginController extends Controller
{

    public function showSignInForm()
    {
        return view("auth.frontend.signin");
    }

    public function showSignUpForm()
    {
        return view("auth.frontend.signup");
    }

    //credentials checkb 
    public function credentials($username, $password)
    {
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            return ['email' => $username, 'password' => $password];
        } else {
            return ['username' => $username, 'password' => $password];
        }
    }

    public function CustomerLogin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "username" => "required",
                "password" => "required"
            ], ["username.required" => "Username or Email required"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            if (Auth::guard('web')->attempt($this->credentials($request->username, $request->password))) {
                return response()->json("Successfully Login");
            } else {
                return response()->json(["errors" => "Password or Email Not Match"]);
            }
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }

    public function CustomerRegister(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name"             => "required",
                "username"         => "required",
                "email"            => "required",
                "mobile"           => "required",
                "password"         => "required",
                "customer_type"    => "required",
                "confirm_password" => "required_with:password|same:password",
                "nid_card"         => "nullable|mimes:jpg,png",
                "trade_license"    => "nullable|mimes:jpg,png",
                "visiting_card"    => "nullable|mimes:jpg,png",
            ]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data                = new User();
            $data->customer_code = $this->generateCode("User", "C");
            $data->name          = $request->name;
            $data->username      = $request->username;
            $data->email         = $request->email;
            $data->mobile        = $request->mobile;
            $data->customer_type = $request->customer_type;
            $data->password      = Hash::make($request->password);
            if ($request->hasFile('nid_card')) {
                $data->nid_card = $this->imageUpload($request, 'nid_card', "uploads/nidCard");    
            }
            if ($request->hasFile('trade_license')) {
                $data->trade_license = $this->imageUpload($request, 'trade_license', "uploads/tradeLicense");
            }
            if ($request->hasFile('visiting_card')) {
                $data->visiting_card = $this->imageUpload($request, 'visiting_card', "uploads/visitingCard");
            }
            $data->save();

            // if($request->customer_type == 'Retail'){
            //     if (Auth::guard('web')->attempt($this->credentials($request->username, $request->password))) {
            //         return response()->json(["msg" => "Successfully Register", "customer_type" => $request->customer_type]);
            //     }
            // }
            return response()->json(["msg" => "Successfully Register", "customer_type" => $request->customer_type]);
        } catch (\Throwable $e) {
            return "Opps something went wrong";
        }
    }

    public function TechnicianRegister(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "username" => "required",
                "email" => "required",
                "mobile" => "required",
                "password" => "required",
                "confirm_password" => "required_with:password|same:password",
            ]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data                  = new Technician();
            $data->technician_code = $this->generateCode("Technician", "T");
            $data->name            = $request->name;
            $data->username        = $request->username;
            $data->email           = $request->email;
            $data->mobile          = $request->mobile;
            $data->password        = Hash::make($request->password);
            $data->save();
            return "Technician save";
        } catch (\Throwable $e) {
            return "Opps something went wrong";
        }
    }
}
