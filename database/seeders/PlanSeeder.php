<?php

namespace Database\Seeders;

use App\Models\Plan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ],
            [
                'focus_area_id' => 1,
                'title' => 'HEMAT ENERGI 2',
                'plan_details' => 'Menggunakan perangkat digital secara bijak bukan hanya melindungi perangkat itu sendiri, tapi juga membantu mengurangi konsumsi energi. Kegiatan seperti streaming video nonstop, charge HP semalaman, dan multitasking berat di laptop bisa mempercepat pemborosan energi. Dengan membiasakan diri untuk mengatur waktu penggunaan, menutup aplikasi yang tidak perlu, dan menggunakan mode hemat daya, pengguna bisa ikut mengurangi emisi karbon dari konsumsi listrik pribadi.',
            ],
            [
                'focus_area_id' => 1,
                'title' => 'HEMAT ENERGI 3',
                'plan_details' => 'Banyak perangkat rumah tangga yang jika digunakan dengan bijak, dapat menghemat energi secara signifikan. Salah satunya adalah kulkas. Pastikan kulkas tidak terlalu penuh dan pintunya tertutup rapat agar kerja kulkas lebih efisien. Selain itu, pastikan suhu kulkas tidak terlalu dingin dan tidak lebih rendah dari yang dibutuhkan. Hal kecil seperti menutup pintu kulkas dengan rapat, serta memposisikan kulkas di tempat yang tidak terlalu panas, dapat mengurangi pemborosan energi.
                Peralatan rumah tangga lain seperti mesin cuci dan pemanas air juga mempengaruhi konsumsi energi di rumah. Menggunakan mesin cuci dengan kapasitas penuh dan memilih suhu air yang tidak terlalu panas dapat mengurangi penggunaan energi. Pemanas air juga sebaiknya hanya digunakan saat dibutuhkan, dan disesuaikan dengan kebutuhan. Dengan kebiasaan-kebiasaan kecil ini, kamu sudah berperan dalam mengurangi konsumsi energi di rumah, tanpa harus mengorbankan kenyamanan hidup.',
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 1',
                'plan_details' => 'Menggunakan transportasi umum dan bersepeda adalah pilihan yang sangat efisien untuk mengurangi jejak karbon kita. Di Indonesia, kota-kota besar seperti Jakarta, Bandung, dan Surabaya sudah mulai meningkatkan infrastruktur transportasi umum. Dengan menggunakan bus, kereta, atau MRT, kita tidak hanya mengurangi kemacetan tetapi juga mengurangi polusi udara. Selain itu, bersepeda menjadi alternatif ramah lingkungan yang tidak hanya mengurangi emisi karbon, tetapi juga memberikan manfaat bagi kesehatan tubuh kita.
                Bersepeda di area perkotaan semakin diminati karena hemat biaya, mudah diakses, dan dapat mengurangi kemacetan. Selain itu, bersepeda juga bisa mengurangi ketergantungan pada bahan bakar fosil yang terus menipis. Dengan lebih banyak orang yang beralih ke transportasi ramah lingkungan ini, kita turut mendukung pengurangan emisi gas rumah kaca dan memperbaiki kualitas udara di sekitar kita.',
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 2',
                'plan_details' => 'Mengurangi penggunaan kendaraan pribadi adalah langkah besar untuk mengurangi emisi karbon, kemacetan, dan polusi udara. Di Indonesia, banyak kota besar yang sudah mulai menyediakan berbagai pilihan transportasi ramah lingkungan, seperti sepeda listrik dan layanan ride-sharing. Dengan mengoptimalkan berbagai moda transportasi yang ada, kita dapat mengurangi ketergantungan pada kendaraan pribadi dan memanfaatkan fasilitas yang lebih efisien. Misalnya, kamu bisa menggunakan kendaraan pribadi untuk perjalanan yang lebih jauh dan beralih ke transportasi umum atau sepeda untuk perjalanan yang lebih dekat.
                Pemerintah juga terus berupaya meningkatkan fasilitas transportasi umum yang ramah lingkungan, seperti menyediakan jalur sepeda di banyak kota besar dan memperkenalkan kendaraan listrik yang lebih ramah lingkungan. Dengan dukungan tersebut, kita sebagai masyarakat bisa lebih bijak dalam memilih moda transportasi yang tepat dan mengurangi dampak negatif bagi lingkungan. Dengan beralih ke moda transportasi yang lebih efisien, kita tidak hanya mengurangi polusi, tetapi juga menghemat biaya dan meningkatkan kualitas hidup.',
            ],
            [
                'focus_area_id' => 2,
                'title' => 'TRANSPORTASI RAMAH LINGKUNGAN 3',
                'plan_details' => 'Kendaraan listrik (EV) menjadi salah satu solusi terbaik untuk mengurangi emisi karbon dan polusi udara. Kendaraan ini tidak hanya ramah lingkungan, tetapi juga lebih efisien dalam penggunaan energi, karena tidak bergantung pada bahan bakar fosil yang semakin langka. Di Indonesia, meskipun penggunaan kendaraan listrik masih dalam tahap pengembangan, beberapa kota besar mulai menyediakan infrastruktur pengisian daya untuk mendukung kendaraan listrik. Selain itu, kendaraan listrik juga memiliki biaya operasional yang lebih rendah dalam jangka panjang karena biaya pengisian daya yang lebih murah dibandingkan dengan bahan bakar konvensional.
                Penggunaan kendaraan listrik juga berpotensi mengurangi kemacetan di kota-kota besar, karena semakin banyak orang yang beralih dari kendaraan berbahan bakar fosil ke kendaraan listrik yang lebih hemat ruang dan lebih efisien. Untuk mendukung hal ini, pemerintah Indonesia dan berbagai pihak juga sudah mulai memperkenalkan insentif bagi pengguna kendaraan listrik, termasuk pengurangan pajak dan subsidi. Dengan mendukung penggunaan kendaraan listrik, kita bisa ikut berperan dalam menjaga kelestarian lingkungan dan menciptakan kota yang lebih bersih dan nyaman',
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 1',
                'plan_details' => 'Sampah plastik menjadi salah satu masalah terbesar yang dihadapi dunia saat ini. Plastik membutuhkan ratusan tahun untuk terurai di alam, sementara plastik yang dibuang sembarangan mencemari tanah, air, dan udara. Banyak sekali sampah plastik yang masuk ke lautan, merusak ekosistem laut dan mengancam kehidupan laut. Terkadang, hewan-hewan laut mengira plastik sebagai makanan, yang bisa menyebabkan mereka mati atau terluka. Selain itu, plastik juga mengandung bahan kimia berbahaya yang dapat mencemari lingkungan dan berdampak negatif bagi kesehatan manusia.
                Penggunaan plastik sekali pakai seperti botol plastik, kantong belanja plastik, dan sedotan plastik sangat meningkatkan jumlah sampah plastik di seluruh dunia. Dengan banyaknya sampah plastik yang tidak dapat terurai, kita harus mencari alternatif yang ramah lingkungan dan mengurangi penggunaan plastik dalam kehidupan sehari-hari. Dengan memahami dampak dari sampah plastik ini, kita bisa lebih sadar dan mulai mengurangi konsumsi plastik sekali pakai untuk menjaga bumi dan kesehatan kita.',
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 2',
                'plan_details' => 'Salah satu cara paling efektif untuk mengurangi sampah plastik adalah dengan beralih ke produk alternatif yang lebih ramah lingkungan. Saat ini, sudah banyak produk yang dirancang untuk menggantikan plastik sekali pakai, seperti sedotan stainless, kantong belanja berbahan kain, dan kemasan produk yang terbuat dari bahan yang dapat terurai dengan mudah di alam. Produk-produk ini bukan hanya mengurangi ketergantungan kita terhadap plastik, tetapi juga mendukung gerakan ramah lingkungan yang semakin berkembang di masyarakat.
                Selain itu, banyak usaha kecil dan besar yang mulai memperkenalkan alternatif plastik ini, seperti menggunakan kemasan berbahan kertas atau tanaman untuk menggantikan kemasan plastik. Meskipun harga produk alternatif ini mungkin sedikit lebih mahal, namun manfaat jangka panjangnya jauh lebih besar, baik untuk lingkungan maupun kesehatan kita. Dengan memilih alternatif plastik yang lebih ramah lingkungan, kita bisa mengurangi sampah plastik di bumi ini, mengurangi polusi, dan menjaga keberlanjutan ekosistem.',
            ],
            [
                'focus_area_id' => 3,
                'title' => 'KURANGI SAMPAH PLASTIK 3',
                'plan_details' => 'Daur ulang adalah solusi penting untuk mengurangi sampah plastik yang menumpuk di tempat pembuangan akhir. Plastik yang tidak terkelola dengan baik akan membutuhkan ratusan tahun untuk terurai dan menyebabkan kerusakan besar pada lingkungan, terutama di lautan. Oleh karena itu, mendaur ulang sampah plastik menjadi langkah krusial dalam mengurangi dampak negatifnya. Daur ulang membantu mengubah sampah plastik menjadi bahan baru yang bisa digunakan lagi, mengurangi kebutuhan akan plastik baru, dan mengurangi polusi.
                Namun, untuk bisa mendaur ulang dengan efektif, penting untuk memisahkan sampah plastik yang dapat didaur ulang dengan sampah lainnya. Ini berarti kita perlu lebih teliti dalam memilah sampah di rumah, sekolah, atau tempat kerja. Selain itu, kita juga harus mendukung infrastruktur daur ulang di daerah kita dengan memastikan bahwa sampah plastik yang kita pisahkan benar-benar sampai ke tempat daur ulang yang tepat. Dengan mengelola sampah plastik dengan benar, kita tidak hanya mengurangi limbah, tetapi juga membantu menciptakan dunia yang lebih bersih dan lebih hijau.',
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 1',
                'plan_details' => 'Perubahan iklim adalah salah satu penyebab utama dari cuaca ekstrem yang semakin sering terjadi, seperti badai, banjir, dan kekeringan. Kenaikan suhu global yang disebabkan oleh emisi gas rumah kaca menyebabkan peningkatan intensitas dan frekuensi bencana alam. Misalnya, hujan lebat yang menyebabkan banjir, atau kekeringan panjang yang merusak pertanian dan sumber daya air. Perubahan pola cuaca ini juga memengaruhi kehidupan manusia, terutama di daerah-daerah yang rentan terhadap bencana alam.
                Selain itu, bencana alam yang disebabkan oleh perubahan iklim juga berdampak besar pada ekosistem dan kehidupan makhluk hidup. Habitat alami banyak spesies terganggu, dan beberapa di antaranya terancam punah karena perubahan cuaca yang drastis. Kita perlu memahami bahwa perubahan iklim yang kita alami saat ini bukan hanya masalah alam semesta, tetapi juga masalah yang harus kita hadapi bersama. Untuk itu, langkah-langkah mitigasi dan adaptasi sangat penting agar kita bisa bertahan dan meminimalkan dampak buruk dari cuaca ekstrem dan bencana alam yang semakin sering terjadi.',
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 2',
                'plan_details' => 'Polusi udara merupakan masalah lingkungan yang semakin meresahkan. Penyebab utama polusi udara adalah emisi gas buang kendaraan bermotor, asap pabrik, pembakaran sampah, serta penggunaan bahan bakar fosil yang tidak efisien. Gas berbahaya seperti karbon monoksida, sulfur dioksida, dan nitrogen oksida yang terlepas ke atmosfer dapat merusak kualitas udara dan menyebabkan berbagai masalah kesehatan, seperti penyakit pernapasan, kanker paru-paru, dan gangguan jantung.
                Selain dampak kesehatan, polusi udara juga berdampak pada lingkungan. Salah satu contohnya adalah fenomena hujan asam yang terjadi akibat reaksi gas-gas berbahaya di udara yang bercampur dengan uap air, sehingga dapat merusak tanaman, perairan, serta struktur bangunan. Polusi udara yang tinggi juga berkontribusi pada perubahan iklim dengan memperburuk efek rumah kaca. Oleh karena itu, penting bagi kita untuk mengambil langkah-langkah pencegahan guna mengurangi polusi udara dan melindungi kesehatan serta lingkungan.',
            ],
            [
                'focus_area_id' => 4,
                'title' => 'POHON DAN ALAM 3',
                'plan_details' => 'Perubahan iklim memiliki dampak besar terhadap keanekaragaman hayati di seluruh dunia. Dengan suhu yang terus meningkat, banyak spesies tidak dapat beradaptasi dengan cepat terhadap perubahan tersebut. Perubahan iklim mengganggu pola migrasi, waktu bertelur, dan periode berburu atau mencari makan berbagai spesies. Beberapa spesies yang tidak dapat beradaptasi dengan cepat pun menghadapi ancaman punah. Sebagai contoh, terumbu karang yang sangat sensitif terhadap suhu air yang terlalu panas mulai mengalami pemutihan massal yang mengancam kehidupan laut.
                Perubahan iklim juga menyebabkan pengasaman laut yang mengurangi kemampuan organisme laut seperti kerang dan terumbu karang untuk membentuk cangkang atau struktur yang kuat. Selain itu, perubahan iklim mempengaruhi ketersediaan makanan bagi banyak spesies dan menyebabkan pergeseran habitat alami mereka. Sebagai manusia, kita perlu bertanggung jawab atas dampak perubahan iklim ini dan berusaha untuk melindungi serta menjaga keanekaragaman hayati melalui langkah-langkah perlindungan lingkungan yang lebih baik.',
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 1',
                'plan_details' => 'Air adalah sumber daya yang sangat penting untuk kehidupan. Namun, kebutuhan manusia terhadap air semakin meningkat seiring dengan pertumbuhan populasi dan urbanisasi yang pesat. Di sisi lain, banyak daerah yang menghadapi masalah kekeringan, polusi air, dan pencemaran sumber daya air lainnya. Pengelolaan air yang buruk dapat menyebabkan krisis air bersih, yang berdampak pada kesehatan manusia, ekosistem, dan sektor ekonomi seperti pertanian dan industri.
                Pengelolaan air yang berkelanjutan bertujuan untuk memastikan bahwa kita dapat memenuhi kebutuhan air saat ini tanpa mengorbankan kemampuan generasi mendatang untuk memenuhi kebutuhan mereka. Ini melibatkan penggunaan air secara efisien, mengurangi pemborosan, melindungi sumber daya air dari polusi, serta menjaga ekosistem yang bergantung pada air. Salah satu cara untuk mencapai pengelolaan air yang berkelanjutan adalah dengan meningkatkan kesadaran masyarakat dan menerapkan kebijakan yang mendukung konservasi air di tingkat global, nasional, dan lokal.',
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 2',
                'plan_details' => 'Polusi air menjadi masalah serius yang mempengaruhi kualitas hidup manusia dan ekosistem secara keseluruhan. Salah satu penyebab utama polusi air adalah pembuangan limbah industri, pertanian, serta sampah domestik yang langsung dibuang ke sungai, danau, atau laut. Zat-zat berbahaya dalam limbah tersebut, seperti logam berat, pestisida, dan bahan kimia, dapat merusak kualitas air dan menyebabkan pencemaran yang berbahaya bagi kesehatan manusia serta makhluk hidup lainnya.
                Polusi air dapat menyebabkan berbagai penyakit, seperti diare, kolera, dan keracunan, yang berdampak pada kesehatan manusia. Selain itu, ekosistem yang bergantung pada air, seperti ikan, tanaman air, dan mikroorganisme, juga akan terancam. Kehilangan keanekaragaman hayati di habitat air dapat mengganggu keseimbangan alam dan merusak mata pencaharian yang bergantung pada sumber daya air, seperti nelayan. Oleh karena itu, penting untuk menjaga kebersihan dan kualitas air dengan cara yang bertanggung jawab, mengurangi limbah, serta melindungi sumber daya air dari polusi.',
            ],
            [
                'focus_area_id' => 5,
                'title' => 'PENGELOLAAN AIR 3',
                'plan_details' => 'Air adalah sumber daya alam yang vital untuk kehidupan manusia, tumbuhan, dan hewan. Namun, kebutuhan akan air semakin meningkat sementara sumber daya air terbatas. Pengelolaan air yang baik sangat penting untuk memastikan bahwa kita bisa mengakses air bersih tanpa merusak ekosistem yang bergantung padanya. Salah satu tantangan terbesar adalah pemborosan air di rumah tangga dan sektor industri yang berkontribusi pada berkurangnya ketersediaan air bersih.
                Selain itu, banyak daerah yang mengalami krisis air akibat pencemaran dan perubahan iklim. Oleh karena itu, penting untuk kita semua lebih bijak dalam menggunakan air, mulai dari cara sederhana di rumah hingga kebijakan yang lebih besar untuk menjaga keberlanjutan sumber daya air. Pengelolaan air yang bijak tidak hanya melibatkan penghematan air, tetapi juga perlindungan terhadap sumber-sumber air dari polusi dan kerusakan ekosistem.',
            ],
        ];
        foreach ($plans as $plan) {
            Plan::updateOrCreate(['title' => $plan['title']], $plan);
        }
    }
}
