<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\PlanStep;

class PlanStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        PlanStep::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $steps = [
            [
            'plan_id' => 1, 
            'title' => "Cabut charger HP dan colokan magic com setelah dipakai", 
            'description' => 'Banyak orang di Indonesia biarin alat itu nyolok terus. Padahal nyedot listrik walau standby!'
            ],
            [
            'plan_id' => 1, 
            'title' => "Gunakan kipas angin daripada AC, terutama di malam hari", 
            'description' => 'Udara malam Indonesia sering cukup adem — lebih hemat listrik dan tetap nyaman.'
            ],
            [
            'plan_id' => 1, 
            'title' => "Matikan lampu kamar mandi dan dapur setelah digunakan", 
            'description' => 'Ini kebiasaan sepele tapi sering lupa. Bantu penghematan listrik keluarga!'
            ],
            [
            'plan_id' => 1, 
            'title' => "Nyalakan listrik maksimal jam 6 sore, bukan dari siang terus-terusan", 
            'description' => 'Siang udah terang, banyak rumah/kos tetap nyalain lampu dan TV. Biasain hemat di siang hari.'
            ],
            [
            'plan_id' => 1, 
            'title' => "Ganti lampu utama rumah dengan LED 5 watt", 
            'description' => 'Murah di toko listrik atau online, dan penghematannya bisa sampai 80% dari lampu biasa.'
            ],
            [
            'plan_id' => 2, 
            'title' => "Matikan aplikasi yang tidak digunakan di laptop atau HP", 
            'description' => 'Banyak aplikasi di background yang konsumsi daya terus. Pastikan hanya yang penting yang aktif!'
            ],
            [
            'plan_id' => 2, 
            'title' => "Gunakan mode hemat daya pada perangkat", 
            'description' => 'Aktifkan low power mode di HP dan laptop, terutama saat baterai mulai habis.'
            ],
            [
            'plan_id' => 2, 
            'title' => "Batasi waktu streaming video (YouTube, Netflix)", 
            'description' => 'Pilih kualitas video yang lebih rendah kalau gak perlu HD, dan berhenti streaming setelah beberapa episode, biar gak boros energi.'
            ],
            [
            'plan_id' => 2, 
            'title' => "Charge HP dan laptop hanya saat baterai benar-benar hampir habis", 
            'description' => 'Jangan biasakan nge-charge sepanjang malam, karena itu akan mempercepat kerusakan baterai dan penggunaan daya yang nggak efisien.'
            ],
            [
            'plan_id' => 2, 
            'title' => "Matikan perangkat setelah digunakan", 
            'description' => 'Jangan biarin laptop atau HP terus hidup saat gak digunakan, apalagi kalau lagi tidur. Hemat energi buat esok hari!'
            ],
            [
            'plan_id' => 3, 
            'title' => "Periksa suhu kulkas dan sesuaikan dengan kebutuhan", 
            'description' => 'Setel suhu kulkas pada 3-5°C dan freezer pada -18°C. Hindari setting suhu terlalu rendah yang hanya membuang energi.'
            ],
            [
            'plan_id' => 3, 
            'title' => "Pastikan kulkas tertutup rapat dan tidak terlalu penuh", 
            'description' => 'Cegah pemborosan energi dengan memastikan pintu kulkas selalu tertutup rapat dan tidak ada barang yang menghalangi ventilasi.'
            ],
            [
            'plan_id' => 3, 
            'title' => "Gunakan mesin cuci hanya ketika penuh", 
            'description' => 'Pastikan kamu menunggu sampai mesin cuci penuh agar lebih efisien dalam menghemat air dan energi. Jangan biasakan mencuci sedikit baju.'
            ],
            [
            'plan_id' => 3, 
            'title' => "Gunakan pemanas air secukupnya", 
            'description' => ' Hanya hidupkan pemanas air saat benar-benar dibutuhkan. Jangan biarkan pemanas air terus-menerus menyala tanpa digunakan.'
            ],
            [
            'plan_id' => 3, 
            'title' => "Matikan peralatan rumah tangga setelah digunakan", 
            'description' => 'Cabut kabel atau matikan peralatan seperti blender, microwave, dan rice cooker setelah dipakai untuk menghindari pemborosan energi'
            ],
            [
            'plan_id' => 4, 
            'title' => "Gunakan transportasi umum untuk perjalanan jauh", 
            'description' => 'Manfaatkan bus, kereta, atau MRT saat bepergian ke tempat jauh untuk mengurangi penggunaan kendaraan pribadi.'
            ],
            [
            'plan_id' => 4, 
            'title' => "Mulailah bersepeda untuk perjalanan pendek", 
            'description' => 'Coba bersepeda ke tempat dekat seperti pasar, kampus, atau kantor. Ini akan mengurangi penggunaan kendaraan berbahan bakar dan menyehatkan tubuh.'
            ],
            [
            'plan_id' => 4, 
            'title' => "Periksa jadwal dan rute transportasi umum sebelum berangkat", 
            'description' => 'Pastikan kamu memanfaatkan waktu perjalanan dengan efisien dan memilih rute yang cepat dan ramah lingkungan.'
            ],
            [
            'plan_id' => 4, 
            'title' => "Gunakan aplikasi ride-sharing atau carpool dengan teman", 
            'description' => 'Jika terpaksa menggunakan kendaraan pribadi, ajak teman atau rekan untuk berbagi mobil, sehingga dapat mengurangi jumlah kendaraan di jalan.'
            ],
            [
            'plan_id' => 4, 
            'title' => "Jaga kebersihan kendaraan umum dan sepeda", 
            'description' => 'Pastikan untuk menjaga kebersihan kendaraan umum dan sepeda agar lebih nyaman digunakan oleh banyak orang.'
            ],

            // plan_id: 5
            [
                'plan_id' => 5,
                'title' => "Gunakan kendaraan umum atau sepeda listrik untuk perjalanan dekat",
                'description' => "Gunakan sepeda listrik untuk perjalanan yang tidak terlalu jauh atau manfaatkan kendaraan umum jika memungkinkan.",
            ],
            [
                'plan_id' => 5,
                'title' => "Periksa opsi ride-sharing atau carpooling dengan teman",
                'description' => "Jika kamu harus menggunakan mobil, coba carpool atau gunakan layanan ride-sharing agar lebih efisien dan hemat energi.",
            ],
            [
                'plan_id' => 5,
                'title' => "Buat jadwal perjalanan agar bisa menggunakan transportasi umum secara optimal",
                'description' => "Rencanakan perjalanan dengan memanfaatkan transportasi umum secara lebih efisien, seperti memeriksa jadwal kereta atau bus.",
            ],
            [
                'plan_id' => 5,
                'title' => "Gunakan transportasi berbahan bakar ramah lingkungan (misal, kendaraan listrik)",
                'description' => "Jika memungkinkan, coba manfaatkan kendaraan listrik yang ramah lingkungan dan lebih efisien daripada kendaraan berbahan bakar fosil.",
            ],
            [
                'plan_id' => 5,
                'title' => "Kurangi perjalanan dengan kendaraan pribadi, sesuaikan dengan kebutuhan",
                'description' => "Pertimbangkan untuk berjalan kaki, bersepeda, atau menggunakan kendaraan umum untuk perjalanan sehari-hari, terutama untuk jarak dekat.",
            ],
    
            // plan_id: 6
            [
                'plan_id' => 6,
                'title' => "Pertimbangkan untuk membeli atau mencoba kendaraan listrik",
                'description' => "Jika memungkinkan, coba ganti kendaraan pribadi dengan kendaraan listrik atau coba gunakan kendaraan listrik untuk perjalanan dekat.",
            ],
            [
                'plan_id' => 6,
                'title' => "Cari tahu tentang fasilitas pengisian daya kendaraan listrik di kota kamu",
                'description' => "Cari lokasi stasiun pengisian daya kendaraan listrik yang ada di sekitar kota atau kampus untuk memudahkan pengisian daya.",
            ],
            [
                'plan_id' => 6,
                'title' => "Gunakan kendaraan listrik berbagi atau layanan transportasi listrik",
                'description' => "Manfaatkan layanan ride-sharing yang menggunakan kendaraan listrik untuk perjalanan yang lebih ramah lingkungan.",
            ],
            [
                'plan_id' => 6,
                'title' => "Kurangi penggunaan kendaraan berbahan bakar fosil",
                'description' => "Gunakan kendaraan berbahan bakar fosil hanya saat dibutuhkan dan lebih memilih transportasi ramah lingkungan jika memungkinkan.",
            ],
            [
                'plan_id' => 6,
                'title' => "Sosialisasikan penggunaan kendaraan listrik kepada orang lain",
                'description' => "Ajak teman dan keluarga untuk mempertimbangkan penggunaan kendaraan listrik, sehingga semakin banyak orang yang sadar akan manfaatnya untuk lingkungan.",
            ],
    
            // plan_id: 7
            [
                'plan_id' => 7,
                'title' => "Kurangi penggunaan plastik sekali pakai",
                'description' => "Gantilah kantong plastik dengan tas kain atau tas belanja yang bisa dipakai ulang, serta hindari penggunaan plastik sekali pakai seperti sedotan atau plastik pembungkus.",
            ],
            [
                'plan_id' => 7,
                'title' => "Pilih produk dengan kemasan ramah lingkungan",
                'description' => "Selalu pilih produk dengan kemasan yang bisa didaur ulang atau yang terbuat dari bahan-bahan ramah lingkungan, seperti kaca atau kertas.",
            ],
            [
                'plan_id' => 7,
                'title' => "Daur ulang sampah plastik yang bisa digunakan",
                'description' => "Pisahkan sampah plastik yang bisa didaur ulang dan kirimkan ke tempat daur ulang agar tidak menambah timbunan sampah plastik di tempat pembuangan akhir.",
            ],
            [
                'plan_id' => 7,
                'title' => "Bawa botol minum sendiri",
                'description' => "Gunakan botol minum yang bisa diisi ulang agar mengurangi penggunaan botol plastik sekali pakai.",
            ],
            [
                'plan_id' => 7,
                'title' => "Edukasi orang lain tentang dampak sampah plastik",
                'description' => "Ajak teman-teman dan keluarga untuk lebih sadar akan bahaya sampah plastik dan dorong mereka untuk mengurangi penggunaannya dalam kehidupan sehari-hari.",
            ],
            
            // plan_id: 8
            [
                'plan_id' => 8,
                'title' => "Gunakan sedotan stainless atau bambu daripada sedotan plastik",
                'description' => "Bawa sedotan pribadi yang bisa dipakai ulang, sehingga tidak perlu lagi menggunakan sedotan plastik sekali pakai.",
            ],
            [
                'plan_id' => 8,
                'title' => "Bawa tas belanja kain saat berbelanja",
                'description' => "Selalu bawa tas kain untuk menghindari penggunaan kantong plastik saat berbelanja, dan pastikan untuk memilih tas yang bisa digunakan berulang kali.",
            ],
            [
                'plan_id' => 8,
                'title' => "Pilih produk dengan kemasan ramah lingkungan",
                'description' => "Pilih produk yang kemasannya menggunakan bahan yang lebih mudah terurai atau dapat didaur ulang, seperti karton atau kaca.",
            ],
            [
                'plan_id' => 8,
                'title' => "Gunakan wadah makanan yang bisa digunakan berulang kali",
                'description' => "Hindari penggunaan plastik sekali pakai untuk bekal atau makan siang. Gunakan wadah makanan yang bisa digunakan berulang kali, seperti dari stainless steel atau kaca.",
            ],
            [
                'plan_id' => 8,
                'title' => "Dukung bisnis lokal yang menggunakan bahan ramah lingkungan",
                'description' => "Belilah produk dari bisnis yang menerapkan kebijakan ramah lingkungan, seperti produk dengan kemasan yang dapat didaur ulang atau tanpa kemasan plastik.",
            ],

            // plan_id 9
            [
                'plan_id' => 9,
                'title' => 'Pisahkan sampah plastik yang bisa didaur ulang dari sampah lainnya',
                'description' => 'Di rumah atau tempat kerja, buatlah tempat terpisah untuk sampah plastik dan pastikan kamu memilahnya dengan benar agar bisa didaur ulang.',
            ],
            [
                'plan_id' => 9,
                'title' => 'Cari tempat daur ulang sampah plastik di lingkungan sekitar',
                'description' => 'Cari tahu di mana tempat daur ulang sampah plastik terdekat di sekitar kamu dan pastikan untuk membawa sampah plastik yang telah dipisahkan ke tempat tersebut.',
            ],
            [
                'plan_id' => 9,
                'title' => 'Gunakan produk daur ulang atau yang terbuat dari bahan daur ulang',
                'description' => 'Pilih produk yang terbuat dari bahan daur ulang, seperti tas, botol, atau barang-barang rumah tangga lainnya yang ramah lingkungan.',
            ],
            [
                'plan_id' => 9,
                'title' => 'Edukasi teman dan keluarga tentang pentingnya daur ulang',
                'description' => 'Ajak teman dan keluarga untuk lebih peduli dengan memilah sampah plastik dan mendaur ulangnya agar semakin banyak orang yang sadar akan pentingnya pengelolaan sampah.',
            ],
            [
                'plan_id' => 9,
                'title' => 'Dukung program pengelolaan sampah di lingkunganmu',
                'description' => 'Ikut berpartisipasi dalam program pengelolaan sampah yang ada di daerahmu dan dorong orang lain untuk ikut berpartisipasi juga.',
            ],

            // plan_id 10
            [
                'plan_id' => 10,
                'title' => 'Kurangi jejak karbon dengan menggunakan transportasi ramah lingkungan',
                'description' => 'Gunakan transportasi umum, bersepeda, atau berjalan kaki untuk mengurangi emisi gas rumah kaca yang memperburuk perubahan iklim.',
            ],
            [
                'plan_id' => 10,
                'title' => 'Hemat energi di rumah dengan mematikan peralatan yang tidak digunakan',
                'description' => 'Matikan lampu dan alat elektronik yang tidak digunakan agar mengurangi konsumsi energi dan mengurangi emisi karbon.',
            ],
            [
                'plan_id' => 10,
                'title' => 'Tanam pohon atau dukung program penghijauan',
                'description' => 'Tanam pohon di lingkungan sekitar atau ikut serta dalam program penghijauan untuk membantu menyerap karbon dioksida di atmosfer.',
            ],
            [
                'plan_id' => 10,
                'title' => 'Pilih produk yang ramah lingkungan dan mendukung keberlanjutan',
                'description' => 'Pilih produk yang terbuat dari bahan daur ulang atau yang meminimalkan dampak lingkungan, seperti produk lokal dan tanpa kemasan plastik.',
            ],
            [
                'plan_id' => 10,
                'title' => 'Edukasi orang lain tentang perubahan iklim dan dampaknya',
                'description' => 'Ajak teman dan keluarga untuk lebih sadar akan perubahan iklim dan pentingnya tindakan bersama untuk mengurangi dampak bencana alam yang disebabkan oleh pemanasan global.',
            ],

            // plan_id: 11
            [
                'plan_id' => 11, 
                'title' => 'Gunakan kendaraan ramah lingkungan seperti sepeda atau transportasi umum', 
                'description' => 'Kurangi penggunaan kendaraan pribadi yang menghasilkan emisi gas berbahaya dan pilih transportasi yang lebih ramah lingkungan, seperti sepeda atau kendaraan listrik.'
            ],
            [
                'plan_id' => 11,
                'title' => 'Hindari pembakaran sampah di lingkungan sekitar', 
                'description' => 'Jangan membakar sampah plastik atau bahan lainnya yang menghasilkan polusi udara, dan pilihlah untuk mendaur ulang sampah atau membuangnya pada tempat yang tepat.'],
            [
                'plan_id' => 11,
                'title' => 'Tanam pohon atau ikut serta dalam penghijauan', 
                'description' => 'Pohon berperan penting dalam menyerap karbon dioksida dan mengurangi polusi udara. Ikut serta dalam program penghijauan atau tanam pohon di lingkungan sekitar.'],
            [
                'plan_id' => 11,
                'title' => 'Pilih produk yang ramah lingkungan dan tidak mencemari udara', 
                'description' => 'Pilih produk yang tidak mengandung bahan kimia berbahaya atau yang menghasilkan emisi berbahaya saat digunakan, seperti cat ramah lingkungan dan kendaraan hemat energi.'],
            [
                'plan_id' => 11,
                'title' => 'Edukasi orang lain tentang polusi udara dan pentingnya menjaga kualitas udara', 
                'description' => 'Ajak orang di sekitar kamu untuk lebih peduli terhadap polusi udara, mengurangi emisi gas berbahaya, dan menjaga lingkungan tetap bersih.'],

            // plan_id: 12
            [
                'plan_id' => 12,
                'title' => "Matikan lampu saat tidak diperlukan",
                'description' => "Matikan lampu di ruangan yang tidak sedang digunakan untuk menghemat energi.",
            ],
            [
                'plan_id' => 12,
                'title' => "Gunakan lampu LED yang lebih hemat energi",
                'description' => "Ganti lampu pijar dengan lampu LED yang lebih efisien dan tahan lama.",
            ],
            [
                'plan_id' => 12,
                'title' => "Buka jendela pada siang hari untuk cahaya alami",
                'description' => "Manfaatkan pencahayaan alami pada siang hari agar tidak perlu menyalakan lampu.",
            ],
            [
                'plan_id' => 12,
                'title' => "Bersihkan lampu secara rutin agar lebih terang",
                'description' => "Lampu yang bersih akan menghasilkan cahaya lebih optimal dan tidak perlu watt besar untuk menerangi ruangan.",
            ],
            [
                'plan_id' => 12,
                'title' => "Atur pencahayaan sesuai kebutuhan",
                'description' => "Gunakan pencahayaan yang cukup untuk aktivitas dan hindari menyalakan semua lampu sekaligus jika tidak diperlukan.",
            ],

            // plan_id 13
            [
                'plan_id' => 13,
                'title' => 'Kurangi penggunaan air yang berlebihan di rumah',
                'description' => 'Matikan keran saat tidak digunakan, perbaiki kebocoran, dan gunakan alat penghemat air untuk mengurangi pemborosan.'
            ],
            [
                'plan_id' => 13,
                'title' => 'Gunakan teknologi ramah air di rumah atau tempat kerja',
                'description' => 'Pilih peralatan rumah tangga seperti mesin cuci atau shower yang dirancang untuk menghemat air.'
            ],
            [
                'plan_id' => 13,
                'title' => 'Dukung penggunaan air hujan dengan sistem penampungan air hujan',
                'description' => 'Jika memungkinkan, pasang sistem penampungan air hujan di rumah atau tempat kerja untuk mengurangi ketergantungan pada air bersih yang diambil dari sumber alam.'
            ],
            [
                'plan_id' => 13,
                'title' => 'Edukasi diri sendiri dan orang lain tentang pentingnya pengelolaan air yang efisien',
                'description' => 'Ajak keluarga dan teman-teman untuk lebih sadar akan pentingnya penghematan air dan bagaimana cara-cara sederhana untuk mengurangi pemborosan air.'
            ],
            [
                'plan_id' => 13,
                'title' => 'Partisipasi dalam program konservasi air di lingkungan sekitar',
                'description' => 'Cari tahu jika ada inisiatif lokal yang mendukung konservasi air dan berpartisipasilah dalam upaya tersebut.'
            ],

            // plan_id 14
            [
                'plan_id' => 14,
                'title' => 'Kurangi penggunaan bahan kimia berbahaya di rumah',
                'description' => 'Hindari penggunaan produk pembersih yang mengandung bahan kimia berbahaya dan pilih produk yang lebih ramah lingkungan.'
            ],
            [
                'plan_id' => 14,
                'title' => 'Jangan buang sampah sembarangan, terutama sampah plastik',
                'description' => 'Pastikan untuk membuang sampah pada tempatnya dan kurangi penggunaan plastik sekali pakai yang dapat mencemari air.'
            ],
            [
                'plan_id' => 14,
                'title' => 'Pilih produk pertanian yang ramah lingkungan dan bebas dari pestisida',
                'description' => 'Pilih produk pertanian organik yang tidak menggunakan pestisida berbahaya yang dapat mencemari sumber air dan merusak ekosistem.'
            ],
            [
                'plan_id' => 14,
                'title' => 'Dukung pengelolaan limbah yang baik di komunitas sekitar',
                'description' => 'Ikut serta dalam program pengelolaan limbah dan ajak orang di sekitar untuk tidak membuang limbah sembarangan ke sungai atau laut.'
            ],
            [
                'plan_id' => 14,
                'title' => 'Edukasi diri dan orang lain tentang dampak polusi air',
                'description' => 'Ajak orang di sekitar kamu untuk lebih sadar tentang bahaya polusi air dan pentingnya menjaga kebersihan sumber daya air.'
            ],

            // plan_id 15
            [
                'plan_id' => 15,
                'title' => 'Matikan keran saat tidak digunakan',
                'description' => 'Matikan keran saat mencuci tangan, mencuci piring, atau menyikat gigi untuk menghindari pemborosan air.'
            ],
            [
                'plan_id' => 15,
                'title' => 'Perbaiki kebocoran pipa di rumah',
                'description' => 'Segera perbaiki kebocoran air di rumah, baik itu dari keran, pipa, atau toilet, untuk menghindari pemborosan air yang tidak perlu.'
            ],
            [
                'plan_id' => 15,
                'title' => 'Gunakan shower daripada mandi dalam bak penuh',
                'description' => 'Shower menggunakan lebih sedikit air dibandingkan mandi dalam bak penuh, sehingga lebih efisien dalam penggunaan air.'
            ],
            [
                'plan_id' => 15,
                'title' => 'Gunakan mesin cuci dengan kapasitas penuh',
                'description' => 'Pastikan untuk menggunakan mesin cuci dengan kapasitas penuh atau pilih program hemat air untuk mengurangi jumlah air yang digunakan.'
            ],
            [
                'plan_id' => 15,
                'title' => 'Hindari pembuangan sampah di sungai atau laut',
                'description' => 'Jangan buang sampah sembarangan, terutama plastik, yang dapat mencemari sumber air dan merusak ekosistem air.'
            ],
        ];
        foreach ($steps as $step) {
            PlanStep::create($step);
        }
    }
}
