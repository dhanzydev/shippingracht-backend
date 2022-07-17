@extends('layouts.app-admin')

@section('title')
Daftar Artikel
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar Artikel</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Artikel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Artikel</th>
                            <th>Kategori Artikel</th>
                            <th>Jumlah Dibaca</th>
                            <th>Author</th>
                            <th>Tag Artikel</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->judul_artikel }}</td>
                            <td>{{ $data->kategori->nama_kategori }}</td>
                            <td>{{ $data->views }}</td>
                            <td>{{ $data->author->name }}</td>
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
                                <a href="{{ route('artikel-detail',[$data->id, $data->slug]) }}"
                                    class="btn btn-primary">
                                    Lihat
                                </a>
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
