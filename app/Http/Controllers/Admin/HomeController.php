<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $total_products = Product::count();

        return view('admin.home',compact('total_products'));
    }
}