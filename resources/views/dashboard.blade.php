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

<div class="header min-h-screen w-full flex items-center justify-center relative" style="background-image: url('{{ asset('assets/img/bg5.png') }}'); background-size: cover; background-position: center;">
    <div class="flex flex-col mx-20 w-full">
        <h1 class="text-[#172e45] w-250 text-4xl md:text-5xl" style="font-family: 'Fredoka', sans-serif;">
            Every Bit of Action Creates a
            <span class="inline-block bg-[#e6f0e2] text-[#2e8125] px-3 py-1 rounded-xl">
            Better
            </span>
            Planet
        </h1>
        <img src="{{ asset('assets/img/element-6.png') }}" class="mt-5 px-12 overflow-visible" alt="">
        <p class="pl-24 pt-5 text-xl" style="font-family: 'Quicksand', sans-serif;">Eco-Warriors! Start your journey with EcoBit today.</p>  
        <div class="flex justify-end w-full z-10 -mt-35"> 
            <div class="card w-80 bg-base-100 shadow-sm border border-black-300 rounded-3xl flex-shrink-0">
                <img src="{{ asset('assets/img/qmark.png') }}" class="z-15 w-25 -mt-12" alt="">
                <div class="card-body ">
                    <div class="card-title flex items-center">
                        <h2 class="text-base text-lg" style=" font-family: 'Quicksand', sans-serif;">
                        Change starts in the quietest moments. One small decision can ripple through the world—EcoBit helps you make it count.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="rec-plan" class="flex flex-row items-start justify-center my-20 mx-15 gap-6">
        <div class="w-1/4 flex flex-col items-center">
            <h2 class="text-3xl text-[#19344f]" style="font-family: 'Fredoka', sans-serif;"> RECOMENDATION PLAN</h2>
            <div class="flex w-full gap-2 py-4">
                <button class="btn btn-lg bg-[#19344f] rounded-xl text-white items-center text-xl" onclick="scrollCarousel(-1)">«</button>
                <button class="btn btn-lg bg-[#19344f] rounded-xl text-white items-center text-xl" onclick="scrollCarousel(1)">»</button>
            </div>
        </div>
        <div class="w-3/4">
            <div class="flex overflow-x-auto gap-6 scrollbar-hide">
                @forelse($recPlans as $plan)
                <div class="card w-80 bg-base-100 image-full shadow-sm border border-black-300 flex-shrink-0">
                <figure class="blur-xs" style="background-image: url('{{ $plan->image ? asset('storage/' .$plan->image) : asset('assets/img/banner.png') }}'); background-size: cover; background-position: center; width:100%; height:auto;">
                </figure>
                    <div class="card-body">
                        <div class="card-title flex items-center">
                            <h2 class="py-2 text-[#e6f0e2] text-xl font bold rounded-2xl inline-block" style="text-shadow: 2px 2px 8px #172e45; font-family: 'Fredoka', sans-serif;">
                                {{ strtoupper($plan->title) }}
                            </h2>
                        </div>
                        <p style="text-shadow: 2px 2px 8px #172e45; font-family: 'Quicksand', sans-serif;">{{ \Illuminate\Support\Str::limit($plan->plan_details, 100, '...') }}</p>
                        <div class="justify-end card-actions">
                        <a href="{{ route('getplan', $plan->id) }}">
                            <button class="btn bg-[#e6f0e2] text-[#172e45] font-bold rounded-full">
                            {{ Auth::user()->plans()->where('plan_id', $plan->id)->exists() ? 'SEE MORE' : 'GET PLAN' }}
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text=gray-500">Belum ada rekomendasi plan untuk kamu</p>
                @endforelse
                
            </div>
        </div>
    </div>

<div class="my-30 mx-20">
    <h2 class="text-3xl text-[#19344f] text-center mb-10" style=" font-family: 'Fredoka', sans-serif;">OUR ARTICLES</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($articles as $article)
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
            <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('assets/img/banner.png') }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">
                    <a href="{{ route('articles.show', $article->slug) }}" class="hover:underline"
                    style=" font-family: 'Quicksand', sans-serif;">{{ $article->title }}</a>
                </h3>
                <p class="text-sm text-gray-600" style=" font-family: 'Quicksand', sans-serif;">{{ $article->excerpt }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


    <!-- <div>
    <h2>Fokus Kamu</h2>
    <ul>
        @foreach (auth()->user()->focusAreas as $focus)
            <li>{{ $focus->name }}</li>
        @endforeach
    </ul>
</div> -->

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