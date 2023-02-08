<?php

namespace Database\Seeders;

use App\Models\Identitas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identitas::create([
            'nama_app' => 'PerpustakaanKu',
            'alamat_app' => 'JL. RAYA CONDET, CILILITAN, Kramat Jati, JAKARTA TIMUR',
            'email_app' => 'evelyn@gmail.com',
            'nomor_hp' => '08998778506',
            'foto' => '',
        ]);
    }
}
