<!DOCTYPE html>
<html lang="en">
  <head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Kamar</title>
  </head>
  <body>
    @include('components.navbar')
    <div class="min-h-[75vh] flex justify-center py-16 box-border">
      <div class="flex flex-col h-max w-[70vw] py-3 shadow-md rounded-3xl">
        <p class="h3 font-bold text-shade50 bg-primary800 py-4 rounded-t-3xl text-center">
          TAMBAH KAMAR
        </p>
        <div class="flex flex-col gap-4 py-14 px-24">
          <form class="flex flex-col gap-2" action="" method="POST">
            @csrf
            <p class="h5 font-bold">
              Kode Kamar
            </p>
            <input 
              class="mt-4 h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6" 
              type="text" 
              name="kode_kamar" 
              placeholder="K00"
              >
              <p class="h5 font-bold">
                Lantai
              </p>
              <input 
                class="mt-4 h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6" 
                type="text" 
                name="lantai" 
                placeholder="K00"
                >
            <p class="h5 font-bold">
              Fasilitas
            </p>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="dalam" id="dalam">
              <label class="h6" for="dalam">Kamar mandi dalam</label>
            </div>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="ac" id="ac">
              <label class="h6" for="ac">AC</label>
            </div>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="heater" id="heater">
              <label class="h6" for="heater">Water Heater</label>
            </div>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="bed" id="bed">
              <label class="h6" for="bed">King Bed</label>
            </div>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="balkon" id="balkon">
              <label class="h6" for="balkon">Balkon</label>
            </div>
            <div class="flex items-center gap-5">
              <input class="w-5 h-5" type="checkbox" name="dalam" id="opsi">
              <label class="h6" for="opsi">Tambah opsi lain</label>
            </div>
            <div class="flex justify-start">
              <input 
              class="mt-4 h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6 placeholder:text-neutral-700" 
              type="text" 
              name="tambahan" 
              placeholder="Masukan opsi tambahan"
              >
              {{-- <img class="relative -mr-10" src="{{ url('/image/add.svg')}}" alt=""> --}}
            </div>
            <p class="h5 font-bold mt-4">
              Harga
            </p>
            <input 
              class="h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6 placeholder:text-neutral-700" 
              type="text" 
              name="harga" 
              placeholder="Rp 0"
              >
              <div class="flex justify-center mt-10">
                <button type="submit" class="text-center font-semibold h5 bg-primary800 mt-10 py-3 text-white rounded-xl mb-10 w-[40%]">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @include('components.footer')
</body>
</html>