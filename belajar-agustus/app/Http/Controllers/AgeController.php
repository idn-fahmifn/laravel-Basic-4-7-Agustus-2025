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
        // session -> penyimpan data (tidak permanen). 
        // hilang di waktu tertentu / ketika refresh

        $request->session()
        ->put('umur', $request->age);
        return redirect()->route('age.sukses');

        // return $request;

    }
}
