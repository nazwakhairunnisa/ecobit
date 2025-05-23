@extends('layouts.app')

@section('content')
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;     /* Firefox */
    }
</style>

<main class="px-8 py-12 max-w-4xl mx-auto">
  <h1 class="text-4xl font-bold mb-4 text-center">Hemat Energi: Mulai dari Hal Kecil Biar Listrik Gak Boros</h1>
  <img src="{{ asset('assets/img/hemat_energi.jpg') }}" alt="Hemat Energi" class="w-full h-auto rounded-lg mb-6 shadow-md">
  <p class="text-lg text-gray-600 mb-6 text-justify">
  Kita pakai listrik sehari-hari, tapi tahu gak sih, sebagian besar listrik itu dari bahan bakar fosil yang bikin polusi dan bikin bumi makin panas? Tapi tenang, kita bisa kok hemat listrik dengan cara gampang. Misal, cabut charger kalau gak dipakai, ganti lampu biasa ke lampu LED yang irit listrik, atau atur AC supaya gak terlalu dingin, cukup 24-26 derajat aja. Jangan lupa matiin komputer atau TV kalau gak dipakai, dan manfaatin sinar matahari pas siang supaya gak terus-terusan nyalain lampu. Kalau biasa ngelakuin ini, tagihan listrik bakal turun dan bumi juga bakal seneng.

  Hemat listrik tuh gak cuma soal pinter, tapi juga soal kebiasaan yang kita lakuin di rumah. Misal, pakai stop kontak yang ada tombolnya supaya gampang dimatiin dan gak ada listrik yang terbuang sia-sia. Kalau udah jadi kebiasaan, hemat listrik bakal jalan terus tanpa disadari.

  <em>Kata Khotimah (2017), “Konsep bela negara bisa diwujudkan lewat budaya hemat energi.”</em> Artinya, hemat listrik juga bagian dari tanggung jawab kita sebagai warga negara. <em>Dewi & Nugroho (2014) juga bilang, “Perilaku hemat energi itu bukan cuma karena tau, tapi juga karena kebiasaan yang terbentuk di rumah.”</em> Jadi, yuk mulai hemat listrik dari sekarang!

  <strong>Tips sederhana hemat energi:</strong>
  <ul class="list-disc list-inside mb-4">
    <li>Cabut charger dan alat elektronik yang tidak digunakan.</li>
    <li>Gunakan lampu LED yang hemat energi dan tahan lama.</li>
    <li>Atur suhu AC tidak terlalu dingin (idealnya 24–26°C).</li>
    <li>Maksimalkan cahaya alami di siang hari.</li>
    <li>Matikan komputer atau laptop saat tidak digunakan.</li>
    <li>Gunakan mesin cuci hanya saat beban penuh.</li>
    <li>Rebus air secukupnya saat menyeduh teh atau kopi.</li>
    <li>Gunakan panci tertutup agar masakan cepat matang.</li>
    <li>Hindari penggunaan mode standby pada TV dan komputer.</li>
    <li>Gunakan stop kontak bertombol agar mudah memutus arus listrik.</li>
  </ul>
  </p>

  <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
  <ul class="list-disc list-inside text-gray-700 space-y-1 text-justify">
    <li>Khotimah, K. (2017). Wujud Bela Negara Melalui Pendidikan Budaya Hemat Energi. Jurnal Pertahanan dan Bela Negara, 7(1), 75–88.</li>
    <li>Dewi, R. A., & Nugroho, Y. (2014). Faktor Determinan Perilaku Konservasi Energi dalam Skala Rumah Tangga dan Sektor Transportasi. Jurnal Psikologi, Universitas Gadjah Mada. <a href="https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464" class="text-blue-600 underline" target="_blank" rel="noopener">https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464</a></li>
  </ul>
</main>
<script>
    function scrollCarousel(direction) {
        const carousel = document.querySelector('#rec-plan .overflow-x-auto');
        const scrollAmount = 300; // Adjust this value to control the scroll speed
        carousel.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

<section class="bg-gray-50 py-12 px-8">
  <h2 class="text-3xl font-bold text-gray-800 mb-8">Related Blog</h2>
  <div class="relative">
    <div id="rec-plan" class="overflow-x-auto scrollbar-hide">
      <div class="flex gap-6 min-w-[900px]">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition min-w-[270px]">
          <img src="{{ asset('assets/img/transportasi-ramah.jpg') }}" alt="Energi Surya Saat Bepergian" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">
              Transportasi Ramah Lingkungan: Biar Udara Kota Makin Bersih</h3>
            <p class="text-sm text-gray-600">kendaraan bermotor di kota besar bikin polusi udara yang bikin napas sesak dan bumi makin panas.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition min-w-[270px]">
          <img src="{{ asset('assets/img/manajemen-air.jpg') }}" alt="Kebun Belakang Syntia" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Hemat Air: Setiap Tetes Air Itu Penting</h3>
            <p class="text-sm text-gray-600">
              air bersih itu kebutuhan utama yang makin lama makin susah dicari. sayangnya, masih banyak yang boros air, kayak biarin keran nyala terus pas sikat gigi atau cuci piring.             </p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition min-w-[270px]">
          <img src="{{ asset('assets/img/pohon-alam.jpg') }}" alt="Anak-Anak Belajar dari Matahari" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Anak-Anak Belajar dari Matahari</h3>
            <p class="text-sm text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition min-w-[270px]">
          <img src="{{ asset('assets/img/kurangi-sampah.jpg') }}" alt="Rumah Hemat Energi" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Rumah Hemat Energi, Hidup Lebih Nyaman</h3>
            <p class="text-sm text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('components.footer')

@endsection