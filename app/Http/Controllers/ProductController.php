<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create()
    {
        // 作成ページを返す
    }

    public function store(Request $request)
    {
        // db登録処理
    }

    public function show($id)
    {
        // 商品詳細ページを返す
    }

    public function edit($id)
    {
        // 商品編集ページを返す
    }

    public function update(Request $request, $id)
    {
        // 商品詳細ページで商品の更新ボタンを押したときに呼び出される
        // DBの更新処理
    }

    public function destroy($id)
    {
        // 商品削除処理
    }

}
