<nav class="navbar sticky top-0 z-100 m-0 p-0">
    <div class="navbar bg-base-100 shadow-lg pb-3 ">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                </div>
                
                @if(!isset($isLoggedIn) || !$isLoggedIn)
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="#" class="font-quicksand">Home</a></li>
                    <li><a href="/features" class="font-quicksand">Features</a></li>
                    <li><a href="/about" class="font-quicksand">About</a></li>
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
                <li class="mx-4"><a href="" class="text-base font-quicksand">Home</a></li>
                <li class="mx-4"><a href="{{ route('features') }}" class="text-base font-quicksand">Features</a></li>
                <li class="mx-4"><a href="{{ route('features') }}" class="text-base font-quicksand">About</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a class="btn bg-[#172e45] text-white rounded-full px-10 font-quicksand font-bold">Sign Up</a>
            </div>
        </div>
    </nav>
    @else
    <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
        <li><a href="#" class="font-quicksand">Home</a></li>
        <li><a href="/features" class="font-quicksand">Plan</a></li>
        <li><a href="/about" class="font-quicksand">My plan</a></li>
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
    <li class="mx-4"><a href="/homepage" class="text-base font-quicksand">Home</a></li>
    <li class="mx-4"><a href="/plan" class="text-base font-quicksand">Plan</a></li>
    <li class="mx-4"><a href="/myplan" class="text-base font-quicksand">My plan</a></li>
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
    
@endif