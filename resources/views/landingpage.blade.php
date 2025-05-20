@extends('layouts.guest')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @include('components.header2')
    @include('components.features')
    @include('components.about')
    @include('components.FAQ')
    @include('components.footer')
@endsection
