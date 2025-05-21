@extends('layouts.app')

@php
$isLoggedIn = true; // anggap aja user dah login (ntar kalo dah siap frontend bisa diapus)
@endphp

@section('content')

   <!-- Content -->
<main class="p-6">

    <!-- Ringkasan -->
    <!-- <div class="grid grid-cols-1 md:grid-cols-2  mb-10 text-center"> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-2 mb-10 text-center max-w-4xl mx-auto">


        <!-- Plans to Finish -->
        <div class="flex flex-col items-center justify-center space-y-2">
            <h2 class="text-lg font-bold text-[#19344f]"
                        style="text-shadow: 
                                1px 1px 0 #94a3b8, 
                                1px 1px 0 #64748b, 
                                2px 2px 0 #334155;">
                                PLANS YOU NEED TO FINISH</h2>
            <div class="flex items-end justify-center ">
                <img src="{{ asset('assets/img/feature1.png') }}" alt="Plans To Finish" class="w-40 md:w-45" />
                <div class="flex items-baseline space-x-1">
                    <p class="text-4xl font-bold text-[#4f8536]">{{ $unfinishedPlans ?? 0 }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded ">PLANS</span>
                </div>
            </div>
        </div>

        <!-- Plans Completed -->
        <div class="flex flex-col items-center justify-center space-y-2">
             <h2 class="text-lg font-bold text-[#19344f]"
                        style="text-shadow: 
                                1px 1px 0 #94a3b8, 
                                1px 1px 0 #64748b, 
                                2px 2px 0 #334155;">
                                ALREADY COMPLETED</h2>
            <div class="flex items-end justify-center ">
                <img src="{{ asset('assets/img/feature1.png') }}" alt="Plans Completed" class="w-40 md:w-45" />
                <div class="flex items-baseline space-x-1">
                    <p class="text-4xl font-bold text-[#4f8536]">{{ $completedPlans ?? 0 }}</p>
                    <span class="bg-[#eeeed4] font-bold text-[#4f8536] px-3 py-1 rounded">PLANS</span>
                </div>
            </div>
        </div>
    </div>
</main>

        <!-- Daftar Rencana -->
            <div class="max-w-4xl mx-auto  border-gray-400 rounded-xl p-6">
            <h2 class="text-lg font-bold text-[#19344f] mb-4"
                    style="text-shadow: 
                                1px 1px 0 #94a3b8, 
                                1px 1px 0 #64748b, 
                                2px 2px 0 #334155;">
                                PLANS YOU NEED TO FINISH</h2>
            <div class="border-2 border-gray-500 rounded-xl p-4">
                <div class="bg-[#eeeed4] font-bold text-[#4f8536] font-bold px-4 py-2 mb-4 rounded-xl inline-block">PLANT A TREE</div>

                <!-- Checklist -->
                <ul class="space-y-2 mb-6">
                    <li><input type="checkbox" class="mr-2"> magna nibh lacinia purus, id luctus urna enim non neque</li>
                    <li><input type="checkbox" class="mr-2"> magna nibh lacinia purus, id luctus urna enim non neque</li>
                    <li><input type="checkbox" class="mr-2"> magna nibh lacinia purus, id luctus urna enim non neque</li>
                    <li><input type="checkbox" class="mr-2"> magna nibh lacinia purus, id luctus urna enim non neque</li>
                </ul>

                <!-- Tombol -->
                <div class="flex items-center justify-end gap-4">
                    <button class="btn bg-[#19344f] text-[#d8eedb] font-bold px-4 py-2 rounded-full hover:bg-[#19344f]">FINISH</button>
                    <button class="btn bg-[#d8eedb] text-[#19344f] font-bold px-4 py-2 rounded-full hover:bg-green-300">LEARN MORE</button>
                </div>

            </div>
        </div>
</main>
@endsection
