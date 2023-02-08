<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Spiderman',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Stan Lee',
            'tahun_terbit' => '1962',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'spiderman.jpg',
        ]);

        Buku::create([
            'judul' => 'Iron Man',
            'kategori_id' => '2',
            'penerbit_id' => '1',
            'pengarang' => 'Stan Lee',
            'tahun_terbit' => '1963',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '8',
            'foto' => 'ironman.jpg',
        ]);

        Buku::create([
            'judul' => 'Captain America',
            'kategori_id' => '3',
            'penerbit_id' => '1',
            'pengarang' => 'Joe Simon',
            'tahun_terbit' => '1941',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'captainamerica.jpg',
        ]);

        Buku::create([
            'judul' => 'Doctor Strange',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Stan Lee',
            'tahun_terbit' => '1963',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'doctorstrange.jpg',
        ]);

        Buku::create([
            'judul' => 'Thor',
            'kategori_id' => '2',
            'penerbit_id' => '1',
            'pengarang' => 'Stan Lee',
            'tahun_terbit' => '1962',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'thor.jpg',
        ]);

        Buku::create([
            'judul' => 'Batman',
            'kategori_id' => '1',
            'penerbit_id' => '2',
            'pengarang' => 'Bob Kane',
            'tahun_terbit' => '1939',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'batman.jpg',
        ]);

        Buku::create([
            'judul' => 'Joker',
            'kategori_id' => '3',
            'penerbit_id' => '2',
            'pengarang' => 'BIll Finger',
            'tahun_terbit' => '1940',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'joker.jpg',
        ]);

        Buku::create([
            'judul' => 'Wonder Woman',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Harry G Peter',
            'tahun_terbit' => '1960',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '6',
            'foto' => 'wonderwoman.jpg',
        ]);

        Buku::create([
            'judul' => 'Superman',
            'kategori_id' => '1',
            'penerbit_id' => '2',
            'pengarang' => 'Jerry Siegel',
            'tahun_terbit' => '1932',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '8',
            'foto' => 'superman.jpg',
        ]);

        Buku::create([
            'judul' => 'The FLash',
            'kategori_id' => '3',
            'penerbit_id' => '2',
            'pengarang' => 'Robert Kanigher',
            'tahun_terbit' => '1956',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '2',
            'foto' => 'theflash.jpg',
        ]);

        Buku::create([
            'judul' => 'Toy Story',
            'kategori_id' => '1',
            'penerbit_id' => '3',
            'pengarang' => 'John Lasseter',
            'tahun_terbit' => '1995',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '8',
            'foto' => 'toystory.jpg',
        ]);

        Buku::create([
            'judul' => 'Frozen',
            'kategori_id' => '1',
            'penerbit_id' => '3',
            'pengarang' => 'Chris Buck',
            'tahun_terbit' => '2013',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'frozen.jpg',
        ]);

        Buku::create([
            'judul' => 'Aladdin',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Alen Roger',
            'tahun_terbit' => '2005',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '8',
            'foto' => 'aladdin.jpg',
        ]);

        Buku::create([
            'judul' => 'Cinderrella',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Charles Perrault',
            'tahun_terbit' => '1697',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'cinderella.jpg',
        ]);

        Buku::create([
            'judul' => 'Beauty And The Beast',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Gabrielle Suzanne Barbot',
            'tahun_terbit' => '1740',
            // 'isbn' => '',
            'j_buku_baik' => '12',
            'j_buku_rusak' => '4',
            'foto' => 'beautyandthebeast.jpg',
        ]);

        Buku::create([
            'judul' => 'Tangled (Rapunzel)',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Willhelm Grim',
            'tahun_terbit' => '2010',
            // 'isbn' => '',
            'j_buku_baik' => '14',
            'j_buku_rusak' => '5',
            'foto' => 'rapunzel.jpg',
        ]);
    }
}
