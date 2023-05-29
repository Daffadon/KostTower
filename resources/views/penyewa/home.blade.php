<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewa</title>
</head>
<body>
    @include('components.navbar')
    <div>
        @foreach ($data as $item)
            <p>{{$item['nik']}}</p>
        @endforeach
    </div>
    @include('components.footer')
</body>
</html>