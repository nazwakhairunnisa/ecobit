<nav class="navbar fixed top-0 z-100 m-0 p-0 overflow-visible">
    <div class="navbar text-2xl bg-white/30 backdrop-blur-md">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    @guest
                    <li><a href="{{ route('landing') }}" style="font-family: 'Quicksand', sans-serif;">Home</a></li>
                    <li><a href="#about" style="font-family: 'Quicksand', sans-serif;">Features</a></li>
                    <li><a href="#features" style="font-family: 'Quicksand', sans-serif;">About</a></li>
                    @else
                    <li><a href="{{ route('dashboard') }}" style="font-family: 'Quicksand', sans-serif;">Home</a></li>
                    <li><a href="/plan" style="font-family: 'Quicksand', sans-serif;">Plan</a></li>
                    <li><a href="/myplan" style="font-family: 'Quicksand', sans-serif;">My Plan</a></li>
                    @endguest
                </ul>
                </div>
                <a class="w-25 ml-4">
                    <div class="logo-img">
                        <img src="{{ asset('assets/img/logo4.png') }}" alt="">
                    </div>
                </a>
            </div>
            <div class="navbar-center hidden lg:flex border border-1 rounded-full px-10">
                <ul class="menu menu-horizontal w-full">
                @guest
                    <li class="transition duration-300 hover:scale-110 mx-4"><a href="{{ route('landing') }}"  class="hover:border border-[#d8eedb] rounded-full hover:text-[#4f8536] text-lg"  style="font-family: 'Quicksand', sans-serif;">Home</a></li>
                    <li class="transition duration-300 hover:scale-110 mx-4"><a href="#features" class="hover:border border-[#d8eedb] rounded-full hover:text-[#4f8536] text-lg"  style="font-family: 'Quicksand', sans-serif;">Features</a></li>
                    <li class="transition duration-300 hover:scale-110 mx-4"><a href="#about" class="hover:border border-[#d8eedb] rounded-full hover:text-[#4f8536] text-lg"  style="font-family: 'Quicksand', sans-serif;">About</a></li>
                @else
                    <li class="mx-4"><a href="{{ route('dashboard') }}" class="text-base" style="font-family: 'Quicksand', sans-serif;">Home</a></li>
                    <li class="mx-4"><a href="/plan" class="text-base" style="font-family: 'Quicksand', sans-serif;">Plan</a></li>
                    <li class="mx-4"><a href="/myplan" class="text-base" style="font-family: 'Quicksand', sans-serif;">My Plan</a></li>
                @endguest
                </ul>
            </div>
            <div class="navbar-end">
            @guest
                <a href="{{ route('register') }}" class="btn bg-[#172e45] text-white rounded-full px-10  style="font-family: 'Quicksand', sans-serif;">Sign Up</a>
            @else
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost avatar flex flex-row">
                        <div class="w-10 rounded-full">
                            <img alt="User Avatar" src="{{ auth()->user()->profile_pict ? asset('storage/' . auth()->user()->profile_pict) : asset('assets/img/default-profile.jpg') }}" />
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-300 rounded-box z-1 mt-3 w-30 p-2 shadow"
                    style="font-family: 'Quicksand', sans-serif;">
                        <li><a href="{{ route('profile.show') }}":active="request()->routeIs('profile.show')">Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            @endguest
            </div>
        </div>
</nav>