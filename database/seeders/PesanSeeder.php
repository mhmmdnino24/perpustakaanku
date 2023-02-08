<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Buku Dipinjam',
            'isi' => 'Buku Sedang Dipinjam, Kembali Lagi Saat Buku Sudah Kembali',
            'status' => 'terkirim',
            'tanggal_kirim' => '2023-01-13',
        ]);

        Pesan::create([
            'penerima_id' => '3',
            'pengirim_id' => '1',
            'judul' => 'Buku Telah Dipinjam',
            'isi' => 'Terima Kasih Sudah Meminjam Buku Dari Perpustakaan Kami',
            'status' => 'dibaca',
            'tanggal_kirim' => '2023-01-10',
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Anda Merusak Buku',
            'isi' => 'Anda Merusak Buku Perpustakan, Harap Membayar Denda 20000',
            'status' => 'dibaca',
            'tanggal_kirim' => '2023-01-04',
        ]);

        Pesan::create([
            'penerima_id' => '3',
            'pengirim_id' => '1',
            'judul' => 'Buku Telah Dipinjam',
            'isi' => 'Terima Kasih Sudah Meminjam Buku Dari Perpustakaan Kami',
            'status' => 'terkirim',
            'tanggal_kirim' => '2023-01-17',
        ]);
    }
}
