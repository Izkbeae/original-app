@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
    @if (session('flash_message'))
        <p class="text-success">{{ session('flash_message') }}</p>
    @endif

    @if (session('error_message'))
        <p class="text-danger">{{ session('error_message') }}</p>
    @endif

    <div class="mb-2">
        <a href="{{ route('products.create') }}" class="text-decoration-none">新規投稿</a>
    </div>

    @if($products->isNotEmpty())
        @foreach($products as $product)
            <article>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="card-title fs-5">{{ $product->title }}</h2>
                        <p class="card-text">{{ $product->content }}</p>
                        <p class="card-text">{{ $product->updated_at }}</p>

                        <div class="d-flex">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-outline-primary d-block me-1">詳細</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary d-block me-1">編集</a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('本当に削除してもよろしいですか？');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">削除</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    @else
        <p>投稿はありません。</p>
    @endif
@endsection