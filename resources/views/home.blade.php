<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row object-cover">
  <img src="{{ asset('images/B02B2BAC-904B-4B8C-912A-B3FB4AECA93C_1_201_a.jpeg') }}" class="img-fluid" alt="" width="100%" height="50px">
</div>

    {{-- Amazon売上ランキング --}}
          <div class="container text-center mb-4 py-4">
            <h1>Amazon売上ランキング</h1>
            <div class="row">
              <div class="col">
                <a href="#">
                    <img src="{{ asset('/public/images/28943424_l.jpg') }}" class="img-thumbnail">
                </a>
                <div class="row">
                    <div class="col-12">
                        <p class="samuraimart-product-label mt-2">
                            洗剤<br>
                            <label>￥1000</label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
              <a href="#">
                  <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
              </a>
              <div class="row">
                  <div class="col-12">
                      <p class="samuraimart-product-label mt-2">
                          洗剤<br>
                          <label>￥1000</label>
                      </p>
                  </div>
              </div>
          </div>
          <div class="col">
            <a href="#">
                <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
            </a>
            <div class="row">
                <div class="col-12">
                    <p class="samuraimart-product-label mt-2">
                        洗剤<br>
                        <label>￥1000</label>
                    </p>
                </div>
            </div>
        </div>
            </div>
          </div>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
          <a href="{{ route('product.index') }}">
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">もっと見る</button>
          </a>
        </div>
        
        {{-- 新着アイテム --}}
        <div class="container text-center mb-4 py-4">
          <h1>新着アイテム</h1>
          <div class="row">
            <div class="col">
              <a href="#">
                  <img src="{{ asset('/public/images/28943424_l.jpg') }}" class="img-thumbnail">
              </a>
              <div class="row">
                  <div class="col-12">
                      <p class="samuraimart-product-label mt-2">
                          洗剤<br>
                          <label>￥1000</label>
                      </p>
                  </div>
              </div>
          </div>
          <div class="col">
            <a href="#">
                <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
            </a>
            <div class="row">
                <div class="col-12">
                    <p class="samuraimart-product-label mt-2">
                        洗剤<br>
                        <label>￥1000</label>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
          <a href="#">
              <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
          </a>
          <div class="row">
              <div class="col-12">
                  <p class="samuraimart-product-label mt-2">
                      洗剤<br>
                      <label>￥1000</label>
                  </p>
              </div>
          </div>
      </div>
          </div>
        </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="{{ route('product.index') }}">
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">もっと見る</button>
        </a>
      </div>

      {{-- 総合レビュー --}}
      <div class="container text-center mb-4 py-4">
        <h1>総合レビュー</h1>
        <div class="row">
          <div class="col">
            <a href="#">
                <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
            </a>
            <div class="row">
                <div class="col-12">
                    <p class="samuraimart-product-label mt-2">
                        洗剤<br>
                        <label>￥1000</label>
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
          <a href="#">
              <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
          </a>
          <div class="row">
              <div class="col-12">
                  <p class="samuraimart-product-label mt-2">
                      洗剤<br>
                      <label>￥1000</label>
                  </p>
              </div>
          </div>
      </div>
      <div class="col">
        <a href="#">
            <img src="{{ asset('img/chestnut.jpg') }}" class="img-thumbnail">
        </a>
        <div class="row">
            <div class="col-12">
                <p class="samuraimart-product-label mt-2">
                    洗剤<br>
                    <label>￥1000</label>
                </p>
            </div>
        </div>
    </div>
        </div>
      </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="{{ route('product.index') }}">
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">もっと見る</button>
      </div>
@endsection
