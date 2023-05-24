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
  <main class="grid grid-cols-[36.5%_59%] gap-10 px-6 pt-3 mb-10">
    <div class="bg-white min-h-screen rounded-[40px] shadow-2xl">
      <img src="{{url('/image/dummy_kamar.svg')}}" alt="" class="relative -top-[0.5] w-full">
      <h2 class="text-center font-semibold text-2xl mt-4 text-[#475569]">SUITE</h2>
      <h2 class="text-center font-bold text-2xl mt-1">B2</h2>
      <form action="" class="mb-10 flex justify-center items-center flex-col">
        <div class="flex flex-col gap-3 w-[70%]">
          <label for="masuk" class="font-semibold self-start">Tanggal Masuk</label>
          <input type="date" name="masuk" id="masuk" class="border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
        </div>
        <div class="flex flex-col gap-3 w-[70%] mt-5">
          <label for="keluar" class="font-semibold self-start">Tanggal Keluar</label>
          <input type="date" name="keluar" id="keluar" class="border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
        </div>
        <div class="flex justify-center w-[70%]">
          <button type="submit" class="font-semibold text-sm bg-primary700 mt-10 py-2 w-[85%] text-white rounded-xl">Tambah</button>
        </div>
      </form>
    </div>
    <div class="bg-white min-h-screen rounded-[40px] shadow-2xl">
      <div class="h-[15vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
        <h1 class="text-white font-bold text-xl">PROFIL PENYEWA</h1>
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
        </form>
      </div>
    </div>
  </main>
</body>
</html>