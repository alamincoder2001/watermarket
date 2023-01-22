<?php

namespace App\Http\Controllers;

use App\Thana;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website');
    }

    public function contact()
    {
        return view('contact');
    }


    public function getUpazila($id)
    {
        return Thana::where("district_id",$id)->orderBy("name", "ASC")->get();
    }
}
