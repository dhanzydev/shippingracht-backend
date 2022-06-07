@extends('layouts.app-admin')

@section('title')
Materi
@endsection



@section('content')
<div class="card">
    <div class="card-header">
        <h4>{{ $data->title }}</h4>
    </div>
    <div class="card-body">
        {!! $data->materi !!}
    </div>
</div>
@endsection
