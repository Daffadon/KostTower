@extends('layouts.default')

@section('content_title', 'Kamar')

@section('content')
    <div class="flex flex-col min-h-[70vh] gap-20 py-20">
        <div class="flex items-center justify-between w-full px-24">
            <div></div>
            <div class="flex flex-col text-center place-self-center">
                <p class="h3 font-bold">
                    Kamar
                </p>
                <p class="h6">
                    Berikut merupakan kamar yang Tersedia di Kos Tower
                </p>
            </div>
            <a class="place-self-end self-center" href="new-kamar">
                <button
                    class="h6 bg-primary900 py-4 px-2 mx-4 text-white font-semibold rounded-xl shadow-md hover:shadow-xl duration-300">Tambah
                    Kamar</button>
            </a>
        </div>
        <div class="p-5 flex justify-center">
            <table class="w-11/12 rounded-3xl shadow-xl">
                <tr class="h-14">
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center rounded-tl-lg">
                        Kode Kamar</td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">Lantai
                        </td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">Kamar
                        Mandi Dalam</td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">Balkon
                        </td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">AC</td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">Water
                        Heater</td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">King Bed
                        </td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center">Harga</td>
                    <th class="h5 w-1/9 font-bold text-white bg-primary800 border border-r-white text-center rounded-tr-lg">
                        Detail</td>
                </tr>
                @foreach ($kamar as $data)
                    <tr>
                        <td class=" p-3 text-center font-semibold border border-r-primary800 border-b-primary800">
                            {{ $data['kode_kamar'] }}
                        </td>
                        <td class="pl-2 font-semibold border border-r-primary800 border-b-primary800 text-center">
                            {{ $data['lantai'] }}</td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800 text-3xl">
                            @if ($data['kamar_mandi_dalam'] === 1)
                                <x-heroicon-o-check class="w-8 h-8 mx-auto text-succeess700" />
                            @else
                                <x-heroicon-o-x-mark class="w-8 h-8 mx-auto text-err700" />
                            @endif
                        </td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800 text-3xl">
                            @if ($data['isBalkon'] === 1)
                                <x-heroicon-o-check class="w-8 h-8 mx-auto text-succeess700" />
                            @else
                                <x-heroicon-o-x-mark class="w-8 h-8 mx-auto text-err700" />
                            @endif
                        </td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800 text-3xl">
                            @if ($data['isAC'] === 1)
                                <x-heroicon-o-check class="w-8 h-8 mx-auto text-succeess700" />
                            @else
                                <x-heroicon-o-x-mark class="w-8 h-8 mx-auto text-err700" />
                            @endif
                        </td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800 text-3xl">
                            @if ($data['isWaterHeater'] === 1)
                                <x-heroicon-o-check class="w-8 h-8 mx-auto text-succeess700" />
                            @else
                                <x-heroicon-o-x-mark class="w-8 h-8 mx-auto text-err700" />
                            @endif
                        </td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800 text-3xl">
                            @if ($data['isKingBed'] === 1)
                                <x-heroicon-o-check class="w-8 h-8 mx-auto text-succeess700" />
                            @else
                                <x-heroicon-o-x-mark class="w-8 h-8 mx-auto text-err700" />
                            @endif
                        </td>
                        <td class="text-center font-semibold border border-r-primary800 border-b-primary800">Rp
                            {{ $data['harga'] }}</td>
                        <td class="text-center font-semibold border border-b-primary800 flex justify-center pt-4">
                            @include('components.delete_button')
                            @include('components.update_button')
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td class="bg-primary800 h5 w-1/12 rounded-bl-lg h-14"></td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800"> </td>
                    <td class="bg-primary800 rounded-br-lg"> </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
