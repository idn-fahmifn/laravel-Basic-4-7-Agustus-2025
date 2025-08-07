<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function create()
    {
        return view('pengaduan.create');
    }
}
