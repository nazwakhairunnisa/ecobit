@extends('layouts.app')
@php use Illuminate\Support\Str; @endphp

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plan Page</title>

     <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            padding: 5px 40px;
            margin: 0 20px;
            min-width: 175px;
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
        }

        .plan-card {
            border: 1px solid #1c2f3c;
            border-radius: 25px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 2px 2px 10px rgba(28, 47, 60, 0.05);
            transition: transform 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-5px);
        }

        .plan-header {
            margin-bottom: 10px;
        }

        .plan-label {
            font-size: 24px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 15px;
            display: inline-block;
        }

        .plan-desc {
            font-size: 18px;
            line-height: 1.5;
            color: #333333;
            margin-bottom: 10px;
        }

        .plan-link {
            font-weight: bold;
            color: #1c2f3c;
            text-decoration: none;
            font-size: 16px;
        }

        .plan-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="plan-section px-20">
    <!-- Filter -->
    <form method="GET" action="{{ route('plans') }}" class="filter-bar mt-10">
        <button type="submit" name="focus_area" value="" class="filter-btn {{ !request('focus_area') ? 'active' : '' }}">
            ALL
        </button>
        @foreach($allFocusAreas as $focusArea)
            <button type="submit" name="focus_area" value="{{ $focusArea->id }}"
                class="filter-btn {{ request('focus_area') == $focusArea->id ? 'active' : '' }}">
                {{ strtoupper($focusArea->name) }}
            </button>
        @endforeach
    </form>

        <!-- Card Plan TREE -->
    @forelse($plans as $plan)
        <div class="plan-card {{ $plan->focus_area_id }}">
            <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">{{ strtoupper($plan->title) }}</span>
            </div>
            <p class="plan-desc">{{ Str::limit($plan->plan_details, 270, '...') }}</p>
            <a class="plan-link" href="{{ route('getplan', $plan->id) }}">SEE MORE » </a>
        </div>
    @empty
        <p>Tidak ada plan untuk focus area ini</p>
    @endforelse

    
    </div>
</body>
</html>

<!-- <script>
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.plan-card');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-filter');

            cards.forEach(card => {
                if (card.classList.contains(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script> -->

@endsection