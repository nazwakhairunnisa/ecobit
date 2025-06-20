<!-- resources/views/auth/verify-email.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;700&display=swap" rel="stylesheet">
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
            <img src="{{ asset('assets/img/logo4.png') }}" alt="ECOBIT Logo" class="h-12">
        </div>
    </nav>

            <div class="text-3xl font-bold text-[#1E293B] mb-12 text-center">VERIFIKASI EMAIL</div>

            <div class="flex flex-col items-center max-w-sm w-full mx-auto -mt-8">
                <p class="text-[#1E293B] text-center text-lg mb-6">
                    Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi email kamu dengan mengklik tautan yang telah kami kirim ke alamat email kamu.
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 text-green-600 font-bold text-center">
                        Tautan verifikasi baru telah dikirim ke email kamu!
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                    @csrf
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-[#1E293B] text-white px-6 py-3 rounded-full hover:bg-[#0f172a]">
                            Kirim Ulang Email Verifikasi
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="mt-4 w-full text-center">
                    @csrf
                    <button type="submit" class="underline text-sm text-[#1E293B] hover:text-red-600">
                        Logout
                    </button>
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
