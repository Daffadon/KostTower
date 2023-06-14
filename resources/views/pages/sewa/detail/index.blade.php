@extends('layouts.default')

@section('content_title', 'Detail Sewa')


@section('content')
    <div class="p-12 box-border flex gap-12 min-h-[75vh]">
        <div class="w-1/4 rounded-3xl shadow-2xl h-fit sticky top-8">
            @include('pages.sewa.detail.detail_kamar')
        </div>
        <div class="w-3/4 shadow-2xl rounded-3xl">
            @include('pages.sewa.detail.detail_penyewa')
        </div>
    </div>
@endsection
