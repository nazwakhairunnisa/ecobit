@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <div class="flex flex-col items-center space-y-6">
        <!-- Profile Picture -->
        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#103a57]">
            <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('images/default-profile.png') }}" 
                 alt="Profile Picture" class="w-full h-full object-cover">
        </div>

        <!-- Profile Information -->
        <div class="w-full bg-white rounded-xl shadow-sm p-8 space-y-6">
            <!-- <div class="space-y-2">
                <label for="username" class="block text-sm font-medium text-[#172e45]">Username</label>
                <input type="text" id="username" value="{{ auth()->user()->username }}" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" readonly>
            </div> -->
            
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-[#172e45]">Name</label>
                <input type="text" id="name" value="{{ auth()->user()->name }}" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" readonly>
            </div>
            
            <div class="space-y-2">
                <label for="email" class="block text-sm font-medium text-[#172e45]">Email Address</label>
                <input type="email" id="email" value="{{ auth()->user()->email }}" 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[#103a57] focus:ring-2 focus:ring-[#103a571a]" readonly>
            </div>
            
            <div class="flex justify-end">
                <a href="{{ route('profile.edit') }}" 
                    class="px-6 py-2 bg-[#103a57] text-white font-medium rounded-lg hover:bg-[#0a2a3a] transition-colors">
                    Edit Profile
                </a>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
@endsection