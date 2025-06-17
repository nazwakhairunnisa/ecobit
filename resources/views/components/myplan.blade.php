@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="w-full flex justify-center px-4">
        <div class="mb-4 px-4 py-3 w-full sm:w-120 flex items-center rounded bg-green-100 text-green-800 border border-green-300" style="font-family: 'Quicksand', sans-serif;">
            {{ session('success') }}
        </div>
    </div>
@endif
@if (session('error'))
    <div class="w-full flex justify-center px-4">
        <div class="mb-4 px-4 py-3 w-full sm:w-120 flex items-center rounded bg-red-100 text-red-800 border border-red-300" style="font-family: 'Quicksand', sans-serif;">
            {{ session('error') }}
        </div>
    </div>
@endif

<main class="p-4 sm:p-6">

    <!-- Ringkasan -->
    <div class="grid grid-cols-2 gap-2 sm:gap-6 mb-10 text-center max-w-4xl mx-auto">

        <!-- Ongoing Plans -->
        <div class="flex flex-col items-center justify-center space-y-1">
            <h2 class="text-lg sm:text-xl text-[#19344f]" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200"
                style="text-shadow: 1px 1px 0 #94a3b8; font-family: 'Fredoka', sans-serif;">ONGOING PLANS</h2>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2">
                <img src="{{ asset('assets/img/ongoing.gif') }}" alt="Plans To Finish" class="w-24 sm:w-40 md:w-45" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" />
                <div class="flex items-center justify-center sm:-ml-8 -ml-2">
                    <p class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#4f8536] mb-0" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">{{ $ongoingPlans }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded mt-2 text-sm sm:text-base" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">PLANS</span>
                </div>
            </div>
        </div>

        <!-- Completed Plans -->
        <div class="flex flex-col items-center justify-center space-y-1">
            <h2 class="text-lg sm:text-xl text-[#19344f]" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200"
                style="text-shadow: 1px 1px 0 #94a3b8; font-family: 'Fredoka', sans-serif;">COMPLETED PLANS</h2>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2">
                <img src="{{ asset('assets/img/complete.gif') }}" alt="Plans Completed" class="w-24 sm:w-40 md:w-45" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" />
                <div class="flex items-center justify-center sm:-ml-6 -ml-2">
                    <p class="text-4xl sm:text-5xl md:text-6xl font-bold text-[#4f8536] mb-0" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">{{ $completedPlans }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded mt-2 text-sm sm:text-base" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">PLANS</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Rencana -->
    <div class="max-w-4xl mx-auto rounded-xl p-4 sm:p-6">
        <h2 class="text-lg sm:text-xl text-[#19344f] mb-4"
            style="text-shadow: 1px 1px 0 #94a3b8; font-family: 'Fredoka', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">PLANS YOU NEED TO FINISH</h2>

            @php
                $allCompleted = $plans->count() > 0 && $plans->every(fn($plan) => $plan->pivot->is_completed);
            @endphp

            @if ($allCompleted)
                <div class="text-center my-8 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 font-semibold" style="font-family: 'Quicksand', sans-serif;" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">
                    Semua plan telah diselesaikan! 🎉<br>
                    Silakan tambahkan plan lagi di <a href="{{ route('plans') }}" class="text-blue-600 underline">halaman Plan</a>.
                </div>
            @endif

        @if ($plans->isEmpty())
            <p class="text-gray-500" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Belum ada plan yang diambil. Pilih plan di <a href="{{ route('plans') }}" class="text-blue-500">halaman Plan</a>!</p>
        @else
            @foreach ($plans as $plan)
                @if (!$plan->pivot->is_completed)
                    <div class="border-2 border-gray-500 rounded-xl p-4 mb-10" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
                        <div class="bg-[#eeeed4] font-bold text-[#4f8536] px-4 py-2 mb-4 rounded-xl inline-block"
                            style="font-family: 'Quicksand', sans-serif;">{{ $plan->title }}</div>

                        <!-- Checklist -->
                        <ul class="space-y-2 mb-6">
                            @foreach ($plan->steps as $step)
                                <li>
                                    <form action="{{ route('step.complete', $step->userPlanSteps->first()->plan_step_id) }}" method="POST">
                                        @csrf
                                        <label class="flex items-center" style="font-family: 'Quicksand', sans-serif;">
                                            <input type="checkbox" class="checkbox mr-2" 
                                                {{ $step->userPlanSteps->first()->is_completed ? 'checked disabled' : '' }} 
                                                onchange="this.form.submit()" > {{ $step->title }}
                                        </label>
                                    </form>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Tombol -->
                        <div class="flex flex-wrap items-center justify-end gap-2 sm:gap-4">
                            @if ($plan->all_steps_completed)
                            <form action="{{ route('plan.complete', $plan->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-[#19344f] text-[#d8eedb] font-bold px-4 py-2 rounded-full hover:bg-[#19344f]">FINISH</button>
                            </form>
                            @endif
                            <form action="{{ route('plan.cancel', $plan->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-red-500 text-white font-bold px-4 py-2 rounded-full hover:bg-red-600">DELETE PLAN</button>
                            </form>
                            <a href="{{ route('getplan', $plan->id) }}" class="btn bg-[#d8eedb] text-[#19344f] font-bold px-4 py-2 rounded-full hover:bg-green-300">LEARN MORE</a>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    <!-- Completed Plans -->
    <div class="max-w-4xl mx-auto rounded-xl p-4 sm:p-6 mt-6">
        <h2 class="text-lg sm:text-xl text-[#19344f] mb-4"
            style="text-shadow: 1px 1px 0 #94a3b8; font-family: 'Fredoka', sans-serif;" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">PLANS YOU ALREADY FINISH</h2>

        @if ($plans->where('pivot.is_completed', true)->isEmpty())
            <p class="text-gray-500" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Belum ada plan yang selesai nih!</p>
        @else
            @foreach ($plans as $plan)
                @if ($plan->pivot->is_completed)
                    <div class="border-2 border-gray-500 rounded-xl p-4 mb-10" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
                        <div class="bg-[#eeeed4] font-bold text-[#4f8536] px-4 py-2 mb-4 rounded-xl inline-block">{{ $plan->title }}</div>

                        <!-- Checklist (Read Only) -->
                        <ul class="space-y-2 mb-6" style="font-family: 'Quicksand', sans-serif;">
                            @foreach ($plan->steps as $step)
                                <li>
                                    <input type="checkbox" class="checkbox mr-2" checked disabled> {{ $step->title }}
                                </li>
                            @endforeach
                        </ul>

                        <!-- Tombol -->
                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('getplan', $plan->id) }}" class="btn bg-[#d8eedb] text-[#19344f] font-bold px-4 py-2 rounded-full hover:bg-green-300">LEARN MORE</a>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>

</main>
@endsection
