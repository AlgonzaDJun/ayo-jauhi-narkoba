<?php

namespace App\Http\Controllers;

use App\Models\JawabanMateriNarkoba;
use Illuminate\Http\Request;

class AyoJauhiNarkoba extends Controller
{
    //
    public function index()
    {
        $revisi_materi = [
            'pertanyaan' => '<p>Damar adalah seorang siswa di SMA Nusantara. Sejak kecil, ia dikenal sebagai anak yang ceria, aktif, dan penuh semangat. Namun, beberapa bulan terakhir, Damar mulai menunjukkan perubahan yang cukup mencolok. Ia menjadi lebih sering absen di sekolah, jarang ikut kegiatan ekstrakurikuler, dan prestasinya mulai menurun. Teman-teman dekatnya mulai merasa khawatir, terutama Fira, sahabat Damar sejak SMP.</p><p>Suatu hari, Fira memutuskan untuk bertanya langsung kepada Damar setelah melihatnya duduk termenung sendirian di sudut kantin. Fira merasa ada yang tidak beres dengan temannya itu.</p><p>"Damar, ada apa dengan kamu akhir-akhir ini? Kenapa kamu nggak ikut lomba band yang kita rencanakan bareng?" tanya Fira dengan nada prihatin.</p><p>Damar menunduk dan tampak gelisah. "Aku... nggak tahu, Fir. Aku merasa capek, kayak nggak ada yang bisa bikin aku senang lagi. Ada teman-teman yang ngajak aku ikut, tapi... mereka bawa sesuatu yang bisa bikin aku lupa sejenak. Aku coba sekali, terus-terusan, dan rasanya lebih enak, Fir."</p><p>Fira terdiam, hatinya semakin berat mendengar pengakuan Damar. Ia tahu betul apa yang dimaksud Damar. Damar mulai terjerumus dalam pergaulan yang salah, menggunakan narkoba untuk melarikan diri dari masalahnya.</p> <p>"Dam, kamu tahu kan kalau itu bisa merusak hidupmu?" Fira mencoba berkata hati-hati, "Narkoba bukan solusi. Itu justru akan menghancurkan masa depan kamu. Aku nggak mau kehilangan sahabatku."</p> <p>Damar terdiam. Di satu sisi, ia merasa lelah dengan segala tekanan yang datang dalam hidupnya. Tetapi, di sisi lain, ia tahu Fira benar. Ia mulai berpikir tentang dampak yang mungkin ditimbulkan jika ia terus terlibat dengan narkoba.</p> <p>Fira tidak hanya berhenti di situ. Ia mengajak Damar untuk bersama-sama mencari solusi. Mereka membuat rencana untuk mengaplikasikan langkah-langkah pencegahan narkoba dalam kehidupan sehari-hari, dimulai dengan berkomunikasi lebih terbuka tentang masalah yang mereka hadapi. Fira mengajak Damar untuk lebih sering berolahraga, berkunjung ke pusat kegiatan remaja di dekat sekolah, dan mencari kegiatan positif yang bisa mereka lakukan bersama, seperti membuat musik atau merencanakan acara amal untuk sekolah.</p> <p>Mereka juga mulai menganalisis lebih dalam tentang faktor-faktor penyebab kenapa remaja seperti Damar terjerumus ke dalam dunia narkoba. Mereka berdiskusi tentang tekanan teman sebaya, masalah keluarga, dan rasa tidak aman tentang masa depan. Damar mengungkapkan bahwa ia merasa sangat kesepian dan takut akan kegagalannya di sekolah, yang akhirnya mendorongnya mencari pelarian.</p> <p>"Jadi, kamu merasa tertekan dan mencari cara untuk lari dari masalah, ya?" Fira bertanya dengan penuh perhatian.</p> <p>"Iya, Fir. Tapi aku tahu sekarang kalau itu bukan jalan yang benar," jawab Damar, merasa sedikit lebih lega setelah berbicara dengan Fira.</p> <p>Setelah berbicara panjang lebar, Damar mulai lebih menghargai pentingnya kesadaran diri. Ia belajar untuk mengenali perasaannya, menerima ketidakpastian dalam hidup, dan menghindari pengaruh buruk yang bisa merusak masa depannya. Ia menyadari bahwa untuk bisa berhenti dari narkoba, ia perlu memiliki kontrol diri yang kuat dan berani mengubah kebiasaan buruknya.</p> <p>Namun, perjalanan Damar tidak langsung mudah. Ia menghadapi banyak godaan, terutama saat teman-temannya yang lama terus mengundangnya untuk kembali bergabung dalam pergaulan mereka. Suatu hari, Damar mendapati dirinya berada di tengah keramaian dengan teman-teman yang sedang menggunakannya lagi. Di saat itu, ia merasa bingung dan ragu, namun ia ingat apa yang sudah ia pelajari.</p> <p>"Dam, jangan sampai ini merusak semuanya," Fira yang kebetulan ada di sana, memberinya semangat. "Ingat tujuan kita. Kita bisa terus maju bersama-sama."</p> <p>Dengan tekad yang lebih kuat, Damar akhirnya menolak tawaran itu. Ia merasa bangga karena ia sudah mengambil keputusan yang benar. Sejak saat itu, Damar memulai langkah-langkah pencegahan narkoba dalam kehidupannya, salah satunya adalah dengan aktif melakukan kampanye bahaya narkoba di sekolahnya.</p> <p>Damar dan Fira bersama-sama mengorganisir sebuah kampanye anti-narkoba di sekolah. Mereka mengajak teman-teman untuk membuat poster, menyebarkan informasi tentang narkoba, dan mengadakan seminar yang mengundang ahli kesehatan untuk berbicara. Dalam kampanye itu, Damar menunjukkan bagaimana kesadaran diri dan kontrol diri yang kuat dapat membantu mencegah penggunaan narkoba.</p> <p>"Sahabat-sahabatku, mari kita ingatkan diri kita sendiri bahwa hidup kita terlalu berharga untuk dihancurkan oleh narkoba. Kita punya masa depan yang cerah, dan kita harus menjaga diri kita dari segala bentuk bahaya," ujar Damar di depan teman-temannya.</p> <p>Di akhir kampanye, Damar merasa bangga karena tidak hanya dirinya yang berubah, tetapi juga banyak temannya yang mulai sadar akan bahaya narkoba dan berkomitmen untuk menghindarinya. Damar pun berhasil membangun mekanisme untuk mengedukasi teman-teman sebaya tentang bahaya narkoba, dan ia merasa puas bisa menjadi agen perubahan di sekolahnya.</p>',
            'soal' => [
                'soal_1' => 'Apa saja langkah-langkah pencegahan narkoba yang diterapkan Damar dalam kehidupan sehari-hari setelah ia sadar akan bahaya narkoba?',
                'soal_2' => 'Apa saja faktor-faktor yang menyebabkan Damar terjerumus dalam penggunaan narkoba?',
                'soal_3' => 'Bagaimana penggunaan narkoba dapat mempengaruhi kehidupan seseorang, baik secara pribadi maupun dalam konteks masyarakat? Jelaskan dampaknya!',
                'soal_4' => 'Apa yang bisa kamu lakukan untuk meningkatkan kesadaran diri terkait bahaya narkoba dalam kehidupan sehari-hari?',
                'soal_5' => 'Bagaimana cara kamu menyampaikan informasi tentang bahaya narkoba dengan jelas dan tepat kepada teman-temanmu?'
            ]
        ];
        $soal_jawaban = [
            'soal_1' => [
                'pertanyaan' => 'Apa yang dimaksud dengan narkoba menurut Badan Narkotika Nasional (BNN)?',
                'pilihan' => [
                    'a' => 'Zat yang menyebabkan peningkatan kesadaran',
                    'b' => 'Zat yang dapat menyebabkan efek halusinasi dan menurunkan kesadaran',
                    'c' => 'Obat alami yang tidak berbahaya',
                    'd' => 'Zat buatan untuk pengobatan umum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_2' => [
                'pertanyaan' => 'Narkotika Golongan I termasuk dalam kelompok yang?',
                'pilihan' => [
                    'a' => 'Tidak memiliki potensi ketergantungan',
                    'b' => 'Sangat berbahaya dan tidak digunakan untuk pengobatan',
                    'c' => 'Berbahaya tetapi bisa digunakan untuk pengobatan',
                    'd' => 'Aman digunakan dalam terapi sehari-hari',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_3' => [
                'pertanyaan' => 'Apa perbedaan utama antara narkotika dan psikotropika?',
                'pilihan' => [
                    'a' => 'Narkotika menyebabkan efek halusinasi, sementara psikotropika menyebabkan euforia',
                    'b' => 'Narkotika digunakan untuk pengobatan, sedangkan psikotropika tidak',
                    'c' => 'Narkotika menyebabkan perubahan kesadaran, sementara psikotropika menyebabkan perubahan mental dan perilaku',
                    'd' => 'Tidak ada perbedaan, keduanya sama',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_4' => [
                'pertanyaan' => 'Faktor eksternal yang dapat mendorong remaja untuk menggunakan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan sosial atau masyarakat yang tidak peduli',
                    'b' => 'Kepribadian yang labil',
                    'c' => 'Keluarga yang tidak harmonis',
                    'd' => 'Masalah ekonomi keluarga',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_5' => [
                'pertanyaan' => 'Salah satu dampak fisik dari penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Menjadi lebih produktif',
                    'b' => 'Meningkatnya rasa percaya diri',
                    'c' => 'Hilangnya ketergantungan sosial',
                    'd' => 'Menurunnya fungsi reproduksi',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_6' => [
                'pertanyaan' => 'Tindakan pencegahan terhadap narkoba yang bersifat represif adalah?',
                'pilihan' => [
                    'a' => 'Penyuluhan dan pembinaan masyarakat',
                    'b' => 'Pelaporan dan penindakan hukum',
                    'c' => 'Penyembuhan melalui rehabilitasi',
                    'd' => 'Pencegahan sebelum terjadi penyalahgunaan',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_7' => [
                'pertanyaan' => 'Narkotika Golongan II dapat digunakan untuk pengobatan namun memiliki potensi menyebabkan?',
                'pilihan' => [
                    'a' => 'Gangguan mental',
                    'b' => 'Efek jangka pendek yang ringan',
                    'c' => 'Kecanduan yang kuat',
                    'd' => 'Peningkatan produktivitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_8' => [
                'pertanyaan' => 'Salah satu contoh psikotropika Golongan I yang hanya digunakan untuk ilmu pengetahuan dan tidak digunakan dalam terapi adalah?',
                'pilihan' => [
                    'a' => 'Deskloroketamin',
                    'b' => 'Alprazolam',
                    'c' => 'Diazepam',
                    'd' => 'Lorazepam',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_9' => [
                'pertanyaan' => 'Dampak psikologis dari penyalahgunaan narkoba dapat mencakup?',
                'pilihan' => [
                    'a' => 'Kecenderungan menyakiti diri sendiri',
                    'b' => 'Penurunan fungsi jantung',
                    'c' => 'Kenaikan berat badan',
                    'd' => 'Pemulihan cepat dari kecanduan',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_10' => [
                'pertanyaan' => 'Faktor internal yang membuat remaja lebih rentan terhadap penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan yang buruk',
                    'b' => 'Kepribadian yang tidak stabil',
                    'c' => 'Pengaruh kelompok pertemanan',
                    'd' => 'Kurangnya pengawasan dari aparat hukum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_11' => [
                'pertanyaan' => 'Upaya rehabilitatif bertujuan untuk?',
                'pilihan' => [
                    'a' => 'Mengobati para pecandu secara medis',
                    'b' => 'Menegakkan hukum terhadap pengedar narkoba',
                    'c' => 'Mencegah penyebaran narkoba melalui pembinaan masyarakat',
                    'd' => 'Membantu pecandu kembali ke masyarakat dengan kondisi yang sehat secara fisik dan mental',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_12' => [
                'pertanyaan' => 'Apa yang menjadi salah satu penyebab sosial yang dapat mendorong peningkatan penggunaan narkoba di kalangan remaja?',
                'pilihan' => [
                    'a' => 'Kurangnya kesempatan kerja',
                    'b' => 'Lingkungan sosial yang tidak peduli',
                    'c' => 'Keluarga yang mendukung',
                    'd' => 'Kehidupan yang stabil',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_13' => [
                'pertanyaan' => 'Narkotika Golongan III memiliki potensi ketergantungan yang?',
                'pilihan' => [
                    'a' => 'Ringan',
                    'b' => 'Tinggi',
                    'c' => 'Sangat kuat',
                    'd' => 'Tidak berbahaya',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_14' => [
                'pertanyaan' => 'Apa saja yang termasuk dalam dampak sosial dari penggunaan narkoba?',
                'pilihan' => [
                    'a' => 'Peningkatan kualitas hidup',
                    'b' => 'Pemulihan fisik yang cepat',
                    'c' => 'Gangguan mental dan perilaku anti-sosial',
                    'd' => 'Menjadi pemimpin di komunitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_15' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan I yang berpotensi menyebabkan ketergantungan tinggi adalah?',
                'pilihan' => [
                    'a' => 'Kodein',
                    'b' => 'Morfin',
                    'c' => 'Opium',
                    'd' => 'Buprenorfin',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_16' => [
                'pertanyaan' => 'Yang termasuk dalam psikotropika Golongan IV adalah?',
                'pilihan' => [
                    'a' => 'Metilfenidat',
                    'b' => 'Alprazolam',
                    'c' => 'Sekobarbital',
                    'd' => 'Deskloroketamin',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_17' => [
                'pertanyaan' => 'Salah satu cara pencegahan penyalahgunaan narkoba secara preventif adalah?',
                'pilihan' => [
                    'a' => 'Membangun tempat rehabilitasi',
                    'b' => 'Mengadakan penyuluhan bahaya narkoba kepada masyarakat',
                    'c' => 'Menindak pengedar narkoba melalui hukum',
                    'd' => 'Menyembuhkan pengguna narkoba secara medis',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_18' => [
                'pertanyaan' => 'Apa dampak jangka panjang penggunaan narkoba pada paru-paru?',
                'pilihan' => [
                    'a' => 'Kerusakan jaringan paru-paru',
                    'b' => 'Gangguan tidur',
                    'c' => 'Peningkatan imunitas',
                    'd' => 'Pemulihan cepat dari infeksi',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_19' => [
                'pertanyaan' => 'Psikotropika dapat menyebabkan perubahan pada?',
                'pilihan' => [
                    'a' => 'Struktur fisik tubuh',
                    'b' => 'Kecepatan metabolisme',
                    'c' => 'Keseimbangan hormon tubuh',
                    'd' => 'Fungsi mental dan emosional',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_20' => [
                'pertanyaan' => 'Dampak penyalahgunaan narkoba terhadap sistem saraf meliputi?',
                'pilihan' => [
                    'a' => 'Peningkatan kecerdasan',
                    'b' => 'Peningkatan energi',
                    'c' => 'Pemulihan dari rasa sakit',
                    'd' => 'Halusinasi dan kejang-kejang',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_21' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan II yang masih digunakan untuk pengobatan adalah?',
                'pilihan' => [
                    'a' => 'Heroin',
                    'b' => 'Dekstromoramid',
                    'c' => 'Etkatinon',
                    'd' => 'Ganja',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_22' => [
                'pertanyaan' => 'Keluarga yang tidak harmonis dapat memicu remaja untuk?',
                'pilihan' => [
                    'a' => 'Memilih teman yang baik',
                    'b' => 'Menghindari narkoba',
                    'c' => 'Mencari pelarian melalui narkoba',
                    'd' => 'Menjadi lebih mandiri',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_23' => [
                'pertanyaan' => 'Langkah represif dalam pencegahan narkoba melibatkan?',
                'pilihan' => [
                    'a' => 'Pelaporan dan tindakan hukum terhadap penyalahgunaan narkoba',
                    'b' => 'Rehabilitasi medis',
                    'c' => 'Pencegahan penggunaan narkoba melalui pendidikan',
                    'd' => 'Pengobatan terhadap pengguna narkoba',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_24' => [
                'pertanyaan' => 'Mengapa rehabilitasi penting setelah seseorang menjalani pengobatan narkoba?',
                'pilihan' => [
                    'a' => 'Untuk menindak pengedar narkoba',
                    'b' => 'Untuk mengembalikan fisik dan mental pengguna menjadi normal',
                    'c' => 'Untuk mengurangi efek kecanduan narkoba',
                    'd' => 'Untuk mencegah penyakit menular',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_25' => [
                'pertanyaan' => 'Narkoba dapat menyebabkan gangguan reproduksi yang meliputi?',
                'pilihan' => [
                    'a' => 'Penurunan fungsi hormon reproduksi dan gangguan fungsi seksual',
                    'b' => 'Peningkatan fungsi hormon',
                    'c' => 'Pemulihan cepat dari penyakit menular seksual',
                    'd' => 'Peningkatan kesuburan',
                ],
                'jawaban_benar' => 'a'
            ],
        ];

        return view('ayo-jauhi-narkoba.index', compact('soal_jawaban', 'revisi_materi'));
    }

    public function store(Request $request)
    {
        //$rules = [

        $rules = array_fill_keys(
            array_map(fn($i) => "soal_$i", range(1, 25)),
            'required|string' // Aturan validasi
        );

        //dd($request->all());

        // Loop untuk membuat aturan validasi untuk kolom soal_1 hingga soal_25
        // for ($i = 1; $i <= 25; $i++) {
        //$rules["soal_$i"] = 'required|string'; // Sesuaikan aturan validasi sesuai kebutuhan
        // }


        // $validasi = $request->validate($rules);
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->except('_token'); // Mengambil semua data kecuali _token
        $data['user_id'] = auth()->user()->id;
        JawabanMateriNarkoba::create(
            $data
        );
        // modif soal_jawaban, tambahkan key 'jawaban_user' dan 'benar' pada setiap soal

        $soal_jawaban = [

            'soal_1' => [
                'pertanyaan' => 'Apa yang dimaksud dengan narkoba menurut Badan Narkotika Nasional (BNN)?',
                'pilihan' => [
                    'a' => 'Zat yang menyebabkan peningkatan kesadaran',
                    'b' => 'Zat yang dapat menyebabkan efek halusinasi dan menurunkan kesadaran',
                    'c' => 'Obat alami yang tidak berbahaya',
                    'd' => 'Zat buatan untuk pengobatan umum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_2' => [
                'pertanyaan' => 'Narkotika Golongan I termasuk dalam kelompok yang?',
                'pilihan' => [
                    'a' => 'Tidak memiliki potensi ketergantungan',
                    'b' => 'Sangat berbahaya dan tidak digunakan untuk pengobatan',
                    'c' => 'Berbahaya tetapi bisa digunakan untuk pengobatan',
                    'd' => 'Aman digunakan dalam terapi sehari-hari',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_3' => [
                'pertanyaan' => 'Apa perbedaan utama antara narkotika dan psikotropika?',
                'pilihan' => [
                    'a' => 'Narkotika menyebabkan efek halusinasi, sementara psikotropika menyebabkan euforia',
                    'b' => 'Narkotika digunakan untuk pengobatan, sedangkan psikotropika tidak',
                    'c' => 'Narkotika menyebabkan perubahan kesadaran, sementara psikotropika menyebabkan perubahan mental dan perilaku',
                    'd' => 'Tidak ada perbedaan, keduanya sama',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_4' => [
                'pertanyaan' => 'Faktor eksternal yang dapat mendorong remaja untuk menggunakan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan sosial atau masyarakat yang tidak peduli',
                    'b' => 'Kepribadian yang labil',
                    'c' => 'Keluarga yang tidak harmonis',
                    'd' => 'Masalah ekonomi keluarga',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_5' => [
                'pertanyaan' => 'Salah satu dampak fisik dari penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Menjadi lebih produktif',
                    'b' => 'Meningkatnya rasa percaya diri',
                    'c' => 'Hilangnya ketergantungan sosial',
                    'd' => 'Menurunnya fungsi reproduksi',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_6' => [
                'pertanyaan' => 'Tindakan pencegahan terhadap narkoba yang bersifat represif adalah?',
                'pilihan' => [
                    'a' => 'Penyuluhan dan pembinaan masyarakat',
                    'b' => 'Pelaporan dan penindakan hukum',
                    'c' => 'Penyembuhan melalui rehabilitasi',
                    'd' => 'Pencegahan sebelum terjadi penyalahgunaan',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_7' => [
                'pertanyaan' => 'Narkotika Golongan II dapat digunakan untuk pengobatan namun memiliki potensi menyebabkan?',
                'pilihan' => [
                    'a' => 'Gangguan mental',
                    'b' => 'Efek jangka pendek yang ringan',
                    'c' => 'Kecanduan yang kuat',
                    'd' => 'Peningkatan produktivitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_8' => [
                'pertanyaan' => 'Salah satu contoh psikotropika Golongan I yang hanya digunakan untuk ilmu pengetahuan dan tidak digunakan dalam terapi adalah?',
                'pilihan' => [
                    'a' => 'Deskloroketamin',
                    'b' => 'Alprazolam',
                    'c' => 'Diazepam',
                    'd' => 'Lorazepam',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_9' => [
                'pertanyaan' => 'Dampak psikologis dari penyalahgunaan narkoba dapat mencakup?',
                'pilihan' => [
                    'a' => 'Kecenderungan menyakiti diri sendiri',
                    'b' => 'Penurunan fungsi jantung',
                    'c' => 'Kenaikan berat badan',
                    'd' => 'Pemulihan cepat dari kecanduan',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_10' => [
                'pertanyaan' => 'Faktor internal yang membuat remaja lebih rentan terhadap penggunaan narkoba adalah?',
                'pilihan' => [
                    'a' => 'Lingkungan yang buruk',
                    'b' => 'Kepribadian yang tidak stabil',
                    'c' => 'Pengaruh kelompok pertemanan',
                    'd' => 'Kurangnya pengawasan dari aparat hukum',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_11' => [
                'pertanyaan' => 'Upaya rehabilitatif bertujuan untuk?',
                'pilihan' => [
                    'a' => 'Mengobati para pecandu secara medis',
                    'b' => 'Menegakkan hukum terhadap pengedar narkoba',
                    'c' => 'Mencegah penyebaran narkoba melalui pembinaan masyarakat',
                    'd' => 'Membantu pecandu kembali ke masyarakat dengan kondisi yang sehat secara fisik dan mental',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_12' => [
                'pertanyaan' => 'Apa yang menjadi salah satu penyebab sosial yang dapat mendorong peningkatan penggunaan narkoba di kalangan remaja?',
                'pilihan' => [
                    'a' => 'Kurangnya kesempatan kerja',
                    'b' => 'Lingkungan sosial yang tidak peduli',
                    'c' => 'Keluarga yang mendukung',
                    'd' => 'Kehidupan yang stabil',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_13' => [
                'pertanyaan' => 'Narkotika Golongan III memiliki potensi ketergantungan yang?',
                'pilihan' => [
                    'a' => 'Ringan',
                    'b' => 'Tinggi',
                    'c' => 'Sangat kuat',
                    'd' => 'Tidak berbahaya',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_14' => [
                'pertanyaan' => 'Apa saja yang termasuk dalam dampak sosial dari penggunaan narkoba?',
                'pilihan' => [
                    'a' => 'Peningkatan kualitas hidup',
                    'b' => 'Pemulihan fisik yang cepat',
                    'c' => 'Gangguan mental dan perilaku anti-sosial',
                    'd' => 'Menjadi pemimpin di komunitas',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_15' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan I yang berpotensi menyebabkan ketergantungan tinggi adalah?',
                'pilihan' => [
                    'a' => 'Kodein',
                    'b' => 'Morfin',
                    'c' => 'Opium',
                    'd' => 'Buprenorfin',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_16' => [
                'pertanyaan' => 'Yang termasuk dalam psikotropika Golongan IV adalah?',
                'pilihan' => [
                    'a' => 'Metilfenidat',
                    'b' => 'Alprazolam',
                    'c' => 'Sekobarbital',
                    'd' => 'Deskloroketamin',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_17' => [
                'pertanyaan' => 'Salah satu cara pencegahan penyalahgunaan narkoba secara preventif adalah?',
                'pilihan' => [
                    'a' => 'Membangun tempat rehabilitasi',
                    'b' => 'Mengadakan penyuluhan bahaya narkoba kepada masyarakat',
                    'c' => 'Menindak pengedar narkoba melalui hukum',
                    'd' => 'Menyembuhkan pengguna narkoba secara medis',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_18' => [
                'pertanyaan' => 'Apa dampak jangka panjang penggunaan narkoba pada paru-paru?',
                'pilihan' => [
                    'a' => 'Kerusakan jaringan paru-paru',
                    'b' => 'Gangguan tidur',
                    'c' => 'Peningkatan imunitas',
                    'd' => 'Pemulihan cepat dari infeksi',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_19' => [
                'pertanyaan' => 'Psikotropika dapat menyebabkan perubahan pada?',
                'pilihan' => [
                    'a' => 'Struktur fisik tubuh',
                    'b' => 'Kecepatan metabolisme',
                    'c' => 'Keseimbangan hormon tubuh',
                    'd' => 'Fungsi mental dan emosional',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_20' => [
                'pertanyaan' => 'Dampak penyalahgunaan narkoba terhadap sistem saraf meliputi?',
                'pilihan' => [
                    'a' => 'Peningkatan kecerdasan',
                    'b' => 'Peningkatan energi',
                    'c' => 'Pemulihan dari rasa sakit',
                    'd' => 'Halusinasi dan kejang-kejang',
                ],
                'jawaban_benar' => 'd'
            ],
            'soal_21' => [
                'pertanyaan' => 'Salah satu contoh narkotika Golongan II yang masih digunakan untuk pengobatan adalah?',
                'pilihan' => [
                    'a' => 'Heroin',
                    'b' => 'Dekstromoramid',
                    'c' => 'Etkatinon',
                    'd' => 'Ganja',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_22' => [
                'pertanyaan' => 'Keluarga yang tidak harmonis dapat memicu remaja untuk?',
                'pilihan' => [
                    'a' => 'Memilih teman yang baik',
                    'b' => 'Menghindari narkoba',
                    'c' => 'Mencari pelarian melalui narkoba',
                    'd' => 'Menjadi lebih mandiri',
                ],
                'jawaban_benar' => 'c'
            ],
            'soal_23' => [
                'pertanyaan' => 'Langkah represif dalam pencegahan narkoba melibatkan?',
                'pilihan' => [
                    'a' => 'Pelaporan dan tindakan hukum terhadap penyalahgunaan narkoba',
                    'b' => 'Rehabilitasi medis',
                    'c' => 'Pencegahan penggunaan narkoba melalui pendidikan',
                    'd' => 'Pengobatan terhadap pengguna narkoba',
                ],
                'jawaban_benar' => 'a'
            ],
            'soal_24' => [
                'pertanyaan' => 'Mengapa rehabilitasi penting setelah seseorang menjalani pengobatan narkoba?',
                'pilihan' => [
                    'a' => 'Untuk menindak pengedar narkoba',
                    'b' => 'Untuk mengembalikan fisik dan mental pengguna menjadi normal',
                    'c' => 'Untuk mengurangi efek kecanduan narkoba',
                    'd' => 'Untuk mencegah penyakit menular',
                ],
                'jawaban_benar' => 'b'
            ],
            'soal_25' => [
                'pertanyaan' => 'Narkoba dapat menyebabkan gangguan reproduksi yang meliputi?',
                'pilihan' => [
                    'a' => 'Penurunan fungsi hormon reproduksi dan gangguan fungsi seksual',
                    'b' => 'Peningkatan fungsi hormon',
                    'c' => 'Pemulihan cepat dari penyakit menular seksual',
                    'd' => 'Peningkatan kesuburan',
                ],
                'jawaban_benar' => 'a'
            ],
        ];

        foreach ($soal_jawaban as $key => $value) {
            $soal_jawaban[$key]['jawaban_user'] = $request->input($key);
            $soal_jawaban[$key]['benar'] = $request->input($key) == $value['jawaban_benar'];
        }

        $show_jawaban = true;

        // dd($soal_jawaban);

        return view('ayo-jauhi-narkoba.index', compact('soal_jawaban', 'show_jawaban'));
    }
}
