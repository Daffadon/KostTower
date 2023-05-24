<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Sign Up</title>
</head>
<body>
  <main class="min-h-screen bg-primary700">
    <div class="grid grid-cols-2">
      <div class="h-screen relative flex items-center">
        <img src="{{url('/image/signup.svg')}}" alt="image" class="absolute w-[70%]">
      </div>
      <div class="flex justify-center items-center">
        <form action="" method="POST" class="flex justify-center items-center bg-white w-[70%] h-[90%] rounded-3xl shadow-[0_10px_25px_rgba(0, 0, 0, 0.25)] ">
          @csrf
          <div class="flex flex-col justify-center items-center w-[70%]">
            <h2 class=" font-bold text-3xl mb-5">Daftar</h2>
            <div class="w-full flex flex-col gap-3">
              <label for="email" class="font-semibold self-start">Email</label>
              <input type="email" name="email" id="email" class="w-full border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
            </div>
            <div class="w-full mt-2 flex flex-col gap-3">
              <label for="name" class="font-semibold self-start">Nama</label>
              <input type="email" name="name" id="name" class="w-full border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
            </div>
            <div class="w-full mt-2 flex flex-col gap-3">
              <label for="password" class="font-semibold self-start">Sandi</label>
              <input type="password" name="password" id="password" class="w-full border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
            </div>
            <div class="w-full mt-2 flex flex-col gap-3">
              <label for="password_conf" class="font-semibold self-start">Konfirmasi Sandi</label>
              <input type="password" name="password_confirmation" id="password_conf" class="w-full border-2 border-primary700 rounded-xl py-1 px-2 focus:outline-none">
            </div>
            <button type="submit" class="font-semibold text-sm w-full bg-primary700 mt-10 py-3 text-white rounded-xl">Masuk</button>
            <p class="text-center mt-2 font-normal text-base">Sudah memiliki akun? 
              <a href="/login" class="text-primary700">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>