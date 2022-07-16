@extends('layouts.app')

@section('title')
Artikel
@endsection

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
            <div class="search-artikel d-flex mb-3">
                <input type="text" placeholder="Search.." class="search-bar" />
                <button class="btn btn-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <ul class="navigasi-artikel" id="navigasi-artikel">
                <h5 class="fw-bold">Kategori Artikel</h5>
                <li class="nav-link-artikel active">Kategori 1</li>
                <li class="nav-link-artikel">Kategori 2</li>
                <li class="nav-link-artikel">Kategori 3</li>
                <li class="nav-link-artikel">Kategori 4</li>
                <li class="nav-link-artikel">Kategori 5</li>
            </ul>
            <div class="daftar-tag">
                <h5 class="fw-bold">Daftar Tag</h5>
                <div class="tags">
                    <div class="tag">Pelayaran</div>
                    <div class="tag">Industri</div>
                    <div class="tag">Hukum Pelayaran</div>
                    <div class="tag">Politik</div>
                    <div class="tag">Ilmu Pengetahuan</div>
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
            <div class="row">
                <!-- Card Artikel -->
                <div class="card-artikel col-md-6 col-lg-4">
                    <div class="image-card-artikel mb-3">
                        <img src="../assets/images/artikel-3.png" alt="Artikel" class="img-fluid" />
                    </div>
                    <div class="card-detail-artikel">
                        <p class="author-card-artikel m-0">Author</p>
                        <span class="tanggal-card-artikel text-muted">Juni 26, 2022</span>
                        <h5 class="judul-card-artikel mb-3">Pentingnya Sektor Pelayaran Bagi Industri Galangan Kapal
                        </h5>
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
                <!-- Card Artikel -->
                <div class="card-artikel col-md-6 col-lg-4">
                    <div class="image-card-artikel mb-3">
                        <img src="../assets/images/artikel-3.png" alt="Artikel" class="img-fluid" />
                    </div>
                    <div class="card-detail-artikel">
                        <p class="author-card-artikel m-0">Author</p>
                        <span class="tanggal-card-artikel text-muted">Juni 26, 2022</span>
                        <h5 class="judul-card-artikel mb-3">Pentingnya Sektor Pelayaran Bagi Industri Galangan Kapal
                        </h5>
                        <button class="btn btn-primary">Baca Selengkapnya</button>
                    </div>
                </div>
            </div>
            <!-- Pagination -->

        </div>
    </div>
</section>
@endsection
