<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Tambah</title>
</head>
<body>
  @include('components.navbar')
  <div class="flex justify-center items-center mt-10 flex-col">
    <h1 class="h3 font-bold">Penyewa</h1>
    <form action="/new-penyewa">
        @csrf
        <button class="h6 bg-primary900 py-2 px-1 mx-4 text-white font-semibold rounded-xl shadow-md hover:shadow-xl duration-300">Add Penyewa</button>
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
                    {{$item['nik']}}
                </td>
                <td>
                    {{$item['nama']}}
                </td>
                <td>
                    {{$item['ttl']}}
                </td>
                <td>
                    {{$item['alamat']}}
                </td>
                <td>
                    {{$item['agama']}}
                </td>
                <td>
                    {{$item['status']}}
                </td>
                <td>
                    {{$item['pekerjaan']}}
                </td>
                <td>
                    {{$item['kewarganegaraan']}}
                </td>
                <td>
                    {{$item['telepon']}}
                </td>
                <td>
                    <a href="/edit-penyewa?nik={{$item['nik']}}">
                        <button class="bg-success500 py-1 px-6 mx-4 text-white font-semibold rounded-lg">Update</button>
                    </a>
                </td>
                <td>
                    <form action="/penyewa?nik={{$item['nik']}}" method="POST" class="pt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-err500 py-1 px-6 mx-4 text-white font-semibold rounded-lg">Delete</button>
                      </form>
                </td>
        </tr>
        @endforeach
    </table>
  </div>
  @include('components.footer')
</body>
</html>