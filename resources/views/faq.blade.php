<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>FAQ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-[#0f172a] min-h-screen">


    <!-- Navbar -->
    @include('layouts.guest')

    <!-- Background -->
    <div class="relative flex items-center justify-center">
        <img src="{{ asset('assets/img/bg_faq.png') }}" alt="FAQ Background" class="w-full h-[300px] object-cover brightness-75">
        <h1 class="absolute text-4xl font-extrabold text-white bg-[#1e293b] px-8 py-3 rounded-full shadow-md tracking-wide">
            FAQ
        </h1>
    </div>

    <!-- FAQ Cards -->
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto mt-[-100px] z-10 relative items-start">
        @foreach ($faqs as $faq)
            <div class="bg-white p-6 rounded-3xl shadow-md text-center border flex flex-col ">
                <h3 class="text-xl font-semibold text-[#1e293b] mb-4">{{ $faq['question'] }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $faq['answer'] }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
