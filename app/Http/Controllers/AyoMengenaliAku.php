<?php

namespace App\Http\Controllers;

use App\Models\AccurateSelfAssesmentIT;
use App\Models\AccurateSelfAssesmentRD;
use App\Models\AccurateSelfAssesmentSK;
use App\Models\DetailJawaban;
use App\Models\EmotionalAwarenessSK;
use App\Models\EmotionalAwarenessSP;
use App\Models\JauhiNarkobaSP;
use App\Models\JawabanMateriNarkoba;
use App\Models\JawabanSoalEmosi;
use App\Models\LKSelfConfidence;
use App\Models\SelfConfidenceIT;
use App\Models\SelfConfidentPKD;
use App\Models\SelfConfidentSK;
use Illuminate\Http\Request;

class AyoMengenaliAku extends Controller
{
    public function index()
    {
        // find jawaban soal emosi based on user id
        // $jawaban_emosi = JawabanSoalEmosi::where('user_id', auth()->user()->id)->get();

        $jawaban_user_amarah = JawabanSoalEmosi::where('kategori_emosi', 'Amarah')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first() ?
            JawabanSoalEmosi::where('kategori_emosi', 'Amarah')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray() : null;

        $jawaban_user_cemburu = JawabanSoalEmosi::where('kategori_emosi', 'Cemburu')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first() ?
            JawabanSoalEmosi::where('kategori_emosi', 'Cemburu')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray() : null;

        $jawaban_user_cinta = JawabanSoalEmosi::where('kategori_emosi', 'Cinta')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first() ?
            JawabanSoalEmosi::where('kategori_emosi', 'Cinta')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()->detailJawaban->toArray()
            : null;

        $jawaban_user_iri = JawabanSoalEmosi::where('kategori_emosi', 'Iri')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Iri')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()
            : null;

        $jawaban_user_kebahagiaan = JawabanSoalEmosi::where('kategori_emosi', 'Kebahagiaan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Kebahagiaan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()
            : null;

        // kesedihan, malu, menjijikkan, bersalah, takut
        $jawaban_user_kesedihan = JawabanSoalEmosi::where('kategori_emosi', 'Kesedihan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ? JawabanSoalEmosi::where('kategori_emosi', 'Kesedihan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()
            : null;

        $jawaban_user_malu = JawabanSoalEmosi::where('kategori_emosi', 'Malu')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Malu')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()
            : null;

        $jawaban_user_menjijikkan = JawabanSoalEmosi::where('kategori_emosi', 'Menjijikkan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Menjijikkan')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()
            : null;

        $jawaban_user_bersalah = JawabanSoalEmosi::where('kategori_emosi', 'Bersalah')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Bersalah')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray() : null;

        $jawaban_user_takut = JawabanSoalEmosi::where('kategori_emosi', 'Takut')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            JawabanSoalEmosi::where('kategori_emosi', 'Takut')
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->detailJawaban
            ->toArray()

            : null;

        $jawaban_accurate_sk_1 = AccurateSelfAssesmentSK::where('Kategori_SK', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentSK::where('Kategori_SK', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_accurate_sk_2 = AccurateSelfAssesmentSK::where('Kategori_SK', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentSK::where('Kategori_SK', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_accurate_sk_3 = AccurateSelfAssesmentSK::where('Kategori_SK', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentSK::where('Kategori_SK', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_accurate_sk_rev = AccurateSelfAssesmentSK::where('user_id', auth()->user()->id)
            ->whereNull('Kategori_SK')
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentSK::where('user_id', auth()->user()->id)
            ->whereNull('Kategori_SK')
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;
        // dd($jawaban_accurate_sk_rev);

        $jawaban_accurate_it = AccurateSelfAssesmentIT::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentIT::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;


        $message_instrumen = "";

        if ($jawaban_accurate_it) {
            if ($jawaban_accurate_it['score'] >= 60 && $jawaban_accurate_it['score'] <= 80) {
                $message_instrumen = "Anda memiliki tingkat Accurate Self-Assessment yang sangat baik. Anda mampu mengevaluasi kelebihan dan kekurangan Anda secara obyektif, terbuka terhadap kritik dan saran, dan secara aktif mengambil langkah-langkah untuk memperbaiki diri";
            } else if ($jawaban_accurate_it['score'] >= 40 && $jawaban_accurate_it['score'] <= 59) {
                $message_instrumen = "Anda cukup baik dalam penilaian diri yang akurat, namun mungkin masih ada beberapa area di mana Anda bisa lebih proaktif dalam menerima kritik dan saran atau memperbaiki kekurangan diri";
            } else if ($jawaban_accurate_it['score'] >= 20 && $jawaban_accurate_it['score'] <= 39) {
                $message_instrumen = "Anda mungkin perlu bekerja lebih keras dalam mengenali kelebihan, kekurangan, dan menggunakan kritik konstruktif atau membangun untuk pengembangan diri. Refleksi lebih lanjut dan tindakan perbaikan dapat membantu meningkatkan kemampuan Anda dalam penilaian diri";
            } else if ($jawaban_accurate_it['score'] < 20) {
                $message_instrumen = "Anda mungkin menghadapi kesulitan dalam menilai diri secara obyektif, mengenali kekurangan, atau menerima kritik. Mungkin ini saatnya untuk mempertimbangkan lebih banyak refleksi diri dan keterbukaan terhadap masukan dari orang lain.";
            }
        }

        $jawaban_accurate_rd = AccurateSelfAssesmentRD::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            AccurateSelfAssesmentRD::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_self_confidence_sk_rev = SelfConfidentSK::where('user_id', auth()->user()->id)
            ->whereNull('Kategori_SK')
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            SelfConfidentSK::where('user_id', auth()->user()->id)
            ->whereNull('Kategori_SK')
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_self_confidence_sk1 = SelfConfidentSK::where('Kategori_SK', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            SelfConfidentSK::where('Kategori_SK', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_self_confidence_sk2 = SelfConfidentSK::where('Kategori_SK', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            SelfConfidentSK::where('Kategori_SK', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_self_confidence_sk3 = SelfConfidentSK::where('Kategori_SK', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            SelfConfidentSK::where('Kategori_SK', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_self_confidence_pkd = SelfConfidentPKD::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            SelfConfidentPKD::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_lk_self_con_1 = LKSelfConfidence::where('Kategori_Bagian', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            LKSelfConfidence::where('Kategori_Bagian', 1)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_lk_self_con_2 = LKSelfConfidence::where('Kategori_Bagian', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            LKSelfConfidence::where('Kategori_Bagian', 2)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        $jawaban_lk_self_con_3 = LKSelfConfidence::where('Kategori_Bagian', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ?
            LKSelfConfidence::where('Kategori_Bagian', 3)
            ->where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->first()
            ->toArray()
            : null;

        // dd($jawaban_lk_self_con_1);


        // MULAI VARIABEL DARI DOCUMENT CLIENT
        $amarah =
            [
                'jawaban_emosi' => $jawaban_user_amarah,
                'nama_emosi' => 'Amarah',
                'jenis_emosi' => 'Emosi Negatif',
                'penjelasan' => 'Amarah muncul sebagai respons terhadap terhalangnya tujuan atau aktivitas penting.',
                'penyebab' => 'Emosi ini bisa disebabkan oleh perasaan diperlakukan tidak adil, kegagalan mencapai sesuatu yang direncanakan, atau penilaian situasi yang dianggap salah.',
                'contoh' => 'Merasa ketidakadilan, gagal mencapai tujuan.',
                'reaksi' => 'Tubuh menegang, menggertakkan gigi, mengepal tangan, wajah memerah, dan merasa akan meledak.',
                'akibat' => 'Bisa menyebabkan tidak fokus, depresi, bahkan melukai orang lain.',
                'pengelolaan' => 'Menenangkan diri, merenungi penyebab amarah, berusaha berpikir positif, dan mencari solusi yang tepat, serta hindari hal-hal yang bisa memicu kemarahan.',
                'potensi_penggunaan_narkoba' => 'Penggunaan narkoba bisa menjadi pelarian dari amarah atau frustasi.',
                'studi_kasus' => 'Ali adalah seorang siswa SMP yang sangat ambisius dan selalu ingin mencapai nilai tinggi di sekolah. Suatu hari, saat mengikuti ujian matematika, ia merasa telah mempersiapkan diri dengan baik dan yakin akan mendapatkan nilai sempurna. Namun, ketika hasil ujian keluar, Ali mendapatkan nilai lebih rendah daripada harapannya karena ada beberapa soal yang salah ia jawab. Ali merasa sangat kecewa dan marah pada dirinya sendiri serta menganggap bahwa soal-soal tersebut tidak adil. Dia merasa seharusnya mendapatkan nilai lebih tinggi dan menilai bahwa keadaan tersebut tidak seharusnya terjadi. <br> <p> Karena rasa marahnya, Ali mulai menggertakkan giginya, mengepalkan tangan, dan merasakan wajahnya memerah. Ia merasa akan "meledak" dan mulai menyalahkan guru yang membuat soal serta merasa bahwa temantemannya tidak seharusnya mendapatkan nilai lebih baik darinya. Setelah kejadian ini, Ali tidak bisa fokus belajar selama beberapa hari  dan menjadi sangat sensitif terhadap komentar orang lain.</p>',
                'pertanyaan' => [
                    '1' => [
                        'pertanyaan' => 'Apa penyebab utama kemarahan Ali dalam situasi ini?',
                        'pilihan' => [
                            'a' => 'Ali merasa nilai yang didapatkan tidak sesuai dengan usahanya',
                            'b' => 'Ali tidak mempersiapkan ujian dengan baik',
                            'c' => 'Ali tidak menyukai mata pelajaran matematika',
                            'd' => 'Teman-temannya mendapatkan nilai lebih tinggi darinya',
                        ]
                    ],
                    '2' => [
                        'pertanyaan' => 'Apa reaksi fisik yang Ali rasakan ketika marah?',
                        'pilihan' => [
                            'a' => 'Dia merasa bahagia dan bersemangat',
                            'b' => 'Dia merasa tenang dan santai',
                            'c' => 'Dia menggertakkan gigi, mengepalkan tangan, dan wajahnya memerah',
                            'd' => 'Dia tertawa dan berbicara dengan lantang',
                        ]
                    ],
                    '3' => [
                        'pertanyaan' => 'Bagaimana Ali dapat mengelola kemarahannya dengan lebih baik?',
                        'pilihan' => [
                            'a' => 'Menyalahkan guru atas soal-soal yang sulit',
                            'b' => 'Melampiaskan kemarahannya pada teman-temannya',
                            'c' => 'Menenangkan diri dengan menarik napas dalam dan berbicara dengan orang lain tentang perasaannya',
                            'd' => 'Mengabaikan rasa marahnya dan terus menyalahkan dirinya sendiri',
                        ]
                    ],
                    '4' => [
                        'pertanyaan' => 'Apa dampak dari kemarahan Ali terhadap kinerjanya di sekolah?',
                        'pilihan' => [
                            'a' => 'Ia menjadi lebih fokus dan termotivasi untuk belajar',
                            'b' => 'Ia menjadi sulit berkonsentrasi dan sensitif terhadap komentar orang lain',
                            'c' => 'Ia semakin tertarik dengan matematika',
                            'd' => 'Ia menjadi lebih bersahabat dengan teman-temannya',
                        ]
                    ],
                    '5' => [
                        'pertanyaan' => 'Jika Ali tidak dapat mengelola kemarahannya dengan baik, bagaimana potensi penggunaan narkoba dapat menjadi pelarian bagi Ali?',
                        'pilihan' => [
                            'a' => 'Ali akan mencari dukungan dari teman-temannya',
                            'b' => 'Ali akan mulai mempelajari lebih banyak tentang narkoba sebagai solusi akademis',
                            'c' => 'Ali akan berhenti berusaha dan menyerah dalam belajar',
                            'd' => 'Ali mungkin mencari pelarian dari rasa frustrasi dan kemarahannya melalui penggunaan narkoba',
                        ]
                    ],
                    '6' => [
                        'pertanyaan' => 'Berikan saran mengenai cara yang dapat dilakukan Ali untuk meredakan rasa marahnya?',
                        'pilihan' => [
                            'a' => 'Menyalahkan orang lain atas masalah yang dihadapi',
                            'b' => 'Membicarakan perasaan dengan guru atau konselor, melakukan meditasi, atau menulis jurnal',
                            'c' => 'Menghindari semua interaksi dengan orang lain',
                            'd' => 'Membiarkan kemarahan mengendalikan keputusannya',
                        ]
                    ]

                ]
            ];


        $cemburu = [
            'jawaban_emosi' => $jawaban_user_cemburu,
            'nama_emosi' => 'Cemburu',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Cemburu (Jealousy) merupakan salah satu emosi negatif yang muncul ketika seseorang merasa ada ancaman terhadap hal penting yang dimilikinya, baik itu hubungan, perhatian, atau barang yang disukai.',
            'penyebab' => 'Cemburu sering kali berkaitan dengan perasaan bahwa seseorang atau sesuatu yang sangat berharga akan diambil oleh orang lain. Perasaan ini juga dapat dipicu oleh situasi di mana perhatian yang diinginkan tertuju pada orang lain, atau ketika seseorang merasa tidak setara dengan orang lain.',
            'ciri_ciri' => 'Berkaitan dengan rasa kurang percaya, posesif (perilaku ketika seseorang merasa menjadi pemilik atas sesuatu, baik benda maupun manusia), dan takut kehilangan.',
            'contoh' => 'Melihat teman mendapatkan barang mewah atau perhatian yang diinginkan, atau merasa bahwa orang tua lebih menyayangi saudara lain.',
            'reaksi' => 'Tubuh mungkin menegang, jantung berdetak cepat, sesak napas, atau muncul perasaan curiga dan terluka harga dirinya. Perilaku bisa menjadi defensif, waspada, atau mencoba mempertahankan hal yang menjadi sumber kecemburuan.',
            'pengelolaan' => 'Mengelola cemburu dapat dilakukan dengan belajar berbagi, menghargai apa yang sudah dimiliki, dan berhenti mengontrol orang lain.<br> Fokus pada diri sendiri, seperti mengembangkan keterampilan atau hobi, bisa membantu mengurangi intensitas emosi ini.',
            'potensi_penggunaan_narkoba' => 'Ada kemungkinan seseorang menggunakan narkoba sebagai pelarian dari perasaan cemburu atau rendah diri yang intens, terutama jika emosi ini tidak dikelola dengan baik. Emosi cemburu sering kali memengaruhi kualitas hubungan dan interaksi sosial.',
            'studi_kasus' => 'Sinta adalah seorang siswi yang rajin dan selalu mendapatkan nilai yang baik di kelas. Namun, suatu hari, dia merasa sangat cemburu ketika mengetahui bahwa temannya, Rina, mendapatkan nilai lebih tinggi darinya dalam ujian matematika. Sinta merasa bahwa ia sudah belajar keras dan tidak pantas kalah dari Rina. Selain itu, ia juga melihat Rina sering mendapatkan perhatian lebih dari teman-temannya karena sering dipuji oleh guru. Hal ini membuat Sinta merasa cemburu dan semakin tidak nyaman berada di dekat Rina. <br> <p>Suatu hari, Sinta menghindari Rina dan mulai menyebarkan gosip bahwa Rina sebenarnya menyontek dalam ujian agar mendapatkan nilai tinggi. Teman-teman mulai percaya pada gosip tersebut, dan hubungan Sinta dan Rina menjadi semakin renggang.</p>',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama dari perasaan cemburu yang dirasakan oleh Sinta?',
                    'pilihan' => [
                        'a' => 'Rina mendapatkan perhatian lebih dari guru dan teman-teman',
                        'b' => 'Sinta merasa tidak belajar cukup keras',
                        'c' => 'Sinta merasa terancam oleh prestasi Rina yang lebih baik',
                        'd' => 'Rina menyontek dalam ujian',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana reaksi Sinta terhadap perasaan cemburunya?',
                    'pilihan' => [
                        'a' => 'Sinta mulai belajar lebih keras untuk mengalahkan Rina di ujian berikutnya',
                        'b' => 'Sinta menghindari Rina dan menyebarkan gosip tentangnya',
                        'c' => 'Sinta menerima kenyataan dan tetap bersahabat dengan Rina',
                        'd' => 'Sinta meminta bantuan kepada guru untuk meningkatkan nilainya',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apakah akibat dari reaksi Sinta terhadap perasaan cemburunya?',
                    'pilihan' => [
                        'a' => 'Hubungan antara Sinta dan Rina menjadi semakin renggang',
                        'b' => 'Hubungan antara Sinta dan Rina menjadi semakin dekat',
                        'c' => 'Sinta berhasil mendapatkan nilai yang lebih baik dari Rina',
                        'd' => 'Teman-teman mulai menjauhi Sinta karena gosipnya terbukti salah',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana Sinta seharusnya mengelola perasaan cemburunya dengan cara yang lebih positif?',
                    'pilihan' => [
                        'a' => 'Membandingkan dirinya lebih sering dengan Rina untuk mendapatkan motivasi',
                        'b' => 'Mencari cara untuk menjatuhkan Rina di depan teman-teman',
                        'c' => 'Fokus pada pengembangan diri dan mensyukuri apa yang telah ia capai',
                        'd' => 'Menyebarkan lebih banyak gosip untuk mendapatkan simpati teman-teman',
                    ]
                ]
            ]
        ];

        $cinta = [
            'jawaban_emosi' => $jawaban_user_cinta,
            'nama_emosi' => 'Cinta',
            'jenis_emosi' => 'Emosi Positif',
            'penjelasan' => 'Cinta (Love) merupakan salah satu emosi positif yang menggambarkan perasaan keterikatan, kasih sayang, dan kepedulian yang kuat terhadap seseorang atau sesuatu. Emosi ini bisa diarahkan kepada orang terdekat, seperti keluarga dan teman, maupun aktivitas atau hobi yang disukai. Cinta menghasilkan perasaan bahagia, nyaman, dan damai. Ketika merasakan cinta, seseorang biasanya lebih bersemangat, optimis, dan merasa aman.',
            'penyebab' => 'Perasaan cinta bisa berasal dari rasa dihargai, dibutuhkan atau membutuhkan orang lain. Cinta juga bisa muncul karena adanya ketertarikan terhadap kepribadian baik seseorang atau keterlibatan dalam kegiatan yang menyenangkan.',
            'reaksi' => 'Biasanya ditandai dengan meningkatnya rasa percaya diri, kebahagiaan, keinginan untuk menghabiskan waktu bersama, dan sering kali diekspresikan dengan senyuman. Emosi cinta cenderung membuat seseorang fokus pada sisi positif dari hal-hal atau orang yang mereka cintai.',
            'dampak' => 'Meningkatnya rasa percaya diri dan optimisme. Selain itu, cinta juga mendorong seseorang untuk menjaga dan melindungi hal-hal yang mereka cintai, tanpa terobsesi berlebihan.',
            'pengelolaan' => 'Menjaga keseimbangan dalam hubungan atau aktivitas yang dicintai, menghargai momen bersama, dan tidak terlalu terikat secara obsesif pada orang atau hal-hal yang dicintai.',
            'potensi_penggunaan_narkoba' => 'Cinta sebagai emosi positif tidak memiliki potensi langsung menyebabkan penggunaan narkoba, melainkan bisa menjadi motivasi untuk menjaga kesejahteraan pribadi dan orang-orang di sekitar.',
            'studi_kasus' => 'Rina adalah seorang remaja yang sangat mencintai dunia musik. Sejak kecil, ia sudah terbiasa mendengarkan berbagai jenis musik dan belajar memainkan gitar. Musik menjadi pelarian bagi Rina ketika ia merasa sedih, stres, atau bosan. Bermain gitar dan menciptakan lagu-lagu sederhana membuatnya merasa tenang dan bahagia. Setiap kali ia pulang dari sekolah, hal pertama yang ia lakukan adalah mengambil gitarnya dan mulai memainkan lagu favoritnya. Cinta Rina terhadap musik bahkan membuatnya bergabung dengan sebuah band di sekolahnya, dan ia sangat menikmati setiap kesempatan untuk tampil di depan teman-temannya. Suatu hari, ibunya meminta Rina untuk mengurangi waktu yang dihabiskan bermain gitar dan lebih fokus pada tugas sekolahnya, karena nilainya mulai menurun. Rina merasa terjebak di antara cintanya terhadap musik dan kewajibannya untuk belajar lebih keras. Ia merasa bahwa bermain musik adalah bagian penting dari dirinya dan sulit baginya untuk mengurangi waktu yang ia habiskan dengan gitarnya. Ia mulai merasa frustrasi karena tidak dapat menyeimbangkan hobinya dan tanggung jawabnya sebagai siswa.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama dilema yang dialami Rina dalam situasi ini?',
                    'pilihan' => [
                        'a' => 'Rina ingin bergabung dengan band yang lebih besar',
                        'b' => 'Nilai Rina menurun akibat terlalu banyak bermain musik',
                        'c' => 'Rina tidak memiliki cukup waktu untuk berlatih gitar',
                        'd' => 'Teman-teman Rina tidak mendukung hobinya',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana perasaan cinta Rina terhadap musik mempengaruhi kehidupannya secara keseluruhan?',
                    'pilihan' => [
                        'a' => 'Musik membuat Rina merasa tenang dan bahagia',
                        'b' => 'Musik membuat Rina mudah marah dan kecewa',
                        'c' => 'Musik membuat Rina lebih fokus pada tugas sekolah',
                        'd' => 'Musik tidak memiliki dampak pada kehidupan Rina',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari hobi Rina terhadap kinerjanya di sekolah?',
                    'pilihan' => [
                        'a' => 'Rina mendapat nilai yang lebih tinggi',
                        'b' => 'Rina mengabaikan band sekolahnya',
                        'c' => 'Rina mengalami penurunan nilai karena lebih banyak bermain gitar',
                        'd' => 'Rina menjadi lebih populer di sekolah',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Rina tidak dapat menemukan keseimbangan antara hobinya dan kewajibannya, bagaimana ini dapat memengaruhi kesehatannya secara emosional dan akademik?',
                    'pilihan' => [
                        'a' => 'Rina mungkin akan merasa lebih stres dan tertekan',
                        'b' => 'Rina akan menjadi lebih sukses secara akademik',
                        'c' => 'Rina akan berhenti bermain musik sepenuhnya',
                        'd' => 'Rina akan memiliki lebih banyak waktu untuk bersosialisasi',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Berikan saran mengenai cara-cara yang dapat dilakukan Rina untuk tetap mencintai musiknya tanpa mengorbankan tanggung jawabnya di sekolah?',
                    'pilihan' => [
                        'a' => 'Rina dapat meninggalkan musik agar fokus pada sekolah',
                        'b' => 'Rina dapat membuat jadwal yang seimbang antara bermain musik dan belajar',
                        'c' => 'Rina dapat meminta teman-temannya untuk menggantikan tugas sekolahnya',
                        'd' => 'Rina harus berhenti dari band sekolah',
                    ]
                ]
            ]
        ];

        $iri = [
            'jawaban_emosi' => $jawaban_user_iri,
            'nama_emosi' => 'Iri',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Perasaan iri muncul ketika seseorang menginginkan apa yang dimiliki oleh orang lain, seperti kekayaan, prestasi, atau penampilan. Emosi ini sering muncul karena perbandingan diri sendiri dengan orang lain yang memiliki kelebihan tertentu',
            'penyebab' => '- Merasa hidup tidak adil dan tidak dihargai <br> - Membandingkan diri dengan orang lain yang dianggap lebih sukses, beruntung, atau memiliki sesuatu yang diinginkan (misalnya, materi, prestasi, atau pengakuan)',
            'contoh' => '- Merasa iri ketika melihat teman selalu mendapatkan nilai tertinggi di kelas <br> - Iri pada teman yang lebih populer dan memiliki banyak teman di sekolah',
            'reaksi' => '- Iri sering memicu perasaan marah, frustrasi, rendah diri, atau bahkan kebencian terhadap orang yang menjadi target iri <br> -  Bisa mengarah pada tindakan negatif seperti merendahkan orang lain, bersikap dingin, atau mencari cara untuk menyaingi mereka',
            'dampak' => '- Terlalu fokus pada pencapaian orang lain <br> - Tidak dapat melihat apa yang telah dimiliki <br> - Merusak hubungan sosial dan memicu konflik antar individu <br> - Menyebabkan stres, kecemasan, dan penurunan harga diri yang berlebihan',
            'pengelolaan' => '- Bersyukur dengan apa yang dimiliki <br> - Berusaha berpikir positif <br> - Fokus pada diri sendiri dan mengembangkan potensi yang dimiliki <br> - Menjauh dari lingkungan yang toxic',
            'potensi_penggunaan_narkoba' => 'Menggunakan narkoba sebagai pelarian dari perasaan iri atau ketidakpuasan terhadap diri sendiri',
            'studi_kasus' => 'Budi adalah seorang siswa yang rajin dan selalu berusaha keras dalam belajar. Namun, ia merasa kecewa karena meskipun sudah berusaha sebaik mungkin, nilainya masih belum memuaskan. Di sisi lain, teman sekelasnya, Doni, tampaknya selalu mendapatkan nilai yang tinggi tanpa perlu usaha yang terlalu keras. Budi mulai merasa iri terhadap Doni. Ia merasa bahwa tidak adil bahwa Doni bisa mendapatkan nilai yang lebih baik dengan usaha yang lebih sedikit. Setiap kali Doni mendapatkan pujian dari guru atau teman-temannya karena prestasinya, Budi merasa kesal dan semakin tidak puas dengan dirinya sendiri. <br> <p class="indent-8"> Perasaan iri ini mulai mempengaruhi hubungan Budi dengan Doni. Budi mulai menjauhi Doni, enggan berbicara dengannya, dan bahkan merasa senang jika Doni melakukan kesalahan kecil. Perasaan ini membuat Budi sulit untuk fokus pada tugastugas sekolahnya, dan ia mulai meragukan kemampuan dirinya sendiri.</p>',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama rasa iri yang dialami oleh Budi?',
                    'pilihan' => [
                        'a' => 'Budi merasa bahwa Doni tidak berhak mendapatkan pujian',
                        'b' => 'Budi merasa bahwa usahanya tidak dihargai sebanding dengan hasilnya',
                        'c' => 'Doni sering merendahkan Budi di depan teman-temannya',
                        'd' => 'Budi iri karena Doni sering bermain video game',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana perasaan iri Budi mempengaruhi hubungannya dengan Doni?',
                    'pilihan' => [
                        'a' => 'Budi menjadi lebih dekat dengan Doni',
                        'b' => 'Budi mulai menjauhi dan enggan berbicara dengan Doni',
                        'c' => ' Budi berusaha membantu Doni agar lebih sukses',
                        'd' => 'Budi mengabaikan perasaan irinya dan tetap bersahabat dengan Doni',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari perasaan iri Budi terhadap kinerjanya di sekolah?',
                    'pilihan' => [
                        'a' => ' Budi menjadi lebih fokus dan termotivasi untuk belajar',
                        'b' => 'Budi semakin sulit fokus pada tugastugas sekolahnya',
                        'c' => 'Budi meraih prestasi yang lebih tinggi daripada sebelumnya',
                        'd' => 'Budi mulai mengerjakan tugas bersama dengan Doni',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Budi tidak dapat mengelola rasa irinya, bagaimana ini dapat mempengaruhi kesehatan emosionalnya?',
                    'pilihan' => [
                        'a' => 'Budi mungkin akan merasa lebih stres dan cemas',
                        'b' => 'Budi akan menjadi lebih percaya diri dan optimis',
                        'c' => 'Budi akan merasa lebih damai dan tenang',
                        'd' => 'Budi akan mengembangkan hubungan yang lebih baik dengan Doni ',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Berikan saran mengenai cara-cara yang dapat dilakukan Budi untuk mengatasi rasa irinya dan tetap fokus pada pengembangan dirinya?',
                    'pilihan' => [
                        'a' => 'Budi dapat berhenti belajar dan menyerah pada situasinya',
                        'b' => 'Budi dapat terus membandingkan dirinya dengan Doni untuk meningkatkan motivasinya',
                        'c' => 'Budi harus menghindari Doni dan teman-temannya agar tidak merasa iri lagi',
                        'd' => 'Budi dapat membicarakan perasaannya dengan Doni dan mencoba memahami perjuangan Doni',
                    ]
                ]
            ]
        ];

        $happiness = [
            'jawaban_emosi' => $jawaban_user_kebahagiaan,
            'nama_emosi' => 'Kebahagiaan',
            'jenis_emosi' => 'Emosi Positif',
            'penjelasan' => 'Kebahagiaan (Happiness) adalah salah satu jenis emosi positif yang muncul ketika seseorang merasa senang, tenang, dan puas terhadap sesuatu hal atau seseorang. Emosi ini sering terjadi saat seseorang menerima kejutan yang menyenangkan, mendapatkan hasil yang diinginkan setelah berusaha keras, atau mendapatkan kasih sayang dari orang-orang di sekitar mereka.',
            'penyebab' => "- Mendapatkan hasil yang memuaskan dari usaha atau kerja keras,<br> - Menerima kejutan yang luar biasa, <br> - Mendapatkan kasih sayang dan perhatian",
            'reaksi' => "<br> - Wajah cerah dan tersenyum, <br> - Merasa tenang dan damai, <br> - Berbicara dengan nada positif dan penuh antusiasme",
            'dampak' => "<br> - Meningkatkan rasa percaya diri dan optimisme, <br> - Meningkatkan kesejahteraan fisik dan mental, <br> - Membuat seseorang lebih terbuka dan ramah terhadap orang lain",
            'pengelolaan' => "<br> - Bersyukur kepada Tuhan atas segala hal yang membuat bahagia, <br> - Menghargai dan menyadari bahwa kebahagiaan mungkin tidak selalu bertahan selamanya, dan itu adalah hal yang wajar, <br> - Berbagi kebahagiaan dengan orang lain, misalnya melalui tindakan kebaikan atau sedekah",
            'potensi_penggunaan_narkoba' => 'Tidak ada potensi penggunaan narkoba langsung dari emosi ini, karena kebahagiaan cenderung membawa seseorang pada tindakan positif.',
            'studi_kasus' => 'Siti adalah seorang siswa yang sangat menyukai seni melukis. Setiap kali ia meluangkan waktu untuk melukis, ia merasa tenang dan bahagia. Suatu hari, sekolahnya mengadakan lomba melukis antar kelas, dan Siti dengan penuh semangat ikut berpartisipasi. Setelah berhari-hari bekerja keras menyempurnakan lukisannya, akhirnya ia memenangkan juara pertama dalam lomba tersebut. Kemenangan ini membuat Siti sangat bahagia. Ia merasa dihargai atas hasil karyanya dan bangga bisa membuktikan kemampuan dirinya. Tidak hanya itu, teman-temannya juga memberikan ucapan selamat dan guru seni mengapresiasi kerja kerasnya. Perasaan bahagia Siti membuatnya semakin percaya diri. Ia mulai merencanakan untuk terus mengembangkan bakat melukisnya dan bahkan berpikir untuk berpartisipasi dalam kompetisi-kompetisi melukis yang lebih besar di masa mendatang. Kebahagiaan yang ia rasakan juga membuatnya lebih terbuka dengan teman-temannya, dan ia merasa lebih termotivasi untuk berprestasi di bidang lain.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama kebahagiaan yang dirasakan oleh Siti?',
                    'pilihan' => [
                        'a' => 'Siti memenangkan lomba melukis antar kelas di sekolahnya',
                        'b' => 'Siti mendapat pujian dari teman-teman dan gurunya',
                        'c' => 'Siti merasa tenang setiap kali melukis',
                        'd' => 'Siti bisa meluangkan waktu untuk hobinya',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana kebahagiaan memengaruhi sikap Siti setelah memenangkan lomba?',
                    'pilihan' => [
                        'a' => 'Siti menjadi lebih percaya diri dan bersemangat untuk melukis',
                        'b' => 'Siti berhenti melukis karena merasa sudah mencapai puncak kariernya',
                        'c' => 'Siti mulai meremehkan prestasi teman-temannya yang lain',
                        'd' => 'Siti mengabaikan saran gurunya dan menjadi sombong',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak kebahagiaan yang dirasakan Siti terhadap hubungan sosialnya?',
                    'pilihan' => [
                        'a' => 'Siti menjadi lebih tertutup terhadap teman-temannya',
                        'b' => 'Siti merasa tidak perlu lagi menjalin hubungan dengan teman-teman',
                        'c' => 'Siti menjadi lebih terbuka dan ramah terhadap teman-temannya',
                        'd' => 'Siti mulai bersikap tidak peduli dengan lingkungan sekitarnya',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Jika Siti terus merasakan kebahagiaan dan motivasi ini, apa yang mungkin terjadi pada masa depannya?',
                    'pilihan' => [
                        'a' => 'Siti mungkin akan kehilangan minat pada melukis',
                        'b' => 'Siti mungkin akan meraih lebih banyak prestasi dalam seni dan bidang lainnya',
                        'c' => 'Siti mungkin akan menjadi lebih malas untuk berprestasi',
                        'd' => 'Siti mungkin akan berhenti mencoba hal-hal baru karena terlalu puas dengan keberhasilannya',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Apa saran yang dapat diberikan kepada Siti agar ia dapat terus merasakan kebahagiaan dalam mengejar hobinya?',
                    'pilihan' => [
                        'a' => 'Siti harus berhenti melukis untuk mencari hobi baru',
                        'b' => 'Siti harus mulai membandingkan karyanya dengan orang lain untuk melihat sejauh mana ia bisa bersaing',
                        'c' => 'Siti harus mengabaikan pujian dan berusaha sendirian',
                        'd' => 'Siti dapat terus mengikuti kompetisi dan mencari tantangan baru dalam melukis',
                    ]
                ]
            ]
        ];

        $sadness = [
            'jawaban_emosi' => $jawaban_user_kesedihan,
            'nama_emosi' => 'Kesedihan',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Kesedihan muncul ketika seseorang kehilangan sesuatu atau seseorang yang sangat berarti dalam hidupnya. Perasaan ini juga bisa muncul ketika tujuan yang diharapkan tidak tercapai, atau ketika menghadapi situasi yang tidak berjalan sesuai harapan. Selain itu, kesedihan bisa dipicu oleh kehilangan hubungan atau kematian seseorang yang dekat, serta akibat dari situasi yang menyakitkan secara emosional, seperti diabaikan atau di bully.',
            'contoh' => 'Mendapatkan nilai buruk dalam ujian atau tugas yang sangat penting; Kehilangan teman atau anggota keluarga tercinta; Mengalami pengabaian atau di bully oleh teman-teman.',
            'reaksi' => 'Fisik: Merasa lelah, sesak napas, menangis, merasa kosong, atau pusing; Psikologis: Murung, merasa putus asa, bingung, gelisah, dan depresi. Individu yang mengalami kesedihan cenderung menarik diri dari interaksi sosial dan aktivitas yang biasanya menyenangkan.',
            'dampak' => 'Kesedihan yang tidak dikelola dengan baik bisa memengaruhi kesejahteraan mental seseorang. Mereka mungkin merasa sulit untuk tersenyum, merasa tidak berdaya, depresi, atau bahkan mengalami gangguan tidur dan makan. Perasaan ini juga bisa menyebabkan seseorang menyalahkan diri sendiri atau terus-menerus memikirkan kejadian buruk di masa lalu.',
            'pengelolaan' => 'Menerima dan mengakui perasaan sedih tanpa berlarut-larut; Melakukan kegiatan positif atau bertemu dengan orang-orang yang dicintai untuk mendapatkan dukungan emosional; Mencari bantuan dari ahli profesional seperti psikolog jika diperlukan; Berusaha untuk tetap berpikir positif dan mencari makna atau hikmah dari pengalaman menyedihkan tersebut.',
            'potensi_penggunaan_narkoba' => 'Individu yang tidak mampu mengatasi kesedihan secara sehat mungkin mencari pelarian melalui penggunaan narkoba sebagai cara untuk menghindari perasaan sedih atau depresi yang mereka rasakan.',
            'studi_kasus' => 'Budi adalah seorang siswa yang sangat menikmati bermain sepak bola bersama teman-temannya di sekolah. Namun, suatu hari saat berlatih, Budi mengalami cedera pada kakinya yang membuatnya tidak bisa bermain sepak bola selama beberapa bulan. Ketika dokter memberitahu bahwa ia harus istirahat total dan melewatkan turnamen tersebut, Budi merasa sangat sedih dan kecewa. Kesedihan ini membuatnya kehilangan semangat untuk melakukan kegiatan lain, menjadi murung, dan jarang berbicara dengan teman-temannya, bahkan tidak tertarik untuk menonton pertandingan sepak bola.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama kesedihan Budi dalam situasi ini?',
                    'pilihan' => [
                        'a' => 'Budi harus menghadapi ujian sekolah yang sulit',
                        'b' => 'Budi tidak bisa bermain sepak bola karena cedera',
                        'c' => 'Budi merasa tertekan oleh tugas sekolah yang menumpuk',
                        'd' => 'Budi tidak lagi bersemangat belajar di sekolah',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana kesedihan memengaruhi sikap Budi terhadap kegiatan lain?',
                    'pilihan' => [
                        'a' => 'Budi menjadi lebih aktif dalam kegiatan selain sepak bola',
                        'b' => 'Budi mencoba fokus pada hobinya yang lain untuk mengalihkan perhatiannya',
                        'c' => 'Budi kehilangan minat terhadap kegiatan lain yang biasanya ia sukai',
                        'd' => 'Budi lebih sering berlatih sepak bola sendirian meskipun sedang cedera',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana teman-teman dan keluarga Budi merespons kesedihan yang ia alami?',
                    'pilihan' => [
                        'a' => 'Mereka mencoba menghiburnya dan memberikan dukungan emosional',
                        'b' => 'Mereka memarahi Budi karena tidak mau berusaha',
                        'c' => 'Mereka mengabaikan Budi karena dia tidak bisa bermain sepak bola',
                        'd' => 'Mereka memaksa Budi untuk bermain sepak bola meskipun cedera',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Apa dampak dari kesedihan yang dialami Budi terhadap hubungan sosialnya?',
                    'pilihan' => [
                        'a' => 'Budi menjadi lebih dekat dengan teman-temannya',
                        'b' => 'Budi semakin aktif berpartisipasi dalam kegiatan sosial di luar sekolah',
                        'c' => 'Budi mencari teman-teman baru yang tidak bermain sepak bola',
                        'd' => 'Budi jarang berbicara dengan teman-temannya dan lebih suka menyendiri',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Apa saran yang dapat diberikan kepada Budi agar ia bisa bangkit dari kesedihannya?',
                    'pilihan' => [
                        'a' => 'Budi sebaiknya fokus pada kesedihannya dan menjauh dari orang lain',
                        'b' => 'Budi harus berhenti memikirkan cedera dan segera kembali bermain meskipun belum sembuh',
                        'c' => 'Budi sebaiknya tidak mencari bantuan dan mencoba mengatasi masalahnya sendirian',
                        'd' => 'Budi harus mencari kegiatan baru yang tidak memerlukan aktivitas fisik seperti sepak bola',
                    ]
                ],
            ]
        ];

        $shame = [
            'jawaban_emosi' => $jawaban_user_malu,
            'nama_emosi' => 'Malu',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Emosi malu adalah perasaan tidak nyaman yang muncul ketika kita merasa tidak sesuai dengan standar sosial atau ketika tindakan, perilaku, atau kondisi kita diketahui oleh orang lain. Perasaan malu seringkali berkaitan dengan kesadaran diri yang tinggi tentang kesalahan atau kegagalan yang kita alami di hadapan orang lain. Malu juga bisa dipicu oleh rasa takut ditolak, merasa kurang atau berbeda dari orang lain, atau mengalami kegagalan dalam hal yang dirasa penting.',
            'penyebab' => "- Ditolak oleh seseorang yang disayangi, <br> - Orang lain mengetahui kesalahan yang kita buat, <br> - Merasa tidak sesuai dengan standar yang ada di masyarakat, <br> - Dikhianati oleh seseorang yang dipercaya, <br> - Gagal dalam suatu hal yang dirasa mampu atau seharusnya berhasil",
            'reaksi' => "<br> - Merasa takut, <br> - Ingin menghilang atau bersembunyi, <br> - Menundukkan kepala dan menghindari kontak mata",
            'dampak' => "<br> - Menyalahkan diri sendiri, <br> - Berkecenderungan untuk menarik diri dari interaksi sosial, <br> - Potensi munculnya konflik dengan orang lain",
            'pengelolaan' => "<br> - Menerima dan mengakui perasaan malu yang hadir, <br> - Mengakui kesalahan dan introspeksi diri, <br> - Meminta maaf jika ada kesalahan, <br> - Berusaha mengubah perilaku yang tidak sesuai dengan norma atau standar sosial",
            'potensi_penggunaan_narkoba' => 'Orang yang mengalami malu dapat mencari pelarian melalui narkoba untuk menghindari perasaan malu atau kegagalan yang dirasakan.',
            'studi_kasus' => "Dina adalah seorang siswa SMP yang sangat menyukai menari dan sering berlatih untuk mengikuti kompetisi. Setelah berbulan-bulan mempersiapkan diri, ia akhirnya tampil di depan seluruh sekolah dalam sebuah pertunjukan besar. Namun ketika Dina mulai menari, ia melakukan kesalahan besar dan hampir terjatuh. Penonton memberikan tepuk tangan, tetapi Dina merasa sangat malu. Ia terus teringat pada kesalahan itu dan merasa semua orang menertawakannya di belakang. Dina mulai menghindari latihan menari dan bahkan menolak tawaran untuk tampil lagi. Ia khawatir bahwa setiap orang menganggapnya penari yang buruk dan tidak kompeten.",
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama rasa malu yang dialami Dina dalam situasi ini?',
                    'pilihan' => [
                        'a' => 'Dina tidak berlatih cukup untuk pertunjukan',
                        'b' => 'Dina merasa malu karena melakukan kesalahan saat tampil di depan umum',
                        'c' => 'Penonton mengkritik Dina secara terbuka',
                        'd' => 'Dina dipaksa untuk tampil di acara tersebut',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana rasa malu yang dirasakan Dina mempengaruhi tindakannya setelah kejadian tersebut?',
                    'pilihan' => [
                        'a' => 'Dina menjadi lebih percaya diri dan bersemangat untuk berlatih',
                        'b' => 'Dina melupakan kesalahan itu dan langsung berlatih untuk kompetisi berikutnya',
                        'c' => 'Dina menghindari latihan menari dan menolak tawaran untuk tampil lagi',
                        'd' => 'Dina menjadi lebih giat berlatih agar tidak melakukan kesalahan lagi',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari rasa malu Dina terhadap persepsinya tentang dirinya sendiri?',
                    'pilihan' => [
                        'a' => 'Dina merasa bahwa semua orang mendukungnya dan melihat potensinya',
                        'b' => 'Dina merasa bahwa kesalahannya tidak berarti dan ia tetap percaya diri',
                        'c' => 'Dina merasa bahwa orang-orang mengabaikan penampilannya dan fokus pada hal lain',
                        'd' => 'Dina merasa bahwa dirinya adalah penari yang buruk dan tidak kompeten',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Apa yang dapat Dina lakukan untuk mengelola rasa malu yang dirasakannya?',
                    'pilihan' => [
                        'a' => 'Berbicara dengan teman atau mentor tentang perasaannya dan meminta saran yang positif atau membangun',
                        'b' => 'Mengabaikan kejadian tersebut dan berhenti menari sepenuhnya',
                        'c' => 'Menyalahkan penonton karena tidak cukup mendukungnya',
                        'd' => 'Menolak berbicara tentang kejadian itu dan tetap merasa malu',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Bagaimana cara Dina bisa kembali menemukan kepercayaan dirinya setelah kejadian ini?',
                    'pilihan' => [
                        'a' => 'Menghindari tampil di depan umum untuk mengurangi risiko kesalahan',
                        'b' => 'Menerima bahwa kesalahan adalah bagian dari proses belajar dan kembali berlatih dengan semangat',
                        'c' => 'Menyalahkan orang lain atas rasa malu yang dialaminya',
                        'd' => 'Menunggu hingga orang lain melupakan kesalahannya sebelum tampil lagi',
                    ]
                ],
            ]
        ];

        $disgust = [
            'jawaban_emosi' => $jawaban_user_menjijikkan,
            'nama_emosi' => 'Menjijikkan',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Emosi menjijikkan adalah salah satu jenis emosi negatif yang muncul ketika seseorang merasa tidak nyaman terhadap objek, peristiwa, atau situasi tertentu yang dianggap kotor, tercemar, atau tidak pantas. Perasaan ini bisa dipicu oleh berbagai hal, seperti melihat kotoran, mencium bau yang tidak sedap, atau menyaksikan perilaku yang dianggap merendahkan atau menjijikkan.',
            'reaksi' => "Perasaan mual, Merasa kotor, Menghindari makanan atau minuman, Mencuci tangan, Menutup hidung dan mulut, Menunjukkan ekspresi wajah yang tidak menyenangkan, Orang yang merasa jijik mungkin juga berbicara secara sinis",
            'pengelolaan' => "Menjauhkan diri dari pemicu yang menyebar rasa jijik, Menjaga perasaan orang lain yang mungkin menjadi penyebab rasa ini, Berempati dengan orang yang melakukan hal yang dianggap menjijikkan, Tidak melontarkan kata-kata kasar kepada mereka",
            'potensi_penggunaan_narkoba' => 'Dari emosi ini tidak langsung terlihat, karena emosi menjijikkan lebih terkait dengan kepekaan terhadap hal-hal yang dianggap kotor atau tidak pantas, sehingga tidak menyebabkan seseorang mencari narkoba sebagai pelarian.',
            'studi_kasus' => "Budi adalah seorang siswa SMP yang sangat gemar bereksperimen dengan berbagai resep masakan di rumah. Ia sangat menyukai memasak dan sering mencoba berbagai hidangan baru. Suatu hari, Budi memutuskan untuk membuat hidangan laut yang belum pernah ia coba sebelumnya. Namun, ketika ia mulai mempersiapkan bahan-bahannya, Budi merasa sangat jijik dengan bau amis dan tekstur dari seafood yang akan ia gunakan. Meskipun ia mencoba bertahan, rasa mual yang diakibatkan oleh bau dan penampilan makanan tersebut membuatnya semakin tidak nyaman. Akibatnya, Budi merasa jijik dan memutuskan untuk tidak melanjutkan memasak hidangan tersebut. Setelah kejadian itu, ia menjadi ragu untuk mencoba memasak hidangan laut lainnya, bahkan ketika ada yang menyarankan resep yang lebih sederhana.",
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama rasa jijik yang dirasakan Budi?',
                    'pilihan' => [
                        'a' => 'Budi tidak menyukai masakan laut secara umum',
                        'b' => 'Budi merasa jijik dengan bau amis dan tekstur seafood yang ia persiapkan',
                        'c' => 'Budi merasa terburu-buru dan tidak sempat mempersiapkan bahan-bahannya dengan benar',
                        'd' => 'Budi tidak tahu cara memasak seafood dengan baik',
                    ]
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana rasa jijik mempengaruhi tindakan Budi setelah kejadian ini?',
                    'pilihan' => [
                        'a' => 'Budi memutuskan untuk berhenti mencoba memasak hidangan laut',
                        'b' => 'Budi semakin bersemangat untuk bereksperimen dengan resep lainnya',
                        'c' => 'Budi melupakan kejadian itu dan mencoba memasak hidangan lain keesokan harinya',
                        'd' => 'Budi meminta bantuan orang lain untuk menyelesaikan masakan tersebut',
                    ]
                ],
                '3' => [
                    'pertanyaan' => 'Apa dampak dari rasa jijik yang dirasakan Budi terhadap persepsi dan keyakinannya dalam memasak?',
                    'pilihan' => [
                        'a' => 'Budi tetap percaya diri dan menganggap kejadian tersebut hanya kebetulan',
                        'b' => 'Budi menganggap dirinya tidak berbakat dalam memasak dan berhenti memasak sepenuhnya',
                        'c' => 'Budi merasa tidak berpengalaman dan mulai belajar lebih banyak tentang memasak seafood',
                        'd' => 'Budi menjadi lebih takut untuk bereksperimen dengan hidangan yang belum pernah ia coba',
                    ]
                ],
                '4' => [
                    'pertanyaan' => 'Apa yang dapat Budi lakukan untuk mengatasi rasa jijik yang ia alami?',
                    'pilihan' => [
                        'a' => 'Menghindari makanan laut sepenuhnya agar tidak merasa jijik',
                        'b' => 'Menyalahkan hidangan laut tersebut dan memutuskan untuk tidak pernah memasaknya lagi',
                        'c' => 'Mencari resep yang lebih sederhana dan mempersiapkan diri secara mental untuk mencoba lagi',
                        'd' => 'Menyerah pada hobi memasaknya karena rasa jijik yang ia alami',
                    ]
                ],
                '5' => [
                    'pertanyaan' => 'Bagaimana cara Budi agar dapat kembali menikmati hobi memasaknya tanpa merasa jijik?',
                    'pilihan' => [
                        'a' => 'Menghindari mencoba masakan baru agar tidak merasa jijik lagi',
                        'b' => 'Mempelajari lebih dalam tentang cara mengatasi bau dan tekstur yang menjijikkan dalam memasak seafood',
                        'c' => 'Menyerahkan tugas memasak makanan laut kepada orang lain',
                        'd' => 'Berhenti memasak sementara hingga ia merasa nyaman kembali',
                    ]
                ],
            ]
        ];

        $guilty = [
            'jawaban_emosi' => $jawaban_user_bersalah,
            'nama_emosi' => 'Rasa Bersalah',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Rasa bersalah adalah salah satu bentuk emosi negatif yang muncul ketika seseorang merasa telah melakukan sesuatu yang salah atau melanggar nilai dan norma yang berlaku. Perasaan ini sering disertai dengan rasa tanggung jawab, penyesalan, dan kesedihan. Rasa bersalah biasanya muncul ketika seseorang merasa telah menyebabkan kerugian atau kerusakan pada orang lain, melanggar janji, atau ketika diingatkan tentang kesalahan yang dilakukan di masa lalu.',
            'contoh' => "Berbohong kepada orang tua atau teman dekat; Tidak membantu teman yang sedang kesulitan; Gagal memenuhi harapan atau ekspektasi dari orang tua atau keluarga",
            'reaksi' => "Wajah memerah, Merasa gugup, Meminta maaf dan mengakui kesalahan",
            'pengelolaan' => "Untuk mengatasi rasa bersalah, penting untuk introspeksi diri; Meminta maaf dengan tulus apabila telah melakukan kesalahan; Berusaha menjaga perilaku sesuai dengan norma dan adat yang berlaku; Seseorang juga bisa mencari bantuan dari orang lain untuk membantu mengatasi perasaan bersalah dan membuat resolusi untuk berubah menjadi lebih baik",
            'potensi_penggunaan_narkoba' => 'Ada kemungkinan orang yang merasa bersalah mencari pelarian melalui penggunaan narkoba sebagai cara untuk menghindari perasaan bersalah atau penyesalan yang mendalam. Oleh karena itu, penting untuk memberikan dukungan emosional dan bantuan agar orang yang merasa bersalah tidak jatuh ke dalam jeratan narkoba.',
            'studi_kasus' => "Ali adalah seorang siswa yang sangat dihormati oleh teman-temannya karena kejujurannya. Suatu hari, Ali mendapatkan nilai yang sangat buruk pada ujian matematika. Dia merasa sangat malu dan takut orang lain akan menilai dia buruk. Ketika teman dekatnya, Budi, bertanya apakah dia sudah mempelajari materi ujian, Ali berbohong dan mengatakan bahwa dia sebenarnya tidak belajar sama sekali, meskipun sebenarnya dia sudah belajar keras tetapi tetap gagal. Setelah beberapa hari, Ali merasa bersalah karena telah berbohong kepada Budi dan tidak jujur tentang usahanya. Dia juga mulai merasa tertekan karena khawatir teman-temannya akan tahu bahwa dia berbohong.",
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama dari perasaan bersalah yang dialami Ali?',
                    'pilihan' => [
                        'a' => 'Karena Ali tidak belajar untuk ujian',
                        'b' => 'Karena Ali gagal dalam ujian matematika',
                        'c' => 'Karena Ali berbohong kepada temannya tentang usahanya',
                        'd' => 'Karena Ali merasa teman-temannya tidak akan menyukai dia lagi',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana reaksi yang mungkin muncul dari perasaan bersalah Ali?',
                    'pilihan' => [
                        'a' => 'Merasa bangga dengan nilai ujian',
                        'b' => 'Merasa lega setelah berbohong kepada Budi',
                        'c' => 'Merasa gugup dan tertekan karena telah berbohong',
                        'd' => 'Merasa bahagia karena teman-temannya tidak mengetahui kebenaran',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Apa langkah pertama yang bisa Ali lakukan untuk mengelola perasaan bersalahnya?',
                    'pilihan' => [
                        'a' => 'Menghindari berbicara dengan Budi dan teman-temannya',
                        'b' => 'Meminta maaf kepada Budi dan mengakui bahwa dia berbohong',
                        'c' => 'Mengalihkan perhatian dengan belajar lebih giat untuk ujian berikutnya',
                        'd' => 'Membiarkan perasaan bersalah berlalu dengan sendirinya tanpa melakukan apa-apa',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Apa potensi bahaya jika Ali tidak mengatasi perasaan bersalahnya dengan baik?',
                    'pilihan' => [
                        'a' => 'Ali mungkin akan menggunakan narkoba sebagai pelarian dari perasaan bersalah',
                        'b' => 'Ali akan menjadi lebih rajin belajar',
                        'c' => 'Ali akan merasa lebih dekat dengan teman-temannya',
                        'd' => 'Ali akan melupakan kejadian tersebut tanpa ada konsekuensi lebih lanjut',
                    ],
                ],
                '5' => [
                    'pertanyaan' => 'Apa yang dapat membantu Ali untuk merasa lebih baik setelah mengatasi perasaan bersalahnya?',
                    'pilihan' => [
                        'a' => 'Menghindari berbicara tentang kejadian tersebut dengan siapa pun',
                        'b' => 'Mengabaikan perasaan bersalahnya dan bersikap seolah tidak ada yang terjadi',
                        'c' => 'Mengisolasi diri dari teman-temannya agar tidak merasa malu',
                        'd' => 'Menyadari kesalahannya, belajar dari situasi tersebut, dan berusaha untuk jujur ke depannya',
                    ],
                ],
            ]
        ];

        $fear = [
            'jawaban_emosi' => $jawaban_user_takut,
            'nama_emosi' => 'Takut',
            'jenis_emosi' => 'Emosi Negatif',
            'penjelasan' => 'Perasaan takut adalah respons emosional terhadap situasi atau lingkungan yang dirasa membahayakan atau tidak diketahui. Ketakutan adalah mekanisme alami untuk melindungi diri dari ancaman. Rasa takut sering kali muncul ketika seseorang berada di tempat atau menghadapi situasi baru yang belum pernah dialami, seperti pindah ke lingkungan baru atau mencoba hal baru.',
            'penyebab' => "Berada di lingkungan atau situasi yang belum pernah dialami, Melihat seseorang disakiti atau diancam",
            'contoh' => "Merasa takut terhadap ancaman yang dapat membahayakan diri, Ketakutan saat mencoba aktivitas baru atau hobi yang belum pernah dilakukan sebelumnya, Merasa cemas dan takut saat harus pindah ke lingkungan baru yang tidak dikenal",
            'reaksi' => "Jantung berdetak cepat, Sesak napas, Mual, berkeringat, atau panik, Merasa kacau atau tidak nyaman, Keinginan untuk lari atau berteriak",
            'dampak' => 'Bersikap was-was dan menarik diri dari interaksi sosial',
            'pengelolaan' => "Menghadapi ketakutan yang dimiliki dengan keberanian, Menjauhkan diri dari situasi atau hal yang memang berbahaya, Selalu berdoa kepada Tuhan dan berpikiran positif, Fokus pada tujuan yang ingin dicapai agar tidak terus menerus memikirkan ketakutan",
            'potensi_penggunaan_narkoba' => 'Beberapa orang mungkin mencari pelarian dari perasaan takut atau kecemasan dengan menggunakan narkoba, meskipun hal ini bukanlah solusi yang sehat atau efektif untuk mengatasi ketakutan.',
            'studi_kasus' => "Aldi adalah seorang siswa baru yang baru saja pindah ke sekolah baru di kota lain. Pada hari pertama sekolah, dia merasa gugup karena tidak mengenal siapa pun. Saat guru meminta Aldi untuk memperkenalkan diri di depan kelas, dia mulai merasa jantungnya berdebar kencang, tangannya berkeringat, dan dia merasa ingin lari dari situasi tersebut. Aldi akhirnya memperkenalkan diri, tetapi dia berbicara dengan suara sangat pelan dan tergagap.",
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa penyebab utama perasaan takut yang dialami oleh Aldi?',
                    'pilihan' => [
                        'a' => 'Tidak mendapat nilai tinggi di sekolah',
                        'b' => 'Bertemu dengan teman lama',
                        'c' => 'Berada di lingkungan baru yang belum dikenalnya',
                        'd' => 'Menerima pujian dari guru',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana reaksi fisik Aldi saat dia merasakan takut?',
                    'pilihan' => [
                        'a' => 'Merasa tenang dan nyaman',
                        'b' => 'Tersenyum dan berbicara dengan lantang',
                        'c' => 'Tertawa dan berbicara dengan teman-temannya',
                        'd' => 'Berdebar kencang, berkeringat, dan merasa ingin lari',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Apa akibat dari perasaan takut yang dialami oleh Aldi selama perkenalan?',
                    'pilihan' => [
                        'a' => 'Dia berbicara dengan percaya diri di depan kelas',
                        'b' => 'Dia merasa bahagia dan santai',
                        'c' => 'Dia bersemangat untuk mengenal teman-temannya',
                        'd' => 'Dia menarik diri dari lingkungan sosial',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana Aldi dapat mengelola perasaan takutnya agar lebih nyaman dalam menghadapi situasi baru di sekolah?',
                    'pilihan' => [
                        'a' => 'Mencoba menghadapi ketakutannya dengan percaya diri dan berpikiran positif',
                        'b' => 'Menghindari perkenalan diri dan bersembunyi di kelas',
                        'c' => 'Tidak berbicara sama sekali di kelas',
                        'd' => 'Menarik diri dari interaksi sosial dengan teman-teman sekelas',
                    ],
                ],
                '5' => [
                    'pertanyaan' => 'Apa potensi risiko jika Aldi tidak berhasil mengelola perasaan takutnya dengan baik?',
                    'pilihan' => [
                        'a' => 'Dia menjadi lebih terbuka dan percaya diri',
                        'b' => 'Dia mulai menarik diri secara sosial dan mencari pelarian melalui penggunaan narkoba',
                        'c' => 'Dia mencari pelarian dari rasa takut dengan berfokus pada tujuan akademisnya',
                        'd' => 'Dia menjadi siswa yang paling populer di kelas',
                    ],
                ],
            ]
        ];

        $stud_kas_acc_revisi = [
            'nama' => 'studi kasus revisi',
            'profil' => [
                // nama, usia, sekolah, kelas
                'nama' => 'Adit',
                'usia' => '15 Tahun',
                'sekolah' => 'SMA Nusantara',
                'kelas' => 10,
            ],
            'deskripsi' => '<p>Adit adalah seorang siswa berprestasi di SMA Nusantara. Sejak kecil, dia dikenal sebagai anak yang rajin belajar dan selalu mendapatkan nilai tinggi di kelas. Namun, di balik prestasi akademiknya, Adit sering merasa tertekan oleh ekspektasi yang tinggi dari orang tuanya. Ketika akan memasuki kelas 11, tekanan tersebut semakin besar, karena dia harus mempersiapkan ujian akhir dan merencanakan masa depannya, terkait pilihan jurusan antara IPA atau IPS.</p> <p>Suatu malam, Adit bertemu dengan teman-temannya semasa SMP di sebuah acara reuni sekolah. Saat itu, teman-temannya mulai menawarkan narkoba sebagai cara untuk "bersantai" dan mengatasi stres. Adit merasa terombang-ambing. Di satu sisi, dia tahu bahwa menggunakan narkoba tidak akan memberikan keuntungan jangka panjang, tetapi di sisi lain, dia merasa terdesak oleh tekanan untuk tampil "keren" dan diterima dalam kelompoknya.</p> <p>Pulang dari acara tersebut, Adit merasa bingung dan gelisah. Dia memutuskan untuk merenung dan mencari cara untuk menilai dirinya dengan lebih akurat, terutama mengenai pengaruh keputusan-keputusan yang akan dia buat pada masa depan hidupnya. Dia teringat pada pelajaran yang diberikan oleh Guru Bimbingan Konseling di sekolah mengenai pentingnya refleksi diri dan penilaian diri yang akurat.</p> <p>Adit mulai menerapkan metode refleksi diri untuk mengidentifikasi kelebihan dan kekurangan dirinya. Dia menuliskan dalam jurnalnya:</p>',
            'kelebihan' => [
                '1' => 'Rajin dan disiplin dalam belajar',
                '2' => 'Memiliki tujuan hidup yang jelas, ingin melanjutkan kuliah di jurusan teknik',
                '3' => 'Memiliki banyak teman yang mendukung',
            ],
            'kekurangan' => [
                '1' => 'Cenderung menekan diri sendiri karena ekspektasi yang tinggi',
                '2' => 'Mudah terpengaruh oleh teman-teman',
                '3' => 'Tidak selalu bisa mengatakan "tidak" ketika berada dalam tekanan sosial'
            ],
            'after_kekurangan' => '<p>Melalui refleksi ini, Adit menyadari bahwa dirinya sering terjebak dalam perasaan takut gagal dan cemas tentang masa depan, yang membuatnya mudah terpengaruh oleh ajakan teman-teman, termasuk tawaran untuk menggunakan narkoba.</p> <p>Adit kemudian mencari cara untuk menganalisis kritik dan saran dari orang lain untuk perbaikan diri. Dia meminta pendapat dari Guru Bimbingan dan Konseling dan orang tuanya mengenai bagaimana cara terbaik untuk mengatasi tekanan yang dia rasakan. Guru Bimbingan dan Konseling memberikan saran untuk lebih mengembangkan kemampuan mengelola stres, sedangkan orang tuanya mengingatkan Adit akan pentingnya membuat keputusan yang sesuai dengan tujuan hidupnya.</p> <p>Setelah mempertimbangkan kritik dan saran tersebut, Adit mulai menyadari betapa pentingnya kritik dan saran yang membangun dalam pengembangan diri. Dia merasa lebih yakin bahwa meskipun terkadang terasa berat, tetap mengikuti prinsip- prinsip hidup yang positif akan membantunya mencapai tujuan jangka panjang, seperti kelulusan dengan nilai yang baik dan masuk ke universitas ternama.</p> <p>Adit kemudian mengorganisasikan tujuan pengembangan dirinya berdasarkan kelebihan dan kekurangan yang telah diidentifikasinya. Dia menetapkan beberapa langkah konkret untuk mengatasi kelemahannya, antara lain:</p>',
            'langkah_pengembangan' => [
                '1' => 'Mengikuti kegiatan meditasi untuk mengelola stres.',
                '2' => 'Menghadiri seminar tentang pengendalian diri dan kecerdasan emosional.',
                '3' => 'Membuat komitmen untuk menolak tawaran narkoba, apapun alasannya, demi masa depannya.'
            ],
            'footer' => '<p>Sebagai langkah konkret berikutnya, Adit berusaha untuk mengendalikan diri dan terus belajar melalui kritik dan saran yang diterimanya. Dia tidak membiarkan diri terlarut dalam rasa malu atau rasa bersalah, tetapi lebih fokus pada langkah- langkah untuk perbaikan diri. Misalnya, ketika ada kesempatan untuk berbicara dengan teman-temannya mengenai masalah ini, Adit berusaha dengan presisi untuk menyampaikan bahwa dia tidak tertarik untuk terlibat dalam kegiatan yang merugikan seperti penggunaan narkoba.</p> <p>Adit juga mulai mengembangkan mekanisme untuk secara konsisten mengevaluasi dan meningkatkan diri. Dia membuat jadwal rutin untuk melakukan refleksi diri setiap minggu, mencatat kemajuan yang telah dicapai, serta menilai apakah tindakannya masih sejalan dengan tujuan hidupnya. Jika ada hal yang terasa tidak sesuai, Adit berkomitmen untuk segera melakukan perubahan yang diperlukan.</p> <p>Melalui proses ini, Adit semakin percaya pada kemampuannya untuk mengelola dirinya sendiri, bahkan dalam situasi yang penuh tekanan. Dia yakin bahwa keputusan-keputusan yang dia buat hari ini akan membentuk masa depannya yang lebih baik, jauh dari pengaruh narkoba yang merugikan.</p>',
            'pertanyaan' => [
                '1' => 'Menurutmu, mengapa refleksi diri menjadi langkah pertama yang penting dalam proses penilaian diri yang akurat?',
                '2' => 'Apa yang dapat kita pelajari dari cara Adit menganalisis kritik dan saran dari orang lain?',
                '3' => 'Apakah kamu setuju dengan cara Adit mengorganisasikan tujuan pengembangan diri berdasarkan kelebihan dan kekurangannya?',
                '4' => 'Apa mekanisme yang dikembangkan Adit untuk mengevaluasi dan meningkatkan dirinya secara konsisten?',
                '5' => 'Jika kamu berada di posisi Adit, langkah apa yang mungkin akan kamu ambil untuk mengatasi tekanan sosial dari teman-teman yang menawarkan narkoba?'
            ],
            'jawaban_accurate' => $jawaban_accurate_sk_rev
        ];

        $stud_kas_1 = [
            'jawaban_accurate' => $jawaban_accurate_sk_1,
            'nama' => 'studi kasus 1',
            'judul' => 'Refleksi Diri dalam Menghadapi Tekanan Sosial',
            'deskripsi' => 'Rina adalah seorang siswa yang merasa tertekan karena teman-temannya sering memintanya ikut dalam kegiatan yang ia rasa tidak nyaman, seperti merokok atau nongkrong larut malam. Ia mulai merasa bahwa dirinya terlalu lemah karena tidak bisa menolak ajakan teman-temannya. Setelah merenung, Rina mencoba melakukan refleksi diri dengan melihat kelebihan dan kekurangannya. Ia menyadari bahwa ia sebenarnya kuat dalam bertahan dari tekanan, tetapi perlu belajar lebih baik dalam mengekspresikan keputusannya dengan tegas.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Bagaimana Rina seharusnya memanfaatkan refleksi diri untuk menilai situasinya dengan lebih baik?',
                    'pilihan' => [
                        'a' => 'Menerima ajakan teman-temannya karena itu bagian dari pergaulan',
                        'b' => 'Menghindari semua teman-temannya agar tidak merasa tertekan lagi',
                        'c' => 'Berusaha menjadi seperti teman-temannya agar bisa diterima dalam kelompok',
                        'd' => 'Menyadari kekuatan yang dimilikinya dalam menolak tekanan sosial dan bekerja pada kelemahan dalam menyampaikan keputusannya',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Apa langkah pertama yang bisa dilakukan Rina untuk mengatasi kelemahannya?',
                    'pilihan' => [
                        'a' => 'Mencari cara untuk memperkuat keterampilan berbicara tegas, seperti mengikuti pelatihan komunikasi asertif',
                        'b' => 'Mengabaikan refleksi diri karena itu hanya membuatnya lebih khawatir',
                        'c' => 'Menerima kenyataan bahwa ia tidak bisa menolak tekanan dari teman-temannya',
                        'd' => 'Terus merenung tanpa mengambil Tindakan',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana Rina dapat menilai keberhasilannya dalam memperbaiki keterampilan menolak ajakan negatif?',
                    'pilihan' => [
                        'a' => 'Melihat apakah teman-temannya masih mencoba menekan dia untuk melakukan hal-hal yang tidak nyaman',
                        'b' => 'Menunggu sampai orang lain menyadari perubahannya',
                        'c' => 'Mengukur seberapa sering ia berhasil menolak ajakan yang tidak sesuai dengan nilai-nilainya',
                        'd' => 'Mengabaikan hasil dari usahanya',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Apa langkah selanjutnya yang bisa dilakukan Rina untuk memperbaiki kelemahannya?',
                    'pilihan' => [
                        'a' => 'Tetap merenungkan kekurangannya tanpa mencoba mencari Solusi',
                        'b' => 'Melakukan latihan berbicara dengan tegas dan berani menolak ajakan yang tidak sesuai dengan nilai-nilainya',
                        'c' => 'Menghindari situasi sosial yang memaksanya untuk membuat Keputusan',
                        'd' => 'Berhenti berusaha memperbaiki diri karena merasa situasinya tidak akan berubah',
                    ],
                ],
            ],
        ];

        $stud_kas_2 = [
            'jawaban_accurate' => $jawaban_accurate_sk_2,
            'nama' => 'studi kasus 2',
            'judul' => 'Menghadapi Kritik dalam Pengembangan Diri',
            'deskripsi' => 'Ardi adalah seorang siswa yang sering mendapat pujian atas prestasinya di sekolah, tetapi saat ia mengikuti lomba debat, gurunya memberikan kritik bahwa Ardi terlalu terburu-buru dalam memberikan argumen tanpa mempertimbangkan pandangan lawan. Ardi awalnya merasa tidak nyaman dengan kritik ini karena ia selalu merasa percaya diri dengan kemampuannya. Namun, setelah merenung, ia mulai menyadari pentingnya kritik tersebut dan mencari cara untuk memperbaiki gaya debatnya.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa yang seharusnya menjadi respons Ardi terhadap kritik yang diterimanya?',
                    'pilihan' => [
                        'a' => 'Mengabaikan kritik tersebut karena merasa dirinya sudah cukup baik',
                        'b' => 'Marah kepada gurunya karena merasa kritik tersebut tidak adil',
                        'c' => 'Memahami bahwa kritik tersebut merupakan peluang untuk pengembangan diri dan mencari cara untuk memperbaiki kelemahan dalam debat',
                        'd' => 'Berhenti mengikuti lomba debat karena merasa tidak mampu lagi',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana Ardi bisa memanfaatkan kritik dari gurunya untuk meningkatkan performa debatnya di masa mendatang?',
                    'pilihan' => [
                        'a' => 'Menghindari kritik karena itu membuatnya merasa tidak nyaman',
                        'b' => 'Menggunakan kritik sebagai umpan balik yang konstruktif untuk menganalisis kelemahan dan memperbaikinya',
                        'c' => 'Berfokus hanya pada hal-hal yang ia anggap sudah baik',
                        'd' => 'Membiarkan kritik tersebut memengaruhi kepercayaan dirinya secara negatif',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Apa langkah konkrit yang bisa Ardi lakukan untuk meningkatkan keterampilannya berdasarkan kritik yang ia terima?',
                    'pilihan' => [
                        'a' => 'Menghindari lomba debat agar tidak menerima kritik lagi',
                        'b' => 'Menerima bahwa dia tidak bisa memperbaiki kelemahan tersebut',
                        'c' => 'Berusaha untuk lebih cepat menyampaikan argumennya tanpa mempedulikan lawan debat',
                        'd' => 'Menghadiri sesi latihan debat lebih sering dan berlatih untuk memperhatikan argumen lawan dengan lebih cermat',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana Ardi bisa mengukur keberhasilannya dalam meningkatkan kemampuan debatnya?',
                    'pilihan' => [
                        'a' => 'Menilai dari jumlah pujian yang diterimanya di debat berikutnya',
                        'b' => 'Menanyakan pendapat gurunya setelah setiap sesi debat',
                        'c' => 'Menghindari menerima umpan balik lebih lanjut karena takut mendapat kritik lagi',
                        'd' => 'Melihat apakah ia lebih mampu mempertimbangkan argumen lawan dengan matang sebelum merespon',
                    ],
                ],
            ],
        ];

        $stud_kas_3 = [
            'jawaban_accurate' => $jawaban_accurate_sk_3,
            'nama' => 'studi kasus 3',
            'judul' => 'Menetapkan Tujuan Pengembangan Diri Berdasarkan Kelebihan dan Kekurangan',
            'deskripsi' => 'Lina menyadari bahwa ia memiliki kelebihan dalam menulis esai, tetapi merasa kurang percaya diri saat berbicara di depan umum. Gurunya menyarankan agar Lina mengembangkan keterampilan berbicara di depan umum untuk menyeimbangkan kemampuan akademisnya. Lina kemudian membuat rencana pengembangan diri dengan menetapkan tujuan jangka pendek untuk mengikuti kursus berbicara di depan umum dan tujuan jangka panjang untuk menjadi lebih percaya diri saat presentasi di kelas.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Bagaimana Lina bisa menggunakan kelebihan dan kekurangannya untuk menetapkan tujuan pengembangan diri?',
                    'pilihan' => [
                        'a' => 'Fokus hanya pada kelebihannya dalam menulis dan mengabaikan kelemahan berbicara di depan umum',
                        'b' => 'Menetapkan tujuan pengembangan diri berdasarkan kelemahannya dengan mengikuti kursus berbicara di depan umum dan meningkatkan kepercayaan diri',
                        'c' => 'Menyerah untuk memperbaiki kelemahan berbicara di depan umum dan berfokus pada penulisan saja',
                        'd' => 'Menyembunyikan kelemahannya agar tidak terlihat oleh orang lain',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Apa langkah pertama yang harus diambil Lina untuk mencapai tujuannya?',
                    'pilihan' => [
                        'a' => 'Menghindari tujuan jangka panjang karena tidak percaya diri',
                        'b' => 'Menyalahkan diri sendiri atas kelemahannya',
                        'c' => 'Berusaha menghindari situasi di mana ia perlu berbicara di depan umum',
                        'd' => 'Menetapkan tujuan yang realistis dan terukur seperti mengikuti kursus berbicara di depan umum dalam beberapa bulan ke depan',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana Lina bisa memastikan bahwa ia mencapai tujuan jangka pendek dan jangka panjangnya?',
                    'pilihan' => [
                        'a' => 'Mencatat kemajuan setiap kali ia mengikuti kursus atau latihan berbicara di depan umum',
                        'b' => 'Mengabaikan proses dan menunggu hasil akhir',
                        'c' => 'Berfokus hanya pada tujuan jangka panjang tanpa mengevaluasi kemajuan jangka pendek',
                        'd' => 'Menunggu sampai ada yang memberi tahu bahwa ia sudah cukup baik',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana Lina dapat mengevaluasi kemajuannya dalam meningkatkan kemampuan berbicara di depan umum?',
                    'pilihan' => [
                        'a' => 'Dengan menghindari situasi di mana ia harus berbicara agar tidak merasa gugup',
                        'b' => 'Dengan membandingkan dirinya dengan orang lain yang lebih baik darinya',
                        'c' => 'Dengan mengukur seberapa percaya dirinya saat berbicara di depan teman sekelas atau di kursus',
                        'd' => 'Dengan tidak mempedulikan bagaimana perasaannya saat berbicara di depan umum',
                    ],
                ],
            ],
        ];

        $jawaban_accurate_sp_rev = AccurateSelfAssesmentIT::where('user_id', auth()->user()->id)->latest()->first();

        $skala_penilaian_asa = [
            'nama' => 'skala penilaian asa',
            'skala_penilaian' => [
                'soal_1' => 'Saya dapat menggunakan refleksi diri untuk mengetahui kelebihan dan kekurangan saya',
                'soal_2' => 'Saya bisa menganalisis kritik dan saran dari orang lain untuk memperbaiki diri',
                'soal_3' => 'Saya percaya bahwa kritik dan saran yang membangun sangat penting untuk perkembangan diri',
                'soal_4' => 'Saya dapat menetapkan tujuan untuk pengembangan diri berdasarkan kelebihan dan kekurangan yang saya temukan',
                'soal_5' => 'Saya bisa mengendalikan diri untuk terus belajar dan memperbaiki diri dengan menggunakan kritik dan saran yang diterima',
                'soal_6' => 'Saya dapat membuat cara untuk secara rutin mengevaluasi dan meningkatkan diri saya',
            ],
            'jawaban_instrumen' => $jawaban_accurate_sp_rev
        ];

        $tes_instrumen = [
            'jawaban_instrumen' => $jawaban_accurate_it,
            'message_instrumen' => $message_instrumen,
            'nama' => 'tes instrumen',
            'pertanyaan' => [
                'A' => [
                    'judul' => 'Mengenali Kelebihan Diri',
                    'pertanyaan' => [
                        '1' => 'Saya dapat dengan mudah mengidentifikasi hal-hal yang saya kuasai dengan baik',
                        '2' => 'Saya yakin dengan kelebihan diri dalam mengerjakan sesuatu',
                        '3' => 'Orang lain sering mengakui keterampilan atau kelebihan yang saya juga sadari dalam diri saya',
                        '4' => 'Saya merasa percaya diri ketika menggunakan kelebihan saya dalam situasi yang menantang',
                    ],
                ],
                'B' => [
                    'judul' => 'Mengenali Kelemahan Diri',
                    'pertanyaan' => [
                        '5' => 'Saya sadar akan bidang di mana saya membutuhkan perbaikan atau pengembangan diri lebih lanjut',
                        '6' => 'Saya secara terbuka mengakui kekurangan saya dan melihatnya sebagai peluang untuk belajar',
                        '7' => 'Saya merasa nyaman membahas kekurangan saya dengan orang lain yang bisa membantu saya memperbaikinya',
                        '8' => 'Saya menganggap kekurangan saya sebagai bagian dari proses pertumbuhan diri',
                    ],
                ],
                'C' => [
                    'judul' => 'Penerimaan Kritik dan Saran',
                    'pertanyaan' => [
                        '9' => 'Saya terbuka terhadap kritik dan saran dari orang lain, baik yang positif maupun negatif',
                        '10' => 'Saya menggunakan kritik konstruktif (membangun) untuk memperbaiki diri dan meningkatkan kinerja saya',
                        '11' => 'Ketika menerima kritik, saya tidak sakit hati dan menggunakannya sebagai kesempatan untuk belajar',
                        '12' => 'Saya sering meminta masukan dari orang lain untuk membantu saya memahami area yang perlu diperbaiki',
                    ],
                ],
                'D' => [
                    'judul' => 'Tindakan Perbaikan Diri',
                    'pertanyaan' => [
                        '13' => 'Saya secara konsisten mengambil langkah-langkah untuk memperbaiki kekurangan yang saya sadari',
                        '14' => 'Saya sering melakukan refleksi diri untuk menilai perkembangan saya dalam mencapai tujuan perbaikan diri',
                        '15' => 'Saya membuat rencana yang terstruktur untuk terus mengembangkan kelebihan dan mengatasi kekurangan saya',
                        '16' => 'Saya meninjau kembali kemajuan saya secara teratur untuk memastikan saya berada di jalur yang benar dalam perbaikan diri',
                    ],
                ],
            ]

        ];


        $refleksi_diri = [
            'jawaban_rd' => $jawaban_accurate_rd,
            'nama' => 'refleksi diri',
            'pertanyaan' => [
                '1' => [
                    'judul' => 'kelebihan',
                    'pertanyaan' => [
                        'a' => 'Aspek apa yang menunjukkan bahwa Anda memiliki kelebihan atau kemampuan yang baik? (misal: mengatasi stres)',
                        'b' => 'Bagaimana Anda dapat memanfaatkan kelebihan ini dalam kehidupan sehari-hari? (misal: mempratikkan mindfulness meditasi)',
                        'c' => 'Bagaimana kelebihan Anda dapat membantu dalam menolak menggunakan narkoba? (misal: ketika stres tidak menggunakan narkoba sebagai pelampiasan)'
                    ]
                ],
                '2' => [
                    'judul' => 'kekurangan',
                    'pertanyaan' => [
                        'a' => 'Aspek apa yang menunjukkan bahwa Anda perlu melakukan perbaikan? (misal: manajemen waktu)',
                        'b' => 'Apa yang bisa Anda lakukan untuk mengatasi kekurangan ini? (misal: membuat jadwal kegiatan harian agar lebih tertata)'
                    ]
                ],
                '3' => [
                    'judul' => 'langkah_selanjutnya',
                    'pertanyaan' => [
                        'a' => 'Setelah mengetahui kelebihan dan kekurangan diri, rencana apa yang akan Anda lakukan terkait pengembangan diri? <br> Rencana jangka pendek: _______',
                        'b' => 'Rencana jangka panjang: _______ <br>(misal: Rencana jangka pendek: mengembangkan aspek keterampilan sosial; Rencana jangka panjang: mengikuti pelatihan public speaking, mengikuti komunitas yang sesuai dengan kemampuan saya)'
                    ]
                ],
                '4' => [
                    'judul' => 'menerima_kritik_dan_saran',
                    'pertanyaan' => [
                        'a' => 'Apakah Anda senang mendengarkan kritik dan saran yang diberikan orang lain? Apa alasannya? _______ (misal: iya, karena saya senang ketika mendapatkan kritik dan saran dari orang lain yang membuat bisa menjadi lebih baik)',
                        'b' => 'Apakah bentuk kritik yang positif atau bentuk kritik yang kritis, yang Anda sukai? _______ (misal: saya suka kritik yang disampaikan dengan kalimat-kalimat positif dan membangun)',
                        'c' => 'Apakah Anda lebih suka guru, teman, atau orang tua yang memberikan kritik dan saran? (misal: saya lebih suka mendengarkan kritik dan saran dari ibu, karena saya lebih dekat dengan ibu)',
                        'd' => 'Apakah Anda meminta orang lain untuk memberikan kritik dan saran tentang perkembangan diri Anda? (misal: iya, karena saya ingin mengetahui apakah saya sudah menjadi orang yang lebih baik)',
                        'e' => 'Apakah Anda menerapkan kritik dan saran yang Anda terima untuk mengembangkan diri menjadi lebih baik? (misal: iya, karena saya ingin menjadi orang yang lebih baik di masa depan)'
                    ]
                ]
            ]
        ];

        $studi_kas_rev_self_con = [
            'nama' => 'studi kasus revisi',
            'deskripsi' => '<p>Maya adalah seorang siswi SMA yang dikenal dengan senyumnya yang ramah. Namun, di balik senyuman itu, Maya sering merasa kurang percaya diri, terutama ketika berbicara di depan umum. Suatu hari, sekolahnya mengadakan lomba pidato bertema "Pencegahan Penggunaan Narkoba." Maya ragu untuk mendaftar, tetapi sahabatnya, Dina, memberinya dorongan.</p> <p class="-indent-8">"Kamu punya kemampuan untuk berbicara dengan jelas dan menarik. Cobalah, Maya. Ini kesempatanmu untuk berbagi sesuatu yang penting," kata Dina.</p> <p>Maya memutuskan untuk mencobanya. Dia menghabiskan waktu berminggu- minggu mempersiapkan pidatonya. Dia membaca berbagai artikel, menonton video inspiratif, dan menulis naskahnya sendiri. Di sela-sela persiapannya, Maya belajar bahwa kepercayaan diri tidak hanya tentang apa yang dia katakan, tetapi juga bagaimana dia menyampaikannya. Dia mencoba berbicara di depan cermin, memperbaiki postur tubuhnya, dan menjaga kontak mata dengan "penonton" bayangannya.</p> <p>Hari perlombaan tiba, dan Maya merasa gugup. Saat namanya dipanggil, tangannya berkeringat. Namun, dia mengingat nasihat gurunya: "Tarik napas dalam- dalam, percaya pada dirimu sendiri, dan ingat tujuanmu."</p> <p>Maya naik ke panggung dengan gemetar, tetapi segera menemukan ritmenya. Dengan suara lantang, dia menyampaikan pesan tentang bahaya narkoba dan pentingnya mengatakan "tidak" pada tekanan teman sebaya. Dia membagikan cerita tentang seorang sepupunya yang terjebak dalam penggunaan narkoba dan perjuangan keluarganya untuk membantu sepupunya sembuh. Ceritanya penuh emosi dan membuat para pendengar terdiam.</p> <p>Ketika pidatonya selesai, ruangan penuh dengan tepuk tangan. Maya tersenyum lega. Meski dia tidak memenangkan lomba, pengalaman itu memberinya pelajaran berharga. Dia menyadari bahwa kepercayaan diri bukan berarti tidak merasa takut, melainkan berani menghadapi ketakutan itu.</p> <p>Maya mulai melihat kepercayaan diri dalam dirinya tumbuh. Dia memutuskan untuk terus berlatih berbicara di depan umum dan menggunakan pengalamannya untuk membantu teman-temannya yang juga merasa ragu pada diri sendiri. "Setiap langkah kecil menuju keberanian adalah kemenangan," pikir Maya.</p>',
            'pertanyaan' => [
                'soal_1' => 'Berdasarkan cerita di atas, apa saja langkah yang dilakukan Maya untuk meningkatkan kepercayaan dirinya?',
                'soal_2' => 'Bagaimana pengalaman berbicara di depan umum dapat membantu Maya dalam mencegah penggunaan narkoba?',
                'soal_3' => 'Analisislah faktor-faktor yang memengaruhi tingkat kepercayaan diri Maya sebelum dan sesudah lomba pidato!',
                'soal_4' => 'Bagaimana Maya menunjukkan kemampuan mengendalikan diri dalam situasi yang membutuhkan kepercayaan diri tinggi?',
                'soal_5' => 'Jika kamu berada di posisi Maya, bagaimana kamu akan membangun mekanisme untuk tetap tenang dan percaya diri dalam situasi sulit?',
            ],
            'jawaban_self_con' => $jawaban_self_confidence_sk_rev
        ];

        $jawaban_self_con_sp_rev = SelfConfidenceIT::where('user_id', auth()->user()->id)->latest()->first();

        $skala_penilaian_self_con = [
            'nama' => 'skala penilaian self confidence',
            'skala_penilaian' => [
                'soal_1' => 'Saya merasa percaya diri saat berbicara di depan umum',
                'soal_2' => 'Saya mampu menganalisis faktor yang memengaruhi kepercayaan diri saya',
                'soal_3' => 'Saya menghargai keyakinan diri dalam menghadapi tantangan',
                'soal_4' => 'Saya dapat mengelola pengalaman positif untuk membangun kepercayaan diri yang berkelanjutan',
                'soal_5' => 'Saya mampu mengendalikan diri dalam situasi yang membutuhkan kepercayaan diri tinggi',
                'soal_6' => 'Saya memiliki mekanisme untuk tetap tenang dan percaya diri dalam situasi sulit',
            ],
            'jawaban_instrumen' => $jawaban_self_con_sp_rev
        ];

        $stud_kas_1_self_con = [
            'jawaban_self_con' => $jawaban_self_confidence_sk1,
            'nama' => 'studi kasus 1',
            'judul' => 'Berbicara di Depan Umum dengan Percaya Diri',
            'deskripsi' => 'Bunga adalah seorang siswa yang diminta untuk memberikan presentasi tentang bahaya narkoba di depan kelas. Sebelumnya, dia merasa gugup karena khawatir teman-temannya akan menertawakan jika dia melakukan kesalahan. Namun, Bunga memutuskan untuk mempersiapkan materi dengan baik dan berlatih berbicara di depan cermin beberapa kali.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Bagaimana Bunga menunjukkan kepercayaan dirinya saat memberikan presentasi di depan kelas?',
                    'pilihan' => [
                        'a' => 'Bunga berbicara dengan suara tegas dan tenang',
                        'b' => 'Bunga terlihat sangat cemas dan terus menundukkan kepala',
                        'c' => 'Bunga berhenti berbicara di tengah-tengah karena lupa materinya',
                        'd' => 'Bunga berbicara dengan suara tegas tetapi terus menundukkan kepala',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Faktor apa yang membantu Bunga meningkatkan kepercayaan dirinya dalam situasi ini?',
                    'pilihan' => [
                        'a' => 'Persiapan yang matang dan latihan sebelumnya',
                        'b' => 'Dukungan dari teman-teman',
                        'c' => 'Ketidaktahuannya bahwa ia akan presentasi',
                        'd' => 'Yakin terhadap kemampuan diri tanpa berlatih sebelumnya',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Apa yang Bunga pelajari dari pengalaman ini tentang kepercayaan diri?',
                    'pilihan' => [
                        'a' => 'Tidak penting untuk mempersiapkan diri sebelum berbicara di depan umum',
                        'b' => 'Rasa takut tidak bisa diatasi dan akan selalu muncul',
                        'c' => 'Persiapan dan latihan dapat membantu mengatasi rasa gugup',
                        'd' => 'Rasa takut membuat kepercayaan diri muncul',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Apa langkah pertama yang Bunga lakukan untuk mengatasi rasa gugupnya?',
                    'pilihan' => [
                        'a' => 'Langsung berbicara tanpa persiapan',
                        'b' => 'Berlatih di depan cermin',
                        'c' => 'Menghindari presentasi',
                        'd' => 'Menjauhi keramaian',
                    ],
                ],
                '5' => [
                    'pertanyaan' => 'Bagaimana Bunga bereaksi terhadap kritik yang dia terima setelah presentasinya?',
                    'pilihan' => [
                        'a' => 'Dia merasa kecewa dan berhenti mencoba',
                        'b' => 'Dia tidak mendengarkan kritik sama sekali',
                        'c' => 'Dia merasa kritik tidak penting',
                        'd' => 'Dia menerima kritik dengan sikap positif dan menggunakannya untuk memperbaiki diri',
                    ],
                ],
                '6' => [
                    'pertanyaan' => 'Apa yang bisa Bunga lakukan jika dia masih merasa cemas saat presentasi?',
                    'pilihan' => [
                        'a' => 'Menghindari kontak mata dengan audiens',
                        'b' => 'Mengambil napas dalam-dalam dan berbicara lebih lambat',
                        'c' => 'Meminta bantuan teman untuk menggantikannya',
                        'd' => 'Berbicara dengan kepala menunduk',
                    ],
                ],
            ],
        ];

        $stud_kas_2_self_con = [
            'jawaban_self_con' => $jawaban_self_confidence_sk2,
            'nama' => 'studi kasus 2',
            'judul' => 'Mengambil Keputusan di Situasi Sulit',
            'deskripsi' => 'Budi sering kali dihadapkan pada keputusan sulit ketika berada dalam kelompok belajar. Suatu hari, teman-temannya mengusulkan untuk mencontek saat ujian. Budi merasa tertekan tetapi yakin dengan kemampuannya sendiri dan memutuskan untuk tidak ikut serta.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Bagaimana Budi menunjukkan kepercayaan diri dalam menghadapi tekanan dari teman-temannya?',
                    'pilihan' => [
                        'a' => 'Budi ikut mencontek karena takut tidak lulus ujian',
                        'b' => 'Budi berdiam diri dan membiarkan teman-temannya mencontek tanpa ikut',
                        'c' => 'Dengan berani menyatakan penolakannya untuk mencontek',
                        'd' => 'Budi mengiyakan ajakan temannya agar tidak dijauhi',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Faktor apa yang mempengaruhi keputusan Budi untuk tidak mencontek?',
                    'pilihan' => [
                        'a' => 'Takut dimarahi guru',
                        'b' => 'Tidak ingin ada konflik dengan teman-temannya',
                        'c' => 'Tidak ingin dijauhi teman-temannya',
                        'd' => 'Keyakinan pada kemampuannya sendiri untuk menghadapi ujian',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana pengalaman ini dapat meningkatkan kepercayaan diri Budi di masa depan?',
                    'pilihan' => [
                        'a' => 'Budi akan selalu takut jika berada dalam situasi sulit',
                        'b' => 'Budi akan lebih yakin untuk membuat keputusan yang benar meskipun sulit',
                        'c' => 'Budi akan menghindari tanggung jawab agar tidak harus mengambil keputusan',
                        'd' => 'Budi akan selalu mendapatkan teman karena mengiyakan semua ajakan orang lain',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Apa yang Budi lakukan untuk menjaga kepercayaannya pada diri sendiri?',
                    'pilihan' => [
                        'a' => 'Budi mengingat prinsip-prinsip moralnya',
                        'b' => 'Budi menolak tanpa menjelaskan alasannya',
                        'c' => 'Budi menghindari situasi tersebut',
                        'd' => 'Budi membiarkan semua hal terjadi apa adanya',
                    ],
                ],
                '5' => [
                    'pertanyaan' => 'Apa yang bisa Budi lakukan jika tekanan dari teman-temannya meningkat?',
                    'pilihan' => [
                        'a' => 'Menyerah pada tekanan kelompok',
                        'b' => 'Menghindari teman-temannya sama sekali',
                        'c' => 'Berbicara dengan gurunya untuk mendapatkan bantuan',
                        'd' => 'Tidak mau berteman lagi',
                    ],
                ],
                '6' => [
                    'pertanyaan' => 'Bagaimana Budi bisa menjaga hubungan baik dengan teman-temannya tanpa mengikuti mereka?',
                    'pilihan' => [
                        'a' => 'Menghindari semua interaksi dengan mereka',
                        'b' => 'Bergabung dengan kelompok lain yang lebih mendukung',
                        'c' => 'Menghargai pendapat mereka tetapi tetap setia pada prinsipnya',
                        'd' => 'Mengiyakan semua ajakan temannya',
                    ],
                ],
            ],
        ];

        $stud_kas_3_self_con = [
            'jawaban_self_con' => $jawaban_self_confidence_sk3,
            'nama' => 'studi kasus 3',
            'judul' => 'Mengelola Ketidakpastian dan Risiko',
            'deskripsi' => 'Siti ditawari menjadi ketua kelompok dalam sebuah proyek besar di sekolah, tetapi dia ragu-ragu karena khawatir akan gagal. Setelah merenung dan memikirkan keterampilannya, Siti memutuskan untuk mengambil tantangan tersebut dan melakukan yang terbaik.',
            'pertanyaan' => [
                '1' => [
                    'pertanyaan' => 'Apa yang menunjukkan bahwa Siti memiliki kepercayaan diri dalam mengambil peran ketua kelompok?',
                    'pilihan' => [
                        'a' => 'Dia menolak dengan alasan tidak ingin gagal',
                        'b' => 'Dia merasa tertekan dan menyerahkan tugas kepada teman lain',
                        'c' => 'Dia menerima tanggung jawab dengan tenang dan penuh keyakinan',
                        'd' => 'Dia merasa tidak ingin mengemban tanggung jawab besar',
                    ],
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana Siti mengatasi keraguannya terhadap kemampuan dirinya?',
                    'pilihan' => [
                        'a' => 'Dengan merenung dan menganalisis keterampilan yang dia miliki',
                        'b' => 'Dengan melihat kemampuan teman dekatnya',
                        'c' => 'Dengan meminta teman lain mengambil tanggung jawab',
                        'd' => 'Dengan tidak melakukan apa-apa dan berharap hasilnya baik',
                    ],
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana hasil pengalaman ini dapat membantu Siti dalam menghadapi tantangan serupa di masa depan?',
                    'pilihan' => [
                        'a' => 'Siti akan lebih cenderung menghindari tantangan',
                        'b' => 'Siti akan lebih berani menghadapi tanggung jawab besar dengan percaya diri',
                        'c' => 'Siti tidak akan menerima lagi tugas besar',
                        'd' => 'Siti dapat merasa lebih baik dibandingkan teman-temannya',
                    ],
                ],
                '4' => [
                    'pertanyaan' => 'Apa yang memotivasi Siti untuk menerima peran sebagai ketua?',
                    'pilihan' => [
                        'a' => 'Dorongan dari teman-temannya',
                        'b' => 'Keyakinan bahwa ini adalah peluang untuk belajar',
                        'c' => 'Ketakutan bahwa orang lain tidak bisa melakukannya',
                        'd' => 'Agar tidak merasa tertinggal dari teman-temannya',
                    ],
                ],
                '5' => [
                    'pertanyaan' => 'Apa yang bisa dilakukan Siti jika menghadapi masalah yang tidak bisa dia selesaikan sendiri?',
                    'pilihan' => [
                        'a' => 'Meninggalkan proyek tanpa menyelesaikannya',
                        'b' => 'Menyerahkan tanggung jawab kepada orang lain',
                        'c' => 'Memaksakan diri untuk menyelesaikan sendiri',
                        'd' => 'Meminta bantuan dari anggota kelompok',
                    ],
                ],
                '6' => [
                    'pertanyaan' => 'Apa yang bisa Siti lakukan untuk memastikan bahwa kelompoknya berhasil dalam proyek ini?',
                    'pilihan' => [
                        'a' => 'Mengerjakan semuanya sendiri untuk memastikan hasil yang sempurna',
                        'b' => 'Menyerahkan keputusan kepada anggota kelompok yang lain',
                        'c' => 'Membagi tugas dengan anggota lainnya dan memberikan arahan yang jelas',
                        'd' => 'Menunggu anggota lain bertanya dan meminta arahan',
                    ],
                ],
            ],
        ];

        $lk_self_con = [
            'nama' => 'LK SELF CONFIDENT',
            'bagian_1' => [
                'jawaban_lk' => $jawaban_lk_self_con_1,
                'nama' => 'Refleksi Diri',
                '1' => [
                    'judul' => 'Keyakinan akan Kemampuan Diri',
                    'pertanyaan' => [
                        'a' => 'Sebutkan satu pencapaian terbesar yang telah kamu raih dalam enam bulan terakhir!<br>misal: saya berhasil memenangkan lomba sains tingkat provinsi)',
                        'b' => 'Bagaimana perasaanmu terhadap pencapaian tersebut? <br>misal: saya merasa bangga dan senang',
                        'c' => 'Apa usaha dan strategi yang kamu gunakan untuk mencapai pencapaian tersebut?<br>(misal: saya belajar setiap hari selama satu bulan, mengikuti bimbingan dari guru, dan juga mengikuti les sains',
                    ],
                ],
                '2' => [
                    'judul' => 'Keterampilan yang Dikuasai',
                    'pertanyaan' => [
                        'a' => 'Sebutkan tiga keterampilan yang kamu rasa paling kamu kuasai!<br>misal: keterampilan berbicara di depan umum, keterampilan manajemen waktu, keterampilan di bidang seni',
                        'b' => 'Bagaimana kamu mengembangkan keterampilan tersebut?<br>(misal: saya sering berlatih presentasi di rumah, saya selalu membuat jadwal kegiatan harian, saya mengikuti kursus menggambar',
                        'c' => 'Bagaimana keterampilan tersebut membantu dalam kehidupan sehari-hari atau dalam mencapai tujuanmu? <br>misal: Keterampilan berbicara di depan umum membantu saya dalam presentasi di sekolah, kemampuan manajemen waktu membantu saya menjadi seseorang yang disiplin, dan menggambar membantu saya mengekspresikan diri)',
                    ],
                ],
                '3' => [
                    'judul' => 'Tantangan yang Telah Diatasi',
                    'pertanyaan' => [
                        'a' => 'Sebutkan satu tantangan besar yang telah kamu hadapi dan atasi!<br>misal: saya pernah gagal dalam ujian matematika dan mendapat nilai paling rendah daripada teman sekelas lainnya',
                        'b' => 'Apa yang kamu pelajari dari pengalaman tersebut?<br>(misal: saya belajar untuk tidak menyerah dan terus berusaha',
                        'c' => 'Bagaimana cara kamu mengatasi tantangan tersebut?<br>(misal: saya meminta bantuan kepada teman dan guru, dan juga berlatih soal-soal matematika lebih sering',
                    ],
                ],
                '4' => [
                    'judul' => 'Pujian Diri',
                    'pertanyaan' => [
                        'a' => 'Tuliskan tiga hal positif tentang dirimu yang ingin kamu puji!<br>misal: saya adalah orang yang mandiri, saya selalu menjadi anak baik dan membantu teman yang membutuhkan pertolongan, saya tidak mudah menyerah',
                        'b' => 'Mengapa kamu merasa hal tersebut patut dipuji?<br>misal: saya selalu berusaha menyelesaikan pekerjaan rumah ataupun membantu orang tua di rumah. Saya selalu diajarkan untuk berbuat baik dan saya berhasil menerapkannya dengan membantu teman yang membutuhkan bantuan. Saya selalu mencari solusi ketika menghadapi masalah dan tidak mudah menyerah',
                    ],
                ],
                '5' => [
                    'judul' => 'Pengakuan Usaha',
                    'pertanyaan' => [
                        'a' => 'Sebutkan satu usaha atau kerja keras yang telah kamu lakukan baru-baru ini!<br>misal: saya mengerjakan sendiri tugas melukis yang diberikan oleh guru selama tiga hari meskipun sangat sulit dan tidak pandai melukis',
                        'b' => 'Bagaimana perasaanmu setelah berusaha keras meskipun hasilnya belum tentu memuaskan?<br>misal: saya tetap merasa puas dan bangga karena bisa menyelesaikan kewajiban saya terhadap tugas sekolah',
                    ],
                ],
            ],
            'bagian_2' => [
                'jawaban_lk' => $jawaban_lk_self_con_2,
                'nama' => 'Tenang Menghadapi Permasalahan',
                '1' => [
                    'pertanyaan' => 'Apakah permasalahan yang kamu hadapi hari ini?<br>Misal: terlambat datang ke sekolah sehingga dimarahi oleh guru',
                ],
                '2' => [
                    'pertanyaan' => 'Bagaimana permasalahan tersebut dapat terjadi?<br>misal: hari ini saya terlambat ke sekolah karena pada malam harinya saat begadang menonton tv sehingga telat bangun di pagi harinya',
                ],
                '3' => [
                    'pertanyaan' => 'Bagaimana perasaanmu pada saat itu?<br>misal: saya merasa sangat malu di depan teman-teman yang lain karena dimarahi dan saya juga merasa bersalah karena melanggar peraturan',
                ],
                '4' => [
                    'pertanyaan' => 'Berdasarkan permasalahanmu tersebut, bagaimana kamu mencari solusinya?<br>misal: saya tidak akan begadang lagi di malam harinya supaya dapat bangun pagi/ saya akan mengatur jadwal kegiatan harian agar saya tidak terlambat lagi',
                ],
            ],
            'bagian_3' => [
                'jawaban_lk' => $jawaban_lk_self_con_3,
                'nama' => 'Berani Mengambil Keputusan',
                '1' => [
                    'pertanyaan' => 'Ketika dihadapkan dengan permasalahan apa yang kamu lakukan?<br>misal: <br> - langsung mencari solusi <br> - bertanya<br> -tanya mengapa masalah ini harus menimpamu',
                ],
                '2' => [
                    'pertanyaan' => 'Ketika kamu diharuskan mengambil keputusan, apa yang kamu lakukan?<br>misal: <br> - saya langsung melakukannya tanpa berpikir dua kali <br> - saya melakukan analisis terlebih dahulu agar tidak salah mengambil keputusan',
                ],
                '3' => [
                    'pertanyaan' => 'Apakah kamu meminta bantuan orang lain dalam mengambil keputusan?<br>*misal: <br> - tidak, saya memutuskan sendiri <br> - saya meminta saran dari orang tua/ teman dekat/ guru',
                ],
                '4' => [
                    'pertanyaan' => 'Bagaimana apabila kamu diharuskan segera mengambil keputusan pada saat itu juga?<br>misal: <br> - saya berusaha untuk tetap tenang, baru kemudian mengambil keputusan sambil memikirkan akibatnya <br> - saya langsung mengambil keputusan tanpa melihat akibatnya',
                ],
                '5' => [
                    'pertanyaan' => 'Apakah keadaan di sekitarmu memengaruhi caramu mengambil keputusan?<br>misal: iya/ tidak',
                ],
                '6' => [
                    'pertanyaan' => 'Pada keadaan seperti apa kamu dapat mengambil keputusan?<br>*misal: <br> - tidak ramai/ tenang <br> - berada di dekat orang yang disayangi <br> - merasa aman',
                ],
                '7' => [
                    'pertanyaan' => 'Pada keadaan seperti apa kamu kesulitan mengambil keputusan?<br>misal: <br> - penuh dengan pertengkaran <br> - tidak fokus',
                ],
            ],
        ];

        $acc_self_as = [
            $stud_kas_1,
            $stud_kas_2,
            $stud_kas_3,
            $tes_instrumen,
            $refleksi_diri,
            $stud_kas_acc_revisi,
            $skala_penilaian_asa
        ];

        $self_conf = [
            $stud_kas_1_self_con,
            $stud_kas_2_self_con,
            $stud_kas_3_self_con,
            $lk_self_con,
            $studi_kas_rev_self_con,
            $skala_penilaian_self_con
        ];

        $emosis = [
            $amarah,
            $cemburu,
            $cinta,
            $iri,
            $happiness,
            $sadness,
            $shame,
            $disgust,
            $guilty,
            $fear
        ];


        return view('ayo-mengenali-aku.index', compact('emosis', 'acc_self_as', 'self_conf', 'jawaban_self_confidence_pkd'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $detail_jawaban_user = DetailJawaban::create()

        $jawaban = $request->jawaban;

        // Prepare data array for the create method
        $detailData = []; // Add the emosi field

        foreach ($jawaban as $index => $answer) {
            // Dynamically create keys like 'soal1', 'soal2', etc.
            $detailData['soal' . ($index + 1)] = $answer;
        }

        // Create the DetailJawaban record with the dynamically prepared data
        $detail_jawaban_user = DetailJawaban::create($detailData);
        JawabanSoalEmosi::create(
            [
                'user_id' => auth()->user()->id,
                'kategori_emosi' => $request->emosi,
                'id_detail_jawaban' => $detail_jawaban_user->id
            ]
        );
        // modif key $request->jawaban + 1
        $jawaban = array_combine(range(1, count($jawaban)), array_values($jawaban));

        // dd($jawaban);

        // jawaban benar untuk anger
        $jwb_anger = [
            '1' => 'a',
            '2' => 'c',
            '3' => 'c',
            '4' => 'b',
            '5' => 'd',
            '6' => 'b'
        ];
        $jwb_jealousy = [
            '1' => 'c',
            '2' => 'b',
            '3' => 'a',
            '4' => 'c'
        ];

        $jwb_love = [
            '1' => 'b',
            '2' => 'a',
            '3' => 'c',
            '4' => 'a',
            '5' => 'b'
        ];

        $jwb_envy = [
            '1' => 'b',
            '2' => 'b',
            '3' => 'b',
            '4' => 'a',
            '5' => 'd'
        ];

        $jwb_happiness = [
            '1' => 'a',
            '2' => 'a',
            '3' => 'c',
            '4' => 'b',
            '5' => 'd'
        ];

        $jwb_sadness = [
            '1' => 'b',
            '2' => 'c',
            '3' => 'a',
            '4' => 'd',
            '5' => 'd'
        ];

        $jwb_shame = [
            '1' => 'b',
            '2' => 'c',
            '3' => 'd',
            '4' => 'a',
            '5' => 'b'
        ];

        $jwb_disgust = [
            '1' => 'b',
            '2' => 'a',
            '3' => 'd',
            '4' => 'c',
            '5' => 'b'
        ];

        $jwb_guilty = [
            '1' => 'c',
            '2' => 'c',
            '3' => 'b',
            '4' => 'a',
            '5' => 'd'
        ];

        $jwb_fear = [
            '1' => 'c',
            '2' => 'd',
            '3' => 'd',
            '4' => 'a',
            '5' => 'b'
        ];

        $score = 0;
        $message = '';
        if ($request->emosi == 'Amarah') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_anger[$key]) {
                    $score += 1;
                }
            }

            if ($score == 6) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_anger,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Cemburu') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_jealousy[$key]) {
                    $score += 1;
                }
            }

            if ($score == 4) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_jealousy,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Cinta') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_love[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_love,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Iri') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_envy[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_envy,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Kebahagiaan') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_happiness[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_happiness,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Kesedihan') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_sadness[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_sadness,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Malu') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_shame[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_shame,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Menjijikkan') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_disgust[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_disgust,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Bersalah') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_guilty[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_guilty,
                'score' => $score,
                'message' => $message
            ]);
        } else if ($request->emosi == 'Takut') {
            foreach ($jawaban as $key => $value) {
                if ($value == $jwb_fear[$key]) {
                    $score += 1;
                }
            }

            if ($score == 5) {
                $message = 'Selamat! Anda telah menjawab semua pertanyaan dengan benar.';
            } else {
                $message = 'Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.';
            }

            // return jawaban lama, jawaban benar, dan score
            return response()->json([
                'jawaban_old' => $jawaban,
                'jawaban_benar' => $jwb_fear,
                'score' => $score,
                'message' => $message
            ]);
        }
    }

    public function edit($id)
    {
        $is_complete_sk_ayo_jauhi = JawabanMateriNarkoba::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $is_complete_sp_ayo_jauhi = JauhiNarkobaSP::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $ayo_jauhi_percentage = intval((($is_complete_sk_ayo_jauhi + $is_complete_sp_ayo_jauhi) / 2) * 100);

        // lanjutkan dengan emotional awareness
        $is_complete_sk_emotional_awareness = EmotionalAwarenessSK::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $is_complete_sp_emotional_awareness = EmotionalAwarenessSP::where('user_id', auth()->user()->id)->exists() ? 1 : 0;

        $emotional_awareness_percentage = intval((($is_complete_sk_emotional_awareness + $is_complete_sp_emotional_awareness) / 2) * 100);

        // lanjutkan dengan accurate self assesment
        $is_complete_sk_accurate_self_assesment = AccurateSelfAssesmentSK::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $is_complete_sp_accurate_self_assesment = AccurateSelfAssesmentIT::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $accurate_percentage = intval((($is_complete_sk_accurate_self_assesment + $is_complete_sp_accurate_self_assesment) / 2) * 100);

        // lanjutkan dengan self confidence
        $is_complete_sk_self_confidence = SelfConfidentSK::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $is_complete_sp_self_confidence = SelfConfidenceIT::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $is_complete_lk_self_confidence = SelfConfidentPKD::where('user_id', auth()->user()->id)->exists() ? 1 : 0;
        $self_confidence_percentage = intval((($is_complete_sk_self_confidence + $is_complete_sp_self_confidence + $is_complete_lk_self_confidence) / 3) * 100);


        $presentasi = [
            'ayo_jauhi_aku' => $ayo_jauhi_percentage,
            'emotional_awareness' => $emotional_awareness_percentage,
            'accurate_self_assesment' => $accurate_percentage,
            'self_confidence' => $self_confidence_percentage
        ];

        // change array presentasi to object
        $presentasi = (object) $presentasi;

        // dd($presentasi);
        return view('dashboard-user', compact('presentasi'));
    }


    // update function
    public function update(Request $request)
    {
        // 
    }

    public function destroy($id)
    {
        //
    }
}
