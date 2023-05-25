<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body>
    @include('components.navbar')
    <div class="flex justify-around bg-purple-300">
        <div class="bg-red-300">
            <div>
                <p class="text-[42px] font-bold">KOS TOWER</p>
                <p class="text-left">
                    Kos Tower merupakan kos berkualitas dengan harga terjangkau, serta posisi lokasi yang strategis,
                    terletak
                    dekat dengan Universitas Kanjuruhan, pusat perbelanjaan, dan jalan raya.
                </p>
                <button class="bg-primary700 text-white font-semibold p-3 rounded-xl">Tambah Penyewa</button>
            </div>
        </div>

        <div>
          <img src="{{url('/image/ilustrasi_homepage.svg')}}" alt="">
        </div>
    </div>
</body>

</html>
