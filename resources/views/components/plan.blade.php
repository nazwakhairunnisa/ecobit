@extends('layouts.app')

@section('content')
     <style>
        body {
            font-family: 'Quicksand',  sans-serif;
            background-color: #ffffff;
            color: #1c2f3c;
            margin: 0;
        }

        .filter-bar {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 5px 20px;
            margin: 0 10px;
            min-width: 160px;
            border: 1px solid #1c2f3c;
            border-radius: 50px;
            background-color: #ffffff;
            color: #1c2f3c;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background-color: #1c2f3c;
            color: #ffffff;
        }

        .plan-section {
            margin-top: 0px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding-bottom: 30px;
        }

        .plan-card {
            border: 1px solid #1c2f3c;
            border-radius: 25px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 2px 2px 10px rgba(28, 47, 60, 0.05);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .plan-card:hover {
            transform: translateY(-5px);
        }

        .plan-header {
            margin-bottom: 10px;
        }

        .plan-label {
            font-size: 24px;
            padding: 10px 20px;
            border-radius: 15px;
            display: inline-block;
        }

        .plan-desc {
            font-size: 18px;
            line-height: 1.5;
            color: #333333;
            margin-bottom: 10px;
            display: inline;
        }

        .plan-link {
            font-weight: bold;
            color: #1c2f3c;
            text-decoration: none;
            font-size: 16px;
            margin-left: 5px;
        }

        .plan-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class="plan-section px-20">
    <!-- Filter -->
    <form method="GET" action="{{ route('plans') }}" class="filter-bar mt-10">
        @php
            $filterNames = [
                'Hemat Energi' => 'ENERGY',
                'Transportasi Ramah Lingkungan' => 'TRANSPORT',
                'Kurangi Sampah Plastik' => 'WASTE',
                'Pohon dan Alam' => 'NATURE',
                'Pengelolaan Air' => 'WATER',
            ];
        @endphp

        <button type="submit" name="focus_area" value="" class="filter-btn {{ !request('focus_area') ? 'active' : '' }}">
            ALL
        </button>
        @foreach($allFocusAreas as $focusArea)
            <button type="submit" name="focus_area" value="{{ $focusArea->id }}"
                class="filter-btn {{ request('focus_area') == $focusArea->id ? 'active' : '' }}">
                {{ $filterNames[$focusArea->name] ?? strtoupper($focusArea->name)}}
            </button>
        @endforeach
    </form>

        <!-- Card Plan TREE -->
    @forelse($plans as $plan)
        <div class="plan-card {{ $plan->focus_area_id }}" onclick="window.location='{{ route('getplan', $plan->id) }}'" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e; font-family: 'Fredoka', sans-serif;">{{ strtoupper($plan->title) }}</span>
            </div>
            <p class="plan-desc" style=" font-family: 'Quicksand', sans-serif;">{{ Str::limit($plan->plan_details, 300, '...') }} 
                <a class="plan-link" href="{{ route('getplan', $plan->id) }}">SEE MORE </a>
            </p>
            
        </div>
    @empty
        <p>Tidak ada plan untuk focus area ini</p>
    @endforelse

    </div>


@endsection