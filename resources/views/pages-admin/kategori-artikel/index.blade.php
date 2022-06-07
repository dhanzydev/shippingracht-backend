@extends('layouts.app-admin')

@section('title')
Kategori Artikel
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12">
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
            </div>
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Kategori Artikel</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kelola Kategori Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kategori-artikel.create') }}" class="btn btn-primary">Tambah Kategori Artikel</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori Artikel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama_kategori }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')" action="{{ route('kategori-artikel.destroy', $data->id) }}"
                                    method="post">
                                    <a href="{{ route('kategori-artikel.edit',$data->id) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection


