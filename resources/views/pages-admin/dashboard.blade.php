@extends('layouts.app-admin')

@section('title')
Dashboard
@endsection

@section('title-section')
Dashboard
@endsection

@section('content')
<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="bi bi-book-fill" style="margin-top: -14px; margin-left: -10px;"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Materi</h6>
                            <h6 class="font-extrabold mb-0">{{ $materi }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="bi bi-file-earmark-fill" style="margin-top: -14px; margin-left: -10px;"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Artikel</h6>
                            <h6 class="font-extrabold mb-0">{{ $artikel }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Anggota</h6>
                            <h6 class="font-extrabold mb-0">{{ $member }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4>Artikel Baru</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listArtikel as $data)
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">{{ $data->judul_artikel }}</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $data->kategori->nama_kategori }}</p>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4>Materi Baru</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listMateri as $data)
                                <tr>
                                    <td class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <p class="font-bold mb-0">{{ $data->title }}</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="assets/images/faces/1.jpg" alt="Foto Profil">
                </div>
                <div class="ms-3 name">
                    <h5 class="font-bold">{{ $nama }}</h5>
                    <h6 class="text-muted mb-0">{{ $displayUsername }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
