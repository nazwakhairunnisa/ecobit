<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilih Fokus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-[#0f172a] min-h-screen flex flex-col">

    <!--logo -->
    <nav class="w-full bg-white py-3 px-8 flex items-center fixed top-0 left-0 z-50">
        <img src="{{ asset('assets/img/logo.png') }}" alt="ecobit logo" class="h-12">
    </nav>
    <div class="h-20"></div>

    <!-- Konten utama, tanpa kotak pembatas, lebih lebar -->
    <div class="w-full max-w-5xl mx-auto px-4 py-8">
        <!-- Judul -->
        <h1 class="text-center text-2xl font-extrabold mb-8 text-[#0f172a] drop-shadow-lg leading-relaxed"
            HALO!<br>
            Kamu pengen mulai dari perubahan kecil yang bisa berdampak ke iklim? Yuk pilih fokus kamu!
        </h1>
        <!-- Form -->
        <form action="{{ route('focus.submit') }}" method="POST" class="space-y-5">
            @csrf
            <input type="hidden" name="focus" id="focus-input">

            @foreach ($fokusList as $fokus)
            <button
                type="button"
                onclick="selectFocus('{{ $fokus }}', event)"
                class="focus-button w-full rounded-xl py-4 px-8 bg-white hover:bg-[#e0f2fe] transition-all duration-200 text-lg shadow-sm"
            >
                {{ $fokus }}
            </button>
        @endforeach

            <div class="flex justify-end pt-6">
                <button type="submit" class="bg-[#0f172a] text-white px-8 py-3 rounded-full hover:bg-[#1e293b] transition font-bold text-lg shadow-md">
                    CONFIRM
                </button>
            </div>
        </form>
    </div>

    <script>
        function selectFocus(value, event) {
            document.getElementById('focus-input').value = value;
            document.querySelectorAll('.focus-button').forEach(btn => {
                btn.classList.remove('bg-[#D6E9D0]', 'font-bold', 'ring-2', 'ring-[#0f172a]');
                btn.classList.add('bg-white');
            });
            event.target.classList.add('bg-[#D6E9D0]', 'font-bold', 'ring-2', 'ring-[#0f172a]');
        }
    </script>

</body>
</html>
