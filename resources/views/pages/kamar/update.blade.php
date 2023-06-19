@extends('layouts.default')

@section('content_title', 'Update kamar')


@section('content')

    <div class="min-h-[75vh] flex justify-center py-16 box-border">
        <div class="flex flex-col h-max w-[70vw] py-3 shadow-md rounded-3xl">
            <p class="h3 font-bold text-shade50 bg-primary800 py-4 rounded-t-3xl text-center">
                EDIT KAMAR
            </p>
            <div class="flex flex-col gap-4 py-14 px-24">
                <form class="flex flex-col gap-2" action="" method="POST">
                    @csrf
                    <p class="h5 font-bold">
                        Kode Kamar
                    </p>
                    <input class="hidden" type="text" name="kode" value={{ $kamar['kode_kamar'] }}>
                    <input class="mt-4 h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6" type="text"
                        name="kode_kamar" value={{ $kamar['kode_kamar'] }} disabled>
                    <p class="h5 font-bold">
                        Lantai
                    </p>
                    <input class="mt-4 h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6" type="text"
                        name="lantai" value={{ $kamar['lantai'] }}>
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
                    <p class="h5 font-bold mt-4">
                        Harga
                    </p>
                    <input
                        class="h6 w-full border outline-none border-shade100 rounded-2xl py-4 px-6 placeholder:text-neutral-700"
                        type="text" name="harga" value={{ $kamar['harga'] }}>
                    <div class="flex justify-center mt-10">
                        <button type="submit"
                            class="text-center font-semibold h5 bg-primary800 mt-10 py-3 text-white rounded-xl mb-10 w-[40%]">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
