<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $data = Setting::first();
        return view("admin.setting", compact("data"));
    }

    public function updateSetting(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "company_name" => "required",
                "mobile"       => "required",
            ]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data               = Setting::first();
            $data->company_name = $request->company_name;
            $data->mobile       = $request->mobile;
            $data->email        = $request->email;
            $data->address      = $request->address;
            $data->facebook     = $request->facebook;
            $data->instagram    = $request->instagram;
            $data->twitter      = $request->twitter;
            $data->linkedin     = $request->linkedin;

            $data->save();
            return "Setting updated successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function logoUpdate(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "logo" => "mimes:jpg,png,jpeg|dimensions:width=150,height=55"
            ], ["logo.dimensions" => "Image dimension must be (150 x 55)"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data        = Setting::first();
            $old_logo    = $data->logo;

            if (!empty($old_logo) && isset($old_logo)) {
                if (File::exists($old_logo)) {
                    File::delete($old_logo);
                }
            }

            $data->logo    = $this->imageUpload($request, 'logo', 'uploads/logo') ?? '';

            $data->save();
            return "Logo Image Upload successfully";
        } catch (\Throwable $e) {
            return "Something went wrong ";
        }
    }
    public function naviconUpdate(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "navicon" => "mimes:jpg,png,jpeg|dimensions:width=80,height=80"
            ], ["navicon.dimensions" => "Image dimension must be (80 x 80)"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data        = Setting::first();
            $old_navicon    = $data->navicon;

            if (!empty($old_navicon) && isset($old_navicon)) {
                if (File::exists($old_navicon)) {
                    File::delete($old_navicon);
                }
            }

            $data->navicon    = $this->imageUpload($request, 'navicon', 'uploads/navicon') ?? '';

            $data->save();
            return "Navicon Image Upload successfully";
        } catch (\Throwable $e) {
            return "Something went wrong ";
        }
    }
}
