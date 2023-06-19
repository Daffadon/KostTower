@extends('layouts.default')

@section('content_title', 'Sewa')

@section('content')
    <main class="grid grid-cols-[36.5%_59%] gap-10 px-6 pb-10 mb-1 mt-5">
        <div class="bg-white min-h-screen rounded-[40px] shadow-2xl pb-5">
            <img src="{{ url('/image/dummy_kamar.svg') }}" alt="" class="relative -top-[0.5] w-full">
            <h2 class="text-center font-bold text-2xl mt-4">KODE KAMAR</h2>
            <div class="grid grid-cols-5 justify-center items-center px-8 gap-x-3 gap-y-8 my-4 mb-5">
                @foreach ($listKamar as $kamar)
                    @if (!$availableKamar->contains('kode_kamar', $kamar['kode_kamar']))
                        <button
                            class=" cursor-text text-center rounded-xl border-[#AC88CE] bg-[#AC88CE] px-2 py-7 transition-all font-bold text-white">{{ $kamar['kode_kamar'] }}</button>
                    @else
                        <a href="/kamar-to-sewa/{{ $kamar['kode_kamar'] }}">
                            <button
                                class="w-full text-center border-[3px] rounded-xl border-primary700 px-2 py-7 transition-all hover:text-white cursor-pointer hover:bg-primary700 font-bold">
                                {{ $kamar['kode_kamar'] }}</button>
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="flex justify-center items-center gap-10 mb-4">
                <div class="flex items-center gap-2">
                    <div class=" bg-primary700 w-2 h-2"></div>
                    <p>Tersedia</p>
                </div>
                <div class="flex items-center gap-2">
                    <div class=" bg-[#AC88CE] w-2 h-2"></div>
                    <p>Tersewa</p>
                </div>
            </div>
        </div>
        <div class="bg-white min-h-screen rounded-[40px] shadow-2xl pb-10">
            <div class="h-[12vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
                <h1 class="text-white font-bold text-2xl">DESKRIPSI KAMAR</h1>
            </div>

            {{-- first --}}

            <div class="px-6 pl-12 mt-8">
                <p class=" bg-primary700 text-white w-max px-2 py-2 rounded-lg text-2xl mb-2 font-bold">101-210</p>
                <h2 class="font-bold text-2xl">Deskripsi</h2>
                <p class="mt-3 w-[90%] text-xl ">Kamar dengan kapasitas untuk satu orang yang dirancang secara khusus
                    untuk menyediakan kenyamanan, seperti tempat tidur dengan ukuran tunggal dan keamanan yang terjamin.
                </p>
                <h2 class="font-bold text-2xl mt-8">Fasilitas</h2>
                <div class="grid grid-cols-3 px-2 gap-x-2 gap-y-4 my-5 text-xl ">
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Air</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Listrik</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Wifi</p>
                    </div>
                </div>
                <h2 class="font-bold text-2xl">Harga</h2>
                <p class=" text-err500 font-bold text-xl mt-3">Rp 425.000</p>
            </div>

            {{-- second --}}

            <div class="px-6 pl-12 mt-8">
                <p class=" bg-primary700 text-white w-max px-2 py-2 rounded-lg text-2xl mb-2 font-bold">D1 - DA6</p>
                <h2 class="font-bold text-2xl">Deskripsi</h2>
                <p class="mt-3 w-[90%] text-xl ">Kamar dengan kapasitas untuk satu orang yang dirancang secara khusus
                    untuk menyediakan kenyamanan, seperti tempat tidur dengan ukuran tunggal dan keamanan yang terjamin.
                </p>
                <h2 class="font-bold text-2xl mt-8">Fasilitas</h2>
                <div class="grid grid-cols-3 px-2 gap-x-2 gap-y-4 my-5 text-xl ">
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Air</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Listrik</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Wifi</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>AC</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Water Heater</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>King Bed</p>
                    </div>
                </div>
                <h2 class="font-bold text-2xl">Harga</h2>
                <p class=" text-err500 font-bold text-xl mt-3">Rp 500.000</p>
            </div>

            {{-- third --}}

            <div class="px-6 pl-12 mt-8">
                <p class=" bg-primary700 text-white w-max px-2 py-2 rounded-lg text-2xl mb-2 font-bold">B1 - DA6</p>
                <h2 class="font-bold text-2xl">Deskripsi</h2>
                <p class="mt-3 w-[90%] text-xl ">Kamar dengan kapasitas untuk satu orang yang dirancang secara khusus
                    untuk menyediakan kenyamanan, seperti tempat tidur dengan ukuran tunggal dan keamanan yang terjamin.
                </p>
                <h2 class="font-bold text-2xl mt-8">Fasilitas</h2>
                <div class="grid grid-cols-3 px-2 gap-x-2 gap-y-4 my-5 text-xl ">
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Air</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Listrik</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Wifi</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>AC</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>Water Heater</p>
                    </div>
                    <div class="flex gap-3">
                        <x-fas-toilet class="w-8 h-8 text-primary900" />
                        <p>King Bed</p>
                    </div>
                </div>
                <h2 class="font-bold text-2xl">Harga</h2>
                <p class=" text-err500 font-bold text-xl mt-3">Rp 550.000</p>
            </div>
        </div>
    </main>
@endsection
