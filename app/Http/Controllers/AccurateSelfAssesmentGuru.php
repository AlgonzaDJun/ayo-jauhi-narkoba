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
        $jawaban_accurate_sk = AccurateSelfAssesmentSK::orderBy('id', 'desc')->get()->unique('user_id');
        // dd($jawaban_accurate_sk);
        return view('guru.accurate-self-assesment.jawaban-studi-kasus', compact('jawaban_accurate_sk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawaban_accurate_it = AccurateSelfAssesmentIT::orderBy('id', 'desc')->get()->unique('user_id');

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
        return view('guru.accurate-self-assesment.jawaban-refleksi-diri', compact('jawaban_accurate_rd'));
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
