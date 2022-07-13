@extends('layouts.app-admin')

@section('title')
Artikel
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary">
                    <ul>
                        <li>Pastikan Kategori Artikel dan Tag Artikel sudah ditambahkan melalui halaman
                            <a href="{{ route('kategori-artikel.index') }}">Kelola Kategori Artikel</a> dan
                            <a href="{{ route('tag-artikel.index') }}">Kelola Tag Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
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
                <h3>Daftar Artikel</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kelola Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Artikel</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Artikel</th>
                            <th>Kategori Artikel</th>
                            <th>Tag Artikel</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $data)
                        @if ($data->user_id == Auth::user()->id)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->judul_artikel }}</td>
                            <td>{{ $data->nama_kategori }}</td>
                            <td>
                                @foreach ($data->tag as $tag)
                                <span class="badge bg-primary">{{ $tag->tags }}</span>
                                @endforeach
                            </td>
                            <td>{{ $data->created_at->translatedFormat('d F Y h:i:s') }}</td>
                            <td>
                                @if ($data->status == 'Terbit')
                                <span class="badge bg-success">Terbit</span>
                                @else
                                <span class="badge bg-danger">Tidak Terbit</span>
                                @endif
                            </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')"
                                    action="{{ route('artikel.destroy', $data->id) }}" method="post">
                                    <a href="{{ route('artikel.show',$data->id) }}" class="btn btn-primary">
                                        Lihat
                                    </a>
                                    <a href="{{ route('artikel.edit',$data->id) }}" class="btn btn-warning">
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
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
@endsection

@push('addon-script')
<script>
    $(document).ready(function () {
        var table = $('#table1').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });

</script>
@endpush
