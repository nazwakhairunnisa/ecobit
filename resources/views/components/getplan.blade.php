@extends('layouts.app')

@section('content')
<div class="header w-full flex items-center justify-center relative bg-cover bg-center" 
style="background-image: url('{{ asset('assets/img/banner.png') }}');">
    <div class="relative z-10">
      <button onclick="history.back()" class="flex items-center z-20 ml-2  pt-5 cursor-pointer hover:scale-110 transition">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
      <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
      </svg>
      </button>
      
      <div class="py-4 px-7 bg-[#172e45] text-white rounded-2xl inline-block ml-10 mt-5">
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

<div class="container w-full mx-auto mt-12 p-6 sm:p-10">
  <h2 class="text-[#19344f] font-semibold text-lg mt-4 ml-2">STEPS YOU NEED TO DO :</h2>
  <ul class="steps steps-vertical w-full">
    @foreach($steps as $step)
    <li class="step step-success">
      <div class="tooltip tooltip-right" data-tip="{{ $step->description }}">
        {{ $step->title }}
      </div>
    </li>
    @endforeach
  </ul>
  <div class="flex items-center justify-end">
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
@endsection