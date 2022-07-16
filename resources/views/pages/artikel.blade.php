@extends('layouts.app')

@section('title')
Shipping Racht - Artikel
@endsection

@push('addon-style')

@endpush

@section('content')
<section id="jumbotron-artikel">
    <div class="container d-flex pt-5 pb-5">
        <div class="detail-jumbotron d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="fw-bold">Artikel</h1>
            <h4 class="text-white">Isu terkini mengenai hukum dan industri pelayaran.</h4>
        </div>
    </div>
</section>
<section id="list-artikel">
    <div class="container d-flex flex-column flex-md-row">
        <!-- Sidebar -->
        <div class="sidebar-artikel order-1 order-md-0">
            <div class="search-artikel mb-3">
                <form action="{{ route('cariartikel') }}" method="get" class="d-flex justify-content-center">
                    <div class="input-group" style="width: 800px;">
                        <input type="search" class="form-control" name="search" placeholder="Cari Materi">
                        <span class="input-group-append">
                            <button class="btn btn-primary border" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <ul class="navigasi-artikel" id="navigasi-artikel">
                <h5 class="fw-bold">Kategori Artikel</h5>
                @foreach ($kategori as $data)
                <li class="nav-link-artikel"> <a href="{{ route('artikel-kategori', $data->slug) }}" class="text-decoration-none text-black">{{ $data->nama_kategori }}</a></li>
                @endforeach
            </ul>
            <div class="daftar-tag">
                <h5 class="fw-bold">Daftar Tag</h5>
                <div class="tags">
                    @foreach ($tagArtikel as $data)
                     <a href="" class="tag text-white text-decoration-none">{{ $data->tags }}</a>
                    @endforeach
                </div>
            </div>
            <div class="card-gabung">
                <p>Jika ada teman-teman yang ingin berkontribusi untuk ikut menulis mengenai isu hukum pelayaran atau
                    isu-isu lain yang terkait dengan industri pelayaran, sangat dipersilahkan.</p>
                <button class="btn btn-primary">Gabung</button>
            </div>
        </div>
        <!-- List Artikel -->
        <div class="list-artikel order-0 order-md-1">
            @foreach ($artikel->chunk(3) as $chunk)
            <div class="row">
                <!-- Card Artikel -->
                @foreach ($chunk as $data)
                <div class="card-artikel col-md-6 col-lg-4">
                    <div class="image-card-artikel mb-3">
                        <img src="{{ url('/').Storage::url($data->foto_sampul) }}" alt="Artikel" class="img-fluid" />
                    </div>
                    <div class="card-detail-artikel">
                        <p class="author-card-artikel m-0">{{ $data->author->name }}</p>
                        <span
                            class="tanggal-card-artikel text-muted">{{ $data->created_at->translatedFormat('d F Y') }}</span>
                        <h5 class="judul-card-artikel mb-3">{{ $data->judul_artikel }} </h5>
                        <a href="{{ route('artikel-detail',[$data->id, $data->slug]) }}" class="btn btn-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            <!-- Pagination -->
            {{ $artikel->links()}}
        </div>
    </div>
</section>
@endsection
