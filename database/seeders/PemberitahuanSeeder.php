<?php

namespace Database\Seeders;

use App\Models\Pemberitahuan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemberitahuan::create([
            'isi' => 'Maaf Terganggu, Server Sedang Maintenance',
            // 'level_user' => '',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Selamat Datang Diperpustakaanku',
            // 'level_user' => '',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Buku Adalah Jendela Dunia',
            // 'level_user' => '',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Membaca Buku Sama Dengan Menambah Banyak Ilmu',
            // 'level_user' => '',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Maaf Perpustakaanku Tutup',
            // 'level_user' => '',
            'status' => 'nonaktif',
        ]);
    }
}
