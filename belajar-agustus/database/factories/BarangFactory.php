<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'nama_barang' => fake()->word,
            'merk' => fake()->word,
            'stok' => random_int(10, 50),
            'harga' => random_int(1000, 5000000),
            'kategori' => 'elektronik'
        ];
    }
}
