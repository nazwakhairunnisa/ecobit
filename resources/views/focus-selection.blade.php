
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

        <!-- Logo -->
        <nav class="absolute top-0 left-0 w-full z-20 flex items-center justify-between px-8 py-4 bg-transparent fixed top-0 left-0 z-50">
        <div>
            <img src="{{ asset('assets/img/logo.png') }}" alt="ECOBIT Logo" class="h-12">
        </div>
    </nav>

    <!-- Konten utama, tanpa kotak pembatas, lebih lebar -->
    <div class="w-full max-w-5xl mx-auto px-4 py-8 mt-10">
        <!-- Judul -->
        <h1 class="text-center text-2xl mb-8 text-[#0f172a] leading-relaxed" 
            HALO!<br>
            Kamu pengen mulai dari perubahan kecil yang bisa berdampak ke iklim? Yuk pilih fokus kamu!
        </h1>
        <!-- Form -->
        <form action="{{ route('focus.submit') }}" method="POST" class="space-y-5">
            @csrf
            <input type="hidden" name="focus" id="focus-input">

            @foreach ($focusAreas as $focus)
            <label class="focus-checkbox w-full rounded-xl py-4 px-8 bg-white hover:bg-[#d8eedb] transition-all duration-200 text-lg shadow-sm flex items-center cursor-pointer transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform cursor-default">
                    <input
                        type="checkbox"
                        name="focus_areas[]"
                        value="{{ $focus->id }}"
                        class="mr-3 h-5 w-5 text-[#0f172a] focus:ring-[#0f172a]"
                        onchange="toggleCheckbox(this)"
                    >
                    <span>{{ $focus->name }}</span>
                </label>
            @endforeach

            <!-- Error message -->
            @error('focus_areas')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex justify-end pt-6">
                <button type="submit" class="bg-[#172e45] text-[#d8eedb] px-8 py-3 rounded-full transition-transform duration-300 ease-in-out hover:scale-105 will-change-transform cursor-default transition font-bold text-lg shadow-md">
                    CONFIRM
                </button>
            </div>
        </form>
    </div>

    <script>
        function toggleCheckbox(checkbox) {
            const label = checkbox.parentElement;
            if (checkbox.checked) {
                label.classList.add('bg-[#d8eedb]', 'ring-2', 'ring-[#0f172a]');
                label.classList.remove('bg-white');
            } else {
                label.classList.remove('bg-[#d8eedb]', 'ring-2', 'ring-[#0f172a]');
                label.classList.add('bg-white');
            }
        }
    </script>

</body>
</html>
