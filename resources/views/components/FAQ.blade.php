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
<section class="flex flex-col w-full -mt-24 bg-white z-20 overflow-visible">

        <!-- FAQ Item -->
        <div class="flex items-center justify-center w-full relative py-10 overflow-visible">
            <!-- Arrow Kiri -->
            <button id="faq-prev" class="absolute left-20 z-20 bg-[#172e45] text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:cursor-pointer">
                &lt;
            </button>

            <div id="faq-carousel" class="flex gap-15 overflow-visible w-[900px] justify-center items-center">
                <div class="faq-card bg-white border border-black rounded-3xl p-6 text-center min-w-[200px] max-w-[250px] h-[250px] transition-all duration-300 ease-in-out" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
                    <h2 class="text-lg text-[#172e45] italic mb-4" style="font-family: 'Quicksand', sans-serif;">"Apa itu EcoBit?"</h2>
                    <p class="text-gray-700" style="font-family: 'Quicksand', sans-serif;">EcoBit adalah platform untuk membangun kebiasaan ramah lingkungan secara bertahap.</p>
                </div>
                <div class="faq-card bg-white border border-black rounded-3xl p-6 text-center min-w-[200px] max-w-[250px] h-[250px] transition-all duration-300 ease-in-out" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
                    <h2 class="text-lg text-[#172e45] italic mb-4" style="font-family: 'Quicksand', sans-serif;">"Bagaimana cara mulai menggunakan EcoBit?"</h2>
                    <p class="text-gray-700" style="font-family: 'Quicksand', sans-serif;">Cukup daftar, pilih rencana, dan mulai lakukan langkah-langkah kecil setiap hari.</p>
                </div>
                <div class="faq-card bg-white border border-black rounded-3xl p-6 text-center min-w-[200px] max-w-[250px] h-[250px] transition-all duration-300 ease-in-out" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
                    <h2 class="text-lg text-[#172e45] italic mb-4" style="font-family: 'Quicksand', sans-serif;">"Apakah EcoBit gratis?"</h2>
                    <p class="text-gray-700" style="font-family: 'Quicksand', sans-serif;">Ya, EcoBit dapat digunakan secara gratis oleh siapa saja.</p>
                </div>

                <div class="faq-card bg-white border border-black rounded-3xl p-6 text-center min-w-[200px] max-w-[250px] h-[250px] transition-all duration-300 ease-in-out" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
                    <h2 class="text-lg text-[#172e45] italic mb-4" style="font-family: 'Quicksand', sans-serif;">"Apakah EcoBit gratis?"</h2>
                    <p class="text-gray-700" style="font-family: 'Quicksand', sans-serif;">Ya, EcoBit dapat digunakan secara gratis oleh siapa saja.</p>
                </div>

                <div class="faq-card bg-white border border-black rounded-3xl p-6 text-center min-w-[200px] max-w-[250px] h-[250px] transition-all duration-300 ease-in-out" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="500">
                    <h2 class="text-lg text-[#172e45] italic mb-4" style="font-family: 'Quicksand', sans-serif;">"Apakah EcoBit gratis?"</h2>
                    <p class="text-gray-700" style="font-family: 'Quicksand', sans-serif;">Ya, EcoBit dapat digunakan secara gratis oleh siapa saja.</p>
                </div>
            </div>

            <!-- Arrow Kanan -->
            <button id="faq-next" class="absolute right-20 z-20 bg-[#172e45] text-white rounded-full w-12 h-12 flex items-center justify-center shadow-lg hover:cursor-pointer">
                &gt;
            </button>
        </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = Array.from(document.querySelectorAll('.faq-card'));
    let center = 1; // index card tengah

    function updateCards() {
        cards.forEach((card, i) => {
            card.classList.remove('scale-130', 'z-10', 'opacity-100', 'scale-100', 'opacity-70', 'hidden');
            if (i === center) {
                card.classList.add('scale-130', 'z-10', 'opacity-100');
            } else if (i === center - 1 || i === center + 1) {
                card.classList.add('scale-100', 'opacity-70');
            } else {
                card.classList.add('hidden');
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

    updateCards();
});
</script>