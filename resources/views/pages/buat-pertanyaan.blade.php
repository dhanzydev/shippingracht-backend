@extends('layouts.app')

@section('title')
Buat Pertanyaan
@endsection

@section('content')
<!-- Content -->
<section id="header-pertanyaan">
    <div class="container">
        <h2>Diskusikan Pertanyaanmu Bersama Kami</h2>
        <hr />
    </div>
</section>

<!-- Modal Tambah Tags -->
<div class="modal fade" id="tambah-tags" tabindex="-1" aria-labelledby="tambah-tags-title" style="display: none"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fw-bold" id="tambah-tags-title">Tambah Tags</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tambah-tags d-flex flex-wrap">
                    <div class="tag">Tag 1</div>
                    <div class="tag">Tag 2</div>
                    <div class="tag">Tag 3</div>
                    <div class="tag">Tag 4</div>
                    <div class="tag">Tag 5</div>
                    <div class="tag">Tag 6</div>
                    <div class="tag">Tag 7</div>
                    <div class="tag">Tag 8</div>
                    <div class="tag">Tag 9</div>
                    <div class="tag">Tag 10</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Form -->
<section id="form">
    <div class="container">
        <form action="#" id="form-pertanyaan">
            <div class="mb-3">
                <label for="judul-pertanyaan" class="form-label">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul-pertanyaan"
                    placeholder="e.g. Apa yang dimaksud dengan hukum pelayaran?" />
            </div>
            <div class="mb-3">
                <label for="tambah-tags" class="form-label d-block">Tambah Tags</label>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#tambah-tags"><i class="fa-solid fa-plus"></i></button>
                <div class="tag-terpilih-container d-flex flex-wrap border-0">

                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Deskripisikan Pertanyaan Anda" id="deskripsi"
                    style="height: 100px"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-kirim-pertanyaan">Kirim</button>
        </form>
    </div>
</section>
@endsection

@push('addon-script')
<script src="/assets/js/buatpertanyaan.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector("#deskripsi")).catch((error) => {
        console.error(error);
    });

    for (instance in ClassicEditor.instances) {
        ClassicEditor.instances[instance].updateElement();
    }

</script>

    <script>
        $("#selectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","selected");
            $("#selectall-tag").trigger("change");
        });
        $("#deselectbtn-tag").click(function(){
            $("#selectall-tag > option").prop("selected","");
            $("#selectall-tag").trigger("change");
        });

        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endpush
