<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        // productsテーブルからデータを取得
        $products = Product::all(); // 全ての製品を取得する場合

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // 商品詳細ページを返す
    }

}
