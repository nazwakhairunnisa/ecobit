<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'Franxurter';
            src: url('/font/Franxurter-w11D9.ttf') format('truetype');
        }

        body {
            font-family: 'Franxurter', sans-serif;
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
    <!-- Logo (Separated from the main content) -->
    <div class="absolute top-4 left-8 z-20">
        <div class="text-3xl text-[#1E293B]">ECOBIT</div>
    </div>
            
            <div class="text-3xl font-bold text-[#1E293B] mb-12 text-center">REGISTER</div>
            
            <div class="flex flex-col items-center">
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
