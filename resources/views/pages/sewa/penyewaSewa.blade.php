@extends('layouts.default')

@section('content_title', 'Sewa')


@section('content')
    <main class="px-6 pt-3 mb-10 flex justify-center items-center flex-col">
        <div class="w-[50%]">
            <img src="{{ url('/image/dummy_kamar.svg') }}" alt="" class="relative w-full top-16 -z-10">
            <div class="bg-white rounded-[40px] shadow-2xl z-10 pb-5">
                <div class="h-[12vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
                    <h1 class="text-white font-bold text-xl">Detail Sewa</h1>
                </div>
                <div class="flex justify-center items-center mt-8">
                    <form action="/penyewa-to-sewa" class="font-bold w-full" method="POST">
                        @csrf
                        @if ($kode_kamar)
                            <input type="hidden" name="kode_kamar" value="{{ $kode_kamar }}">
                        @endif
                        <div class="flex items-center justify-around">
                            <div class="flex flex-col gap-3 mt-3 w-3/4 justify-center items-center">
                                <label for="masuk">Tanggal Masuk</label>
                                <input name="tanggal_masuk" type="date"
                                    class="border w-3/4 border-black rounded-xl py-2 px-2" id="masuk">
                            </div>
                            <div class="flex flex-col gap-3 mt-3 w-3/4 justify-center items-center">
                                <label for="keluar">Tanggal Keluar</label>
                                <input name="tanggal_keluar" type="date"
                                    class="border w-3/4 border-black rounded-xl py-2 px-2" id="keluar">
                            </div>
                        </div>
                        <div class="flex justify-center items-center mt-6 ">
                            <select name="nik" class="w-max border border-black px-5 rounded-lg py-2">
                                @foreach ($list_penyewa as $penyewa)
                                    @if (@isset($list_not_penyewa) && !$list_not_penyewa->contains('nik', $penyewa['nik']))
                                        <option value="{{ $penyewa['nik'] }}"
                                            @if ($loop->first) selected @endif>{{ $penyewa['nama'] }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="list_penyewa" value="{{ $list_penyewa }}">
                        <div class="flex justify-center items-center">
                            <button type="submit"
                                class="font-semibold text-sm bg-primary700 mt-10 py-3 text-white rounded-xl mb-10 w-[60%]">Tambah</button>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                    <div
                        class="z-30 mx-auto bg-[#FAFAFA] backdrop-blur-lg border-2 min-h-[5vh] rounded-lg py-5 mb-5 border-err500 w-[20em] text-err500 px-8">
                        <ul class=" list-disc ">
                            @foreach ($errors->all() as $error)
                                <li class="font-bold">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
