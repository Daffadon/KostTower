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
  <main class="px-6 pt-3 mb-10 flex justify-center items-center flex-col">
    <div class="w-[50%]">
      <img src="{{url('/image/dummy_kamar.svg')}}" alt="" class="relative w-full top-16 -z-10">
      <div class="bg-white min-h-screen rounded-[40px] shadow-2xl z-10">
        <div class="h-[12vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
          <h1 class="text-white font-bold text-xl">Detail Sewa</h1>
        </div>
        <div class="flex justify-center items-center my-8">
          <form action="" class="font-bold w-[70%]">
            <div class="flex flex-col gap-3">
              <label for="NIK">NIK</label>
              <input name= "NIK" type="text" class=" border border-black rounded-xl py-2 px-2" id="NIK" >
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="nama-lengkap">Nama Lengkap</label>
              <input name="nama-lengkap" type="text" class="border border-black rounded-xl py-2 px-2" id="nama-lengkap">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="ttl">Tempat Tanggal Lahir</label>
              <input name="ttl" type="date" class="border border-black rounded-xl py-2 px-2" id="ttl">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="agama">Agama</label>
              <input name="agama"type="text" class="border border-black rounded-xl py-2 px-2" id="agama">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="status">Status</label>
              <input name="status"type="text" class="border border-black rounded-xl py-2 px-2" id="status">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="kewarganegaraan">Kewarganegaraan</label>
              <input name="kewarganegaraan"type="text" class=" border border-black rounded-xl py-2 px-2" id="kewarganegaraan">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="pekerjaan">Pekerjaan</label>
              <input name="pekerjaan" type="text" class="border border-black rounded-xl py-2 px-2" id="pekerjaan">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="no-telp">Nomor Telepon</label>
              <input name="no-telp"type="text" class="border border-black rounded-xl py-2 px-2" id="no-telp">
            </div>
            <div class="flex flex-col gap-3 mt-3">
              <label for="alamat">Alamat</label>
              <input name="alamat" type="text" class="border border-black rounded-xl py-2 px-2" id="alamat">
            </div>
            <div class="flex justify-center items-center">
              <button type="submit" class="font-semibold text-sm bg-primary700 mt-10 py-3 text-white rounded-xl mb-10 w-[60%]">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  @include('components.footer')
</body>
</html>