<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'focus_area_id' => 1,
                'title' => 'HEMAT ENERGI 1',
                'plan_details' => 'Menghemat energi bisa dilakukan dengan cara-cara sederhana namun berdampak besar. Salah satunya adalah mematikan peralatan listrik yang tidak digunakan. Banyak alat elektronik tetap menggunakan listrik meskipun dalam kondisi standby, sehingga mematikannya sepenuhnya bisa mengurangi pemborosan energi dan menghemat biaya listrik.
                Mengganti lampu dengan jenis LED juga membantu karena lampu LED lebih efisien dan tahan lama dibandingkan lampu biasa. Selain itu, memilih perangkat elektronik yang memiliki label hemat energi bisa mengurangi konsumsi listrik dan emisi karbon. Penggunaan AC dan pemanas sebaiknya dibatasi atau diatur dengan bijak karena alat ini membutuhkan energi besar. Untuk mencegah pemborosan, penggunaan alat seperti timer atau saklar otomatis bisa membantu memutus arus listrik saat peralatan tidak digunakan.',
                'image_source' => resource_path('images/energy.png'),
                'video_url' => 'https://youtu.be/Ow880CGkRxA?si=cziMINiNQINjEgj6',
                'trivia' => 'Di Indonesia, 70% rumah tangga lupa cabut colokan peralatan seperti magic com, padahal ini bisa hemat listrik sampai Rp50.000 per bulan kalau dimatikan sepenuhnya!⚡',
                'good_reasons' => [
                    'Mengurangi konsumsi listrik rumah hingga 15% dengan mematikan lampu saat tidak digunakan.',
                    'Menghindari pemborosan "vampire energy" dari colokan yang dibiarkan tertancap.',
                    'Menghemat hingga 80% energi pendingin dengan menggunakan kipas dibandingkan AC.',
                    'Memanfaatkan cahaya alami di siang hari untuk menghemat energi dan meningkatkan mood.',
                    'Mengurangi emisi karbon hingga 1 kg per sesi dengan menjemur pakaian alih-alih menggunakan pengering listrik.',
                    'Menghemat energi hingga 25% saat memasak dengan menggunakan panci tertutup.',
                    'Menghemat energi pendingin hingga 30% dengan menutup pintu saat AC menyala.',
                ],
            ],
            [
                'focus_area_id' => 1,
                'title' => 'HEMAT ENERGI 2',
                'plan_details' => 'Menggunakan perangkat digital secara bijak bukan hanya melindungi perangkat itu sendiri, tapi juga membantu mengurangi konsumsi energi. Kegiatan seperti streaming video nonstop, charge HP semalaman, dan multitasking berat di laptop bisa mempercepat pemborosan energi. Dengan membiasakan diri untuk mengatur waktu penggunaan, menutup aplikasi yang tidak perlu, dan menggunakan mode hemat daya, pengguna bisa ikut mengurangi emisi karbon dari konsumsi listrik pribadi.',
                'image_source' => resource_path('images/energy.png'),
                'video_url' => 'https://youtu.be/Y6v3tyUuzEU?si=7L113nVKfKIbMJfy',
                'trivia' => 'Mode hemat daya di HP ternyata bisa perpanjang umur baterai hingga 20% dan kurangi emisi karbon setara 2 kg per tahun per orang? Aktifkan sekarang!📱',
                'good_reasons' => [
                    'Menghemat listrik hingga 85% dengan menggunakan lampu LED pintar dibandingkan lampu pijar biasa.',
                    'Mengatur suhu AC pada 24–26°C untuk kenyamanan sekaligus efisiensi energi.',
                    'Mengaktifkan mode hemat baterai pada gadget untuk memperpanjang umur baterai dan menurunkan biaya pengisian daya.',
                    'Menggunakan rice cooker otomatis yang beralih ke mode warm untuk menghemat energi setelah masakan matang.',
                    'Menggunakan timer pada pemanas air untuk mencegah pemborosan listrik saat tidak digunakan.',
                    'Mengadopsi aplikasi habit tracker untuk membentuk pola hidup hemat energi yang konsisten.',
                    'Memilih mesin cuci dengan sensor beban untuk mengatur air dan listrik sesuai kebutuhan.',
                ],
            ],
            [
                'focus_area_id' => 1,
                'title' => 'HEMAT ENERGI 3',
                'plan_details' => 'Banyak perangkat rumah tangga yang jika digunakan dengan bijak, dapat menghemat energi secara signifikan. Salah satunya adalah kulkas. Pastikan kulkas tidak terlalu penuh dan pintunya tertutup rapat agar kerja kulkas lebih efisien. Selain itu, pastikan suhu kulkas tidak terlalu dingin dan tidak lebih rendah dari yang dibutuhkan. Hal kecil seperti menutup pintu kulkas dengan rapat, serta memposisikan kulkas di tempat yang tidak terlalu panas, dapat mengurangi pemborosan energi.
                Peralatan rumah tangga lain seperti mesin cuci dan pemanas air juga mempengaruhi konsumsi energi di rumah. Menggunakan mesin cuci dengan kapasitas penuh dan memilih suhu air yang tidak terlalu panas dapat mengurangi penggunaan energi. Pemanas air juga sebaiknya hanya digunakan saat dibutuhkan, dan disesuaikan dengan kebutuhan. Dengan kebiasaan-kebiasaan kecil ini, kamu sudah berperan dalam mengurangi konsumsi energi di rumah, tanpa harus mengorbankan kenyamanan hidup.',
                'image_source' => resource_path('images/energy.png'),
                'video_url' => 'https://youtu.be/5-coLjl6bco?si=yUB95zX5gJgFo0QV',
                'trivia' => 'Kulkas yang pintunya sering dibuka-tutup bisa tambah konsumsi listrik sampai 7% per hari? Biasakan ambil barang sekaligus biar lebih hemat! ❄️',
                'good_reasons' => [
                    'Menggunakan alat elektronik hemat energi (label Energy Star) dapat mengurangi konsumsi listrik hingga 30%.',
                    'Menyimpan makanan dengan rapi membantu kulkas bekerja lebih efisien dan menghemat energi.',
                    'Memilih ukuran kulkas sesuai kebutuhan rumah tangga menekan konsumsi listrik harian.',
                    'Menggunakan mesin cuci dengan kapasitas penuh dan suhu air rendah mengurangi penggunaan energi.',
                    'Mematikan pemanas air saat tidak digunakan mencegah pemborosan energi.',
                    'Mematikan alat elektronik sepenuhnya (bukan standby) menghentikan konsumsi energi laten.',
                    'Mengisi daya perangkat di jam malam (off-peak) mengurangi tekanan pada jaringan listrik nasional.',
                ],
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 1',
                'plan_details' => 'Menggunakan transportasi umum dan bersepeda adalah pilihan yang sangat efisien untuk mengurangi jejak karbon kita. Di Indonesia, kota-kota besar seperti Jakarta, Bandung, dan Surabaya sudah mulai meningkatkan infrastruktur transportasi umum. Dengan menggunakan bus, kereta, atau MRT, kita tidak hanya mengurangi kemacetan tetapi juga mengurangi polusi udara. Selain itu, bersepeda menjadi alternatif ramah lingkungan yang tidak hanya mengurangi emisi karbon, tetapi juga memberikan manfaat bagi kesehatan tubuh kita.
                Bersepeda di area perkotaan semakin diminati karena hemat biaya, mudah diakses, dan dapat mengurangi kemacetan. Selain itu, bersepeda juga bisa mengurangi ketergantungan pada bahan bakar fosil yang terus menipis. Dengan lebih banyak orang yang beralih ke transportasi ramah lingkungan ini, kita turut mendukung pengurangan emisi gas rumah kaca dan memperbaiki kualitas udara di sekitar kita.',
                'image_source' => resource_path('images/transportation.png'),
                'video_url' => 'https://youtu.be/EX7yKI6bL9g?si=xyHs87nQRBEH9FsF',
                'trivia' => 'Di Jakarta, naik MRT sekali perjalanan bisa kurangi polusi udara setara menanam 1 pohon kecil? Transportasi umum bikin kota lebih hijau!🚇',
                'good_reasons' => [
                    'Mengganti perjalanan 5 km naik motor dengan bersepeda bisa menghemat sekitar 1 kg CO₂ setiap kali.',
                    'Naik transportasi umum dapat memotong emisi karbon setengahnya dibandingkan mobil pribadi yang menghasilkan 4,6 ton CO₂ per tahun.',
                    'Berjalan kaki 30 menit sehari membakar 150 kalori dan mengurangi jejak karbon pribadi.',
                    'Bersepeda ke kampus 3x seminggu setara menghemat emisi listrik bulanan 1 rumah.',
                    'Jalan kaki rutin menurunkan risiko penyakit jantung hingga 31% sambil mengurangi polusi udara.',
                    'Bersepeda atau jalan kaki menghemat biaya transportasi hingga ratusan ribu per bulan.',
                    'Mengurangi penggunaan kendaraan bermotor untuk jarak dekat membantu menurunkan polusi suara dan memperpanjang umur kendaraan.',
                ],
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 2',
                'plan_details' => 'Mengurangi penggunaan kendaraan pribadi adalah langkah besar untuk mengurangi emisi karbon, kemacetan, dan polusi udara. Di Indonesia, banyak kota besar yang sudah mulai menyediakan berbagai pilihan transportasi ramah lingkungan, seperti sepeda listrik dan layanan ride-sharing. Dengan mengoptimalkan berbagai moda transportasi yang ada, kita dapat mengurangi ketergantungan pada kendaraan pribadi dan memanfaatkan fasilitas yang lebih efisien. Misalnya, kamu bisa menggunakan kendaraan pribadi untuk perjalanan yang lebih jauh dan beralih ke transportasi umum atau sepeda untuk perjalanan yang lebih dekat.
                Pemerintah juga terus berupaya meningkatkan fasilitas transportasi umum yang ramah lingkungan, seperti menyediakan jalur sepeda di banyak kota besar dan memperkenalkan kendaraan listrik yang lebih ramah lingkungan. Dengan dukungan tersebut, kita sebagai masyarakat bisa lebih bijak dalam memilih moda transportasi yang tepat dan mengurangi dampak negatif bagi lingkungan. Dengan beralih ke moda transportasi yang lebih efisien, kita tidak hanya mengurangi polusi, tetapi juga menghemat biaya dan meningkatkan kualitas hidup.',
                'image_source' => resource_path('images/transportation.png'),
                'video_url' => 'https://youtu.be/XcL3Dy9hhu8?si=LESew82RmjCCK4cG',
                'trivia' => 'Sepeda listrik di kota besar bisa hemat waktu 30% di tengah macet, sekaligus kurangi emisi karbon hingga 1 ton per tahun per orang? Ayo coba! 🚴',
                'good_reasons' => [
                    'Naik transportasi umum dapat menghemat hingga 90% emisi karbon per orang dibandingkan kendaraan pribadi.',
                    'Satu bus dapat menggantikan 30–40 mobil, mengurangi kemacetan dan emisi secara signifikan.',
                    'Berlangganan transportasi publik seperti KRL atau Transjakarta lebih murah daripada biaya bensin dan parkir bulanan.',
                    'Menggunakan bus listrik atau BRT mendukung transisi energi bersih di perkotaan.',
                    'Pengguna aktif KRL dapat mengurangi emisi lebih dari 2 ton CO₂ per tahun dibandingkan pengendara motor.',
                    'Menghindari macet dengan MRT atau busway menghemat waktu dan energi pribadi.',
                    'Beralih ke transportasi publik membantu mewujudkan sistem mobilitas kota yang berkelanjutan.',
                ],
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 3',
                'plan_details' => 'Kendaraan listrik (EV) menjadi salah satu solusi terbaik untuk mengurangi emisi karbon dan polusi udara. Kendaraan ini tidak hanya ramah lingkungan, tetapi juga lebih efisien dalam penggunaan energi, karena tidak bergantung pada bahan bakar fosil yang semakin langka. Di Indonesia, meskipun penggunaan kendaraan listrik masih dalam tahap pengembangan, beberapa kota besar mulai menyediakan infrastruktur pengisian daya untuk mendukung kendaraan listrik. Selain itu, kendaraan listrik juga memiliki biaya operasional yang lebih rendah dalam jangka panjang karena biaya pengisian daya yang lebih murah dibandingkan dengan bahan bakar konvensional.
                Penggunaan kendaraan listrik juga berpotensi mengurangi kemacetan di kota-kota besar, karena semakin banyak orang yang beralih dari kendaraan berbahan bakar fosil ke kendaraan listrik yang lebih hemat ruang dan lebih efisien. Untuk mendukung hal ini, pemerintah Indonesia dan berbagai pihak juga sudah mulai memperkenalkan insentif bagi pengguna kendaraan listrik, termasuk pengurangan pajak dan subsidi. Dengan mendukung penggunaan kendaraan listrik, kita bisa ikut berperan dalam menjaga kelestarian lingkungan dan menciptakan kota yang lebih bersih dan nyaman',
                'image_source' => resource_path('images/transportation.png'),
                'video_url' => 'https://youtu.be/srvUSmv0Fgo?si=lrf7oGeclmC7LuUg',
                'trivia' => 'Di Norwegia, 60% kendaraan baru adalah listrik berkat insentif pajak, dan Indonesia mulai ikutan dengan 200+ stasiun pengisian daya pada 2025? EV masa depan kita!⚡🚗',
                'good_reasons' => [
                    'Kendaraan listrik menghasilkan emisi gas rumah kaca 50–70% lebih rendah dibandingkan mobil bensin.',
                    'Sepeda listrik (e-bike) ideal untuk perjalanan menengah, rendah emisi, dan hemat energi.',
                    'Bus listrik menawarkan transportasi yang tenang, efisien, dan bebas emisi di kota.',
                    'Motor listrik mengurangi polusi suara dan memiliki biaya operasional lebih rendah.',
                    'Mobil listrik dapat diisi daya di rumah, lebih praktis dan efisien tanpa perlu ke SPBU.',
                    'Stasiun pengisian daya kendaraan listrik semakin banyak tersedia di kota-kota besar.',
                    'Menggunakan GPS dan aplikasi transportasi pintar membantu menghindari rute boros energi.',
                ],
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 1',
                'plan_details' => 'Sampah plastik menjadi salah satu masalah terbesar yang dihadapi dunia saat ini. Plastik membutuhkan ratusan tahun untuk terurai di alam, sementara plastik yang dibuang sembarangan mencemari tanah, air, dan udara. Banyak sekali sampah plastik yang masuk ke lautan, merusak ekosistem laut dan mengancam kehidupan laut. Terkadang, hewan-hewan laut mengira plastik sebagai makanan, yang bisa menyebabkan mereka mati atau terluka. Selain itu, plastik juga mengandung bahan kimia berbahaya yang dapat mencemari lingkungan dan berdampak negatif bagi kesehatan manusia.
                Penggunaan plastik sekali pakai seperti botol plastik, kantong belanja plastik, dan sedotan plastik sangat meningkatkan jumlah sampah plastik di seluruh dunia. Dengan banyaknya sampah plastik yang tidak dapat terurai, kita harus mencari alternatif yang ramah lingkungan dan mengurangi penggunaan plastik dalam kehidupan sehari-hari. Dengan memahami dampak dari sampah plastik ini, kita bisa lebih sadar dan mulai mengurangi konsumsi plastik sekali pakai untuk menjaga bumi dan kesehatan kita.',
                'image_source' => resource_path('images/trash.png'),
                'video_url' => 'https://youtu.be/aiZVlYHyuBQ?si=VUPLCh3LtRqMODzc',
                'trivia' => 'Seekor penyu laut bisa hidup 100 tahun, tapi 52% dari mereka mati gara-gara makan plastik yang dikira ubur-ubur? Bawa botol minum sendiri, selamatkan penyu!🐢',
                'good_reasons' => [
                    'Mengganti botol air minum sekali pakai dengan tumbler mengurangi lebih dari 150 botol plastik per orang per tahun.',
                    'Membawa tas belanja sendiri dapat mengurangi lebih dari 300 kantong plastik per tahun.',
                    'Menghindari sedotan plastik secara massal bisa mengurangi 1.000 ton sampah plastik setiap tahun.',
                    'Menggunakan wadah makan reusable mengurangi 10-20 sampah plastik dalam seminggu.',
                    'Membawa bekal sendiri lebih ramah lingkungan dibandingkan membeli makanan berbungkus plastik sekali pakai.',
                    'Menggunakan tempat sabun isi ulang menghindarkan lebih dari 12 botol plastik per tahun.',
                    'Menolak plastik tambahan seperti sendok atau sedotan saat pesan makanan online berdampak besar jika konsisten.',
                ],
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 2',
                'plan_details' => 'Salah satu cara paling efektif untuk mengurangi sampah plastik adalah dengan beralih ke produk alternatif yang lebih ramah lingkungan. Saat ini, sudah banyak produk yang dirancang untuk menggantikan plastik sekali pakai, seperti sedotan stainless, kantong belanja berbahan kain, dan kemasan produk yang terbuat dari bahan yang dapat terurai dengan mudah di alam. Produk-produk ini bukan hanya mengurangi ketergantungan kita terhadap plastik, tetapi juga mendukung gerakan ramah lingkungan yang semakin berkembang di masyarakat.
                Selain itu, banyak usaha kecil dan besar yang mulai memperkenalkan alternatif plastik ini, seperti menggunakan kemasan berbahan kertas atau tanaman untuk menggantikan kemasan plastik. Meskipun harga produk alternatif ini mungkin sedikit lebih mahal, namun manfaat jangka panjangnya jauh lebih besar, baik untuk lingkungan maupun kesehatan kita. Dengan memilih alternatif plastik yang lebih ramah lingkungan, kita bisa mengurangi sampah plastik di bumi ini, mengurangi polusi, dan menjaga keberlanjutan ekosistem.',
                'image_source' => resource_path('images/trash.png'),
                'video_url' => 'https://youtu.be/rVUMFGdOIjE?si=zC-hr_-SA2l2Q4ms',
                'trivia' => 'Sedotan bambu yang viral di Bali ternyata dibuat dari limbah pertanian dan bisa terurai alami dalam 6 bulan, beda sama sedotan plastik yang butuh 200 tahun? Ganti yuk!🌱',
                'good_reasons' => [
                    'Menggunakan produk isi ulang mengurangi kebutuhan produksi plastik baru dan limbah botol kemasan.',
                    'Bioplastik dari singkong atau jagung terurai lebih cepat dibandingkan plastik konvensional.',
                    'Filter air rumah tangga mengurangi ketergantungan terhadap air kemasan plastik.',
                    'Kemasan dari rumput laut dapat terurai dalam hitungan minggu tanpa menghasilkan polusi.',
                    'Botol minum isi ulang dengan QR code mendukung inovasi refill station di kota besar.',
                    'Memilih produk minim kemasan, seperti sabun tanpa box, membantu mengurangi limbah dari sumbernya.',
                    'UMKM yang beralih ke kemasan biodegradable mempercepat budaya konsumsi ramah lingkungan.',
                ],
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 3',
                'plan_details' => 'Daur ulang adalah solusi penting untuk mengurangi sampah plastik yang menumpuk di tempat pembuangan akhir. Plastik yang tidak terkelola dengan baik akan membutuhkan ratusan tahun untuk terurai dan menyebabkan kerusakan besar pada lingkungan, terutama di lautan. Oleh karena itu, mendaur ulang sampah plastik menjadi langkah krusial dalam mengurangi dampak negatifnya. Daur ulang membantu mengubah sampah plastik menjadi bahan baru yang bisa digunakan lagi, mengurangi kebutuhan akan plastik baru, dan mengurangi polusi.
                Namun, untuk bisa mendaur ulang dengan efektif, penting untuk memisahkan sampah plastik yang dapat didaur ulang dengan sampah lainnya. Ini berarti kita perlu lebih teliti dalam memilah sampah di rumah, sekolah, atau tempat kerja. Selain itu, kita juga harus mendukung infrastruktur daur ulang di daerah kita dengan memastikan bahwa sampah plastik yang kita pisahkan benar-benar sampai ke tempat daur ulang yang tepat. Dengan mengelola sampah plastik dengan benar, kita tidak hanya mengurangi limbah, tetapi juga membantu menciptakan dunia yang lebih bersih dan lebih hijau.',
                'image_source' => resource_path('images/trash.png'),
                'video_url' => 'https://youtu.be/CGd3lgxReFE?si=gkQBO3rjp99rM2pB',
                'trivia' => 'Botol plastik daur ulang bisa jadi benang untuk 1 kaos, dan 1 orang yang rajin daur ulang bisa selamatkan 50 kg plastik dari lautan setiap tahun? Mulai pilah sampah!♻️',
                'good_reasons' => [
                    'Memilah sampah plastik untuk daur ulang mengurangi kebutuhan produksi plastik baru.',
                    'Kampus tanpa sedotan plastik dapat menghemat ribuan sedotan per minggu.',
                    'Acara besar tanpa plastik sekali pakai mengurangi biaya kebersihan dan jejak limbah.',
                    'Kolaborasi dengan UMKM menciptakan pasar baru untuk produk tanpa plastik.',
                    'Trash challenge menjadi aktivitas kreatif yang berdampak nyata pada pengelolaan sampah di komunitas.',
                    'Melibatkan anak muda dalam gerakan bebas plastik membentuk kebiasaan jangka panjang.',
                    'Komunitas yang sadar sampah lebih kuat dalam mengelola lingkungan secara berkelanjutan.',
                ],
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 1',
                'plan_details' => 'Perubahan iklim adalah salah satu penyebab utama dari cuaca ekstrem yang semakin sering terjadi, seperti badai, banjir, dan kekeringan. Kenaikan suhu global yang disebabkan oleh emisi gas rumah kaca menyebabkan peningkatan intensitas dan frekuensi bencana alam. Misalnya, hujan lebat yang menyebabkan banjir, atau kekeringan panjang yang merusak pertanian dan sumber daya air. Perubahan pola cuaca ini juga memengaruhi kehidupan manusia, terutama di daerah-daerah yang rentan terhadap bencana alam.
                Selain itu, bencana alam yang disebabkan oleh perubahan iklim juga berdampak besar pada ekosistem dan kehidupan makhluk hidup. Habitat alami banyak spesies terganggu, dan beberapa di antaranya terancam punah karena perubahan cuaca yang drastis. Kita perlu memahami bahwa perubahan iklim yang kita alami saat ini bukan hanya masalah alam semesta, tetapi juga masalah yang harus kita hadapi bersama. Untuk itu, langkah-langkah mitigasi dan adaptasi sangat penting agar kita bisa bertahan dan meminimalkan dampak buruk dari cuaca ekstrem dan bencana alam yang semakin sering terjadi.',
                'image_source' => resource_path('images/tree.png'),
                'video_url' => 'https://youtu.be/bK8LnrkxNMI?si=SlF88szUHlMu-TDM',
                'trivia' => 'Satu pohon di kota bisa dinginkan udara setara 10 AC selama 20 jam, sekaligus serap karbon untuk lawan banjir akibat perubahan iklim? Tanam pohon sekarang!🌳',
                'good_reasons' => [
                    'Satu pohon dewasa dapat menyerap hingga 22 kg karbon dioksida setiap tahun, membantu mitigasi perubahan iklim.',
                    'Tanaman hijau di sekitar rumah menurunkan suhu ruangan secara alami, mengurangi kebutuhan AC.',
                    'Taman kota menurunkan suhu area sekitar hingga 2°C saat siang hari, mengurangi dampak panas akibat cuaca ekstrem.',
                    'Akar pohon mencegah erosi tanah dan banjir saat hujan deras, melindungi dari bencana alam.',
                    'Pepohonan memperbaiki kualitas udara dengan menyaring polutan dan debu, mendukung kesehatan masyarakat.',
                    'Area hijau mendorong aktivitas fisik seperti jalan santai, meningkatkan kesehatan fisik dan mental.',
                    'Menanam pohon bersama komunitas menjadi aksi nyata untuk menjaga bumi dari dampak perubahan iklim.',
                ],
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 2',
                'plan_details' => 'Polusi udara merupakan masalah lingkungan yang semakin meresahkan. Penyebab utama polusi udara adalah emisi gas buang kendaraan bermotor, asap pabrik, pembakaran sampah, serta penggunaan bahan bakar fosil yang tidak efisien. Gas berbahaya seperti karbon monoksida, sulfur dioksida, dan nitrogen oksida yang terlepas ke atmosfer dapat merusak kualitas udara dan menyebabkan berbagai masalah kesehatan, seperti penyakit pernapasan, kanker paru-paru, dan gangguan jantung.
                Selain dampak kesehatan, polusi udara juga berdampak pada lingkungan. Salah satu contohnya adalah fenomena hujan asam yang terjadi akibat reaksi gas-gas berbahaya di udara yang bercampur dengan uap air, sehingga dapat merusak tanaman, perairan, serta struktur bangunan. Polusi udara yang tinggi juga berkontribusi pada perubahan iklim dengan memperburuk efek rumah kaca. Oleh karena itu, penting bagi kita untuk mengambil langkah-langkah pencegahan guna mengurangi polusi udara dan melindungi kesehatan serta lingkungan.',
                'image_source' => resource_path('images/tree.png'),
                'video_url' => 'https://youtu.be/pbrpdUiSYMY?si=qI9bKLMaOfvv-g7x',
                'trivia' => 'Jakarta masuk 10 kota terpolusi di dunia pada 2024, dan 1 pohon bisa bersihkan udara dari 100 kg polutan per tahun? Ayo hijaukan kota kita!🌿',
                'good_reasons' => [
                    'Merawat tanaman di rumah membantu menyerap CO₂ dan menghasilkan oksigen segar, meningkatkan kualitas udara.',
                    'Tanaman seperti lidah mertua efektif menyerap polusi dalam ruangan, menciptakan lingkungan lebih sehat.',
                    'Tanaman rambat di dinding dapat mengurangi panas ruangan hingga 5°C, mengurangi penggunaan AC.',
                    'Pepohonan dan ruang terbuka hijau menyaring polutan udara, mengurangi dampak penyakit pernapasan.',
                    'Membuat kompos dari daun kering mengurangi limbah dan menyuburkan tanah tanpa pupuk kimia.',
                    'Menjaga ruang terbuka hijau mencegah alih fungsi lahan dan melindungi ekosistem dari polusi.',
                    'Tanaman di sekitar rumah menciptakan habitat alami bagi burung dan serangga penyerbuk, mendukung keanekaragaman hayati.',
                ],
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 3',
                'plan_details' => 'Perubahan iklim memiliki dampak besar terhadap keanekaragaman hayati di seluruh dunia. Dengan suhu yang terus meningkat, banyak spesies tidak dapat beradaptasi dengan cepat terhadap perubahan tersebut. Perubahan iklim mengganggu pola migrasi, waktu bertelur, dan periode berburu atau mencari makan berbagai spesies. Beberapa spesies yang tidak dapat beradaptasi dengan cepat pun menghadapi ancaman punah. Sebagai contoh, terumbu karang yang sangat sensitif terhadap suhu air yang terlalu panas mulai mengalami pemutihan massal yang mengancam kehidupan laut.
                Perubahan iklim juga menyebabkan pengasaman laut yang mengurangi kemampuan organisme laut seperti kerang dan terumbu karang untuk membentuk cangkang atau struktur yang kuat. Selain itu, perubahan iklim mempengaruhi ketersediaan makanan bagi banyak spesies dan menyebabkan pergeseran habitat alami mereka. Sebagai manusia, kita perlu bertanggung jawab atas dampak perubahan iklim ini dan berusaha untuk melindungi serta menjaga keanekaragaman hayati melalui langkah-langkah perlindungan lingkungan yang lebih baik.',
                'image_source' => resource_path('images/tree.png'),
                'video_url' => 'https://youtu.be/SHcfDEkmFMI?si=B8GBTOUo4M_L43iq',
                'trivia' => 'Terumbu karang di Raja Ampat menyusut 40% sejak 2000 akibat pemanasan laut, padahal mereka rumah bagi 75% spesies ikan dunia? Kurangi karbon, selamatkan laut!🪸',
                'good_reasons' => [
                    'Menanam tanaman lokal mendukung serangga dan burung asli, menjaga rantai makanan alami.',
                    'Menjaga kebersihan sungai melindungi ikan, amfibi, dan tanaman air dari dampak perubahan iklim.',
                    'Taman bunga liar mendukung populasi lebah dan kupu-kupu penyerbuk, penting untuk ketahanan pangan.',
                    'Menghindari pembakaran lahan melindungi mikroorganisme tanah yang krusial bagi ekosistem.',
                    'Tidak merusak karang saat snorkeling membantu menjaga ribuan spesies laut dari ancaman pemanasan laut.',
                    'Menjaga pepohonan tua menyediakan habitat alami bagi burung dan serangga, mendukung keanekaragaman hayati.',
                    'Pendidikan lingkungan sejak dini menanamkan kesadaran untuk melindungi alam dari dampak perubahan iklim.',
                ],
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 1',
                'plan_details' => 'Air adalah sumber daya yang sangat penting untuk kehidupan. Namun, kebutuhan manusia terhadap air semakin meningkat seiring dengan pertumbuhan populasi dan urbanisasi yang pesat. Di sisi lain, banyak daerah yang menghadapi masalah kekeringan, polusi air, dan pencemaran sumber daya air lainnya. Pengelolaan air yang buruk dapat menyebabkan krisis air bersih, yang berdampak pada kesehatan manusia, ekosistem, dan sektor ekonomi seperti pertanian dan industri.
                Pengelolaan air yang berkelanjutan bertujuan untuk memastikan bahwa kita dapat memenuhi kebutuhan air saat ini tanpa mengorbankan kemampuan generasi mendatang untuk memenuhi kebutuhan mereka. Ini melibatkan penggunaan air secara efisien, mengurangi pemborosan, melindungi sumber daya air dari polusi, serta menjaga ekosistem yang bergantung pada air. Salah satu cara untuk mencapai pengelolaan air yang berkelanjutan adalah dengan meningkatkan kesadaran masyarakat dan menerapkan kebijakan yang mendukung konservasi air di tingkat global, nasional, dan lokal.',
                'image_source' => resource_path('images/water.png'),
                'video_url' => 'https://youtu.be/svGG7CP6U7Y?si=Vf3Q4FJiF0gVLmC2',
                'trivia' => 'Di Bali, 1 hotel bisa hemat 1 juta liter air per tahun hanya dengan pasang penampung air hujan untuk kebutuhan taman? Kamu juga bisa coba di rumah!🌊',
                'good_reasons' => [
                    'Mematikan keran saat menyikat gigi menghemat hingga 6 liter air per menit.',
                    'Mandi selama 5 menit menghemat 50–60 liter air dibandingkan mandi 10 menit.',
                    'Menggunakan ember saat mencuci mobil menghemat hingga 150 liter air dibandingkan selang.',
                    'Mengecek kebocoran pipa kecil dapat menyelamatkan hingga 10.000 liter air per tahun.',
                    'Menggunakan air bekas cucian sayur untuk menyiram tanaman mengurangi pemborosan air.',
                    'Memasang shower hemat air dapat menghemat 20–30% konsumsi air.',
                    'Menyiram tanaman di pagi atau sore hari mengurangi penguapan, mengoptimalkan penggunaan air.',
                ],
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 2',
                'plan_details' => 'Polusi air menjadi masalah serius yang mempengaruhi kualitas hidup manusia dan ekosistem secara keseluruhan. Salah satu penyebab utama polusi air adalah pembuangan limbah industri, pertanian, serta sampah domestik yang langsung dibuang ke sungai, danau, atau laut. Zat-zat berbahaya dalam limbah tersebut, seperti logam berat, pestisida, dan bahan kimia, dapat merusak kualitas air dan menyebabkan pencemaran yang berbahaya bagi kesehatan manusia serta makhluk hidup lainnya.
                Polusi air dapat menyebabkan berbagai penyakit, seperti diare, kolera, dan keracunan, yang berdampak pada kesehatan manusia. Selain itu, ekosistem yang bergantung pada air, seperti ikan, tanaman air, dan mikroorganisme, juga akan terancam. Kehilangan keanekaragaman hayati di habitat air dapat mengganggu keseimbangan alam dan merusak mata pencaharian yang bergantung pada sumber daya air, seperti nelayan. Oleh karena itu, penting untuk menjaga kebersihan dan kualitas air dengan cara yang bertanggung jawab, mengurangi limbah, serta melindungi sumber daya air dari polusi.',
                'image_source' => resource_path('images/tree.png'),
                'video_url' => 'https://youtu.be/wzOI0spZuHc?si=9uXpky6DyY2fLKNH',
                'trivia' => 'Sungai Citarum disebut sungai terkotor di dunia pada 2018 karena limbah kimia, padahal 9 juta orang bergantung padanya? Jangan buang sampah ke sungai🏞️',
                'good_reasons' => [
                    'Membuang limbah minyak ke tempat khusus mencegah pencemaran air dan melindungi ekosistem.',
                    'Menggunakan sabun dan deterjen ramah lingkungan mengurangi limbah berbahaya di aliran air.',
                    'Menyaring air limbah dapur sebelum dibuang ke selokan mencegah pencemaran tanah dan air.',
                    'Mengumpulkan air hujan untuk menyiram tanaman mengurangi beban penggunaan air bersih.',
                    'Tidak membuang popok atau tisu basah ke saluran air mencegah penyumbatan dan polusi.',
                    'Menggunakan air cucian AC untuk menyiram tanaman mengurangi pemborosan dan polusi air.',
                    'Mengedukasi anak tentang pentingnya menjaga air bersih membentuk kebiasaan berkelanjutan.',
                ],
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 3',
                'plan_details' => 'Air adalah sumber daya alam yang vital untuk kehidupan manusia, tumbuhan, dan hewan. Namun, kebutuhan akan air semakin meningkat sementara sumber daya air terbatas. Pengelolaan air yang baik sangat penting untuk memastikan bahwa kita bisa mengakses air bersih tanpa merusak ekosistem yang bergantung padanya. Salah satu tantangan terbesar adalah pemborosan air di rumah tangga dan sektor industri yang berkontribusi pada berkurangnya ketersediaan air bersih.
                Selain itu, banyak daerah yang mengalami krisis air akibat pencemaran dan perubahan iklim. Oleh karena itu, penting untuk kita semua lebih bijak dalam menggunakan air, mulai dari cara sederhana di rumah hingga kebijakan yang lebih besar untuk menjaga keberlanjutan sumber daya air. Pengelolaan air yang bijak tidak hanya melibatkan penghematan air, tetapi juga perlindungan terhadap sumber-sumber air dari polusi dan kerusakan ekosistem.',
                'image_source' => resource_path('images/tree.png'),
                'video_url' => 'https://youtu.be/0a8CCizePfg?si=yMw0_yGqBxaVr7nK',
                'trivia' => 'Mandi dengan shower 5 menit bisa hemat 50 liter air dibanding bak penuh, cukup untuk kebutuhan minum 1 orang selama 3 hari? Bijak pakai air yuk!🚿',
                'good_reasons' => [
                    'Menggunakan ulang air bekas cuci buah untuk menyiram tanaman menghemat ratusan liter air per bulan.',
                    'Menghemat 100 liter air per hari di rumah dapat mengurangi tagihan hingga ratusan ribu per bulan.',
                    'Mengurangi penggunaan air AC membantu menghemat biaya dan daya listrik.',
                    'Menggunakan shower hemat air dapat mengurangi tagihan air hingga 40%.',
                    'Memperbaiki kebocoran WC mencegah pemborosan lebih dari 30.000 liter air per tahun.',
                    'Setiap liter air yang dihemat mengurangi beban sistem penyediaan air kota.',
                    'Menyiram taman dengan air bekas cucian buah mendukung pengelolaan air berkelanjutan.',
                ],
            ],
        ];
        foreach ($plans as $plan) 
        {
            $imagePath = null;
            if ($plan['image_source']) {
                $fileName = 'images/' . Str::slug($plan['title']) . '.' . pathinfo($plan['image_source'], PATHINFO_EXTENSION); 

                if (file_exists($plan['image_source'])) {
                    // Simpan file ke storage
                    try {
                        Storage::disk('public')->put($fileName, file_get_contents($plan['image_source']));
                        $imagePath = $fileName;
                    } catch (\Exception $e) {
                        Log::error("Gagal menyimpan gambar untuk plan '{$plan['title']}': " . $e->getMessage());
                    }
                } else {
                    Log::warning("File gambar tidak ditemukan: {$plan['image_source']} untuk plan '{$plan['title']}'");
                }
            } else {
                Log::warning("image_source tidak diatur untuk plan '{$plan['title']}'");
            }

            Plan::updateOrCreate(
                ['title' => $plan['title']],
                [
                    'focus_area_id' => $plan['focus_area_id'],
                    'title' => $plan['title'],
                    'plan_details' => $plan['plan_details'],
                    'image' => $imagePath, // Path di storage (misalnya, images/hemat-energi-1.png)
                    'video_url' => $plan['video_url'],
                    'trivia' => $plan['trivia'],
                    'good_reasons' => $plan['good_reasons'],
                ]
            );
        }
    }
}
