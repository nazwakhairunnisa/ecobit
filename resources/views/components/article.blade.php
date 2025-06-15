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

<main class="px-8 py-12 max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold mb-4 text-center">{{ $article->title }}</h1>
    <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('assets/img/banner.png') }}" alt="{{ $article->title }}" class="w-full h-auto rounded-lg mb-6 shadow-md">
    <div class="text-lg text-gray-600 mb-6 text-justify">
        {!! $article->content !!}
    </div>
</main>

<script>
    function scrollCarousel(direction) {
        const carousel = document.querySelector('#rec-plan .overflow-x-auto');
        const scrollAmount = 300;
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>
@endsection