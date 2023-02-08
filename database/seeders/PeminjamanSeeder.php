<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tanggal_peminjaman' => '2023-01-02',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '2',
            'tanggal_peminjaman' => '2023-01-015',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '3',
            'tanggal_peminjaman' => '2023-01-05',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '4',
            'tanggal_peminjaman' => '2023-01-08',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '5',
            'tanggal_peminjaman' => '2023-01-12',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '6',
            'tanggal_peminjaman' => '2023-01-20',
            // 'tanggal_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'baik',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '0',
        ]);
    }
}
