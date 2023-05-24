<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
  <p class="">

  </p>
    <p class="flex justify-center items-center drop-shadow-xl h1 text-err500">
      p
    </p>
    <table>
      @foreach ($penyewa as $item)
          <tr>
            <td class="text-black text">
              {{$item['Nama']}}
            </td>
          </tr>
      @endforeach
    </table>
</body>

</html>
