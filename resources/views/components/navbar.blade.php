<nav>
  <div class="h-[10vh] bg-primary700 flex items-center justify-between px-5 pr-10">
      <a href="/home" class="flex items-center gap-5">
        <img src="{{url('/image/logo.svg')}}" alt="">
        <p class="text-white">KOS TOWER</p>
      </a>
    <div class="flex gap-6 items-center">
      <a href="/home"><p class="text-white">Beranda</p></a>
      <form action="{{ route('logout')}}" method="POST">
        <input type="submit" value="Logout" class="border border-white rounded-xl px-7 py-1 text-white cursor-pointer">
      </form>
    </div>
  </div>
</nav>