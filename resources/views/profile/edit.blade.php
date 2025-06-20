@extends('layouts.app')

@section('content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Profile') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <!-- Profile Information Section -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <div class="flex flex-col items-center space-y-4 mb-8">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-[#103a57]">
                    <img id="profile_pict-preview" 
                         src="{{ auth()->user()->profile_pict ? asset('storage/' . auth()->user()->profile_pict) : asset('images/default-profile.png') }}" 
                         alt="Profile Picture" class="w-full h-full object-cover">
                </div>
            </div>

            @include('profile.partials.update-profile-information-form')
        </div>

        <!-- Password Update Section -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <h3 class="text-xl font-semibold text-[#172e45] mb-6">Update Password</h3>
            @include('profile.partials.update-password-form')
        </div>

        <!-- Account Deletion Section -->
        <div class="bg-white rounded-xl shadow-sm p-8">
            <h3 class="text-xl font-semibold text-[#172e45] mb-6">Delete Account</h3>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>

<script>
document.getElementById('profile_pict').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profile_pict-preview').src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});
</script>
<script src="//unpkg.com/alpinejs" defer></script>
@endsection