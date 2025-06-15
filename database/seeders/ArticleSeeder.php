<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\FocusArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'focus_area_id' => 1, // Hemat Energi
                'title' => 'Hemat Energi: Langkah Kecil untuk Bumi yang Lebih Baik',
                'slug' => 'langkah-kecil-untuk-bumi-yang-lebih-baik',
                'content' => '
                    <p>Perubahan iklim yang semakin parah menuntut kita untuk mulai peduli dan bertindak nyata dalam menjaga lingkungan. Salah satu cara paling efektif yang bisa dilakukan oleh setiap individu adalah dengan menghemat energi, terutama energi listrik di rumah. Hemat energi tidak hanya mengurangi tagihan listrik, tetapi juga menurunkan emisi gas rumah kaca yang berkontribusi pada pemanasan global.</p>
                    <p>Hemat listrik tuh gak cuma soal pinter, tapi juga soal kebiasaan yang kita lakuin di rumah. Misal, pakai stop kontak yang ada tombolnya supaya gampang dimatiin dan gak ada listrik yang terbuang sia-sia. Kalau udah jadi kebiasaan, hemat listrik bakal jalan terus tanpa disadari.</p>
                    <p class="mt-8"><strong>Mengapa Hemat Energi Penting?</strong></p>
                    <p>Energi yang kita gunakan sehari-hari sebagian besar berasal dari bahan bakar fosil yang menghasilkan polusi dan gas rumah kaca. Dengan mengurangi konsumsi energi, kita membantu mengurangi dampak negatif tersebut dan memperlambat laju perubahan iklim.</p>
                    <p class="mt-8"><strong>Tips Hemat Energi yang Mudah Dilakukan di Rumah</strong></p>
                    <ol class="list-decimal list-inside mb-4">
                        <li>Manfaatkan Cahaya Matahari di Siang Hari.
                            <p>Gunakan pencahayaan alami sebanyak mungkin dengan membuka jendela dan ventilasi yang menghadap ke sumber cahaya matahari. Ini dapat mengurangi kebutuhan penggunaan lampu di siang hari.</p>
                        </li>
                        <li>Matikan Lampu dan Peralatan Elektronik yang Tidak Digunakan.
                            <p>Kebiasaan sederhana ini sangat efektif mengurangi konsumsi listrik. Pastikan lampu dan alat elektronik seperti televisi dimatikan saat tidak dipakai.</p>
                        </li>
                        <li>Ganti Lampu Biasa dengan Lampu LED.
                            p>Lampu LED lebih efisien dan tahan lama dibandingkan lampu pijar biasa. Meskipun harganya sedikit lebih mahal, namun dalam jangka panjang akan menghemat biaya listrik.</p>
                        </li>
                        <li>Gunakan Peralatan Elektronik Hemat Energi.
                            <p>Pilih alat elektronik dengan label hemat energi atau teknologi inverter, terutama untuk AC dan kulkas, yang dapat menghemat energi hingga 30-50% dibandingkan peralatan konvensional.</p>
                        </li>
                        <li>Atur Penggunaan AC dengan Bijak.
                            <p>Gunakan AC pada suhu yang tidak terlalu rendah, misalnya sekitar 25°C, dan manfaatkan timer atau pengatur suhu otomatis agar tidak boros energi.</p>
                        </li>
                        <li>Matikan Keran Air Saat Tidak Digunakan.
                            <p>Penghematan energi juga berkaitan dengan penggunaan air, karena proses pemompaan dan pengolahan air memerlukan energi. Biasakan mematikan keran saat menyikat gigi atau menggunakan sabun.</p>
                        </li>
                        <li>Masak dengan Efisien
                            <p>Gunakan air secukupnya saat memasak dan matikan peralatan listrik seperti rice cooker segera setelah selesai digunakan untuk menghindari pemborosan energi.</p>
                        </li>
                    </ol>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Rizkita Darajat, "7 Contoh Perilaku Hemat Energi yang Bisa Dilakukan di Rumah," Daihatsu.co.id</li>
                        <li>Dewi, R. A., & Nugroho, Y. (2014). Faktor Determinan Perilaku Konservasi Energi dalam Skala Rumah Tangga dan Sektor Transportasi. Jurnal Psikologi, Universitas Gadjah Mada. <a href="https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464" class="text-blue-600 underline" target="_blank" rel="noopener">https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/hemat-energi.png'),
                'excerpt' => 'Hemat listrik gak cuma bikin tagihan turun, tapi juga bikin bumi lebih sehat. Yuk, mulai dari hal kecil!',
            ],
            [
                'focus_area_id' => 1, // Hemat Energi
                'title' => 'Hemat Energi: Mulai dari Hal Kecil Biar Listrik Gak Boros',
                'slug' => 'hemat-energi-mulai-dari-hal-kecil',
                'content' => '
                    <p>Kita pakai listrik sehari-hari, tapi tahu gak sih, sebagian besar listrik itu berasal dari bahan bakar fosil yang menghasilkan polusi dan membuat bumi semakin panas? Tenang, kita bisa kok menghemat listrik dengan cara-cara sederhana. Misalnya, mencabut charger saat tidak dipakai, mengganti lampu biasa dengan lampu LED yang lebih irit, atau mengatur AC pada suhu 24–26°C agar tidak terlalu dingin. Jangan lupa matikan komputer atau TV saat tidak digunakan, dan manfaatkan sinar matahari di siang hari supaya tidak terus-terusan menyalakan lampu. Dengan kebiasaan ini, tagihan listrik bisa turun, dan bumi pun jadi lebih senang.</p>
                    <p>Hemat listrik bukan cuma soal pintar, tapi juga soal kebiasaan yang kita terapkan di rumah. Contohnya, pakai stop kontak yang ada tombolnya supaya mudah dimatikan dan tidak ada listrik yang terbuang sia-sia. Kalau sudah jadi kebiasaan, hemat listrik akan berjalan otomatis tanpa kita sadari.</p>
                    <p>Kata Khotimah (2017), “Konsep bela negara bisa diwujudkan lewat budaya hemat energi.” Artinya, hemat listrik juga bagian dari tanggung jawab kita sebagai warga negara. Dewi & Nugroho (2014) juga menyatakan, “Perilaku hemat energi itu bukan cuma karena tahu, tapi juga karena kebiasaan yang terbentuk di rumah.” Jadi, yuk mulai hemat listrik dari sekarang!</p>
                    <p class="mt-8"><strong>Tips Sederhana Hemat Energi</strong></p>
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
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Khotimah (2017). Konsep Bela Negara melalui Budaya Hemat Energi.</li>
                        <li>Dewi, R. A., & Nugroho, Y. (2014). Faktor Determinan Perilaku Konservasi Energi dalam Skala Rumah Tangga dan Sektor Transportasi. Jurnal Psikologi, Universitas Gadjah Mada. <a href="https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464" class="text-blue-600 underline" target="_blank" rel="noopener">https://jurnal.ugm.ac.id/jpsi/article/download/10818/23464</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/hemat-energi2.png'),
                'excerpt' => 'Hemat listrik mulai dari hal kecil: cabut charger, pakai LED, dan atur AC. Tagihan turun, bumi tersenyum!',
            ],        
            [
                'focus_area_id' => 2, // Transportasi Ramah Lingkungan
                'title' => 'Transportasi Ramah Lingkungan: Jalan Menuju Masa Depan Iklim yang Lebih Baik',
                'slug' => 'transportasi-ramah-lingkungan-masa-depan-iklim',
                'content' => '
                    <p>Bayangkan pagi tanpa deru mesin dan asap knalpot yang menyesakkan. Jalanan kota dipenuhi bus listrik yang senyap, sepeda yang melaju di jalur khusus, dan trotoar yang ramai pejalan kaki. Inilah gambaran masa depan transportasi ramah lingkungan—sebuah visi yang kini semakin relevan di tengah krisis iklim global.</p>
                    <p class="mt-8"><strong>Mengapa Transportasi Ramah Lingkungan Penting?</strong></p>
                    <p>Sektor transportasi adalah salah satu penyumbang utama emisi karbon dioksida (CO₂) dunia. Setiap kali kita menyalakan kendaraan berbahan bakar fosil, kita turut menambah lapisan gas rumah kaca di atmosfer, memperparah pemanasan global dan perubahan iklim. Dampaknya nyata: suhu bumi meningkat, cuaca makin ekstrem, dan kualitas udara memburuk.</p>
                    <p>Transportasi ramah lingkungan hadir sebagai solusi. Konsep ini mengedepankan moda transportasi yang minim polusi dan hemat energi—mulai dari kendaraan listrik, transportasi umum berbasis energi terbarukan, hingga bersepeda dan berjalan kaki. Lebih dari sekadar tren, ini adalah kebutuhan mendesak untuk masa depan bumi.</p>
                    <p class="mt-8"><strong>Bentuk-Bentuk Transportasi Ramah Lingkungan</strong></p>
                    <ul class="list-disc list-inside mb-4">
                        <li><strong>Kendaraan Listrik</strong>
                            <p>Mobil, bus, dan sepeda listrik tidak menghasilkan emisi saat digunakan. Jika sumber listriknya berasal dari energi terbarukan, jejak karbonnya semakin kecil.</p>
                        </li>
                        <li><strong>Transportasi Umum Berbasis Energi Bersih</strong>
                            <p>Bus listrik, kereta api, dan sistem angkutan massal mengurangi jumlah kendaraan pribadi di jalan, menurunkan emisi dan kemacetan.</p>
                        </li>
                        <li><strong>Jalur Sepeda dan Pejalan Kaki</strong>
                            <p>Infrastruktur yang aman dan nyaman mendorong masyarakat beralih ke moda transportasi aktif, yang tidak hanya ramah lingkungan tapi juga menyehatkan.</p>
                        </li>
                        <li><strong>Car Sharing dan Ridesharing</strong>
                            <p>Berbagi kendaraan mengurangi kebutuhan kepemilikan mobil pribadi dan menekan jumlah kendaraan di jalan.</p>
                        </li>
                    </ul>
                    <p class="mt-8"><strong>Kaitan Transportasi Ramah Lingkungan dengan Perubahan Iklim</strong></p>
                    <p>Setiap upaya mengurangi emisi dari transportasi adalah kontribusi langsung terhadap perlambatan laju perubahan iklim. Kota-kota yang berinvestasi pada transportasi hijau terbukti mengalami penurunan polusi udara dan perbaikan kualitas hidup warganya. Misalnya, pengembangan bus listrik di Jakarta dan Bandung telah menurunkan tingkat emisi karbon secara signifikan, sekaligus mengurangi polusi udara dan kemacetan.</p>
                    <p>Lebih jauh, pergeseran ke transportasi berkelanjutan juga mendukung tercapainya target pengurangan emisi nasional dan global. Inovasi seperti kendaraan hybrid, mobil berbahan bakar hidrogen, serta pengembangan sistem transit berbasis listrik adalah bagian dari strategi jangka panjang menghadapi krisis iklim.</p>
                    <p class="mt-8"><strong>Tantangan dan Harapan</strong></p>
                    <p>Tentu, perjalanan menuju transportasi ramah lingkungan bukan tanpa tantangan. Infrastruktur yang belum memadai, harga kendaraan listrik yang masih tinggi, dan kebiasaan masyarakat yang sulit diubah adalah hambatan nyata. Namun, dengan kebijakan yang tepat, insentif pemerintah, dan edukasi berkelanjutan, perubahan besar bisa terjadi.</p>
                    <p>Kampanye gaya hidup berkelanjutan dan promosi transportasi hijau perlu terus digalakkan. Setiap langkah kecil—memilih naik bus listrik, bersepeda ke kantor, atau berjalan kaki ke tempat belanja—adalah kontribusi berarti untuk bumi yang lebih sehat.</p>
                    <p class="mt-8"><strong>Penutup</strong></p>
                    <p>Transportasi ramah lingkungan bukan sekadar soal teknologi, tapi juga tentang pilihan hidup dan masa depan bersama. Ketika kita memilih moda transportasi yang lebih bersih, kita sedang menulis bab baru untuk bumi: bab tentang udara yang lebih segar, kota yang lebih manusiawi, dan iklim yang lebih bersahabat bagi generasi mendatang.</p>
                    <p><em>“Setiap langkah, setiap kayuhan, dan setiap perjalanan tanpa emisi adalah investasi untuk masa depan yang lebih hijau.”</em></p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>RRI.co.id, "Transportasi Ramah Lingkungan, Solusi untuk Masa Depan Bumi," <a href="https://www.rri.co.id/lain-lain/1047657/transportasi-ramah-lingkungan-solusi-untuk-masa-depan-bumi" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.rri.co.id/lain-lain/1047657/transportasi-ramah-lingkungan-solusi-untuk-masa-depan-bumi</a></li>
                        <li>Kompasiana, "Transportasi Hijau untuk Semarang," <a href="https://www.kompasiana.com/cacha17/675064bc34777c16812622a4/transportasi-hijau-untuk-semarang-mewujudkan-kota-ramah-lingkungan" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.kompasiana.com/cacha17/675064bc34777c16812622a4/transportasi-hijau-untuk-semarang-mewujudkan-kota-ramah-lingkungan</a></li>
                        <li>MahasiswaIndonesia.id, "Transportasi Ramah Lingkungan," <a href="https://mahasiswaindonesia.id/transportasi-ramah-lingkungan-sustainable-transportation/" class="text-blue-600 underline" target="_blank" rel="noopener">https://mahasiswaindonesia.id/transportasi-ramah-lingkungan-sustainable-transportation/</a></li>
                        <li>Puskomedia.id, "Transportasi Ramah Lingkungan: Mengurangi Emisi Karbon," <a href="https://www.puskomedia.id/blog/transportasi-ramah-lingkungan-mengurangi-emisi-karbon-melalui-mobilitas-cerdas/" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.puskomedia.id/blog/transportasi-ramah-lingkungan-mengurangi-emisi-karbon-melalui-mobilitas-cerdas/</a></li>
                        <li>RM.id, "Menuju Kota yang Lebih Bersih: Inovasi Transportasi Ramah Lingkungan," <a href="https://rm.id/baca-berita/ekonomi-bisnis/217062/menuju-kota-yang-lebih-bersih-inovasi-transportasi-ramah-lingkungan" class="text-blue-600 underline" target="_blank" rel="noopener">https://rm.id/baca-berita/ekonomi-bisnis/217062/menuju-kota-yang-lebih-bersih-inovasi-transportasi-ramah-lingkungan</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/trl.png'),
                'excerpt' => 'Transportasi ramah lingkungan adalah langkah nyata menuju bumi yang lebih bersih. Yuk, mulai dari bus listrik, sepeda, atau jalan kaki!',
            ],
            [
                'focus_area_id' => 2, // Transportasi Ramah Lingkungan
                'title' => 'Transportasi Ramah Lingkungan: Biar Udara Kota Makin Bersih',
                'slug' => 'transportasi-ramah-lingkungan-udara-kota-bersih',
                'content' => '
                    <p>Kendaraan bermotor di kota besar menjadi penyebab utama polusi udara yang membuat napas terasa sesak dan memperparah pemanasan bumi. Untuk menjaga udara tetap bersih, kita bisa beralih ke transportasi umum seperti bus atau kereta, berjalan kaki, atau bersepeda untuk jarak dekat. Jika memungkinkan, menggunakan kendaraan listrik atau hybrid yang ramah lingkungan juga merupakan pilihan cerdas. Selain itu, ikut carpool bersama teman bisa membuat perjalanan lebih hemat sekaligus mengurangi polusi.</p>
                    <p>Merawat kendaraan agar irit bahan bakar juga penting untuk menekan polusi. Manfaatkan hari bebas kendaraan (car free day) untuk berolahraga atau jalan-jalan, yang tidak hanya menyehatkan tapi juga menyenangkan. Belanja online secara sekaligus dalam jumlah banyak juga membantu mengurangi polusi dari pengiriman barang.</p>
                    <p class="mt-8"><strong>Alternatif Transportasi Berkelanjutan</strong></p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Gunakan transportasi umum seperti bus atau kereta.</li>
                        <li>Berjalan kaki atau bersepeda untuk jarak dekat.</li>
                        <li>Gunakan kendaraan listrik atau hybrid jika memungkinkan.</li>
                        <li>Ikut carpooling dengan teman sekampus atau sekantor.</li>
                        <li>Manfaatkan car free day di kota sebagai alternatif kendaraan.</li>
                        <li>Gunakan aplikasi navigasi untuk mencari rute tercepat dan menghindari kemacetan.</li>
                    </ul>
                    <p>Rahmawati & Pratama (2023) menyatakan, “Transportasi berkelanjutan bikin udara jadi lebih sehat.” Sementara itu, Budiyanto & Arief (2024) menambahkan, “Kendaraan listrik hemat energi dan mengurangi polusi di kota.” Yuk, mulai pilih transportasi ramah lingkungan untuk udara yang lebih segar dan kota yang lebih sehat!</p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Rahmawati & Pratama (2023). Transportasi Berkelanjutan untuk Udara Sehat.</li>
                        <li>Budiyanto & Arief (2024). Kendaraan Listrik: Solusi Hemat Energi dan Pengurangan Polusi.</li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/trl2.png'),
                'excerpt' => 'Pilih transportasi umum, sepeda, atau carpool untuk udara kota yang lebih bersih dan bumi yang lebih sehat!',
            ],
            [
                'focus_area_id' => 3, // Pengelolaan Sampah
                'title' => 'Kurangi Sampah, Kurangi Perubahan Iklim: Mengapa Pengelolaan Sampah Penting untuk Bumi',
                'slug' => 'kurangi-sampah-kurangi-perubahan-iklim',
                'content' => '
                    <p>Sampah bukan hanya masalah kebersihan atau estetika kota, tapi juga salah satu penyebab utama perubahan iklim yang semakin parah. Ketika sampah, terutama sampah organik dan plastik, menumpuk dan terurai di Tempat Pembuangan Akhir (TPA) tanpa pengelolaan yang tepat, proses tersebut menghasilkan gas rumah kaca seperti metana (CH4) dan karbon dioksida (CO2) yang mempercepat pemanasan global.</p>
                    <p class="mt-8"><strong>Sampah dan Gas Rumah Kaca</strong></p>
                    <p>Sampah organik seperti sisa makanan dan daun-daunan, saat terurai secara anaerob (tanpa oksigen) di TPA, menghasilkan gas metana. Metana ini memiliki potensi pemanasan global sekitar 25 kali lebih besar dibandingkan karbon dioksida. Artinya, meskipun jumlahnya lebih sedikit, dampak metana terhadap pemanasan bumi jauh lebih besar. Diperkirakan setiap ton sampah padat dapat menghasilkan sekitar 50 kg gas metana.</p>
                    <p>Selain itu, sampah plastik juga berkontribusi pada perubahan iklim. Proses produksi plastik menghasilkan emisi karbon tinggi, dan saat terurai di lingkungan, plastik melepaskan zat berbahaya serta meningkatkan kadar karbon dioksida di atmosfer. Sampah plastik yang mencemari lautan juga mengganggu kemampuan laut dalam menyerap karbon, sehingga memperburuk pemanasan global.</p>
                    <p class="mt-8"><strong>Dampak Penumpukan Sampah</strong></p>
                    <p>Penumpukan sampah yang tidak terkelola dengan baik, terutama di TPA yang sudah overload, memperparah produksi gas rumah kaca. Contohnya di kota Surakarta, sekitar 300 ton sampah dihasilkan setiap hari, dengan 60% di antaranya sampah organik yang berpotensi besar menghasilkan metana. Kondisi ini menjadi salah satu faktor yang mempercepat perubahan iklim dan pemanasan global.</p>
                    <p class="mt-8"><strong>Cara Mengurangi Dampak Sampah terhadap Iklim</strong></p>
                    <ul class="list-disc list-inside mb-4">
                        <li><strong>Kurangi penggunaan plastik sekali pakai</strong> dan bawa tas belanja sendiri untuk mengurangi sampah plastik.</li>
                        <li><strong>Pisahkan sampah organik dan non-organik</strong> agar sampah organik dapat diolah menjadi kompos yang ramah lingkungan, mengurangi produksi metana dari dekomposisi anaerob.</li>
                        <li><strong>Daur ulang sampah non-organik</strong> untuk mengurangi limbah yang masuk ke TPA dan menghemat sumber daya alam.</li>
                        <li><strong>Gunakan layanan pengelolaan sampah yang ramah lingkungan</strong>, seperti bank sampah dan TPS3R yang mendukung ekonomi sirkular.</li>
                        <li><strong>Edukasi masyarakat</strong> tentang dampak sampah terhadap perubahan iklim dan pentingnya pengelolaan sampah yang baik.</li>
                    </ul>
                    <p class="mt-8"><strong>Kesimpulan</strong></p>
                    <p>Sampah bukan hanya masalah kebersihan, tetapi juga masalah iklim yang serius. Dengan mengurangi produksi sampah dan mengelolanya secara tepat, kita dapat menekan emisi gas rumah kaca, khususnya metana dan karbon dioksida, yang menjadi penyebab utama pemanasan global. Setiap tindakan kecil, seperti memilah sampah dan mengurangi plastik sekali pakai, memiliki dampak besar dalam menjaga bumi tetap sehat dan iklim tetap stabil.</p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Pojok Iklim, "Pengelolaan Sampah dan Perubahan Iklim," <a href="http://pojokiklim.menlhk.go.id/read/pengelolaan-sampah-dan-perubahan-iklim" class="text-blue-600 underline" target="_blank" rel="noopener">http://pojokiklim.menlhk.go.id/read/pengelolaan-sampah-dan-perubahan-iklim</a></li>
                        <li>DUITIN, "Sampah dan Perubahan Iklim: Bagaimana Mereka Terkait?," <a href="https://duitin.id/sampah-dan-perubahan-iklim-bagaimana-mereka-terkait" class="text-blue-600 underline" target="_blank" rel="noopener">https://duitin.id/sampah-dan-perubahan-iklim-bagaimana-mereka-terkait</a></li>
                        <li>Mongabay, "Sampah Plastik dan Perubahan Iklim, Seperti Apa?," <a href="https://www.mongabay.co.id/2023/06/02/sampah-plastik-dan-perubahan-iklim-seperti-apa/" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.mongabay.co.id/2023/06/02/sampah-plastik-dan-perubahan-iklim-seperti-apa/</a></li>
                        <li>Republika Online, "Sampah Berdampak Besar pada Perubahan Iklim," <a href="https://news.republika.co.id/berita/rqwgpv415/sampah-berdampak-besar-pada-perubahan-iklim" class="text-blue-600 underline" target="_blank" rel="noopener">https://news.republika.co.id/berita/rqwgpv415/sampah-berdampak-besar-pada-perubahan-iklim</a></li>
                        <li>Universitas Negeri Semarang, "Meminimalkan Daya Dukung Sampah terhadap Pemanasan Global," <a href="https://journal.unnes.ac.id/nju/profesional/article/download/292/280" class="text-blue-600 underline" target="_blank" rel="noopener">https://journal.unnes.ac.id/nju/profesional/article/download/292/280</a></li>
                        <li>Ekuatorial, "Sampah Sebabkan Pemanasan Global dan Krisis Iklim," <a href="https://www.ekuatorial.com/2023/12/sampah-sebabkan-pemanasan-global-dan-krisis-iklim/" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.ekuatorial.com/2023/12/sampah-sebabkan-pemanasan-global-dan-krisis-iklim/</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/kurangi-sampah.png'),
                'excerpt' => 'Kurangi sampah, kurangi perubahan iklim! Mulai dari memilah sampah dan kurangi plastik sekali pakai untuk bumi yang lebih sehat.',
            ],
            [
                'focus_area_id' => 4, // Penanaman Pohon dan Pelestarian Alam
                'title' => 'Pohon dan Alam: Pilar Utama dalam Melindungi Keanekaragaman Hayati, Mengurangi Emisi Karbon, dan Menjaga Kelestarian Lingkungan',
                'slug' => 'pohon-dan-alam-pilar-utama-keanekaragaman-hayati',
                'content' => '
                    <p>Pohon bukan hanya elemen estetika dalam lanskap alam, melainkan komponen vital yang menjaga keseimbangan ekosistem, mendukung keanekaragaman hayati, serta berperan besar dalam mitigasi perubahan iklim. Dengan menanam dan melestarikan pohon, kita turut menjaga habitat berbagai spesies, mengurangi emisi karbon, dan memberikan dampak positif yang luas bagi lingkungan dan kehidupan manusia.</p>
                    <p class="mt-8"><strong>Pohon sebagai Penjaga Keanekaragaman Hayati dan Habitat</strong></p>
                    <p>Hutan dan area berhutan yang kaya pohon menyediakan habitat penting bagi ribuan spesies flora dan fauna. Pohon-pohon ini menjadi tempat berlindung, sumber makanan, dan lokasi berkembang biak bagi satwa liar, sehingga menjaga kelangsungan hidup mereka dan keseimbangan ekosistem. Daun-daun yang gugur dan membusuk menyuburkan tanah, mendukung siklus nutrisi yang vital bagi pertumbuhan tanaman lain dan organisme tanah.</p>
                    <p>Kerusakan hutan akibat penebangan liar atau perubahan fungsi lahan menyebabkan hilangnya habitat, yang berujung pada penurunan keanekaragaman hayati. Oleh karena itu, penanaman pohon menjadi langkah strategis untuk memulihkan habitat yang rusak dan mengembalikan fungsi ekologis hutan.</p>
                    <p class="mt-8"><strong>Peran Pohon dalam Mengurangi Emisi Karbon</strong></p>
                    <p>Pohon menyerap karbon dioksida (CO₂) dari atmosfer melalui proses fotosintesis dan menyimpannya dalam bentuk biomassa seperti batang, akar, dan daun. Hutan yang sehat berfungsi sebagai <em>carbon sink</em> yang efektif, membantu menurunkan konsentrasi gas rumah kaca penyebab pemanasan global. Dengan menanam lebih banyak pohon dan melindungi hutan yang ada, kita dapat mengurangi emisi karbon secara signifikan, memperlambat laju perubahan iklim, dan menjaga kestabilan iklim lokal. Pohon juga membantu mengatur suhu dan kelembapan udara, menciptakan mikroiklim yang lebih sejuk dan nyaman.</p>
                    <p class="mt-8"><strong>Dampak Positif Pohon terhadap Kelestarian Lingkungan</strong></p>
                    <ul class="list-disc list-inside mb-4">
                        <li><strong>Mencegah erosi tanah:</strong> Akar pohon menahan tanah sehingga mengurangi risiko longsor dan menjaga kesuburan tanah.</li>
                        <li><strong>Mengatur siklus air:</strong> Pohon membantu menyerap air hujan dan mengurangi limpasan permukaan, sehingga mengurangi risiko banjir.</li>
                        <li><strong>Memurnikan udara:</strong> Daun pohon menyaring polutan dan partikel berbahaya, meningkatkan kualitas udara yang kita hirup.</li>
                        <li><strong>Mendukung kesejahteraan manusia:</strong> Lingkungan yang hijau dengan banyak pohon meningkatkan kesehatan mental dan fisik, serta menciptakan ruang rekreasi alami.</li>
                    </ul>
                    <p class="mt-8"><strong>Tindakan Konkret yang Bisa Dilakukan</strong></p>
                    <ol class="list-decimal list-inside mb-4">
                        <li><strong>Menanam Pohon di Lingkungan Sekitar</strong>
                            <p>Mulai dari pekarangan rumah hingga area publik, penanaman pohon membantu memperluas habitat dan meningkatkan penyerapan karbon.</p>
                        </li>
                        <li><strong>Melindungi Hutan dan Area Hijau yang Ada</strong>
                            <p>Hindari penebangan liar dan dukung program konservasi hutan untuk menjaga habitat alami tetap lestari.</p>
                        </li>
                        <li><strong>Mengikuti Program Reboisasi dan Penghijauan</strong>
                            <p>Ikut serta dalam kegiatan penanaman pohon yang diinisiasi pemerintah, komunitas, atau organisasi lingkungan.</p>
                        </li>
                        <li><strong>Mengurangi Penggunaan Produk yang Berkontribusi pada Deforestasi</strong>
                            <p>Pilih produk ramah lingkungan dan berkelanjutan untuk mengurangi tekanan terhadap hutan.</p>
                        </li>
                        <li><strong>Mengedukasi dan Mengajak Masyarakat</strong>
                            <p>Sebarkan pentingnya pohon dan pelestarian alam melalui kampanye, pendidikan, dan aksi nyata di komunitas.</p>
                        </li>
                    </ol>
                    <p class="mt-8"><strong>Kesimpulan</strong></p>
                    <p>Pohon adalah pilar utama dalam menjaga keanekaragaman hayati, mengurangi emisi karbon, dan melestarikan lingkungan. Melalui penanaman dan perlindungan pohon, kita tidak hanya menjaga habitat bagi berbagai makhluk hidup, tetapi juga berkontribusi nyata dalam mitigasi perubahan iklim dan peningkatan kualitas hidup manusia. Tindakan kecil seperti menanam pohon di halaman rumah bisa menjadi bagian dari solusi besar bagi bumi yang lebih hijau dan lestari.</p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>UMJ.ac.id, "Kontribusi Pohon Untuk Kelangsungan Hidup Manusia," <a href="https://umj.ac.id/opini-1/kontribusi-pohon-untuk-kelangsungan-hidup-manusia/" class="text-blue-600 underline" target="_blank" rel="noopener">https://umj.ac.id/opini-1/kontribusi-pohon-untuk-kelangsungan-hidup-manusia/</a></li>
                        <li>Nestle.co.id, "Manfaat Penanaman Pohon di Lingkungan Sekitar," <a href="https://www.nestle.co.id/kisah/penanaman-pohon" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.nestle.co.id/kisah/penanaman-pohon</a></li>
                        <li>BhuanaJaya.desa.id, "Pohon sebagai Pelindung Alam," <a href="https://www.bhuanajaya.desa.id/pohon-sebagai-pelindung-alam-mari-menanam-pohon/" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.bhuanajaya.desa.id/pohon-sebagai-pelindung-alam-mari-menanam-pohon/</a></li>
                        <li>Desa Cikoneng, "Penanaman Pohon sebagai Upaya Pelestarian Ekosistem Hutan," <a href="https://cikoneng-ciamis.desa.id/penanaman-pohon-sebagai-upaya-pelestarian-ekosistem-hutan" class="text-blue-600 underline" target="_blank" rel="noopener">https://cikoneng-ciamis.desa.id/penanaman-pohon-sebagai-upaya-pelestarian-ekosistem-hutan</a></li>
                        <li>BumiBaik.com, "Hubungan Antara Keanekaragaman Hayati dan Hutan," <a href="https://www.bumibaik.com/blog/hubungan-antara-keanekaragaman-hayati-dan-hutan" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.bumibaik.com/blog/hubungan-antara-keanekaragaman-hayati-dan-hutan</a></li>
                        <li>RRI.co.id, "Peran Penting Pohon dalam Mengatur Iklim dan Ekologi," <a href="https://www.rri.co.id/lain-lain/912973/peran-penting-pohon-dalam-mengatur-iklim-dan-ekologi" class="text-blue-600 underline" target="_blank" rel="noopener">https://www.rri.co.id/lain-lain/912973/peran-penting-pohon-dalam-mengatur-iklim-dan-ekologi</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/pohon-dan-alam.png'),
                'excerpt' => 'Pohon adalah kunci menjaga keanekaragaman hayati dan mengurangi emisi karbon. Yuk, tanam pohon untuk bumi yang lebih hijau!',
            ],
            [
                'focus_area_id' => 5, // Manajemen Air
                'title' => 'Manajemen Air: Konservasi, Manfaat Ekonomi, dan Peranannya dalam Kelestarian Iklim',
                'slug' => 'manajemen-air-konservasi-manfaat-ekonomi',
                'content' => '
                    <p>Air adalah sumber kehidupan yang sangat penting bagi manusia, ekosistem, dan keberlangsungan planet ini. Namun, dengan meningkatnya tekanan akibat pertumbuhan penduduk dan perubahan iklim, pengelolaan air yang bijaksana menjadi kunci utama untuk menjaga kelestarian lingkungan sekaligus mendukung pembangunan ekonomi yang berkelanjutan.</p>
                    <p class="mt-8"><strong>Konservasi Air dan Dampaknya bagi Iklim</strong></p>
                    <p>Konservasi air atau penghematan air bertujuan mengurangi penggunaan air secara berlebihan dan mengoptimalkan pemanfaatannya. Dengan mengelola air secara efisien, kita dapat menjaga keseimbangan siklus air alami dan mencegah degradasi sumber daya air. Hal ini sangat penting karena sumber air yang sehat membantu menjaga kelembapan tanah dan vegetasi, yang pada gilirannya menyerap karbon dioksida (CO₂) dan mengurangi efek pemanasan global.</p>
                    <p>Pengelolaan air yang baik juga mengurangi risiko kekeringan dan banjir, dua fenomena yang semakin sering terjadi akibat perubahan iklim. Dengan konservasi air, tekanan terhadap ekosistem air tawar berkurang, sehingga keanekaragaman hayati dan fungsi ekologis tetap terjaga.</p>
                    <p class="mt-8"><strong>Manfaat Ekonomi dari Pengelolaan Air yang Efisien</strong></p>
                    <p>Manajemen air yang efektif tidak hanya berdampak positif bagi lingkungan, tetapi juga memberikan manfaat ekonomi yang signifikan. Studi di wilayah Paniis menunjukkan bahwa sekitar 75% nilai manfaat ekonomi air berasal dari penggunaan domestik. Pengelolaan yang baik memungkinkan prediksi harga air dan penetapan biaya kompensasi jasa lingkungan, yang dapat digunakan untuk rehabilitasi kawasan hutan kritis hingga 30% di daerah tangkapan air (<em>catchment area</em>).</p>
                    <p>Selain itu, pengelolaan air hujan sebagai sumber alternatif dapat mengurangi biaya pengadaan air bersih, terutama di daerah terpencil atau yang mengalami kesulitan akses air. Hal ini mengurangi ketergantungan pada infrastruktur besar dan menekan pengeluaran rumah tangga maupun industri. Di sektor pertanian, penggunaan air hujan dan pengelolaan irigasi yang efisien meningkatkan produktivitas sekaligus menghemat biaya operasional, sehingga mendukung kesejahteraan petani dan ketahanan pangan.</p>
                    <p class="mt-8"><strong>Tindakan Konkret untuk Mendukung Manajemen Air Berkelanjutan</strong></p>
                    <ol class="list-decimal list-inside mb-4">
                        <li><strong>Menghemat Penggunaan Air di Rumah Tangga</strong>
                            <p>Terapkan kebiasaan hemat air, seperti mematikan keran saat tidak digunakan, menggunakan shower hemat air, dan memperbaiki kebocoran.</p>
                        </li>
                        <li><strong>Mengelola Air Hujan</strong>
                            <p>Manfaatkan sistem penampungan air hujan untuk kebutuhan non-potabel, seperti menyiram tanaman dan mencuci, sehingga mengurangi konsumsi air bersih.</p>
                        </li>
                        <li><strong>Mendukung Rehabilitasi dan Konservasi Daerah Tangkapan Air</strong>
                            <p>Ikut serta dalam program pelestarian hutan dan daerah resapan air untuk menjaga kualitas dan kuantitas sumber air.</p>
                        </li>
                        <li><strong>Menggunakan Teknologi yang Efisien</strong>
                            <p>Terapkan teknologi irigasi hemat air di pertanian dan sistem pengolahan air limbah yang ramah lingkungan.</p>
                        </li>
                        <li><strong>Meningkatkan Kesadaran dan Edukasi</strong>
                            <p>Sosialisasikan pentingnya konservasi air dan pengelolaan sumber daya air secara berkelanjutan kepada masyarakat luas.</p>
                        </li>
                    </ol>
                    <p class="mt-8"><strong>Kesimpulan</strong></p>
                    <p>Manajemen air yang baik adalah fondasi penting dalam menjaga kelestarian lingkungan dan mitigasi perubahan iklim. Dengan konservasi air dan pengelolaan sumber daya air yang efisien, kita tidak hanya menghemat biaya dan meningkatkan kesejahteraan ekonomi, tetapi juga melindungi ekosistem dan mendukung stabilitas iklim. Upaya kolektif dalam pengelolaan air berkelanjutan akan membawa manfaat jangka panjang bagi manusia dan bumi.</p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Ejournal Unisba, "Nilai Manfaat Ekonomi dalam Pengelolaan Sumber Daya Air Lintas Wilayah," <a href="https://ejournal.unisba.ac.id/index.php/ethos/article/view/6260" class="text-blue-600 underline" target="_blank" rel="noopener">https://ejournal.unisba.ac.id/index.php/ethos/article/view/6260</a></li>
                        <li>Ekonomikerakyatan UGM, "Pengelolaan Sumberdaya Air dan Kesejahteraan Rakyat," <a href="https://ekonomikerakyatan.ugm.ac.id/pengelolaan-sumberdaya-air-dan-kesejahteraan-rakyat/" class="text-blue-600 underline" target="_blank" rel="noopener">https://ekonomikerakyatan.ugm.ac.id/pengelolaan-sumberdaya-air-dan-kesejahteraan-rakyat/</a></li>
                        <li>Ejournal Unisba, "Nilai Manfaat Ekonomi dalam Pengelolaan Sumber Daya Air Lintas Wilayah (PDF)," <a href="https://ejournal.unisba.ac.id/index.php/ethos/article/viewFile/6260/pdf" class="text-blue-600 underline" target="_blank" rel="noopener">https://ejournal.unisba.ac.id/index.php/ethos/article/viewFile/6260/pdf</a></li>
                        <li>Beta.co.id, "Pengelolaan Air Hujan," <a href="https://beta.co.id/blog/pengelolaan-air-hujan" class="text-blue-600 underline" target="_blank" rel="noopener">https://beta.co.id/blog/pengelolaan-air-hujan</a></li>
                        <li>Pub Kehutanan Unismuh, "Studi Nilai Ekonomi Pemanfaatan Air Domestik dan Irigasi Pertanian," <a href="https://pub.kehutanan.unismuh.ac.id/index.php/wasian/article/download/127/118/229" class="text-blue-600 underline" target="_blank" rel="noopener">https://pub.kehutanan.unismuh.ac.id/index.php/wasian/article/download/127/118/229</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/air.png'),
                'excerpt' => 'Manajemen air hemat biaya, jaga iklim, dan lindungi ekosistem. Yuk, mulai dari hemat air di rumah!',
            ],
            [
                'focus_area_id' => 5, // Manajemen Air
                'title' => 'Manajemen Air: Solusi untuk Ketahanan Air dan Perlindungan Iklim',
                'slug' => 'manajemen-air-ketahanan-air-perlindungan-iklim',
                'content' => '
                    <p>Air merupakan elemen penting bagi kehidupan, namun sumber daya air semakin terancam akibat perubahan iklim dan pertumbuhan populasi. Manajemen air yang baik menjadi solusi untuk memastikan ketahanan air, mendukung keberlanjutan lingkungan, dan mengurangi dampak perubahan iklim.</p>
                    <p class="mt-8"><strong>Pentingnya Manajemen Air untuk Ketahanan Iklim</strong></p>
                    <p>Pengelolaan air yang efektif membantu menjaga siklus air alami, mencegah banjir, dan mengurangi risiko kekeringan. Dengan menjaga daerah resapan air dan mengelola air hujan, kita dapat mendukung vegetasi yang berperan dalam menyerap karbon dioksida (CO₂), sehingga membantu mitigasi pemanasan global.</p>
                    <p class="mt-8"><strong>Manfaat Ekonomi dan Sosial</strong></p>
                    <p>Manajemen air yang efisien dapat mengurangi biaya penyediaan air bersih dan meningkatkan produktivitas di sektor pertanian. Selain itu, pengelolaan air yang baik mendukung ketahanan pangan dan kesejahteraan masyarakat, terutama di daerah yang rentan terhadap krisis air.</p>
                    <p class="mt-8"><strong>Langkah Praktis untuk Manajemen Air</strong></p>
                    <ol class="list-decimal list-inside mb-4">
                        <li><strong>Hemat Air di Rumah</strong>
                            <p>Gunakan air secukupnya, perbaiki kebocoran, dan pasang peralatan hemat air seperti shower rendah aliran.</p>
                        </li>
                        <li><strong>Manfaatkan Air Hujan</strong>
                            <p>Buat sistem penampungan air hujan untuk kebutuhan non-potabel seperti irigasi atau pembersihan.</p>
                        </li>
                        <li><strong>Lindungi Daerah Resapan Air</strong>
                            <p>Dukung pelestarian hutan dan lahan basah untuk menjaga sumber air alami.</p>
                        </li>
                        <li><strong>Terapkan Teknologi Hemat Air</strong>
                            <p>Gunakan teknologi irigasi tetes di pertanian untuk mengoptimalkan penggunaan air.</p>
                        </li>
                        <li><strong>Edukasi Komunitas</strong>
                            <p>Tingkatkan kesadaran masyarakat tentang pentingnya konservasi air melalui kampanye dan pelatihan.</p>
                        </li>
                    </ol>
                    <p class="mt-8"><strong>Kesimpulan</strong></p>
                    <p>Manajemen air yang berkelanjutan adalah langkah penting untuk melindungi lingkungan dan mendukung ketahanan iklim. Dengan tindakan sederhana seperti menghemat air dan melindungi sumber air, kita dapat menciptakan masa depan yang lebih hijau dan stabil untuk generasi mendatang.</p>
                    <h2 class="text-2xl font-semibold mt-8 mb-2">Referensi:</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Contoh Sumber, "Manajemen Air untuk Keberlanjutan Lingkungan," <a href="https://contoh-sumber.com/manajemen-air" class="text-blue-600 underline" target="_blank" rel="noopener">https://contoh-sumber.com/manajemen-air</a></li>
                        <li>Contoh Jurnal, "Konservasi Air dan Dampaknya pada Iklim," <a href="https://contoh-jurnal.ac.id/konservasi-air" class="text-blue-600 underline" target="_blank" rel="noopener">https://contoh-jurnal.ac.id/konservasi-air</a></li>
                    </ul>
                ',
                'image_source' => public_path('assets/img/air2.png'),
                'excerpt' => 'Manajemen air yang baik jaga ketahanan air dan iklim. Mulai dari hemat air hingga lindungi sumber air!',
            ],
            
        ];

        foreach ($articles as $articleData) {
            // Proses gambar
            $imagePath = null;
            if (isset($articleData['image_source']) && file_exists($articleData['image_source'])) {
                $fileName = 'articles/' . Str::slug($articleData['title']) . '.' . pathinfo($articleData['image_source'], PATHINFO_EXTENSION);
                Storage::disk('public')->put($fileName, file_get_contents($articleData['image_source']));
                $imagePath = $fileName;
            }

            // Simpan artikel
            Article::updateOrCreate(
                ['slug' => $articleData['slug']],
                [
                    'focus_area_id' => $articleData['focus_area_id'],
                    'title' => $articleData['title'],
                    'slug' => $articleData['slug'],
                    'content' => $articleData['content'],
                    'image' => $imagePath,
                    'excerpt' => $articleData['excerpt'],
                ]
            );
        }
    }
}
