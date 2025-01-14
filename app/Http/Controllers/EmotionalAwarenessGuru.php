<?php

namespace App\Http\Controllers;

use App\Models\EmotionalAwarenessSK;
use App\Models\EmotionalAwarenessSP;
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
        $studi_kasus_emotional = EmotionalAwarenessSK::orderBy('id', 'desc')->get()->unique('user_id');
        // dd($studi_kasus_emotional);
        return view('guru.ayo-mengenali-aku.emotional-awareness', compact('studi_kasus_emotional'));
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
        $jawaban_narkoba = EmotionalAwarenessSP::orderBy('id', 'desc')->get()->unique('user_id');
        return view('guru.ayo-mengenali-aku.skala-penilaian', compact('jawaban_narkoba'));
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
