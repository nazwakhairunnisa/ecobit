@extends('layouts.app')

@section('content')
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-hide {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;     /* Firefox */
}
</style>
    <div class="mx-32 mt-10 mb-15">
        <h1 class="text-4xl md:text-5xl font-bold text-[#19344f] font-fredoka">GOOD MORNING, USER - !</h1>
    </div>

    <div class="w-full flex items-center justify-center relative -mt-35 px-15 py-10">
        <img src="{{ asset('assets/img/h5.png') }}" alt="" class="max-w-full h-auto rounded-3xl ">
        <div class="absolute inset-0 flex items-center justify-center">
        <div class="relative z-10 text-[#19344f] text-center px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-2">Are you ready to make an impact?</h1>
            <h1 class="text-5xl md:text-7xl font-bold mb-4">One Step at a Time</h1>
            <p class="max-w-2xl mx-auto text-lg">
                Our small action will leave a big impact for the earth.
            </p>
        </div>
        </div>
    </div>

    <div id="rec-plan" class="flex flex-row items-start justify-center mt-20 mx-15 gap-6">
        <div class="w-1/4 flex items-center">
            <h2 class="text-3xl text-[#19344f] font-semibold"> RECOMENDATION <br> PLAN</h2>
        </div>
        <div class="w-3/4">
            <div class="flex overflow-x-auto gap-6 scrollbar-hide">
                <div class="card w-80 bg-base-100 shadow-sm border border-black-300 flex-shrink-0">
                    <div class="card-body">
                        <div class="card-title flex items-center">
                            <h2 class="bg-[#e6f0e2]  px-3 py-2 text-[#4f8536] rounded-2xl inline-block">Medium Card</h2>
                        </div>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="justify-end card-actions">
                        <a href="/getplan"><button class="btn btn-primary rounded-full">Get Plan</button></a>
                        </div>
                    </div>
                </div>
                <div class="card w-80 bg-base-100 shadow-sm border border-black-300 flex-shrink-0">
                    <div class="card-body">
                        <h2 class="card-title">Medium Card</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="justify-end card-actions">
                        <a href="/getplan"><button class="btn btn-primary rounded-full">Get Plan</button></a>
                        </div>
                    </div>
                </div>
                <div class="card w-80 bg-base-100 shadow-sm border border-black-300 flex-shrink-0">
                    <div class="card-body">
                        <h2 class="card-title">Medium Card</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="justify-end card-actions">
                        <a href="/getplan"><button class="btn btn-primary rounded-full">Get Plan</button></a>
                        </div>
                    </div>
                </div>
                <div class="card w-80 bg-base-100 shadow-sm border border-black-300 flex-shrink-0">
                    <div class="card-body">
                        <h2 class="card-title">Medium Card</h2>
                        <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                        <div class="justify-end card-actions">
                        <a href="/getplan"><button class="btn btn-primary rounded-full">Get Plan</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full justify-end gap-2 py-4">
                <button class="btn btn-md" onclick="scrollCarousel(-1)">«</button>
                <button class="btn btn-md" onclick="scrollCarousel(1)">»</button>
            </div>
        </div>
    </div>

<script>
    function scrollCarousel(direction) {
        const carousel = document.querySelector('#rec-plan .overflow-x-auto');
        const scrollAmount = 300; // Adjust this value to control the scroll speed
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

@endsection