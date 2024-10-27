@extends('layouts.app')

@section('content')
    <div class="container my-4 nagoyameshi-container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7">
                <h1 class="mb-4 text-center">ログイン</h1>

                <hr class="mb-4">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="form-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス" autofocus>
                    </div>

                    <div class="form-group mb-3">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="パスワード">
                    </div>

                    <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    次回から自動的にログインする
                                </label>
                            </div>
                    </div>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                        <button type="submit" class="btn btn-outline-secondary btn-lg px-4">ログイン</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection