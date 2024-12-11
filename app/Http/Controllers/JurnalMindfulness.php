<?php

namespace App\Http\Controllers;

use App\Models\JurnalMindfulness as JurnalMindfulnessModels;
use Illuminate\Http\Request;

class JurnalMindfulness extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal_mindfulness = JurnalMindfulnessModels::where('user_id', auth()->user()->id)->orderBy("created_at", "desc")->get();
        // dd ($jurnal_mindfulness);
        return view('ayo-mengenali-aku.jurnal-mindfulness.index', compact('jurnal_mindfulness'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ayo-mengenali-aku.jurnal-mindfulness.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        //  dd($request->all());
        $simpan = JurnalMindfulnessModels::create($data);
        return redirect()->route('jurnal-mindfulness.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurnal_mindfulness = JurnalMindfulnessModels::findOrFail($id);
        return view('ayo-mengenali-aku.jurnal-mindfulness.show', compact('jurnal_mindfulness'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurnal_mindfulness = JurnalMindfulnessModels::findOrFail($id);
        return view('ayo-mengenali-aku.jurnal-mindfulness.edit', compact('jurnal_mindfulness'));
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
        JurnalMindfulnessModels::findOrFail($id)->update($request->all());
        return redirect()->route('jurnal-mindfulness.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JurnalMindfulnessModels::findOrFail($id)->delete();
        return redirect()->route('jurnal-mindfulness.index');
    }
}
