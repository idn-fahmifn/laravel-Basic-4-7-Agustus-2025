<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'judul_laporan' => ['string', 'required', 'max:200'],
            'dokumentasi' => ['file', 'required', 'max:2048', 'mimes:jpg,jpeg,png,svg,heic'],
            'isi_laporan' => ['required'],
            'jenis_laporan' => ['required'],
        ]);

        if ($request->hasFile('dokumentasi')) {
            $gambar = $request->file('dokumentasi'); //file yang diupload
            $path = 'public/images/pengaduan'; //path tempat menyimpan
            $ext = $gambar->getClientOriginalExtension(); //mengambil nilai ext
            $nama = 'dokumentasi_laporan_' . Carbon::now()
            ->format('Ymdhis') . random_int(10, 100) .'.'. $ext; //nama setelah diupload
            $gambar->storeAs($path, $nama);

            $input['dokumentasi'] = $nama;
        }

        Pengaduan::create($input);

        return redirect()->route('dashboard.user');


    }

}
