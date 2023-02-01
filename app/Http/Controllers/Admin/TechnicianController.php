<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TechnicianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.technician.index");
    }

    public function fetch($id = null)
    {
        return DB::select("SELECT t.* FROM technicians t ORDER BY t.id DESC");
    }
}
