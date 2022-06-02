@extends('layouts.app')

@section('title')
Gabung
@endsection

@section('content')
<section id="gabung">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-5">Kamu tertarik? Gabung aja! Coba aja dulu.</h1>
            <p>Teman-teman yang berminat di bidang penulisan artikel hukum dan/atau riset hukum, bisa bergabung di
                Shipping Recht. Gak harus jago nulis atau riset, yang penting niat aja dulu. Nanti kita sama-sama
                belajar. No pressure, at all. Gw gak bisa nawarin apa-apa, tapi lo punya waktu gw buat diskusi
                tentang hukum pelayaran atau apapun itu. Hal yang bisa gue jawab, gue coba jawab, kalo gak bisa, gue
                coba gunain koneksi gue buat bantu. Setelah S1, gw lawyering, terus tiga tahun kemudian, gw ambil
                master jurusan International Shipping Law di Queen Mary University of London (Chevening Scholar
                2021/22); ilmu yang gw punya, gw akan coba distribusikan biar sama-sama belajar. </p>
        </div>
    </div>
</section>

<section id="form-gabung">
    <div class="container">
        @if(Session::has('status'))
        <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
        <form action="{{ route('gabung.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="col mb-5">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="alasan" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Alasan Bergabung</label>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
</section>
@endsection
