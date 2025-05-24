@extends('layouts.guest')

@section('content')
    <section id="features">
        @include('components.features')
    </section>
    <section id="about">
        @include('components.about')
    </section>
    @include('components.FAQ')
@endsection
