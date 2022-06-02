@extends('layouts.app-admin')

@section('title')
Dashboard
@endsection

@section('title-section')
Tambah Materi
@endsection

@section('content')
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
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
                        <form class="form form-vertical" method="POST" action="{{ route('materi.update', $materi->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Judul Materi</label>
                                            <input type="text" id="first-name-vertical" class="form-control" value="{{ $materi->title }}" name="title"
                                                placeholder="Masukkan Judul Materi">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="last-name-vertical">Deskripsi Materi</label>
                                            <textarea id="materi" rows="5" class="form-control" name="materi"
                                                placeholder="Masukkan Deskripsi Materi"> {!! $materi->materi !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex gap-2 mt-4 justify-content-start">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-warning me-1 mb-1">Reset</button>
                                        <a href="{{ route('materi.index') }}"
                                            class="btn btn-danger me-1 mb-1">Kembali</a>
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

@push('addon-script')
<script>
    tinymce.init({
        selector: '#materi',
        plugins: [
            'autolink', 'autoresize', 'codesample', 'link', 'lists',
            'powerpaste', 'table', 'image', 'quickbars', 'codesample', 'help'
        ],
    });

</script>
@endpush

