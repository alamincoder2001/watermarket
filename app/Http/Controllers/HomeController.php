<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Thana;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $newarrival_product = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_arrival = 1");
        $feature_product    = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_feature = 1");
        $popular_product    = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_popular = 1");
        $topsold_product    = DB::select("SELECT p.*, c.name as category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id where p.is_topsold = 1");
        $banner             = DB::select("SELECT b.* FROM banners b ORDER BY b.id DESC");
        $blog               = Blog::all();
        $categories         = Category::with('product')->orderBy("name", "ASC")->get();
        $brands             = Brand::with('product')->orderBy("name", "ASC")->get();
        return view('website', compact("brands", "categories", "blog", "newarrival_product", "feature_product", "popular_product", "topsold_product", "banner"));
    }

    // Product
    public function ProductShow()
    {
        if (isset($_GET['sortBy']) && $_GET['sortBy'] == "ascending") {
            $product = Product::orderBy('name', 'ASC')->paginate(25);
        }else if(isset($_GET['sortBy']) && $_GET['sortBy'] == "descending"){
            $product = Product::orderBy('name', 'DESC')->paginate(25);
        }else if(isset($_GET['sortBy']) && $_GET['sortBy'] == "low-high"){
            $product = Product::orderBy('selling_rate', 'ASC')->paginate(25);
        }else if(isset($_GET['sortBy']) && $_GET['sortBy'] == "high-low"){
            $product = Product::orderBy('selling_rate', 'DESC')->paginate(25);
        }else{
            $product = Product::paginate(25); 
        }

        $categories = Category::with('product')->get();
        $brands     = Brand::with('product')->get();
        return view("product", compact('product', 'brands', 'categories'));
    }

    // single product
    public function singleProductShow($slug = null)
    {
        $product = Product::where("slug", $slug)->first();
        return view("single-product", compact('product'));
    }

    public function blog()
    {
        $blog = Blog::paginate(24)->orderBy("id", "DESC");
        return view('blog', compact("blog"));
    }

    public function contact()
    {
        return view('contact');
    }


    public function getUpazila($id)
    {
        return Thana::where("district_id", $id)->orderBy("name", "ASC")->get();
    }
}
