<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penerbit::create([
            'kode' => 'marvel',
            'nama' => 'Marvel',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'dc comic',
            'nama' => 'Dc Comic',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'disney',
            'nama' => 'Disney',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'erlangga',
            'nama' => 'Erlangga',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'dolphin',
            'nama' => 'Dolphin',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'kawan pustaka',
            'nama' => 'Kawan Pustaka',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'serambi ilmu semesta',
            'nama' => 'Serambi Ilmu Semesta',
            // 'verif' => '',
        ]);
    }
}
