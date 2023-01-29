<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Thana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $newarrival_product = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_arrival = 1");
        $feature_product = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_feature = 1");
        $popular_product = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_popular = 1");
        $topsold_product = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_topsold = 1");
        $banner = DB::select("SELECT b.* FROM banners b ORDER BY b.id DESC");

        return view('website', compact("newarrival_product", "feature_product", "popular_product", "topsold_product", "banner"));
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
