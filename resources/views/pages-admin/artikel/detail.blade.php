@extends('layouts.app-admin')

@section('title')
Artikel - {{ $artikel->judul_artikel }}
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        {!! $artikel->konten !!}
    </div>
</div>
@endsection


