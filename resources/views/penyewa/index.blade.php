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
<!-- 
            Schema::create('penyewa', function (Blueprint $table) {
            $table->string('nik');
            $table->string('nama');
            $table->date('ttl');
            $table->string('alamat');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('telepon');
            $table->primary('nik');
            $table->timestamps();
        });
    }
             -->
        </tr>
    </table>
  </div>
  @include('components.footer')
</body>
</html>