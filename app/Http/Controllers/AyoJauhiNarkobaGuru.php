<?php

namespace App\Http\Controllers;

use App\Models\JauhiNarkobaSP;
use App\Models\JawabanMateriNarkoba;
use Illuminate\Http\Request;

class AyoJauhiNarkobaGuru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jawaban_narkoba = JawabanMateriNarkoba::dataTerbaruPerUser();
        // $test = JawabanMateriNarkoba::dataTerbaruPerUser();

        $jawaban_narkoba = JawabanMateriNarkoba::orderBy('id', 'desc')->get()->unique('user_id');

        // dd($test);
        // dd($jawaban_narkoba);
        return view('guru.ayo-jauhi-narkoba.index', compact('jawaban_narkoba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawaban_narkoba = JauhiNarkobaSP::orderBy('id', 'desc')->get()->unique('user_id');
        // dd($jawaban_narkoba);
        return view('guru.ayo-jauhi-narkoba.skala-penilaian', compact('jawaban_narkoba'));
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
