<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //memasukan data dibawah.
        // Barang::create([
        //     'nama_barang' => 'handphone',
        //     'merk' => 'Vivo 2024',
        //     'stok' => 10,
        //     'harga' => '10000000',
        //     'kategori' => 'elektronik',
        // ]);

        Barang::factory()->count(100)->create();


    }
}
