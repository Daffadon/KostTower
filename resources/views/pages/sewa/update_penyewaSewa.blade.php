@extends('layouts.default')

@section('content_title', 'Update Sewa')

@section('content')
    <main class="px-6 pt-3 mb-10 flex justify-center items-center flex-col">
        <div class="w-[50%]">
            <img src="{{ url('/image/dummy_kamar.svg') }}" alt="" class="relative w-full top-16 -z-10">
            <div class="bg-white rounded-[40px] shadow-2xl z-10 pb-5">
                <div class="h-[12vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
                    <h1 class="text-white font-bold text-xl">Detail Sewa</h1>
                </div>
                <div class="flex justify-center items-center mt-8">
                    <form action="/logupdate/{{ $logToUpdate['id'] }}" class="font-bold w-full" method="POST">
                        @csrf
                        <input type="hidden" name="kode_kamar" value="{{ $logToUpdate['kode_kamar'] }}">
                        <div class="flex items-center justify-around">
                            <div class="flex flex-col gap-3 mt-3 w-3/4 justify-center items-center">
                                <label for="masuk">Tanggal Masuk</label>
                                <input name="tanggal_masuk" type="date" required
                                    value={{ $logToUpdate['tanggal_masuk'] }}
                                    class="border w-3/4 border-black rounded-xl py-2 px-2" id="masuk">
                            </div>
                            <div class="flex flex-col gap-3 mt-3 w-3/4 justify-center items-center">
                                <label for="keluar">Tanggal Keluar</label>
                                <input name="tanggal_keluar" type="date" required
                                    value={{ $logToUpdate['tanggal_keluar'] }}
                                    class="border w-3/4 border-black rounded-xl py-2 px-2" id="keluar">
                            </div>
                        </div>
                        <div class="flex justify-center flex-col items-center mt-6 ">
                            <p class="mb-4">Penyewa</p>
                            <select name="nik" class="border border-black rounded-lg py-2 px-5">
                                <option value="{{ $activePenyewa['nik'] }}" selected>
                                    <p>{{ $activePenyewa['nama'] }} <span> - {{ $activePenyewa['nik'] }}</span></p>
                                </option>
                                @foreach ($list_penyewa as $penyewa)
                                    @if (@isset($list_not_penyewa) && !$list_not_penyewa->contains('nik', $penyewa['nik']))
                                        <option value="{{ $penyewa['nik'] }}"
                                            @if ($loop->first) selected @endif>
                                            <p>{{ $penyewa['nama'] }} <span> - {{ $penyewa['nik'] }}</span></p>
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center mt-5 flex justify-center items-center">
                            <input name="status_pembayaran" type="checkbox" @if ($logToUpdate['status_pembayaran'] == 1) checked @endif
                                class="justify-center items-center w-5 h-5 inline-block mr-3" id="pembayaran">
                            <label for="pembayaran" class="">Pembayaran</label>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit"
                                class="font-semibold text-sm bg-primary700 mt-10 py-3 text-white rounded-xl mb-10 w-[60%]">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
