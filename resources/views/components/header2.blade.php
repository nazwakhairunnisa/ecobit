<div class="header min-h-screen mt-10 w-full flex items-center justify-center relative px-10" style="background-image: url('{{ asset('assets/img/bg5.png') }}'); background-size: cover; background-position: center;">
  <div class="w-full max-w-[1400px] grid grid-cols-1 md:grid-cols-2 gap-10 mx-10 start relative">

    <!-- TEXT AREA -->
    <div class="relative z-10">
      <!-- Judul -->
      <h1 class="text-[#172e45] w-250 text-5xl md:text-6xl" style="font-family: 'Fredoka', sans-serif;">
        Small Steps, Big Impact. Join the 
        <span class="inline-block bg-[#e6f0e2] text-[#2e8125] px-3 py-1 rounded-xl ml-2 my-5">
          Green Movement
        </span><br>
        with <span class="underline">EcoBit</span>
      </h1>

      <!-- Subtext -->
      <p class="mt-6 text-[#172e45] w-130 text-xl md:text-2xl" style="font-family: 'Quicksand', sans-serif;">
        You don’t need to be perfect to make a difference. EcoBit helps you build eco-friendly habits, one step at a time.<br>Together, we turn small efforts into lasting change
      </p>

      <!-- Tombol -->
      <div class="flex gap-4 mt-6 justify-end">
        <a href="{{ route('register') }}">
          <button class="px-6 py-3 rounded-full bg-[#172e45] text-white font-semibold hover:scale-105 transition-transform duration-300 cursor-pointer"
          style="font-family: 'Quicksand', sans-serif;">
            Get Started
          </button>
        </a>
        <a href="{{ route('login') }}">
            <button class="px-6 py-3 rounded-full bg-[#d8eedb] text-[#2e8125] font-semibold hover:scale-105 transition-transform duration-300 cursor-pointer"
            style="font-family: 'Quicksand', sans-serif;">
            Login
            </button>
        </a>
      </div>
    </div>


    <div class="w-full flex flex-row items-center gap-5">
        <img src="{{ asset('assets/img/pic3.png') }}" class="max-w-70 height-70" alt="">
        <div class="w-full flex flex-col items-center ">
        <img src="{{ asset('assets/img/pic2.png') }}" class="max-w-70 height-70 mb-5" alt="">
        <img src="{{ asset('assets/img/pic1.png') }}" class="max-w-70 height-70" alt="">
        </div>
    </div>
</div>


</div>
