<?php

namespace App\Http\Controllers;

use App\Models\AccurateSelfAssesmentIT;
use App\Models\AccurateSelfAssesmentRD;
use App\Models\AccurateSelfAssesmentSK;
use Illuminate\Http\Request;

class AccurateSelfAssesment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refleksi = true;
        return view('ayo-mengenali-aku.accurate-self-assesment.refleksi-diri', compact('refleksi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd(vars: $request->all());
        // dd('masuk');

        $simpan = $request->all();

        // Inisialisasi array mappedData
        $mappedData = [
            'user_id' => $simpan['user_id'],
            // 'Kategori_SK' => $simpan['studi_kasus'],
        ];

        // Mapping jawaban ke soal1, soal2, ...
        foreach ($simpan['jawaban'] as $index => $value) {
            $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        }

        // dd($mappedData);

        //submit ke db
        AccurateSelfAssesmentSK::create($mappedData);

        // foreach ($jawaban as $key => $value) {
        //     if ($value == $jwb_stud_kas_1[$key]) {
        //         $score += 1;
        //     }
        // }

        // if ($score == 4) {
        //     $message = $message_lulus;
        // } else {
        //     $message = $message_gagal;
        // }

        $message = "Selamat! Anda telah menjawab semua pertanyaan.";

        // return jawaban lama, jawaban benar, dan score
        return response()->json([
            // 'jawaban_old' => $jawaban,
            // 'jawaban_benar' => $jwb_stud_kas_1,
            // 'score' => $score,
            'message' => $message
        ]);

        // Ambil data dari request

        // $jawaban = $request->jawaban;

        // // modif key $request->jawaban + 1
        // $jawaban = array_combine(range(1, count($jawaban)), array_values($jawaban));

        // $score = 0;
        // $message_lulus = "Selamat! Anda telah menjawab semua pertanyaan dengan benar.";
        // $message_gagal = "Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.";
        // $message = "";

        // $jwb_stud_kas_1 = [
        //     '1' => 'd',
        //     '2' => 'a',
        //     '3' => 'c',
        //     '4' => 'b'
        // ];

        // $jwb_stud_kas_2 = [
        //     '1' => 'c',
        //     '2' => 'b',
        //     '3' => 'd',
        //     '4' => 'd'
        // ];

        // $jwb_stud_kas_3 = [
        //     // b d a c
        //     '1' => 'b',
        //     '2' => 'd',
        //     '3' => 'a',
        //     '4' => 'c'
        // ];

        // $jwb_self_conf_stud_1 = [
        //     '1' => 'a',
        //     '2' => 'a',
        //     '3' => 'c',
        //     '4' => 'b',
        //     '5' => 'd',
        //     '6' => 'b',
        // ];

        // if ($request->studi_kasus == 1) {
        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => $simpan['user_id'],
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     AccurateSelfAssesmentSK::create($mappedData);

        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_1[$key]) {
        //             $score += 1;
        //         }
        //     }

        //     if ($score == 4) {
        //         $message = $message_lulus;
        //     } else {
        //         $message = $message_gagal;
        //     }

        //     // return jawaban lama, jawaban benar, dan score
        //     return response()->json([
        //         'jawaban_old' => $jawaban,
        //         'jawaban_benar' => $jwb_stud_kas_1,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // } else if ($request->studi_kasus == 2) {

        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => $simpan['user_id'],
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     AccurateSelfAssesmentSK::create($mappedData);



        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_2[$key]) {
        //             $score += 1;
        //         }
        //     }

        //     if ($score == 4) {
        //         $message = $message_lulus;
        //     } else {
        //         $message = $message_gagal;
        //     }

        //     // return jawaban lama, jawaban benar, dan score
        //     return response()->json([
        //         'jawaban_old' => $jawaban,
        //         'jawaban_benar' => $jwb_stud_kas_2,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // } else if ($request->studi_kasus == 3) {

        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => $simpan['user_id'],
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     AccurateSelfAssesmentSK::create($mappedData);

        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_3[$key]) {
        //             $score += 1;
        //         }
        //     }

        //     if ($score == 4) {
        //         $message = $message_lulus;
        //     } else {
        //         $message = $message_gagal;
        //     }

        //     // return jawaban lama, jawaban benar, dan score
        //     return response()->json([
        //         'jawaban_old' => $jawaban,
        //         'jawaban_benar' => $jwb_stud_kas_3,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // } else if ($request->studi_kasus == "selfconf_1") {
        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_self_conf_stud_1[$key]) {
        //             $score += 1;
        //         }
        //     }

        //     if ($score == 6) {
        //         $message = $message_lulus;
        //     } else {
        //         $message = $message_gagal;
        //     }

        //     // return jawaban lama, jawaban benar, dan score
        //     return response()->json([
        //         'jawaban_old' => $jawaban,
        //         'jawaban_benar' => $jwb_self_conf_stud_1,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // }
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
        $score = (array_sum(array_map('intval', array_slice($request->data, 1))) / 24) * 100;
        $message = "";

        // Ambil semua request data
        $data = $request->data;

        // Potong array dari key 1
        $filteredData = array_slice($data, 1);
        // dd($filteredData);
        // Inisialisasi array baru untuk menyimpan data dengan key yang dimodifikasi
        $mappedData = [];

        // Foreach untuk menambahkan prefix ke key
        foreach ($filteredData as $key => $value) {
            $mappedData['soal_' . ($key + 1)] = $value; // Contoh: soal_1, soal_2, ...
        }
        $mappedData['user_id'] = auth()->user()->id;
        $mappedData['score'] = (int)$score;

        if ($score < 60) {
            $message = "Capaian Pembelajaran anda : sangat kurang. Anda perlu belajar lebih giat lagi";
        } elseif ($score >= 60 && $score <= 70) {
            $message = "Capaian Pembelajaran anda : Kurang. Anda masih kurang baik, dan masih perlu belajar lebih giat lagi";
        } elseif ($score >= 71 && $score <= 80) {
            $message = "Capaian Pembelajaran anda : Cukup. Anda sudah cukup baik, tetapi masih perlu belajar lebih giat lagi";
        } elseif ($score >= 81 && $score <= 90) {
            $message = "Capaian Pembelajaran anda : Baik. Anda sudah  baik, tetapi masih perlu belajar lebih giat lagi";
        } elseif ($score >= 91 && $score <= 100) {
            $message = "Anda sudah sangat baik dalam memahami pembelajaran ini.";
        }

        $mappedData['message'] = $message;

        // dd($mappedData);
        // komen
        AccurateSelfAssesmentIT::create($mappedData);

        return response()->json([
            'score' => $score,
            'message' => $message
        ]);
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

    public function tesInstrumen(Request $request)
    {
        // dd('tes instrumen');
        //  dd($request->all());
        // dd($request->data);
        $score = array_sum(array_map('intval', $request->data));
        $message = "";

        // Ambil semua request data
        $data = $request->data;

        // Potong array dari key 1
        $filteredData = array_slice($data, 1);
        // dd($filteredData);
        // Inisialisasi array baru untuk menyimpan data dengan key yang dimodifikasi
        $mappedData = [];

        // Foreach untuk menambahkan prefix ke key
        foreach ($filteredData as $key => $value) {
            $mappedData['soal_' . ($key + 1)] = $value; // Contoh: soal_1, soal_2, ...
        }
        $mappedData['user_id'] = auth()->user()->id;
        $mappedData['score'] = $score;
        // dd($mappedData);
        AccurateSelfAssesmentIT::create($mappedData);
        // if score 60 - 80, if 40 - 59, if 20 - 39, if < 20

        if ($score >= 60 && $score <= 80) {
            $message = "Anda memiliki tingkat Accurate Self-Assessment yang sangat baik. Anda mampu mengevaluasi kelebihan dan kekurangan Anda secara obyektif, terbuka terhadap kritik dan saran, dan secara aktif mengambil langkah-langkah untuk memperbaiki diri";
        } else if ($score >= 40 && $score <= 59) {
            $message = "Anda cukup baik dalam penilaian diri yang akurat, namun mungkin masih ada beberapa area di mana Anda bisa lebih proaktif dalam menerima kritik dan saran atau memperbaiki kekurangan diri";
        } else if ($score >= 20 && $score <= 39) {
            $message = "Anda mungkin perlu bekerja lebih keras dalam mengenali kelebihan, kekurangan, dan menggunakan kritik konstruktif atau membangun untuk pengembangan diri. Refleksi lebih lanjut dan tindakan perbaikan dapat membantu meningkatkan kemampuan Anda dalam penilaian diri";
        } else if ($score < 20) {
            $message = "Anda mungkin menghadapi kesulitan dalam menilai diri secara obyektif, mengenali kekurangan, atau menerima kritik. Mungkin ini saatnya untuk mempertimbangkan lebih banyak refleksi diri dan keterbukaan terhadap masukan dari orang lain.";
        }

        // session(['refleksi' => true]);

        // delete session
        // session()->forget('refleksi');

        return response()->json([
            'score' => $score,
            'message' => $message
        ]);
    }

    public function refleksiDiri(Request $request)
    {
        // dd($request->all());
        AccurateSelfAssesmentRD::create($request->all());
        return redirect()->back();
    }
}
