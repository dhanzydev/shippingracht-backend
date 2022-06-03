@extends('layouts.app')

@section('title')
Gabung
@endsection

@section('content')
    <section id="header-kuliah">
        <div class="container">
            <div class="header">
                <h1 class="header-title text-center mb-5">Materi belajar hukum pelayaran, check it out!</h1>
                <p class="mb-5">Teman-teman dapat mengakses materi kuliah hukum pelayaran secara gratis di sini.
                    Materi-materinya
                    dibuat sesederhana mungkin, agar teman-teman semua bisa memahami dengan lebih mudah. Namun memang,
                    karena penulisan materi kuliahnya memerlukan waktu dan tenaga yang dimiliki sangat terbatas, jadi
                    materinya akan diunggah secara reguler; dari waktu ke waktu. Semoga bermanfaat!</p>
                <form action="#" method="post" class="d-flex justify-content-center">
                    <div class="input-group" style="width: 800px;">
                        <input type="search" class="form-control" placeholder="Cari Materi">
                        <span class="input-group-append">
                            <button class="btn btn-primary border" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="materi-list">
        <div class="container">
            @foreach ($data->chunk(3) as $chunk)
            <div class="row mb-4 gap-sm-3 gap-3 gap-lg-0">
                @foreach ($chunk as $value)
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('materi',[$value->id, $value->slug]) }}" class="text-decoration-none text-black fs-2 fw-bold">{{ $value->title }}</a>
                            <p class="card-text mt-4"><small class="text-muted">{{ $value->created_at }}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
            <nav aria-label="Page navigation example justify-content-center" style="margin-top: 300px;">

                {{-- Pagination --}}
                {{ $data->links()}}

            </nav>
        </div>
    </section>
@endsection
