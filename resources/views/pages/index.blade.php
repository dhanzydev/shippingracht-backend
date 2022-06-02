@extends('layouts.app')

@section('title')
Beranda
@endsection

@section('content')
<!-- Content -->
    <section id="header">
        <div class="container">
            <div class="text-left">
                <h1 class="opening-text text-light text-center">Mari Belajar Bersama Kami Dimanapun dan Kapanpun</h1>
                <div class="btn-start mt-5 mb-lg-5 text-center">
                    <a href="#" class="btn btn-light mb-4 mb-lg-0 btn-margin">Mulai Belajar</a>
                    <a href="#" class="btn btn-outline-light">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="img-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500">
                <img class="img-fluid d-flex mx-auto" width="1000px" src="/assets/images/hero-illustration.png" alt="">
            </div>
        </div>
    </section>

    <!-- Service -->
    <section id="service">
        <div class="container">
            <div class="title mb-5">
                <h5 class="title-section text-center mb-4">
                    Layanan Kami
                </h5>
                <h1 class="text-center">Kami Berikan yang Terbaik</h1>
            </div>
            <div class="services row">
                <div class="col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="card rounded shadow" data-aos="fade-down" data-aos-duration="1000">
                        <img src="/assets/images/materi-gratis.png" class="mt-3 mb-3 card-img-top d-block mx-auto"
                            alt="...">
                        <div class="card-body">
                            <h2 class="card-text fw-bold text-center">Materi Lengkap dan <br> Gratis</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="card shadow rounded" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                        <img src="/assets/images/diskusi.png" class="mt-3 mb-3 card-img-top d-block mx-auto" alt="...">
                        <div class="card-body">
                            <h2 class="card-text fw-bold text-center">Tersedia Forum dan <br> Diskusi</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="card shadow rounded" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                        <img src="/assets/images/timee.png" class="mt-3 mb-3 card-img-top d-block mx-auto" alt="...">
                        <div class="card-body">
                            <h2 class="card-text fw-bold text-center">Akses Dimana saja <br> dan Kapan Saja</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mb-4" data-aos="fade-down" data-aos-delay="300"
                    data-aos-duration="1000">
                    <div class="card shadow rounded">
                        <img src="/assets/images/mentor.png" class="mt-3 mb-3 card-img-top d-block mx-auto" alt="...">
                        <div class="card-body">
                            <h2 class="card-text fw-bold text-center">Mentor yang ahli di <br> bidangnya</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                    <img src="/assets/images/about-us.png" class="img-fluid img-about-us" alt="">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
                    <h5 class="title-about-us">Tentang Kami</h5>
                    <h1 class="fw-bold">Kuliah Gratis Bersama Kami</h1>
                    <div class="description">
                        <p>
                            Indonesia merupakan salah satu negara maritim terbesar di dunia. Potensi industri
                            pelayarannya
                            sangat besar dan menjanjikan. Bahkan Presiden Jokowi saja, pada tahun 2014, mengagendakan
                            Indonesia
                            untuk menjadi poros maritim dunia.
                        </p>

                        <p>
                            Namun, sedihnya, hukum pelayaran Indonesia belum secanggih hukum pelayaran yang industri
                            pelayarannya sudah maju, katakanlah Inggris. Contohnya, dalam penyelesaian sengketa
                            pelayaran (i.e.,
                            penangkapan dan pelepasan kapal), masih membutuhkan waktu yang cukup lama dan costly. Tentu,
                            hal ini
                            menghambat bisnis di industri pelayaran.
                        </p>

                        <p>
                            Paling tidak, ada tiga alasan untuk mengatakan bahwa industri pelayaran di Indonesia belum
                            maju dari
                            sisi hukum komersialnya. Pertama, sangat terbatasnya ahli hukum pelayaran yang memang
                            benar-benar
                            berfokus di bidang pelayaran dari sisi komersial (commercial shipping law). Kedua, tidak ada
                            fakultas hukum di Indonesia yang menyediakan jurusan spesifik di bidang hukum pelayaran;
                            sejauh ini,
                            tidak satu pun ada. Ketiga, Indonesia belum memiliki pengadilan yang khusus menyelesaikan
                            sengketa
                            di bidang pelayaran.
                        </p>

                        <p>
                            Oleh karena itu, Shipping Recht bertujuan untuk berbagi ilmu mengenai hukum pelayaran.
                            Paling tidak,
                            jika ada teman-teman yang ingin belajar hukum pelayaran, dapat mengakses ilmu secara gratis.
                            Semoga
                            saja, makin banyak yang berminat untuk belajar mengenai hukum pelayaran di Indonesia maupun
                            internasional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog List Recent -->

    <!-- Blog nanti muncul klo udh ada beberaoa -->

    <!-- <section id="blog">
        <div class="container">
            <h5 class="title-section">Artikel</h5>
            <h1>Artikel terbaru dari Kami</h1>
            <div class="row">
                <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card border-0">
                        <img src="/assets/images/artikel-1.png" class="mt-3 mb-3 card-img-top d-block mx-auto"
                            alt="...">
                        <div class="card-body p-0">
                            <p class="info card-text"><small class="text-muted">15 Mei 2022 - Kategori Artikel 1</small>
                            </p>
                            <h3 class="card-text text-black fw-bold mb-5">Lorem Ipsum Dolor sit Amet consectetur
                                adipisicing.</h3>
                            <a class="card-text text-decoration-none text-center" href="#">Baca Selengkapnya ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="card border-0">
                        <img src="/assets/images/artikel-1.png" class="mt-3 mb-3 card-img-top d-block mx-auto"
                            alt="...">
                        <div class="card-body p-0">
                            <p class="info card-text"><small class="text-muted">15 Mei 2022 - Kategori Artikel 1</small>
                            </p>
                            <h3 class="card-text text-black fw-bold mb-5">Lorem Ipsum Dolor sit Amet consectetur
                                adipisicing.</h3>
                            <a class="card-text text-decoration-none text-center" href="#">Baca Selengkapnya ></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="card border-0">
                        <img src="/assets/images/artikel-1.png" class="mt-3 mb-3 card-img-top d-block mx-auto"
                            alt="...">
                        <div class="card-body p-0">
                            <p class="info card-text"><small class="text-muted">15 Mei 2022 - Kategori Artikel 1</small>
                            </p>
                            <h3 class="card-text text-black fw-bold mb-5">Lorem Ipsum Dolor sit Amet consectetur
                                adipisicing.</h3>
                            <a class="card-text text-decoration-none text-center" href="#">Baca Selengkapnya ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </section> -->

@endsection