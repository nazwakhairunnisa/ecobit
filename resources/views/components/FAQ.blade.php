<section class="faq">
    <div class="mt-15">
        <div class="w-full flex items-center justify-center relative bg-cover bg-center" 
        style="background-image: url('{{ asset('assets/img/FAQ.png') }}');  min-height: 300px;">
            <div class="absolute inset-x-0 top-1/4 flex items-center justify-center">
            <h1 class="text-[#d8eedb] text-4xl font-semibold px-6 py-2 bg-[#172e45] rounded-xl shadow-md" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200"
            style="font-family: 'Fredoka', sans-serif;">FAQ</h1>
            </div>
        </div>
    </div>
</section>

 <!-- FAQ Content Section -->
 <section class="flex flex-col w-full -mt-16 sm:-mt-20 md:-mt-24 bg-white z-20 overflow-visible">

<!-- FAQ Item -->
<div class="flex items-center justify-center w-full relative py-6 sm:py-8 md:py-10 overflow-visible px-4">
    <!-- Arrow Kiri -->
    <button id="faq-prev" class="absolute left-2 sm:left-8 md:left-20 z-20 bg-[#172e45] text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center shadow-lg hover:cursor-pointer text-sm sm:text-base">
        &lt;
    </button>

    <div id="faq-carousel" class="flex gap-4 sm:gap-8 md:gap-15 overflow-visible w-full max-w-[320px] sm:max-w-[600px] md:max-w-[900px] justify-center items-center" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="300">
        
        <div class="faq-card bg-white border border-black rounded-3xl p-4 sm:p-6 text-center min-w-[140px] sm:min-w-[180px] md:min-w-[200px] max-w-[190px] sm:max-w-[220px] md:max-w-[250px] h-[200px] sm:h-[220px] md:h-[250px] transition-all duration-500 ease-in-out">
            <h2 class="text-sm sm:text-base md:text-lg text-[#172e45] italic mb-2 sm:mb-4" style="font-family: 'Quicksand', sans-serif;">"Apa itu EcoBit?"</h2>
            <p class="text-gray-700 text-xs sm:text-sm md:text-base" style="font-family: 'Quicksand', sans-serif;">EcoBit adalah platform edukatif yang bantu kamu memulai gaya hidup ramah lingkungan lewat rencana aksi sederhana dan artikel inspiratif.</p>
        </div>

        <div class="faq-card bg-white border border-black rounded-3xl p-4 sm:p-6 text-center min-w-[140px] sm:min-w-[180px] md:min-w-[200px] max-w-[190px] sm:max-w-[220px] md:max-w-[250px] h-[200px] sm:h-[220px] md:h-[250px] transition-all duration-500 ease-in-out">
            <h2 class="text-sm sm:text-base md:text-lg text-[#172e45] italic mb-2 sm:mb-4" style="font-family: 'Quicksand', sans-serif;">"Bagaimana cara mulai menggunakan EcoBit?"</h2>
            <p class="text-gray-700 text-xs sm:text-sm md:text-base" style="font-family: 'Quicksand', sans-serif;">Cukup daftar, pilih rencana, dan mulai lakukan langkah-langkah kecil setiap hari.</p>
        </div>

        <div class="faq-card bg-white border border-black rounded-3xl p-4 sm:p-6 text-center min-w-[140px] sm:min-w-[180px] md:min-w-[200px] max-w-[190px] sm:max-w-[220px] md:max-w-[250px] h-[200px] sm:h-[220px] md:h-[250px] transition-all duration-500 ease-in-out">
            <h2 class="text-sm sm:text-base md:text-lg text-[#172e45] italic mb-2 sm:mb-4" style="font-family: 'Quicksand', sans-serif;">"Apa beda rencana saya dan artikel yang tersedia?"</h2>
            <p class="text-gray-700 text-xs sm:text-sm md:text-base" style="font-family: 'Quicksand', sans-serif;">Plan bisa kamu buat sesuai minat, sedangkan artikel berisi edukasi & tips untuk bantu kamu lebih peduli lingkungan.</p>
        </div>

        <div class="faq-card bg-white border border-black rounded-3xl p-4 sm:p-6 text-center min-w-[140px] sm:min-w-[180px] md:min-w-[200px] max-w-[190px] sm:max-w-[220px] md:max-w-[250px] h-[200px] sm:h-[220px] md:h-[250px] transition-all duration-500 ease-in-out">
            <h2 class="text-sm sm:text-base md:text-lg text-[#172e45] italic mb-2 sm:mb-4" style="font-family: 'Quicksand', sans-serif;">"Apakah EcoBit hanya untuk orang yang sudah aktif peduli lingkungan?"</h2>
            <p class="text-gray-700 text-xs sm:text-sm md:text-base" style="font-family: 'Quicksand', sans-serif;">EcoBit justru dibuat buat kamu yang baru mau mulai. Semua langkah kecil kamu dihitung di sini.</p>
        </div>

        <div class="faq-card bg-white border border-black rounded-3xl p-4 sm:p-6 text-center min-w-[140px] sm:min-w-[180px] md:min-w-[200px] max-w-[190px] sm:max-w-[220px] md:max-w-[250px] h-[200px] sm:h-[220px] md:h-[250px] transition-all duration-500 ease-in-out">
            <h2 class="text-sm sm:text-base md:text-lg text-[#172e45] italic mb-2 sm:mb-4" style="font-family: 'Quicksand', sans-serif;">"Saya mau update atau hapus plan, bisa tidak?"</h2>
            <p class="text-gray-700 text-xs sm:text-sm md:text-base" style="font-family: 'Quicksand', sans-serif;">Bisa, kamu tinggal masuk ke halaman My Plan lalu update atau hapus plan yang sudah kamu buat.</p>
        </div>
    </div>

    <!-- Arrow Kanan -->
    <button id="faq-next" class="absolute right-2 sm:right-8 md:right-20 z-20 bg-[#172e45] text-white rounded-full w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center shadow-lg hover:cursor-pointer text-sm sm:text-base">
        &gt;
    </button>
</div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
const cards = Array.from(document.querySelectorAll('.faq-card'));
let center = 1; // index card tengah

function isMobile() {
return window.innerWidth < 768; // md breakpoint
}

function updateCards() {
cards.forEach((card, i) => {
    card.classList.remove('scale-130', 'z-10', 'opacity-100', 'scale-100', 'opacity-70', 'hidden');
    
    if (isMobile()) {
        // Mobile: tampilkan hanya 1 card
        if (i === center) {
            card.classList.add('scale-110', 'z-10', 'opacity-100');
        } else {
            card.classList.add('hidden');
        }
    } else {
        // Desktop: tampilkan 3 cards
        if (i === center) {
            card.classList.add('scale-130', 'z-10', 'opacity-100');
        } else if (i === center - 1 || i === center + 1) {
            card.classList.add('scale-100', 'opacity-70');
        } else {
            card.classList.add('hidden');
        }
    }
});
}

document.getElementById('faq-prev').onclick = function () {
if (center > 0) center--;
updateCards();
};
document.getElementById('faq-next').onclick = function () {
if (center < cards.length - 1) center++;
updateCards();
};

// Update on window resize
window.addEventListener('resize', updateCards);

// Initialize with center at 0 for mobile, 1 for desktop
center = isMobile() ? 0 : 1;
updateCards();
});
</script>