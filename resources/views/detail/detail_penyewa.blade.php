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
    @foreach ($data as $data)
      <p class="text-shade50 font-bold text h3 text-center bg-primary800 py-4 rounded-t-3xl">
        DETAIL PENYEWA KAMAR {{$data['Kode_kamar']}}
      </p>
      <div class="py-16 px-16 flex flex-col gap-5">
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Nama
          </p>
          <p class="text-[18px]">
            {{$data['nama']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            NIK
          </p>
          <p class="text-[18px]">
            {{$data['nik']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            TTL
          </p>
          <p class="text-[18px]">
            {{date('F j, Y', strtotime($data['ttl']))}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Nomer Telepon
          </p>
          <p class="text-[18px]">
            {{$data['telepon']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Alamat
          </p>
          <p class="text-[18px]">
            {{$data['address']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Agama
          </p>
          <p class="text-[18px]">
            {{$data['agama']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Status
          </p>
          <p class="text-[18px]">
            {{$data['status']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Pekerjaan
          </p>
          <p class="text-[18px]">
            {{$data['pekerjaan']}}
          </p>
        </div>
        <div class="flex flex-col gap-2">
          <p class="text-[22px] font-bold">
            Kewarganegaraan
          </p>
          <p class="text-[18px]">
            {{$data['kewarganegaraan']}}
          </p>
        </div>
      </div>
    @endforeach
  </div>
</body>
</html>