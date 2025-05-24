@extends('layouts.app')

@section('content')

   <!-- Content -->
<main class="p-6">

    <!-- Ringkasan -->
    <!-- <div class="grid grid-cols-1 md:grid-cols-2  mb-10 text-center"> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 mb-10 text-center max-w-4xl mx-auto">


        <!-- Plans to Finish -->
        <div class="flex flex-col items-center justify-center space-y-2">
            <h2 class="text-lg font-bold text-[#19344f]"
                        style="text-shadow: 1px 1px 0 #94a3b8">ONGOING PLANS</h2>
            <div class="flex items-end justify-center ">
                <img src="{{ asset('assets/img/feature1.png') }}" alt="Plans To Finish" class="w-40 md:w-45" />
                <div class="flex items-baseline space-x-1">
                    <p class="text-4xl font-bold text-[#4f8536]">{{ $ongoingPlans }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded ">PLANS</span>
                </div>
            </div>
        </div>

        <!-- Plans Completed -->
        <div class="flex flex-col items-center justify-center space-y-2">
             <h2 class="text-lg font-bold text-[#19344f]"
                        style="text-shadow: 1px 1px 0 #94a3b8">ALREADY COMPLETED</h2>
            <div class="flex items-end justify-center ">
                <img src="{{ asset('assets/img/feature1.png') }}" alt="Plans Completed" class="w-40 md:w-45" />
                <div class="flex items-baseline space-x-1">
                    <p class="text-4xl font-bold text-[#4f8536]">{{ $completedPlans }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded">PLANS</span>
                </div>
            </div>
        </div>
    </div>
</main>

        <!-- Daftar Rencana -->
            <div class="max-w-4xl mx-auto  border-gray-400 rounded-xl p-6">
            <h2 class="text-lg font-bold text-[#19344f] mb-4"
                    style="text-shadow: 1px 1px 0 #94a3b8">PLANS YOU NEED TO FINISH</h2>

            @if ($plans->isEmpty())
            <p class="text-gray-500">Belum ada plan yang diambil. Pilih plan di <a href="{{ route('plans') }}" class="text-blue-500">halaman Plan</a>!</p>
            @else

            @foreach ($plans as $plan)
            @if (!$plan->pivot->is_completed)
            <div class="border-2 border-gray-500 rounded-xl p-4">
                <div class="bg-[#eeeed4] font-bold text-[#4f8536] font-bold px-4 py-2 mb-4 rounded-xl inline-block">{{ $plan->title }}</div>

                <!-- Checklist -->
                <ul class="space-y-2 mb-6">
                    @foreach ($plan->steps as $step)
                    <li>
                        <form action="{{ route('step.complete', $step->userPlanSteps->first()->plan_step_id) }}" method="POST">
                            @csrf
                            <input type="checkbox" class="checkbox" class="mr-2" {{ $step->userPlanSteps->first()->is_completed ? 'checked disabled' : '' }} 
                            onchange="this.form.submit()" > {{ $step->title }}
                        </form>
                    </li>
                    @endforeach
                </ul>

                <!-- Tombol -->
                <div class="flex items-center justify-end gap-4">
                    <form action="{{ route('plan.complete', $plan->id) }}" method="POST" >
                        @csrf
                        <button type="submit" class="btn bg-[#19344f] text-[#d8eedb] font-bold px-4 py-2 rounded-full hover:bg-[#19344f]">FINISH</button>
                    </form>
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
</main>
@endsection
