<?php

namespace App\Http\Controllers;

use App\Models\EmotionalAwarenessSK;
use Illuminate\Http\Request;

class EmotionalAwareness extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban_sk_emotional = EmotionalAwarenessSK::where('user_id', auth()->user()->id)->latest()->first();

        $revisi_materi = [
            'narasi' => '<p>Nadya adalah seorang siswi SMA yang aktif dalam berbagai kegiatan sekolah. Ia dikenal ceria, tetapi beberapa minggu terakhir, teman-temannya mulai memperhatikan perubahan dalam dirinya. Nadya menjadi lebih pendiam, sering menghindari pertemanan, dan tampak mudah tersinggung ketika diajak bicara.&nbsp;</p> <p>Di rumah, Nadya merasa tertekan karena nilai ujiannya turun, sementara orang tuanya terus menuntutnya untuk selalu menjadi juara kelas. Ia merasa malu karena tidak mampu memenuhi ekspektasi mereka, terutama setelah ia membandingkan dirinya dengan adik sepupunya yang baru saja memenangkan olimpiade sains. Nadya bahkan merasa iri terhadap teman-temannya yang terlihat lebih santai menghadapi hidup.&nbsp;</p> <p>Suatu sore, Nadya duduk sendirian di taman dekat rumah. Ia merenungkan semua tekanan yang ia rasakan. Saat melihat sekumpulan anak kecil bermain dengan gembira, Nadya merasa hampa dan bertanya-tanya kapan terakhir kali ia merasa sebahagia itu.&nbsp;</p> <p>Ketika ia sedang larut dalam pikirannya, datanglah Mira, salah satu teman sekolahnya, yang juga pernah mengalami masa-masa sulit. Mira memperhatikan Nadya yang tampak sedih dan mulai berbicara dengannya.&nbsp;</p> <p>"Nadya, kamu kenapa? Akhir-akhir ini aku lihat kamu sering murung," tanya Mira dengan nada lembut.&nbsp;</p> <p>Awalnya, Nadya enggan bercerita, tetapi akhirnya ia membuka diri. Ia menceritakan bagaimana ia merasa gagal, malu, dan takut mengecewakan orang tuanya. Mira mendengarkan dengan penuh empati dan mulai menceritakan pengalamannya.&nbsp;</p> <p>"Kadang kita merasa sedih, marah, atau bahkan jijik pada keadaan kita sendiri, dan itu wajar, Nadya. Aku dulu juga pernah merasa begitu. Tapi aku belajar mengenali apa yang membuatku merasa seperti itu dan mencari cara yang sehat untuk menenangkan diri. Misalnya, aku mulai menulis jurnal setiap hari, melakukan teknik pernapasan dalam, atau bercerita ke orang yang aku percaya," kata Mira.&nbsp;</p> <p>Setelah berbicara dengan Mira, Nadya merasa sedikit lega. Namun, beberapa hari kemudian, seorang teman sekolah lainnya menawarkan pil yang disebut dapat membuatnya merasa "lebih baik" dan "melupakan semua masalah." Nadya merasa jijik dengan tawaran tersebut, tetapi juga merasa bersalah karena sempat tergoda untuk mencobanya.&nbsp;</p> <p>Ia teringat percakapan dengan Mira dan memutuskan untuk pulang ke rumah. Di sana, ia mencoba menulis apa yang ia rasakan, melakukan teknik pernapasan untuk menenangkan diri, dan memikirkan solusi untuk masalahnya. Setelah selesai menulis, Nadya merasa lebih tenang dan bertekad untuk menghadapi tekanan dengan cara yang lebih sehat.</p>',
            'soal' => [
                'soal_1' => 'Sebutkan emosi-emosi yang muncul pada cerita Nadya di atas, beserta situasi yang menunjukkan emosi tersebut!',
                'soal_2' => 'Setelah kamu mengetahui berbagai macam emosi yang Nadya rasakan, pilihlah tiga emosi. Kemudian analisis mengapa emosi tersebut muncul!',
                'soal_3' => 'Mengapa penting bagi Nadya untuk memahami emosi yang dirasakan dan bagaimana hal itu bisa membantu Nadya menghindari membuat keputusan yang buruk?',
                'soal_4' => 'Bagaimana Nadya bisa tetap tenang dan percaya diri saat teman-temannya menawarinya pil? Jelaskan langkah-langkah yang dia lakukan!',
                'soal_5' => 'Jika kamu berada di posisi Nadya, apa yang akan kamu lakukan untuk menjaga keseimbangan emosi dan menghindari membuat keputusan yang buruk?'
            ]
        ];
        return view('ayo-mengenali-aku.emosi.studi-kasus', compact('revisi_materi', 'jawaban_sk_emotional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array_fill_keys(
            array_map(fn($i) => "soal_$i", range(1, 5)),
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
        EmotionalAwarenessSK::create(
            $data
        );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
