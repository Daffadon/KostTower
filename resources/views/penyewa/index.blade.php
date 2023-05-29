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
  <div>
    <form action="/new-penyewa", method="POST">
        @csrf
        @method('POST')
        <button>Add Penyewa</button>
    </form>
  </div>
  <div>
    <table>
        <tr>
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
        <tr>
            @foreach ($data as $item)
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
                    <form action="/update-penyewa", method="POST">
                        @csrf
                        <button>Update</button>
                    </form>
                </td>
                <td>
                    <form action="/penyewa?nik={{$item['nik']}}" method="POST">
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