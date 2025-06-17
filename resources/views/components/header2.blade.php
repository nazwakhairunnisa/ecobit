<div class="header min-h-screen mt-10 w-full flex items-center justify-center relative px-4 md:px-10" style="background-image: url('{{ asset('assets/img/bg5.png') }}'); background-size: cover; background-position: center;">
  <div class="w-full max-w-[1400px] grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 mx-4 md:mx-10 start relative">

    <!-- TEXT AREA -->
    <div class="relative z-10 text-center md:text-left">
      <!-- Judul -->
      <h1 class="text-[#172e45] w-100 md:w-250 text-2xl sm:text-3xl md:text-6xl" style="font-family: 'Fredoka', sans-serif;">
      <span data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" class="block">
        Small Steps, Big Impact. Join the
      </span>
      <span data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300" class="inline-block bg-[#e6f0e2] text-[#2e8125] px-2 sm:px-3 py-1 rounded-xl ml-0 md:ml-2 my-3 md:my-5">
        Green Movement
      </span><br>
      <span data-aos="fade-right" data-aos-duration="1400" data-aos-delay="400" class="inline-block">
        with <span class="underline">EcoBit</span>
      </span>
    </h1>

      <!-- Subtext -->
      <p class="mt-4 md:mt-6 text-[#172e45] max-w-120 text-base sm:text-lg md:text-2xl" style="font-family: 'Quicksand', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
        You don't need to be perfect to make a difference. EcoBit helps you build eco-friendly habits, one step at a time.<br class="hidden md:block">Together, we turn small efforts into lasting change
      </p>

      <!-- Tombol -->
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 mt-4 md:mt-6 justify-start md:justify-end">
        <a href="{{ route('register') }}" class="w-full sm:w-auto">
          <div data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
          <button class="w-full sm:w-auto px-6 py-3 rounded-full bg-[#172e45] text-white font-semibold hover:scale-105 transition-transform duration-300 cursor-pointer"
          style="font-family: 'Quicksand', sans-serif;">
            Get Started
          </button>
          </div>
        </a>
        <a href="{{ route('login') }}" class="w-full sm:w-auto">
          <div data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="600">
            <button class="w-full sm:w-auto px-6 py-3 rounded-full bg-[#d8eedb] text-[#2e8125] font-semibold hover:scale-105 transition-transform duration-300 cursor-pointer"
            style="font-family: 'Quicksand', sans-serif;">
            Login
            </button>
          </div>
        </a>
      </div>
    </div>

    <div class="w-full flex flex-row items-center gap-5 mt-6 md:mt-0">
        <img src="{{ asset('assets/img/pic3.png') }}" class="hidden md:block max-w-70 height-70" alt="" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="600">
        <div class="w-full flex flex-row md:flex-col gap-3 md:gap-y-5 items-center">
        <img src="{{ asset('assets/img/pic2.png') }}" class="w-24 height-24 md:w-70 md:height-70 rounded-xl object-cover flex-1 md:flex-none" alt="" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="400">
        <img src="{{ asset('assets/img/pic1.png') }}" class="w-24 height-24 md:w-70 md:height-70 rounded-xl object-cover flex-1 md:flex-none" alt="" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">
        </div>
    </div>
</div>

</div>