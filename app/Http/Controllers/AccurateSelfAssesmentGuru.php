<?php

namespace App\Http\Controllers;

use App\Models\AccurateSelfAssesmentIT;
use App\Models\AccurateSelfAssesmentRD;
use App\Models\AccurateSelfAssesmentSK;
use Illuminate\Http\Request;

class AccurateSelfAssesmentGuru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban_accurate_sk = AccurateSelfAssesmentSK::latest()->get();
        // dd($jawaban_accurate_sk);
        return view('guru.accurate-self-assesment.jawaban-studi-kasus',compact('jawaban_accurate_sk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawaban_accurate_it = AccurateSelfAssesmentIT::latest()->get()->map(function ($item) {
            if ($item->score >= 60 && $item->score <= 80) {
                $item->deskripsi = "Anda memiliki tingkat Accurate Self-Assessment yang sangat baik. Anda mampu mengevaluasi kelebihan dan kekurangan Anda secara obyektif, terbuka terhadap kritik dan saran, dan secara aktif mengambil langkah-langkah untuk memperbaiki diri";
            } else if ($item->score >= 40 && $item->score <= 59) {
                $item->deskripsi = "Anda cukup baik dalam penilaian diri yang akurat, namun mungkin masih ada beberapa area di mana Anda bisa lebih proaktif dalam menerima kritik dan saran atau memperbaiki kekurangan diri";
            } else if ($item->score >= 20 && $item->score <= 39) {
                $item->deskripsi = "Anda mungkin perlu bekerja lebih keras dalam mengenali kelebihan, kekurangan, dan menggunakan kritik konstruktif atau membangun untuk pengembangan diri. Refleksi lebih lanjut dan tindakan perbaikan dapat membantu meningkatkan kemampuan Anda dalam penilaian diri";
            } else if ($item->score < 20) {
                $item->deskripsi = "Anda mungkin menghadapi kesulitan dalam menilai diri secara obyektif, mengenali kekurangan, atau menerima kritik. Mungkin ini saatnya untuk mempertimbangkan lebih banyak refleksi diri dan keterbukaan terhadap masukan dari orang lain.";
            }
            return $item;
        });

        // dd($jawaban_accurate_it);

        return view('guru.accurate-self-assesment.jawaban-instrument-tes', compact('jawaban_accurate_it'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jawaban_accurate_rd = AccurateSelfAssesmentRD::latest()->get();
        // dd($jawaban_accurate_rd);
        return view('guru.accurate-self-assesment.jawaban-refleksi-diri',compact('jawaban_accurate_rd'));
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
