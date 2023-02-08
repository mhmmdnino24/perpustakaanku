<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'ADMIN01',
            // 'nis' => '0084338',
            'fullname' => 'Muhammad Andi Jamaludin',
            'username' => 'Andi',
            'password' => Hash::make("password"),
            // 'kelas' => 'XII RPL',
            // 'alamat' => 'Jakarta Timur',
            // 'verif' => '',
            'role' => 'admin',
            'join_date' => '2023-01-01',
            'foto' => '',
        ]);

        User::create([
            'kode' => 'USER01',
            'nis' => '0084268',
            'fullname' => 'Muhammad Nino Pramatama',
            'username' => 'Nino',
            'password' => Hash::make("password"),
            'kelas' => 'XII RPL',
            'alamat' => 'Jakarta Selatan',
            // 'verif' => '',
            'role' => 'user',
            'join_date' => '2023-01-12',
            'foto' => '',
        ]);

        User::create([
            'kode' => 'USER02',
            'nis' => '0089042',
            'fullname' => 'Muhammad Rizki',
            'username' => 'Rizki',
            'password' => Hash::make("password"),
            'kelas' => 'XII AKL',
            'alamat' => 'Jakarta Utara',
            // 'verif' => '',
            'role' => 'user',
            'join_date' => '2023-01-10',
            'foto' => '',
        ]);

        User::create([
            'kode' => 'USER03',
            'nis' => '0084710',
            'fullname' => 'Surya Pratama',
            'username' => 'Surya',
            'password' => Hash::make("password"),
            'kelas' => 'XI BDP',
            'alamat' => 'Jakarta Barat',
            // 'verif' => '',
            'role' => 'user',
            'join_date' => '2023-01-08',
            'foto' => '',
        ]);
    }
}
