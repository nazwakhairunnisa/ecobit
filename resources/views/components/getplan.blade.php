@extends('layouts.app')

@section('content')

<div class="header w-full flex flex-col justify-start relative bg-cover bg-center py-10 px-4 sm:px-10"
style="background-image: url('{{ $plan->image ? asset('storage/' .$plan->image) : asset('assets/img/banner.png') }}');">
    <div class="relative z-10">
      <div class="flex flex-row items-center">
        <button onclick="history.back()" class="flex items-center z-20 pt-5 cursor-pointer hover:scale-110 transition">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
        </svg>
        </button>
        
        <div class="title flex flex-wrap items-center gap-2 sm:gap-4 mt-5 ml-4 sm:ml-5">
          @foreach($plan->impacts as $impact)
          <div class="py-1 px-4 text-[#172e45] bg-white font-semibold border-1 border-black rounded-3xl inline-block text-sm lg:text-lg" data-aos="fade-down" data-aos-duration="1400" data-aos-delay="200">
            <h1 class="text-base" style=" font-family: 'Quicksand', sans-serif;">{{ $impact->name }}</h1>
          </div>
          @endforeach

          @foreach($plan->functions as $function)
          <div class="py-1 px-4 text-[#172e45] bg-white font-semibold border-1 border-black rounded-3xl inline-block text-sm lg:text-lg" data-aos="fade-down" data-aos-duration="1400" data-aos-delay="200">
            <h1 class="text-base" style=" font-family: 'Quicksand', sans-serif;">{{ $function->name }}</h1>
          </div>
          @endforeach
        </div>
      </div>

      <div class="py-4 px-4 sm:px-7 bg-[#172e45] text-white rounded-2xl inline-block ml-0 sm:ml-10 mr-0 sm:mr-5 mt-5 max-w-full" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">
        <h1 class="text-2xl sm:text-5xl font-semibold" style=" font-family: 'Fredoka', sans-serif;">{{ $plan->title }}</h1>
      </div>
      
      <div class="card bg-white text-black shadow-xl rounded-3xl m-4 sm:m-10" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="400">
        <div class="card-body">
          <p class="text-base text-justify" style=" font-family: 'Quicksand', sans-serif;">
            {{ $plan->plan_details }}
          </p>
        </div>
      </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row items-start justify-between mx-4 lg:mx-15 gap-6">
  <div class="container flex flex-col w-full lg:w-200 mt-12">
    <h2 class="text-[#19344f] font-semibold text-xl mt-4 ml-2" style=" font-family: 'Fredoka', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">STEPS YOU NEED TO DO :</h2>
    <div class="flex flex-col mt-4 p-4 rounded-2xl shadow-sm border border-gray-200" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
      <ul class="steps steps-vertical w-full overflow-visible">
        @foreach($steps as $step)
        <li class="step custom-step" style=" font-family: 'Quicksand', sans-serif; --step-bg: #4a774e; --step-fg: #fff;">
          <div class="tooltip tooltip-top hover:cursor-pointer text-left w-full" data-tip="{{ $step->description }}">
            {{ $step->title }}
          </div>
        </li>
        @endforeach
      </ul>
      <div class="flex justify-end mt-4">
        @if (!$isTaken)
        <form action="{{ route('plan.add', $plan->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn bg-[#172e45] text-white rounded-full" style=" font-family: 'Quicksand', sans-serif;">ADD PLAN</button>
        </form>
        @else
          <a href="{{ route('myplan') }}" class="btn bg-[#d8eedb] text-[#19344f] rounded-full" style=" font-family: 'Quicksand', sans-serif;">VIEW IN MY PLAN</a>
        @endif
      </div>
    </div>
  </div>

  <div class="card flex bg-white border border-1 text-base w-88 rounded-2xl mx-10 mr-15 mt-25 lg:mt-27" style="box-shadow: 4px 4px 1px 0 #4a774e;" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="400">
  <div class="icon w-50 flex flex-row">
    <img src="{{ asset('assets/img/trivia.gif') }}"  class="-ml-2 -mt-6" alt="">
    <h2 class="pt-8 -ml-2 text-[#2e8125] font-bold text-3xl" style="font-family: 'Fredoka', sans-serif;">DID YOU KNOW?</h2>
  </div>
  @if ($plan->trivia)
  <div class="card-body -mt-6">
    <p class="flex text-justify italic text-base" style=" font-family: 'Quicksand', sans-serif;">{{ $plan->trivia }}</p>
  </div>
  @endif
</div>
</div>

<div class="container w-full mx-auto mt-12 p-4 sm:p-10">
  <h2 class="text-[#19344f] font-semibold text-xl mb-4" style="font-family: 'Fredoka', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">WHY YOU SHOULD DO THE PLAN?</h2>
  <div class="grid grid-cols-1 gap-4 items-center p-4 bg-white rounded-lg shadow-sm border border-gray-200" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
    @foreach ($plan->good_reasons as $reason)
    <ul class="space-y-3">
      <li class="flex items-start gap-2">
        <span class="w-5 h-5 flex items-center justify-center flex-none mt-1 text-[#172e45]">
          <!-- SVG icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
          </svg>
        </span>
        <p class="text-base text-gray-600">{{ $reason }}</p>
      </li>
    </ul>
    @endforeach
  </div>
</div>

<div class="container w-full mx-auto mt-12 p-4 sm:p-10">
  <h2 class="text-[#19344f] font-semibold text-lg mb-4" style="font-family: 'Fredoka', sans-serif;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">Watch This Video</h2>
  <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="300">
    <div class="relative w-full" style="padding-bottom: 56.25%;">
      <iframe
        class="absolute top-0 left-0 w-full h-full rounded-lg"
        src="{{ preg_replace([
              '/^https:\/\/(www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+).*$/',
              '/^https:\/\/youtu\.be\/([a-zA-Z0-9_-]+).*$/'
          ], [
              'https://www.youtube.com/embed/$2',
              'https://www.youtube.com/embed/$1'
          ], $plan->video_url) }}"
        title="Video for {{ $plan->title }}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>
  </div>
</div>

@if ($relatedArticles->count())
<div class="my-10 sm:my-15 lg:mt-8 mx-4 sm:mx-20">
  <h2 class="text-[#19344f] text-2xl mb-4" style=" font-family: 'Fredoka', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">Related Articles</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($relatedArticles as $article)
    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
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
@endif
@endsection
