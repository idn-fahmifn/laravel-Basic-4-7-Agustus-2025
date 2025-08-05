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

        $request->validate(
            [
                'name' => ['required', 'string', 'min:4', 'max:10'],
                'age' => ['required', 'numeric', 'min:10', 'max:50'],
            ],
            [
                // custom pesan
                // pesan name
                'name.min' => "Angkanya kurang mas",
                'name.max' => "Angkanya kelebihan mas",

                // Pesan age
                'age.max' => "Umurnya kelebihan mas",
                'age.min' => "Umurnya kurang mas",
            ]
        );

        $request->session()
            ->put('umur', $request->age);
        return redirect()->route('age.sukses');


        // return $request;

    }
}
