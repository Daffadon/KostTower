<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <form action="/list-kamar?kode={{$data['kode_kamar']}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="bg-err500 py-1 px-6 mx-4 text-white font-semibold  rounded-lg">Delete</button>
    </form>
</body>

</html>
