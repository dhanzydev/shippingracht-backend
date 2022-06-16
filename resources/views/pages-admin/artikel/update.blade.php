@extends('layouts.app-admin')

@push('addon-style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('title')
Edit Artikel
@endsection

@section('title-section')
Edit Artikel
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
                        <form class="form form-vertical" method="POST" action="{{ route('artikel.update', $artikel->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Judul Artikel</label>
                                            <input type="text" id="first-name-vertical" class="form-control"
                                                name="judul_artikel" value="{{ $artikel->judul_artikel }}" placeholder="Masukkan Judul Artikel">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="first-name-vertical">Kategori Artikel</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="kategori_id" id="basicSelect">
                                                <option selected>Pilih Kategori</option>
                                                @foreach ($kategoriArtikel as $kategori=>$id)
                                                <option value="{{ $id }}" {{ $id == $artikel->kategori_id ? 'selected' : '' }}>{{ $kategori}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-6">
                                        <label for="first-name-vertical">Status Artikel</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="status" id="basicSelect">
                                                <option value="Terbit" {{ $artikel->status == "Terbit" ? 'selected' : '' }}>Terbit</option>
                                                <option value="Tidak Terbit" {{ $artikel->status == "Tidak Terbit" ? 'selected' : '' }}>Tidak Terbit</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <p>FOTO SAMPUL SEKARANG</p>
                                    <img src="{{ Storage::url($artikel->foto_sampul) }}" alt="" class="w-25 h-25">
                                    <div class="col-12 mt-3">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Foto Sampul Artikel <br>
                                                <span class="text-danger">*Maksmial Ukuran Foto 2MB</span> <br>
                                                <span class="text-danger">*Format File yang bisa diterima JPG, JPEG,
                                                    PNG</span>
                                            </label>
                                            <input type="file" class="form-control" name="foto_sampul"
                                                placeholder="Masukkan Foto Sampul Artikel">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="form-label">Tag
                                                Artikel</label>
                                            <fieldset class="form-group">
                                                <select class="form-select tags" multiple="multiple" name="tags[]"
                                                    id="basicSelect">
                                                    @foreach ($tag as $data=>$id)
                                                    <option value="{{ $id }}"
                                                        @foreach ($artikel->tag as $tag)
                                                        {{ $id == $tag->id ? 'selected' : '' }}
                                                        @endforeach>
                                                        {{ $data }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="form-label">Konten
                                                Artikel</label>
                                            <textarea class="form-control" name="konten" id="editor" rows="3">
                                                {!! $artikel->konten !!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex gap-2 mt-4 justify-content-start">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-warning me-1 mb-1">Reset</button>
                                        <a href="{{ route('artikel.index') }}"
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
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserUploadUrl: "{{route('image-upload-artikel', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'

    };

</script>

<script>
    CKEDITOR.replace('editor', options);
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".tags").select2({
        tags: true
    });

</script>
@endpush
