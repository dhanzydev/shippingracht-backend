@extends('layouts.app-admin')

@section('title')
Materi
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="alert alert-primary">
                    <ul>
                        <li>
                            Tambahkan Heading pada form Isi Materi untuk menambahkan daftar isi
                        </li>
                    </ul>
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
                <h3>Daftar Materi</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kelola Materi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('materi.create') }}" class="btn btn-primary">Tambah Materi</a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Materi</th>
                            <th>Jumlah Dibaca</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materi as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->views }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus data?')" action="{{ route('materi.destroy', $data->id) }}"
                                    method="post">
                                    <a href="{{ route('detail-materi',[$data->id, $data->slug]) }}" class="btn btn-primary">Lihat</a>
                                    <a href="{{ route('materi.edit',$data->id) }}" class="btn btn-warning">
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


