@extends('layouts.auth-admin')

@section('title')
Login
@endsection

@section('content')
<div class="col-lg-5 col-12">
    <div id="auth-left">
        <div class="auth-logo">
            <a href="#" class="fs-2">ShippingRacht</a>
        </div>
        <h1 class="auth-title">Log in.</h1>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" class="form-control @error('username') is-invalid @enderror form-control-xl"
                    name="username" placeholder="Username">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control @error('username') is-invalid @enderror form-control-xl"
                    name="password" placeholder="Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-check form-check-lg d-flex align-items-end">
                <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label text-gray-600" for="flexCheckDefault">
                    Keep me logged in
                </label>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
            @if (Route::has('password.request'))
            <p class="font-bold">
                <a class="font-bold" href="{{ route('password.request') }}">
                {{ __('Lupa Password?') }}
            </a>
            </p>
            @endif
        </div>
    </div>
</div>
<div class="col-lg-7 d-none d-lg-block">
    <div id="auth-right">

    </div>
</div>
@endsection
