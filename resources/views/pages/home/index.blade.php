@extends('layouts.default')

@section('content_title', 'Home')

@section('content')
    <div class="flex justify-around pt-20 pr-36 pl-40 pb-20">
        <div class="w-1/2">
            <div class="flex flex-col items-start justify-center h-full w-9/12  p-18">
                <p class="h2 font-bold">KOS TOWER</p>
                <p class="h6 text-left mt-3">
                    Kos Tower merupakan kos berkualitas dengan harga terjangkau, serta posisi lokasi yang strategis,
                    terletak
                    dekat dengan Universitas Kanjuruhan, pusat perbelanjaan, dan jalan raya.
                </p>
                <a href="/kamar-to-sewa">
                    <button class=" h6 bg-primary700 text-white font-semibold p-3 rounded-xl mt-6">Tambah Penyewa</button>
                </a>
            </div>
        </div>

        <div class="w-1/2">
            <img class=" drop-shadow-xl" src="{{ url('/image/ilustrasi_homepage.svg') }}" alt="">
        </div>
    </div>

    <div class="flex flex-col items-center">
        <p class="h3 font-bold text-center">Kamar Tersewa</p>
        <p class="h6 w-3/12 text-center mt-3">Berikut merupakan kamar Kos Tower yang tersewa saat ini</p>
    </div>

    <div class="p-5 flex justify-center">
        <table class="w-10/12 rounded-3xl shadow-xl">
            <tr class="h-14">
                <th class="h5 w-2/12 font-bold text-white bg-primary800 border border-r-white text-center rounded-tl-lg">
                    Kode Kamar</td>
                <th class="h5 w-5/12 font-bold text-white bg-primary800 border border-r-white text-center">Penyewa</td>
                <th class="h5 w-2/12 font-bold text-white bg-primary800 border border-r-white text-center">Masuk</td>
                <th class="h5 w-2/12 font-bold text-white bg-primary800 border border-r-white text-center">Keluar</td>
                <th class="h5 w-2/12 font-bold text-white bg-primary800 border border-r-white text-center rounded-tr-lg">
                    Detail</td>
            </tr>
            @foreach ($data as $data)
                <tr>
                    <td class=" p-3 text-center font-semibold border border-r-primary800 border-b-primary800">
                        {{ $data['kode_kamar'] }}</td>
                    <td class="pl-2 font-semibold border border-r-primary800 border-b-primary800">{{ $data['nama'] }}</td>
                    <td class="text-center font-semibold border border-r-primary800 border-b-primary800">
                        {{ $data['tanggal_masuk'] }}</td>
                    <td class="text-center font-semibold border border-r-primary800 border-b-primary800">
                        {{ $data['tanggal_keluar'] }}</td>
                    <td class="text-center font-semibold border border-b-primary800">@include('components.detail_button')</td>
                </tr>
            @endforeach
            <tr>
                <td class="bg-primary800 h5 w-1/12 rounded-bl-lg h-14"></td>
                <td class="bg-primary800"> </td>
                <td class="bg-primary800"> </td>
                <td class="bg-primary800"> </td>
                <td class="bg-primary800 rounded-br-lg"> </td>
            </tr>
        </table>
    </div>
@endsection
