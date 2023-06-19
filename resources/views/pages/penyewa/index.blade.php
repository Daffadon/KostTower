@extends('layouts.default')

@section('content_title', 'Penyewa')

@section('content')
    <div class="flex justify-center items-center mt-10 flex-col">
        <h1 class="h3 font-bold">Penyewa</h1>
        <form action="/new-penyewa" class="self-end mr-16 mt-5 mb-8">
            @csrf
            <button
                class="h6 bg-primary900 py-4 px-2 mx-4 text-white font-semibold rounded-xl shadow-md hover:shadow-xl duration-300">
                Tambah Penyewa
            </button>

        </form>
    </div>
    <div class=" flex justify-center items-center">
        <table class="w-[90%] ">
            <tr class="text-center">
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Kewarganegaraan</th>
                <th>Telepon</th>
                <th colspan="2">Detail</th>
            </tr>
            @foreach ($data as $item)
                <tr class="border border-black text-center">
                    <td>
                        {{ $item['nik'] }}
                    </td>
                    <td>
                        {{ $item['nama'] }}
                    </td>
                    <td>
                        {{ $item['ttl'] }}
                    </td>
                    <td>
                        {{ $item['alamat'] }}
                    </td>
                    <td>
                        {{ $item['agama'] }}
                    </td>
                    <td>
                        {{ $item['status'] }}
                    </td>
                    <td>
                        {{ $item['pekerjaan'] }}
                    </td>
                    <td>
                        {{ $item['kewarganegaraan'] }}
                    </td>
                    <td>
                        {{ $item['telepon'] }}
                    </td>
                    <td>
                        <a href="/edit-penyewa?nik={{ $item['nik'] }}" class="my-2">
                            @include('includes.update_button')
                        </a>
                    </td>
                    <td>
                        <form action="/penyewa?nik={{ $item['nik'] }}" method="POST" class="my-2">
                            @csrf
                            @method('DELETE')
                            @include('includes.delete_button')
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
