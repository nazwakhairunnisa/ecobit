@extends('layouts.app') <!-- Gunakan layout yang sudah ada -->

@section('content')
<div class="profile-container">
    <div class="profile-circle">
        <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('images/default-profile.png') }}" 
             alt="Profile Picture">
    </div>

    <div class="profile-form">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" value="{{ auth()->user()->username }}" readonly>
        </div>
        
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" id="name" value="{{ auth()->user()->name }}" readonly>
        </div>
        
        <div class="input-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" value="{{ auth()->user()->email }}" readonly>
        </div>
        
        <div class="profile-actions">
            <a href="{{ route('profile.edit') }}" class="edit-btn">Edit Profile</a>
        </div>
    </div>
</div>

@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
@endsection

@section('styles')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@endsection