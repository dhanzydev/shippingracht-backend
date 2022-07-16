@extends('layouts.app')

@section('title')
{{ $data->judul_artikel }}
@endsection

@push('addon-style')
@endpush

@section('content')
<!-- Jumbotron -->
<section id="jumbotron-detail-artikel">
    <div class="container d-flex flex-column flex-md-row pt-5 pb-5">
        <div class="detail-jumbotron me-0 me-lg-5 mt-0 mt-lg-5 order-1 order-md-0">
            <span class="tanggal text-primary">{{ $date }}</span>
            <h2 class="judul-artikel fw-bold mb-3">{{ $data->judul_artikel }}</h2>
            <div class="d-flex align-items-center">
                <div class="author-image me-3">
                    <img src="../assets/images/student1.jpg" alt="Author Artikel" />
                </div>
                <p class="author-artikel fw-bold">{{ $data->author->name }}</p>
            </div>
        </div>
        <div class="image-jumbotron order-0 order-md-1 mb-3">
            <img src="{{ url('/').Storage::url($data->foto_sampul) }}" alt="Artikel" class="img-fluid" />
        </div>
    </div>
</section>

<!-- Detail Artikel -->
<section id="detail-artikel">
    <div class="container">
        <!-- Content -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md">
                {!! $data->konten !!}
            </div>
        </div>
        <!-- Content -->

        <!-- Tag -->
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-lg-6 col-md">
                <div class="header-detail-artikel-tag">
                    <h5 class="fw-bold">Tag</h5>
                </div>
                <div class="tags">
                    @foreach ($data->tag as $tag)
                    <a href="{{ route('artikel-tags', $data->slug) }}" class="tag text-decoration-none text-white">{{ $tag->tags }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Tag -->
    </div>
</section>
@endsection
