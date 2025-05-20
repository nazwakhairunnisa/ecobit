@extends('layouts.app')

@php
    $isLoggedIn = true; // anggap aja user dah login (ntar kalo dah siap frontend bisa diapus)
@endphp

@section('content')
<div class="card bg-white text-black shadow-xl rounded-3xl m-10">
  <div class="card-body">
    <h2 class="card-title">Card title!</h2>
    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
    <div class="card-actions justify-end">
      <button class="btn">Buy Now</button>
    </div>
  </div>
</div>
@endsection
