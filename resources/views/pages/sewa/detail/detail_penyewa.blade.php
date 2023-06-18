<div>
    <p class="text-shade50 font-bold text h3 text-center bg-primary800 py-4 rounded-t-3xl">
        DETAIL PENYEWA KAMAR {{ $data['kode_kamar'] }}
    </p>
    @if ($data['status_pembayaran'] == 1)
        <p class="h5 text-center py-3 bg-succeess700 text-white">Sudah Bayar</p>
    @else
        <p class="h5 text-center py-3 bg-err500 text-white">Belum Bayar</p>
    @endif
    <div class=" pt-2 pb-16 px-16 flex flex-col gap-5">
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Nama
            </p>
            <p class="text-[18px]">
                {{ $data['nama'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                NIK
            </p>
            <p class="text-[18px]">
                {{ $data['nik'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                TTL
            </p>
            <p class="text-[18px]">
                {{ date('F j, Y', strtotime($data['ttl'])) }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Nomer Telepon
            </p>
            <p class="text-[18px]">
                {{ $data['telepon'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Alamat
            </p>
            <p class="text-[18px]">
                {{ $data['alamat'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Agama
            </p>
            <p class="text-[18px]">
                {{ $data['agama'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Status
            </p>
            <p class="text-[18px]">
                {{ $data['status'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Pekerjaan
            </p>
            <p class="text-[18px]">
                {{ $data['pekerjaan'] }}
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <p class="text-[22px] font-bold">
                Kewarganegaraan
            </p>
            <p class="text-[18px]">
                {{ $data['kewarganegaraan'] }}
            </p>
        </div>
        <a href="" class="text-right">
            @include('includes.update_button')
        </a>
    </div>
</div>
