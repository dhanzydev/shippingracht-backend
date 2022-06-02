@extends('layouts.auth-admin')

@section('title')
Ubah Password
@endsection

@section('content')
<div class="col-lg-5 col-12">
    <div id="auth-left">
        <div class="auth-logo">
            <a href=""><img src="assets/images/logo/logo.svg" alt="Logo"></a>
        </div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <h1 class="auth-title">Ubah Password</h1>
        <p class="auth-subtitle mb-5">Masukkan password baru anda</p>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="password" type="password" class="form-control form-control-xl @error('password') is-invalid @enderror"
                    name="password" placeholder="Password Baru" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input id="password-confirm" type="password" placeholder="Konfirmasi Password Baru" class="form-control form-control-xl" name="password_confirmation"
                    required autocomplete="new-password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Kirim</button>
        </form>
    </div>
</div>
<div class="col-lg-7 d-none d-lg-block">
    <div id="auth-right">

    </div>
</div>
@endsection
