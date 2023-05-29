<!DOCTYPE html>
<html lang="en">
  <head>
      @vite('resources/css/app.css')
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="{{url('/image/logo.svg')}}">
      <title>Document</title>
  </head>
  <body>
    @include('components.navbar')
    <div class="p-12 box-border flex gap-12 min-h-[75vh]">
      <div class="w-1/4 rounded-3xl shadow-2xl h-fit sticky top-8">
        @include('detail.detail_kamar') 
      </div>

      <div class="w-3/4 shadow-2xl rounded-3xl">
        @include('detail.detail_penyewa')
        <p>
        </p>
      </div>
    </div>
    @include('components.footer')
  </body>
</html> 
