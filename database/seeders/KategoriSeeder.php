<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kode' => 'Kartun',
            'nama' => 'Kartun',
        ]);

        Kategori::create([
            'kode' => 'Komik',
            'nama' => 'Komik',
        ]);

        Kategori::create([
            'kode' => 'Fantasi',
            'nama' => 'Fantasi',
        ]);

        Kategori::create([
            'kode' => 'Sejarah',
            'nama' => 'Sejarah',
        ]);

        Kategori::create([
            'kode' => 'Intermedia',
            'nama' => 'Intermedia',
        ]);

        Kategori::create([
            'kode' => 'Kehidupan',
            'nama' => 'Kehidupan',
        ]);
    }
}
