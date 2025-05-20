@extends('layouts.app')

@php
$isLoggedIn = true; // anggap aja user dah login (ntar kalo dah siap frontend bisa diapus)
@endphp

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plan Page</title>

     <style>
        /* 👇 Ini semua CSS dari aku, ditempelin langsung */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            color: #1c2f3c;
            margin: 0;
            padding: 0;
            /* padding: 20px; */
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
            margin-top: 20px;
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
    <div class="filter-bar ">
        <button class="filter-btn" data-filter="tree">TREE</button>
        <button class="filter-btn" data-filter="energy">ENERGY</button>
        <button class="filter-btn" data-filter="vehicle">VEHICLE</button>
        <button class="filter-btn" data-filter="electric">ELECTRIC</button>
        <button class="filter-btn" data-filter="water">WATER</button>
    </div>

        <!-- Card Plan TREE -->
    <div class="plan-card tree">
        <div class="plan-header">
        <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">PLANT TREE 1</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card tree">
        <div class="plan-header">
        <span class="plan-label" style="background-color: #a3d4b2; color: #1c2f3c;">PLANT TREE 2</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card tree">
        <div class="plan-header">
        <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">PLANT TREE 3</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <!-- Card Plan ENERGY -->
    <div class="plan-card energy">
        <div class="plan-header">
        <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">SAVING ENERGY 1</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card energy">
        <div class="plan-header">
        <span class="plan-label" style="background-color: #a3d4b2; color: #1c2f3c;">SAVING ENERGY 2</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card energy">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">SAVING ENERGY 3</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

        <!-- Card Plan VEHICLE -->
    <div class="plan-card vehicle">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">VEHICLE 1</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card vehicle">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #a3d4b2; color: #1c2f3c;">VEHICLE 2</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card vehicle">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">VEHICLE 3</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

        <!-- Card Plan ELECTRIC -->
    <div class="plan-card electric">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">ELECTRIC 1</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card electric">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #a3d4b2; color: #1c2f3c;">ELECTRIC 2</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card electric">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">ELECTRIC 3</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>
    
    <!-- card plan WATER -->
    <div class="plan-card water">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">WATER 1</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card water">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #a3d4b2; color: #1c2f3c;">WATER 2</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>

    <div class="plan-card water">
        <div class="plan-header">
            <span class="plan-label" style="background-color: #e6e6c9; color: #4a774e;">WATER 3</span>
        </div>
        <p class="plan-desc">magna nibh lacinia purus, id luctus urna enim non neque magna nibh lacinia purus...</p>
        <a class="plan-link" href="#">SEE MORE >></a>
    </div>
    
</body>
</html>

<script>
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
</script>

@endsection