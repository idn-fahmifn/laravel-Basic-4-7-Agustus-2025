<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory;

    //dengan siapa model ini terhubung (tabel)
    //di tabel ada apa saja?
    protected $table = 'barang';

    protected $fillable = 
    [
        // field yang ada pada tabel.
        'nama_barang', 'merk', 'stok', 'harga', 'kategori'
    ];
}
