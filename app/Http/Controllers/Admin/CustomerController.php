<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.customer.index");
    }

    public function fetch($id = null)
    {
        return DB::select("SELECT c.* FROM users c ORDER BY c.id DESC");
    }
}
