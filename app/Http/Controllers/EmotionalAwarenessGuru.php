<?php

namespace App\Http\Controllers;

use App\Models\JawabanSoalEmosi;
use App\Models\JurnalEmosi;
use App\Models\JurnalMindfulness;
use Illuminate\Http\Request;

class EmotionalAwarenessGuru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban_emosi = JawabanSoalEmosi::latest()->get();
        // dd($jawaban_emosi[0]->detailJawaban->soal1);
        return view('guru.ayo-mengenali-aku.emotional-awareness', compact('jawaban_emosi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawaban_jurnal_emosi = JurnalEmosi::latest()->get();
        // dd($jawaban_jurnal_emosi);
        return view('guru.ayo-mengenali-aku.jurnal-emosi', compact('jawaban_jurnal_emosi'));
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
        $jawaban_jurnal_mindfulness = JurnalMindfulness::latest()->get();
        // dd($jawaban_jurnal_mindfulness);
        return view('guru.ayo-mengenali-aku.jurnal-mindfulness', compact('jawaban_jurnal_mindfulness'));
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
