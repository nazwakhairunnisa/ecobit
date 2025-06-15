<div class="header min-h-screen w-full flex items-center justify-center relative bg-cover bg-center" style="background-image: url('{{ asset('assets/img/hero3.png') }}');" >
    
<div class="flex flex-row justify-between items-start w-full mx-20">
    <div class="w-full flex flex-col">
        <div data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" class=" flex flex-col w-170"> 
            <h1 class="text-white text-6xl transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform cursor-default" style="text-shadow: 2px 2px 8px #172e45; font-family: 'Fredoka', sans-serif;" >Every Bit of Action Creates a Better Earth</h1>
        </div>

        <div class="w-70 ml-17" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">
            <p class="py-5 text-s md:text-s text-white text-justify" style="text-shadow: 1px 1px 3px #000000;">
            Join thousands of eco-warriors making a real difference. Track your environmental impact and build a sustainable future together.
            </p>
        </div>

        <div class="flex flex-row items-center rounded-full p-2 justify-between max-w-100 bg-white/30 backdrop-blur-md mb-10" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
        <a href="{{ route('register') }}" class="flex flex-row items-center p-2" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200" style="font-family: 'Quicksand', sans-serif;">
            <span class="text-base text-[#172e45] font-bold">Get Started</span>
        </a>
        <a href="{{ route('register') }}">
            <span class="btn bg-[#172e45] text-[#d8eedb] rounded-full flex items-center justify-center transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform group-hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        </a>
        </div>
    </div>
    <div class="w-full flex flex-col items-center bg-white/30 backdrop-blur-md rounded-2xl ml-25">
        <img src="{{ asset('assets/img/hero-img.png') }}" class="max-w-70 height-70" alt="">
    </div>
</div>

    <!-- <iframe src="https://assets.pinterest.com/ext/embed.html?id=26740191531516481" height="415" width="236" frameborder="0" scrolling="no" ></iframe> -->

    <!-- <div class="w-full flex flex-col lg:flex-row justify-between lg:px-20 pt-25">
        <div class="flex-[3] w-full  flex flex-col justify-end">
            <div data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" > 
                <h1 class="text-white rounded-3xl text-6xl font-bold transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform cursor-default" style="text-shadow: 2px 2px 8px #000000, font-family: 'Fredoka', sans-serif;" >Every Bit of Action Creates a Better Earth</h1>
            </div>
        </div>
        
        <div class="flex-[2] w-full flex flex-col justify-between items-end h-full">
            <div class="p-2 rounded-2xl bg-white/30 backdrop-blur-md shadow-lg w-80 mb-4 self-end">
                <div data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="w-full border border-[#d8eedb] rounded-2xl transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform"/>
                </div>
                
                <div class="flex items-center justify-end gap-4 mt-5">
                    <div data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
                        <a href="{{ route('register') }}"><button class="btn bg-[#172e45] text-[#d8eedb] rounded-full transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform">Get Started</button></a>
                    </div>
                    
                    <div data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
                        <a href="{{ route('login') }}"><button class="btn bg-[#d8eedb] text-[#172e45] rounded-full transform transition-transform duration-300 ease-in-out hover:scale-110 will-change-transform">Login</button></a>
                    </div>
                </div>
            </div>
            <div class="self-end" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">
            <p class="py-5 text-lg md:text-lg text-white text-justify" style="text-shadow: 2px 2px 4px #000000;">
            Join thousands of eco-warriors making a real difference. Track your environmental impact and build a sustainable future together.
            </p>
            </div>

        </div>
    </div> -->
</div>
