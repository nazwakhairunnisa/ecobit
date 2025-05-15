@include('layouts.app')

<div class="header w-full flex items-center justify-center relative bg-cover bg-center" 
style="background-image: url('{{ asset('assets/img/banner.png') }}');">
    <div class="relative z-10">
      <button onclick="history.back()" class="flex items-center z-20 ml-2  pt-5 cursor-pointer hover:scale-110 transition">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
      <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
      </svg>
      </button>
      
      <div class="py-4 px-7 bg-[#172e45] text-white rounded-2xl inline-block ml-10 mt-5">
        <h1 class="text-5xl font-bold">SAVING ENERGY</h1>
      </div>

    <div class="card bg-white text-black shadow-xl rounded-3xl m-10">
      <div class="card-body">
        <p class="text-base text-justify">
          Menghemat energi adalah langkah penting untuk menjaga lingkungan dan mengurangi 
          biaya listrik. Dengan mengurangi konsumsi energi, kita dapat membantu mengurangi 
          emisi karbon yang berkontribusi pada perubahan iklim. 
          Selain itu, menghemat energi juga dapat mengurangi ketergantungan pada sumber daya 
          alam yang terbatas dan membantu menciptakan masa depan yang lebih berkelanjutan.
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
    </div>
    </div>
</div>

<!-- <div class="container mx-auto mt-12 p-6 sm:p-10">
  <h2 class="text-[#19344f] font-semibold text-lg mt-4 ml-2">PLAN YOU NEED TO DO :</h2>
  <ul class="steps steps-vertical">
    <li class="step step-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
    <li class="step step-primary">Nesciunt iste voluptatem deleniti</li>
    <li class="step step-primary">Magni maxime necessitatibus nulla voluptas!</li>
    <li class="step step-primary">Cupiditate vel fugiat minus eligendi in inventore omnis odit itaque</li>
  </ul>
  <div class="flex items-center justify-end">
    <button class="btn bg-[#172e45] text-white rounded-full">ADD PLAN</button>
  </div>
</div> -->

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

        <div class="flex items-center justify-end">
            <button class="btn bg-[#172e45] text-white rounded-full">ADD PLAN</button>
         </div>
            </form>
        </section>

        <script>
    function toggleExplain(id) {
      const el = document.getElementById('explain' + id);
      el.classList.toggle('hidden');
    }
  </script>