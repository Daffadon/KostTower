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
      <img src="{{url('/image/dummy_kamar.svg')}}" alt="" class="relative -top-[0.5] object-fill">
      <h2 class="text-center font-semibold text-2xl mt-4 text-[#475569]">SUITE</h2>
      <h2 class="text-center font-bold text-2xl mt-1">B2</h2>
      <form action="" class="mb-10 flex justify-center items-center flex-col">
        <div class="flex flex-col gap-3 w-64">
          <label for="masuk" class="font-semibold self-start">Tanggal Masuk</label>
          <input type="date" name="masuk" id="masuk" class="border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
        </div>
        <div class="flex flex-col gap-3 w-64 mt-5">
          <label for="keluar" class="font-semibold self-start">Tanggal Keluar</label>
          <input type="date" name="keluar" id="keluar" class="border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
        </div>
        <div class="flex justify-center w-64">
          <button type="submit" class="font-semibold text-sm bg-primary700 mt-10 py-2 w-[85%] text-white rounded-xl">Tambah</button>
        </div>
      </form>
    </div>
    <div class="bg-white min-h-screen rounded-[40px] shadow-2xl">
      <div class="h-[15vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
        <h1 class="text-white font-bold text-xl">PROFIL PENYEWA</h1>
      </div>
    </div>
  </main>
</body>
</html>