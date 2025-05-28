<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Import Fredoka from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="bg-white h-screen flex items-center justify-center overflow-hidden relative">

    <!-- Wave Background -->
    <div class="absolute bottom-0 left-0 w-full z-0">
        <img src="{{ asset('images/wave.png') }}" alt="Wave Background" class="w-full" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="200">
    </div>

    <div class="z-10 w-full max-w-6xl flex justify-between items-center px-8">
        <!-- Left Section -->
        <div class="flex-1">

    <!-- Logo -->
    <nav class="absolute top-0 left-0 w-full z-20 flex items-center justify-between px-8 py-4 bg-transparent fixed top-0 left-0 z-50">
        <div>
            <img src="{{ asset('assets/img/logo.png') }}" alt="ECOBIT Logo" class="h-12">
        </div>
    </nav>
            
            <div class="text-3xl font-bold text-[#1E293B] mb-12 text-center" data-aos="fade-down" data-aos-duration="1400" data-aos-delay="200">REGISTER</div>
            
            <div class="flex flex-col items-center">
            @if ($errors->any())
                <div class="mb-4 text-red-600 bg-red-100 rounded-lg p-4 mb-10">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form method="POST" action="{{ route('register') }}" class="space-y-4 max-w-sm w-full -mt-8">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200" required>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="400" required>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="600" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="800" required>
                    <div class="flex justify-center mt-2">
                        <button type="submit"
                            class="bg-[#1E293B] text-white px-6 py-3 rounded-full hover:bg-[#0f172a]" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
                            REGISTER
                        </button>
                    </div>
                    <div class="text-center">
                        <p class="text-sm mt-4 text-[#1E293B]" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="font-bold underline hover:text-green-700">Masuk Disini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Image -->
        <div class="flex-1 hidden md:flex justify-end">
            <img src="{{ asset('images/earth.png') }}" alt="Illustration" class="w-[250px] -ml-20" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">
        </div>
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
