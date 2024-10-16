@extends('layouts.app')

@section('content')
<div class="col">
    <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップ</a></li>
            <li class="breadcrumb-item active" aria-current="page">商品一覧</li>
        </ol>
    </nav>
    <h1>商品一覧<span class="ms-3">100件</span></h1>
    
    <div class="d-flex align-items-center mb-4">
        <span class="small me-2">並べ替え</span>
        <form method="GET" action="/products">
            <select class="form-select form-select-sm" name="select_sort" onChange="this.form.submit();">
                <option value="price_asc">価格が安い順</option>
                <option value="price_desc">価格が高い順</option>
                <option value="newest">新着順</option>
            </select>
        </form>
    </div>
    
    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="/products/1">
                <img src="/img/product1.jpg" class="img-thumbnail samuraimart-product-img-products">
            </a>
            <div class="row">
                <div class="col-12">
                    <p class="samuraimart-product-label mt-2">
                        <a href="/products/1" class="link-dark">商品名1</a><br>
                        <label>￥1,000</label>
                    </p>
                </div>
                <div class="col-12">
                    <span class="samuraimart-star-rating" data-rate="4.5"></span>&nbsp;4.5<br>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 mb-3">
            <a href="/products/2">
                <img src="/img/product2.jpg" class="img-thumbnail samuraimart-product-img-products">
            </a>
            <div class="row">
                <div class="col-12">
                    <p class="samuraimart-product-label mt-2">
                        <a href="/products/2" class="link-dark">商品名2</a><br>
                        <label>￥2,000</label>
                    </p>
                </div>
                <div class="col-12">
                    <span class="samuraimart-star-rating" data-rate="3.5"></span>&nbsp;3.5<br>
                </div>
            </div>
        </div>
        
        <!-- 他の商品も同様に追加 -->
    </div>
    
    <div class="mb-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection