<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Import Fredoka from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="bg-white h-screen flex items-center justify-center overflow-hidden relative">

    <!-- Wave Background -->
    <div class="absolute bottom-0 left-0 w-full z-0">
        <img src="{{ asset('images/wave.png') }}" alt="Wave Background" class="w-full">
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
            
            <div class="text-3xl font-bold text-[#1E293B] mb-12 text-center">REGISTER</div>
            
            <div class="flex flex-col items-center">
                <div class="mb-4 text-sm text-red-600 min-h-[32px] flex items-center justify-center">
                    @if ($errors->any())
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <form method="POST" action="{{ route('register') }}" class="space-y-4 max-w-sm w-full -mt-8">
                    @csrf
                    <input type="text" name="name" placeholder="Full Name"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" required>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" required>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" required>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        class="w-full px-6 py-3 bg-[#D6E9D0] rounded-full border border-[#1E293B] focus:outline-none font-sans" required>
                    <div class="flex justify-center mt-2">
                        <button type="submit"
                            class="bg-[#1E293B] text-white px-6 py-3 rounded-full hover:bg-[#0f172a]">
                            REGISTER
                        </button>
                    </div>
                    <div class="text-center">
                        <p class="text-sm mt-4 text-[#1E293B]">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="font-bold underline hover:text-green-700">Masuk Disini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Image -->
        <div class="flex-1 hidden md:flex justify-end">
            <img src="{{ asset('images/earth.png') }}" alt="Illustration" class="w-[250px] -ml-20">
        </div>
    </div>
</body>
</html>
