<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
</body>

</html>



{{-- @extends('layouts.default')

@section('content_title', 'halaman utama')


@section('content')
    <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML
        document.</p>
    <p>Contoh perubahan content</p>
@endsection --}}

