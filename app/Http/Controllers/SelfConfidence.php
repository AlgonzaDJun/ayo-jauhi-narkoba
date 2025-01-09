<?php

namespace App\Http\Controllers;

use App\Models\LKSelfConfidence;
use App\Models\SelfConfidenceIT;
use App\Models\SelfConfidentPKD;
use App\Models\SelfConfidentSK;
use Illuminate\Http\Request;

class SelfConfidence extends Controller
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
        // dd($request->all());
        $simpan = $request->all();
        $jawaban = $request->jawaban;

        // modif key $request->jawaban + 1
        $jawaban = array_combine(range(1, count($jawaban)), array_values($jawaban));

        // $score = 0;
        $message_lulus = "Selamat! Anda telah menjawab semua pertanyaan.";
        // $message_gagal = "Anda belum menjawab semua pertanyaan dengan benar. Silahkan coba lagi.";
        // $message = "";

        $mappedData = [
            'user_id' => auth()->user()->id,
            // 'Kategori_SK' => $simpan['studi_kasus'],
        ];

        // Mapping jawaban ke soal1, soal2, ...
        foreach ($simpan['jawaban'] as $index => $value) {
            $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        }

        //submit ke db
        SelfConfidentSK::create($mappedData);

        return response()->json([
            'message' => $message_lulus
        ]);

        // $jwb_stud_kas_1 = [
        //     '1' => 'a',
        //     '2' => 'a',
        //     '3' => 'c',
        //     '4' => 'b',
        //     '5' => 'd',
        //     '6' => 'b',
        // ];

        // $jwb_stud_kas_2 = [
        //     '1' => 'c',
        //     '2' => 'd',
        //     '3' => 'b',
        //     '4' => 'a',
        //     '5' => 'c',
        //     '6' => 'c',
        // ];

        // // c a a b d c
        // $jwb_stud_kas_3 = [
        //     '1' => 'c',
        //     '2' => 'a',
        //     '3' => 'a',
        //     '4' => 'b',
        //     '5' => 'd',
        //     '6' => 'c',
        // ];


        // if ($request->studi_kasus == 1) {
        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => auth()->user()->id,
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     SelfConfidentSK::create($mappedData);
        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_1[$key]) {
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
        //         'jawaban_benar' => $jwb_stud_kas_1,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // } else if ($request->studi_kasus == 2) {
        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => auth()->user()->id,
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     SelfConfidentSK::create($mappedData);
        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_2[$key]) {
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
        //         'jawaban_benar' => $jwb_stud_kas_2,
        //         'score' => $score,
        //         'message' => $message
        //     ]);
        // } else if ($request->studi_kasus == 3) {
        //     $simpan = $request->all();

        //     // Inisialisasi array mappedData
        //     $mappedData = [
        //         'user_id' => auth()->user()->id,
        //         'Kategori_SK' => $simpan['studi_kasus'],
        //     ];

        //     // Mapping jawaban ke soal1, soal2, ...
        //     foreach ($simpan['jawaban'] as $index => $value) {
        //         $mappedData['soal_' . ($index + 1)] = $value; // soal1, soal2, ...
        //     }

        //     //submit ke db
        //     SelfConfidentSK::create($mappedData);
        //     foreach ($jawaban as $key => $value) {
        //         if ($value == $jwb_stud_kas_3[$key]) {
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
        //         'jawaban_benar' => $jwb_stud_kas_3,
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
        //
        // dd($request->all());
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
        SelfConfidenceIT::create($mappedData);

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
    public function storelkpenguatandiri(Request $request)
    {
        SelfConfidentPKD::create($request->all());
        return redirect()->back();
    }

    public function storelkselfconfidence(Request $request)
    {
        //  dd ($request->all());
        LKSelfConfidence::create($request->all());
        return redirect()->back();
    }
}
