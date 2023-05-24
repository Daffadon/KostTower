<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    <img class="w-full object-contain" src="{{url('/image/dummy_kamar.svg')}}" alt="">
        <p class="text-[34px] text-neutral-900 font-bold text-center mt-6">
          B1
        </p>
        <div class="flex flex-col p-7 items-start gap-6">
          <div class="flex flex-col">
            <p class="bg-primary700 text-shade50 font-semibold p-2 text-[18px] rounded-lg text-center">
              Tanggal
            </p>
            <div class="mt-2">
              <p class="font-bold text-[22px] ">
                Masuk
              </p>
              <p class="text-[18px]">
                24/05/2023
              </p>
            </div>
            <div class="mt-2">
              <p class="font-bold text-[22px] ">
                Keluar
              </p>
              <p class="text-[18px]">
                24/06/2023
              </p>
            </div>
          </div>
          
          <div class="flex flex-col gap-4">
            <p class="bg-primary700 text-shade50 font-semibold p-2 text-[18px] rounded-lg text-center w-fit">
              Spesifikasi Kamar
            </p>

            <div class="flex gap-2  ">
              <img src="{{url('/image/toilet.svg')}}" alt="">
              <p class="text-[18px]">
                Kamar mandi dalam
              </p>
            </div>

            <div class="flex gap-2  ">
              <img src="{{url('/image/toilet.svg')}}" alt="">
              <p class="text-[18px]">
                Balkon
              </p>
            </div>
          </div>

          <div class="flex flex-col gap-4">
            <p class="bg-primary700 text-shade50 font-semibold p-2 text-[18px] rounded-lg w-fit">
              Harga
            </p>

            <p class="font-bold text-[22px] text-err900">
              Rp 500.000
            </p>
          </div>
        </div>
  </div>
</body>
</html>