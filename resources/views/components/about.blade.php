<section id="about" class="pt-20">
<div class="min-h-screen mt-10">
  <div class=" w-full flex items-center justify-center relative bg-cover bg-center" 
  style="background-image: url('{{ asset('assets/img/element.png') }}');">
  <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white/70 to-transparent backdrop-blur-md pointer-events-none"></div>
      <div class="relative z-10  items-center justify-center mx-20">
        <div class="flex justify-center items-center mx-auto mt-20">
          <div class="py-4 px-7 bg-[#172e45] text-[#d8eedb] rounded-2xl inline-block" data-aos="fade-left" data-aos-duration="1400" data-aos-delay="200">
            <h1 class="text-5xl font-bold">ABOUT US</h1>
          </div>
        </div>
        <div class=" w-full flex flex-col lg:flex-row justify-between items-center px-8 lg:px-20 gap-10">
            <img src="{{ asset('assets/img/element1.png') }}" class="max-w-md" data-aos="zoom-in-right" data-aos-duration="1400" data-aos-delay="200"/>
            <div>
                <h2 class="text-[#19344f] font-semibold text-3xl lg:text-5xl mb-5" data-aos="zoom-in" data-aos-duration="1400" data-aos-delay="200">Who Are We?</h2>
            <p class="py-5 text-justify text-base text-lg" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">
            Kami adalah platform digital yang mengajak kamu untuk beraksi nyata 
            menjaga lingkungan Lewat rencana-rencana kecil yang berdampak besar—
            kamu bisa menghemat energi, menanam pohon, atau menggunakan 
            transportasi ramah lingkungan dengan mudah dari satu tempat.
            </p>
            </div>
        </div>
      </div>
  </div>
  <div class="mt-30 flex flex-col lg:flex-row gap-6 items-center justify-center" id="about2">
    <div class="card bg-[#d8eedb] w-96 shadow-sm" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="200">
      <figure class="px-5 pt-5">
        <img
          src="{{ asset('assets/img/element2.png') }}"
          class="rounded-xl bg-base-100" />
      </figure>
      <div class="card-body">
        <h2 class="card-title text-[#19344f] font-semibold text-2xl lg:text-3xl">Why We Exist?</h2>
        <p class="text-justify text-lg">Karena kita capek liat bumi makin rusak tanpa solusi yang terjangkau. Di sini, semua orang bisa ikut andil. Gak perlu jadi aktivis buat peduli. Cukup jadi kamu—yang mau mulai sekarang juga.</p>
      </div>
    </div>

    <div class="card bg-[#d8eedb] w-96 shadow-sm" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="400">
      <figure class="px-5 pt-5">
        <img
        src="{{ asset('assets/img/element3.png') }}"
        class="rounded-xl bg-base-100" />
      </figure>
      <div class="card-body">
      <h2 class="card-title text-[#19344f] font-semibold text-2xl lg:text-3xl">Our Mission</h2>
      <p class="text-justify text-lg pb-6">Membantu siapa pun memulai langkah hijau, satu aksi kecil sehari demi bumi yang lebih baik. Kami percaya perubahan datang dari kamu</p>
        </div>
      </div>

      <div class="card bg-[#d8eedb] w-96 shadow-sm" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="600">
        <figure class="px-5 pt-5">
          <img
          src="{{ asset('assets/img/element4.png') }}"
          class="rounded-xl bg-base-100" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-[#19344f] font-semibold text-2xl lg:text-3xl">What We Offer?</h2>
            <ul class="list-disc ml-5 text-justify text-lg pb-6">
              <li>Rencana aksi personal</li>
              <li>Tracking progress keberlanjutan</li>
              <li>Komunitas untuk saling support</li>
              <li>Edukasi interaktif seputar lingkungan</li>
            </ul>
      </div>
    </div>
  </div>
</div>
</section>