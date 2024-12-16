<?php

namespace App\Http\Controllers;

use App\Models\LKSelfConfidence;
use App\Models\SelfConfidentPKD;
use App\Models\SelfConfidentSK;
use Illuminate\Http\Request;

class SelfConfidentGuru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawaban_self_conf = SelfConfidentSK::latest()->get();
        return view('guru.self-confident.jawaban-studi-kasus', compact('jawaban_self_conf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jawaban_lk_pkd = SelfConfidentPKD::latest()->get();
        return view('guru.self-confident.jawaban-lk-pkd', compact('jawaban_lk_pkd'));
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
        $kategoriMap = [
            'bag1' => '1',
            'bag2' => '2',
            'bag3' => '3',
        ];

        // Cek apakah ID valid, jika tidak, return kosong
        if (!array_key_exists($id, $kategoriMap)) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        // Ambil data berdasarkan kategori
        $data = LKSelfConfidence::where('Kategori_Bagian', $kategoriMap[$id])->latest()->get();

        if($id == 'bag1') {
            return view('guru.self-confident.lk-bagian-1', compact('data'));
        } else if($id == 'bag2') {
            return view('guru.self-confident.lk-bagian-2', compact('data'));
        } else if($id == 'bag3') {
            return view('guru.self-confident.lk-bagian-3', compact('data'));
        }
        // return view('your-view-name', compact('data'));
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
