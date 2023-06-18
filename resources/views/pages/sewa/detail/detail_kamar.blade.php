<div>
    <img class="w-full object-contain" src="{{ url('/image/dummy_kamar.svg') }}" alt="">
    <p class="text-[34px] text-neutral-900 font-bold text-center mt-6">
        {{ $data['kode_kamar'] }}
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
                    {{ $data['tanggal_masuk'] }}
                </p>
            </div>
            <div class="mt-2">
                <p class="font-bold text-[22px]">
                    Keluar
                </p>
                <p class="text-[18px]">
                    {{ $data['tanggal_keluar'] }}
                </p>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <p class="bg-primary700 text-shade50 font-semibold p-2 text-[18px] rounded-lg text-center w-fit">
                Spesifikasi Kamar
            </p>
            @if ($data['kamar_mandi_dalam'] == 1)
                <div class="flex gap-2  ">
                    <img src="{{ url('/image/toilet.svg') }}" alt="">
                    <p class="text-[18px]">Kamar Mandi Dalam</p>
                </div>
            @endif
            @if ($data['isBalkon'] == 1)
                <div class="flex gap-2  ">
                    <img src="{{ url('/image/toilet.svg') }}" alt="">
                    <p class="text-[18px]">Balkon</p>
                </div>
            @endif
            @if ($data['isAC'] == 1)
                <div class="flex gap-2  ">
                    <img src="{{ url('/image/toilet.svg') }}" alt="">
                    <p class="text-[18px]">AC</p>
                </div>
            @endif
            @if ($data['isWaterHeater'] == 1)
                <div class="flex gap-2  ">
                    <img src="{{ url('/image/toilet.svg') }}" alt="">
                    <p class="text-[18px]">Water Heater</p>
                </div>
            @endif
            @if ($data['isKingBed'] == 1)
                <div class="flex gap-2  ">
                    <img src="{{ url('/image/toilet.svg') }}" alt="">
                    <p class="text-[18px]">King Bed</p>
                </div>
            @endif
        </div>
        <div class="flex flex-col gap-4">
            <p class="bg-primary700 text-shade50 font-semibold p-2 text-[18px] rounded-lg w-fit">
                Harga
            </p>
            <p class="font-bold text-[22px] text-err900">
                Rp {{ $data['harga'] }}
            </p>
        </div>
    </div>
</div>
