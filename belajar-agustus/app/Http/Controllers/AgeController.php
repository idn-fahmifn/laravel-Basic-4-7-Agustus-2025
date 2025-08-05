<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function form()
    {
        return view('age.form');
    }
    public function sukses()
    {
        return view('age.sukses');
    }
    public function proses(Request $request)
    {
        // arahkan ke halaman tujuan
        // $request->session()->put('umur', $request->age);
        return redirect()->route('age.sukses');
    }
}
