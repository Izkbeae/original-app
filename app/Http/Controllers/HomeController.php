<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
     
        return view('home');
    }
}