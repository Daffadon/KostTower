<nav>
  <div class="h-[10vh] bg-primary700 flex items-center justify-between px-5 pr-10">
      <a href="/home" class="flex items-center gap-5">
        <img src="{{url('/image/logo.svg')}}" alt="logo">
        <p class="text-white text-xl font-bold">KOS TOWER</p>
      </a>
    <div class="flex gap-7">
      <a href="/home" class="flex justify-center items-center">
        <p class="text-white text-xl font-semibold">Beranda</p>
      </a>
      <a href="/list-kamar" class="flex justify-center items-center">
        <p class="text-white text-xl font-semibold">Kamar</p>
      </a>
      <form action="{{ route('logout')}}" method="POST" class="flex justify-center items-center mt-3">
        @csrf
        <input type="submit" value="Logout" class="text-xl font-bold border border-white rounded-xl px-7 py-1 text-white cursor-pointer">
      </form>
    </div>
  </div>
</nav>