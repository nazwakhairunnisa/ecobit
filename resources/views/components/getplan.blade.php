@extends('layouts.app')

@section('content')


<div class="header w-full flex items-center justify-center relative bg-cover bg-center" 
style="background-image: url('{{ $plan->image ? asset('storage/' .$plan->image) : asset('assets/img/banner.png') }}');">
    <div class="relative z-10">
      <div class="flex flex-row items-center">
        <button onclick="history.back()" class="flex items-center z-20 ml-2  pt-5 cursor-pointer hover:scale-110 transition">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
        </svg>
        </button>
        
        <div class="title flex flex-row items-center flex-wrap">
          @foreach($plan->impacts as $impact)
          <div class="py-1 px-4 text-[#172e45] bg-white font-semibold border-1 border-black rounded-3xl items-center justify-center inline-block ml-5 mt-5 text-sm lg:text-lg">
            <h1 class="text-lg text-base">{{ $impact->name }}</h1>
          </div>
          @endforeach

          @foreach($plan->functions as $function)
          <div class="py-1 px-4 text-[#172e45] bg-white font-semibold border-1 border-black rounded-3xl items-center justify-center inline-block ml-5 mt-5">
            <h1 class="text-lg text-base">{{ $function->name }}</h1>
          </div>
          @endforeach
        </div>
      </div>
      <div class="py-4 px-7 bg-[#172e45] text-white rounded-2xl inline-block ml-10 mr-5 mt-5">
        <h1 class="text-5xl font-bold">{{ $plan->title }}</h1>
      </div>
      
    <div class="card bg-white text-black shadow-xl rounded-3xl m-10">
      <div class="card-body">
        <p class="text-base text-justify">
          {{ $plan->plan_details }}
        </p>
      </div>
    </div>
    </div>
</div>

<div class="flex flex-col lg:flex-row items-center justify-between mx-15">
<div class="container flex flex-col w-200 mx-auto mt-12">
  <h2 class="text-[#19344f] font-semibold text-lg mt-4 ml-2">STEPS YOU NEED TO DO :</h2>
  <div class="flex flex-col">
    <ul class="steps steps-vertical w-200 overflow-visible">
      @foreach($steps as $step)
      <li class="step custom-step" style="--step-bg: #e6f0e2; --step-fg: #172e45;">
        <div class="tooltip tooltip-top hover:cursor-pointer" data-tip="{{ $step->description }}">
          {{ $step->title }}
        </div>
      </li>
      @endforeach
    </ul>
    <div class="flex justify-end mr-5">
      @if (!$isTaken)
      <form action="{{ route('plan.add', $plan->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn bg-[#172e45] text-white rounded-full">ADD PLAN</button>
      </form>
      @else
        <a href="{{ route('myplan') }}" class="btn bg-[#d8eedb] text-[#19344f] rounded-full">VIEW IN MY PLAN</a>
      @endif
    </div>
  
  </div>
</div>
<div class="card flex bg-white border border-1 text-base w-88 rounded-2xl mx-10 mr-15 mt-15 lg:mt-8" style="box-shadow: 4px 4px 1px 0 #e85e31;">
  <div class="icon w-50 flex flex-row">
    <img src="{{ asset('assets/img/trivia.gif') }}"  class="-ml-2 -mt-6" alt="">
    <h2 class="pt-8 -ml-2 text-[#e85e31] font-bold text-3xl" style="font-family: 'Fredoka', sans-serif;">DID YOU KNOW?</h2>
  </div>
  @if ($plan->trivia)
  <div class="card-body -mt-6">
    <p class="flex text-justify italic text-base">{{ $plan->trivia }}</p>
  </div>
  @endif
</div>
</div>
@if ($relatedArticles->count())
<div class="my-15 lg:mt-8 mx-20">
    <h2 class="text-[#19344f] font-semibold text-lg mb-4">Related Articles</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($relatedArticles as $article)
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
            <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('assets/img/banner.png') }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2">
                    <a href="{{ route('articles.show', $article->slug) }}" class="hover:underline">{{ $article->title }}</a>
                </h3>
                <p class="text-sm text-gray-600">{{ $article->excerpt }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection