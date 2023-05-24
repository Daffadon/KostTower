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
      <img src="{{url('/image/dummy_kamar.svg')}}" alt="" class="relative -top-[0.5]">
      <h2 class="text-center font-bold text-2xl mt-4">KODE KAMAR</h2>
      <div class="grid grid-cols-5 px-8 gap-x-3 gap-y-8 my-10">
        @for ($i = 0; $i < 20; $i++)
          <p class="text-center border-[5px] rounded-xl border-primary700 px-2 py-6 hover:text-white cursor-pointer hover:bg-primary700 font-bold">101</p>
        @endfor
      </div>
      <div class="flex justify-center items-center gap-10 mb-4">
        <div class="flex items-center gap-2">
          <div class=" bg-primary700 w-2 h-2"></div>
          <p>Tersedia</p>
        </div>
        <div class="flex items-center gap-2">
          <div class=" bg-[#AC88CE] w-2 h-2"></div>
          <p>Tersewa</p>
        </div>
      </div>
    </div>
    <div class="bg-white min-h-screen rounded-[40px] shadow-2xl">
      <div class="h-[15vh] justify-center flex items-center rounded-t-[40px] bg-primary700">
        <h1 class="text-white font-bold text-xl">REGULER</h1>
      </div>
      <div class="px-6 pl-12 mt-8">
        <h2 class="font-bold text-2xl">Deskripsi</h2>
        <p class="mt-3 w-[80%]">Kamar dengan kapasitas untuk satu orang yang dirancang secara khusus untuk menyediakan kenyamanan, seperti tempat tidur dengan ukuran tunggal dan keamanan yang terjamin.</p>
        <h2 class="font-bold text-2xl mt-8">Fasilitas</h2>
        <div class="grid grid-cols-3 px-2 gap-x-2 gap-y-4 my-5">
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
          <p>Kamar Mandi</p>
        </div>
        <h2 class="font-bold text-2xl">Harga</h2>
        <p class=" text-red-500 font-semibold text-xl">Rp 500.000</p>
      </div>
    </div>
  </main>
</body>
</html>