<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $user->assignRole('user');
        // dd($user);
        // return view('role');
        return redirect()->intended('/ayo-mengenali-aku/dashboard/edit');
    }

    public function chooseRole(Request $request)
    {
        $user = $request->user();

        if ($request->role != 'user' && $request->role != 'dokter') {
            return redirect()->back();
        } else {
            $user->assignRole($request->role);
            // dd($user->assignRole($request->role));
            return redirect()->intended('/ayo-mengenali-aku/dashboard/edit');
        }
    }
}
