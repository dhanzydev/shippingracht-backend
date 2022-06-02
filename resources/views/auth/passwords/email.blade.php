@extends('layouts.auth-admin')

@section('title')
Lupa Password
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
            <h1 class="auth-title">Lupa Password</h1>
            <p class="auth-subtitle mb-5">Masukkan email anda dan kami akan memberikan link untuk mengubah password</p>

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control-xl" value="{{ old('email') }}" required autocomplete="email" autofocus name="email" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
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
