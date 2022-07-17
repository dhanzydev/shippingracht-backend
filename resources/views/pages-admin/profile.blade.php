@extends('layouts.app-admin')

@section('title')
Profile
@endsection

@section('title-section')
Profile
@endsection

@section('content')
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible show fade">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible show fade">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible show fade">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-3 mb-5">
                                        @if ($user->gender == 1 && $user->picture == '')
                                        <img src="/admin-page/assets/images/man.png" class="img-fluid w-100" alt="Foto Profil">
                                        @elseif($user->gender == 0 && $user->picture == '')
                                        <img src="/admin-page/assets/images/woman.png" alt="Foto Profil" class="img-fluid w-100">
                                        @else
                                        <img src="{{ url('/').Storage::url($user->picture) }}" alt="" class="img-fluid w-100">
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Nama</label>
                                            <input type="text" id="first-name-vertical" value="{{ $user->name }}" class="form-control" name="name"
                                                placeholder="Masukkan Nama Pengguna">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="first-name-vertical">Jenis Kelamin</label>
                                        <div class="row">
                                            @if($user->gender == 1)
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" checked type="radio" name="gender" value="1"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Laki - Laki
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" value="0"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender" value="1"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Laki - Laki
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" checked type="radio" name="gender" value="0"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Username</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="username" value="{{ $user->username }}" placeholder="Masukkan Username Pengguna">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Foto Profil <br>
                                                <span class="text-danger">*Maksmial Ukuran Foto 2MB</span> <br>
                                                <span class="text-danger">*Format File yang bisa diterima JPG, JPEG,
                                                    PNG</span>
                                            </label>
                                            <input type="file" class="form-control" name="picture"
                                                placeholder="Masukkan Foto Sampul Artikel">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Email</label>
                                            <input type="email" disabled id="first-name-vertical" class="form-control"
                                                name="email" value="{{ $user->email }}" placeholder="Masukkan Email Pengguna">
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex gap-2 mt-4 justify-content-start">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-warning me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Vertical form layout section end -->
@endsection
