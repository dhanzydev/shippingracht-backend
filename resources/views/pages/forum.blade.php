@extends('layouts.app')

@section('title')
Forum & Diskusi
@endsection

@section('content')
<section id="forum-diskusi">
    <div class="container-fluid container-lg d-flex forum-content">
        <!-- Left sidebar -->
        <aside class="position-relative d-none d-md-block">
            <div class="left-sidebar pt-4">
                <ul class="navigation">
                    <a href="{{ route('forum') }}">
                        <li class="active">Forum</li>
                    </a>
                    <a href="tags.html">
                        <li>Tags</li>
                    </a>
                    <a href="artikel.html">
                        <li>Artikel</li>
                    </a>
                    <a href="acara.html">
                        <li>Acara</li>
                    </a>
                </ul>
            </div>
        </aside>

        <!-- Forum main content -->
        <div class="forum-main-content pt-4">
            <!-- Header -->
            <div class="content-header d-md-flex justify-content-between mb-3">
                <h2 class="title">Forum Diskusi</h2>
                <a href="{{ route('buat-pertanyaan') }}">
                    <button class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Buat Pertanyaan</button>
                </a>
            </div>
            <p>Tempat berkomunikasi para mahasiswa dengan cara mengajukan atau menjawab sebuah pertanyaan</p>
            <div class="search-bar">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Pertanyaan" aria-label="Search" />
                    <button class="btn btn-outline-primary d-flex align-items-center" type="submit"><i
                            class="fa-solid fa-magnifying-glass me-2"></i> Telusuri</button>
                </form>
            </div>

            <!-- List Pertanyaan -->
            <div class="list-pertanyaan mt-3">
                <!-- Kotak Pertanyaan -->
                <div class="content-pertanyaan flex-column flex-md-row d-flex p-md-4 pt-3 pb-3 pe-3 mb-3">
                    <div class="d-flex justify-content-between d-md-block pe-3 ps-3">
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Suka</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Jawaban</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>10</span>
                            <p>Dilihat</p>
                        </div>
                    </div>
                    <div class="d-block ms-4">
                        <div class="pertanyaan">
                            <a href="#">
                                <h4>Bagaimana cara menghitung ruas bangun ruang</h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis commodi recusandae
                                harum accusamus veniam iste esse reiciendis pariatur ipsum nisi, inventore facere
                                deleniti, tempore non sit amet dolorem dolor
                                earum!
                            </p>
                            <div class="tags">
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kotak Pertanyaan -->
                <div class="content-pertanyaan flex-column flex-md-row d-flex p-md-4 pt-3 pb-3 pe-3 mb-3">
                    <div class="d-flex justify-content-between d-md-block pe-3 ps-3">
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Suka</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Jawaban</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>10</span>
                            <p>Dilihat</p>
                        </div>
                    </div>
                    <div class="d-block ms-4">
                        <div class="pertanyaan">
                            <a href="#">
                                <h4>Bagaimana cara menghitung ruas bangun ruang</h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis commodi recusandae
                                harum accusamus veniam iste esse reiciendis pariatur ipsum nisi, inventore facere
                                deleniti, tempore non sit amet dolorem dolor
                                earum!
                            </p>
                            <div class="tags">
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kotak Pertanyaan -->
                <div class="content-pertanyaan flex-column flex-md-row d-flex p-md-4 pt-3 pb-3 pe-3 mb-3">
                    <div class="d-flex justify-content-between d-md-block pe-3 ps-3">
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Suka</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>1</span>
                            <p>Jawaban</p>
                        </div>
                        <div class="pertanyaan-numbers">
                            <span>10</span>
                            <p>Dilihat</p>
                        </div>
                    </div>
                    <div class="d-block ms-4">
                        <div class="pertanyaan">
                            <a href="#">
                                <h4>Bagaimana cara menghitung ruas bangun ruang</h4>
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis commodi recusandae
                                harum accusamus veniam iste esse reiciendis pariatur ipsum nisi, inventore facere
                                deleniti, tempore non sit amet dolorem dolor
                                earum!
                            </p>
                            <div class="tags">
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                                <a href="#" class="tag"><span>Matematika</span></a>
                                <a href="#" class="tag"><span>Ilmu Pengetahuan</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right sidebar -->
        <div class="right-sidebar"></div>
    </div>
</section>
@endsection
