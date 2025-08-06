<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // menampilkan data barang yang ada di database.
        $data = Barang::all();
        return view('barang.index', 
        compact('data'));

    }

    public function create()
    {
        // menampilkan data string
        return "hallo ini adalah respon create barang.";
    }

    public function profile()
    {
        $nama = "Fahmi FN";

        // return view('profile.profile', compact('nama'));
        return view('profile.profile',[
            'myname' => $nama
        ]);

    }


}
