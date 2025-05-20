<nav class="navbar fixed top-0 z-50 bg-white/30 backdrop-blur-md shadow-lg rounded-full mx-auto mt-5 px-2 py-0">
    <div class="navbar bg-transparent shadow-none pb-3">
        <div class="navbar-start">
            <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="/dashboard">Home</a></li>
                    <li><a href="/plan">Plan</a></li>
                    <li><a href="/myplan">My Plan</a></li>
                </ul>
            </div>
            <a class="w-25 ml-4">
                <div class="logo-img">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </div>
            </a>
        </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
        <li class="mx-4"><a href="/dashboard">Home</a></li>
        <li class="mx-4"><a href="/plan">Plan</a></li>
        <li class="mx-4"><a href="/myplan">My Plan</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                <img
                    alt="Tailwind CSS Navbar component"
                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-green-300 rounded-box z-1 mt-3 w-30 p-2 shadow">
                <li><a href="" class="">Edit Profile</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>      
    </div>
</nav>

<div class="header min-h-screen w-full flex items-center justify-center relative bg-cover bg-center">
            <video autoplay loop muted playsinline class="absolute w-full h-full object-cover">
                <source src="{{ asset('assets/img/bg-header.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <div class="relative z-10 text-white text-center px-4 justify-between">
                <h1 class="text-5xl md:text-8xl font-bold mb-4">Bit by Bit,</h1>
                <h1 class="text-5xl md:text-7xl font-bold mb-4">Day by Day</h1>
                <p class="max-w-2xl mx-auto text-lg">
                    Our small action will leave a big impact for the earth.
                </p>
            </div>
        </div>
<!-- <div class="header min-h-screen w-full top-0 flex items-center justify-center relative bg-cover bg-center">
  <video autoplay loop muted playsinline class="absolute w-full h-full object-cover">
      <source src="{{ asset('assets/img/bg-header.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
  </video> -->

<!-- <div class="header flex w-full flex-col mt-12">
    <div class="py-4 px-7 justify-center items-center flex mx-auto bg-[#172e45] text-white rounded-2xl inline-block">
            <h1 class="text-5xl font-bold">LOREM IPSUM</h1>
    </div>
</div>
<div class="card bg-white text-black shadow-xl rounded-3xl mx-auto mt-10 w-full max-w-4xl border border-black-300">
  <div class="card-body text-base">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, hic dolores quisquam exercitationem similique officia suscipit maiores eius eos ducimus vero voluptatem quo, ipsum iste porro quas! Beatae, eius nulla.</p>
  </div>
</div> -->

<!-- @extends('layouts.app')

@php
    $isLoggedIn = true; // anggap aja user dah login (ntar kalo dah siap frontend bisa diapus)
@endphp

@section('content') -->
<!-- @endsection -->
