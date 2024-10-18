@extends('layouts.app')

@section('content')
<div class="col">
    <nav class="mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">トップ</a></li>
            <li class="breadcrumb-item active" aria-current="page">商品一覧</li>
        </ol>
    </nav>
    <div class="col-xl-3 col-lg-4 col-md-12">
                <form method="GET" action="{{ route('products.index') }}" class="w-100 mb-3">
                    <div class="input-group">
                        <button type="submit" class="btn text-white shadow-sm nagoyameshi-btn">検索</button>
                    </div>
                </form>

            </div>

            <div class="col">
                <div class="d-flex justify-content-between flex-wrap">
                    <p class="fs-5 mb-3">
                        <span class="fs-6">
                        </span>
                    </p>
                    <form method="GET" action="{{ route('products.index') }}" class="mb-3 nagoyameshi-sort-box">
                        
                        <select class="form-select form-select-sm" name="select_sort" aria-label=".form-select-sm example" onChange="this.form.submit();">
                            
                        </select>
                    </form>
                </div>

                
        </div>
@endsection