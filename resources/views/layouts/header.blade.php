    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 px-4 border-bottomtext-decoration-none">
      <div class="fs-4 col-md-3 mb-2 mb-md-0">
        <a href="{{ url('/') }}" class="d-inline-flex link-body-emphasis text-decoration-none">
          WASHWISE
        </a>
      </div>
      

      <div class="col-md-3 text-end">
      <a href="{{ route('login') }}" class="text-decoration-none">
        <button type="button" class="btn btn-outline-primary me-2">ログイン</button>
      </a>
      <a href="{{ route('register') }}">
        <button type="button" class="btn btn-outline-primary me-2">新規登録</button>
      </a>
      </div>
    </header>