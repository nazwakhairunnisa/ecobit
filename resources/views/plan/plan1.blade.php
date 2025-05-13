<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Energy Plan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50">

    {{-- Navbar --}}
    <header class="fixed top-0 left-0 w-full bg-white shadow z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 h-16">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-10">
      <nav class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Features</a>
        <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
      </nav>
      <div class="block md:hidden">
        <!-- Mobile menu icon -->
        <button class="text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <div class="hidden md:block">
        <button class="text-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Tombol Back -->
    <div class="fixed top-4 left-4 text-3xl font-bold z-50 cursor-pointer hover:scale-110 transition">
      <button onclick="goBack()" class="focus:outline-none">&lt;</button>
    </div>
    <script>function goBack(){ window.history.back(); }</script>

</script>

    {{-- Banner --}}
    <!-- <section class="sticky bg-cover bg-center h-[250px] sm:h-[300px] md:h-[400px] flex flex-col items-start justify-center relative px-6"
    style="background-image: url('{{ asset('assets/img/banner.png') }}');"> -->
    <section class="pt-[100px] bg-cover bg-center  flex flex-col items-start justify-center relative px-7"
    style="background-image: url('{{ asset('assets/img/banner.png') }}');">
    
    <!-- Judul -->
    <div class="bg-[#19344f] inline-block text-xl sm:text-2xl md:text-4xl px-7 py-4 rounded-3xl font-extrabold shadow-md mt-50 mb-5 "
    style="font-family: 'Fredoka', sans-serif; font-weight: 1000;">
    <h1 class="text-4xl font-bold tracking-widest text-[#d8eedb]">SAVING ENERGY</h1>
    </div>

    <!-- Box putih berisi materi -->
        <div class="bg-white p-4 md:p-6 rounded-3xl shadow-2xl mb-100">
        <p class="text-lg md:text-xl leading-relaxed ">

                Menghemat energi bisa dilakukan dengan cara-cara sederhana namun berdampak besar. 
            Salah satunya adalah mematikan peralatan listrik yang tidak digunakan. 
            Banyak alat elektronik tetap menggunakan listrik meskipun dalam kondisi standby, 
            sehingga mematikannya sepenuhnya bisa mengurangi pemborosan energi dan menghemat biaya listrik.
            Mengganti lampu dengan jenis LED juga membantu karena lampu LED lebih efisien dan tahan lama 
            dibandingkan lampu biasa. Selain itu, memilih perangkat elektronik yang memiliki label hemat 
            energi bisa mengurangi konsumsi listrik dan emisi karbon. Penggunaan AC dan pemanas sebaiknya 
            dibatasi atau diatur dengan bijak karena alat ini membutuhkan energi besar. Untuk mencegah 
            pemborosan, penggunaan alat seperti timer atau saklar otomatis bisa membantu memutus arus listrik 
            saat peralatan tidak digunakan.    
        </p>
        </div>
    </section>

    {{-- Plan Section --}}
    <section class="mt-12 p-6 sm:p-10">
       <h2 class="text-xl sm:text-2xl font-bold mb-6" style="color: #19344f;">
         PLAN YOU NEED TO DO :
        </h2>

      <form action="#" method="POST" class="space-y-6">

         <!-- ITEM 1 -->
        <div>
            <div class="flex items-center space-x-3">
                <input type="checkbox" id="plan1" onclick="toggleExplain(1)" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                <label for="plan1" class="text-gray-700 text-sm sm:text-base">Cabut charger HP dan colokan magic com setelah dipakai</label>
            </div>
            <div id="explain1" class="hidden ml-8 mt-2 text-gray-600 text-sm">
                Mencabut charger dan colokan magic com mencegah pemborosan listrik dan risiko kebakaran.
            </div>
        </div>

        <!-- ITEM 2 -->
        <div>
            <div class="flex items-center space-x-3">
                <input type="checkbox" id="plan2" onclick="toggleExplain(2)" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                <label for="plan2" class="text-gray-700 text-sm sm:text-base">Gunakan kipas angin daripada AC, terutama di malam hari</label>
            </div>
            <div id="explain2" class="hidden ml-8 mt-2 text-gray-600 text-sm">
                Kipas angin lebih hemat energi daripada AC, cocok dipakai malam hari saat suhu lebih rendah.
            </div>
        </div>

        <!-- ITEM 3 -->
        <div>
            <div class="flex items-center space-x-3">
                <input type="checkbox" id="plan3" onclick="toggleExplain(3)" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                <label for="plan3" class="text-gray-700 text-sm sm:text-base">Matikan lampu kamar mandi dan dapur setelah digunakan</label>
            </div>
            <div id="explain3" class="hidden ml-8 mt-2 text-gray-600 text-sm">
                Mematikan lampu yang tidak terpakai adalah cara sederhana menghemat listrik.
            </div>
        </div>

        <!-- ITEM 4 -->
        <div>
            <div class="flex items-center space-x-3">
                <input type="checkbox" id="plan4" onclick="toggleExplain(4)" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                <label for="plan4" class="text-gray-700 text-sm sm:text-base">Nyalakan listrik maksimal jam 6 sore, bukan dari siang terus-terusan</label>
            </div>
            <div id="explain4" class="hidden ml-8 mt-2 text-gray-600 text-sm">
                Mengatur waktu pemakaian listrik bisa mengurangi tagihan bulanan dan lebih ramah lingkungan.
            </div>
        </div>

        <!-- ITEM 5 -->
        <div>
            <div class="flex items-center space-x-3">
                <input type="checkbox" id="plan5" onclick="toggleExplain(5)" class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                <label for="plan5" class="text-gray-700 text-sm sm:text-base">Ganti lampu utama rumah dengan LED 5 watt</label>
            </div>
            <div id="explain5" class="hidden ml-8 mt-2 text-gray-600 text-sm">
                Lampu LED 5 watt jauh lebih hemat dan tahan lama dibanding lampu pijar biasa.
            </div>
        </div>

            <button type="submit"
                class="bg-[#1f2e53] text-white font-semibold py-2 px-6 rounded-full hover:bg-blue-800 transition duration-200">
                    ADD
                </button>
            </form>
        </section>

        <script>
    function toggleExplain(id) {
      const el = document.getElementById('explain' + id);
      el.classList.toggle('hidden');
    }
  </script>


</body>
</html>
