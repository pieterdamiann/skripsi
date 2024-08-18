<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tentang_kami = [
            [
                'id' => 1,
                'path_gambar' => '/assets/pemiluhijau3.svg',
                'deskripsi' => 'Pemilu Hijau adalah website yang mengusung tentang pemilu yang bertujuan agar
                  pengguna dapat mendapatkan informasi seputar pemilu, yang berupa berita-berita terbaru
                  pengetahuan tentang pemilu itu sendiri, partai yang tergabung dalam periode pemilu.
                  Dengan adanya website ini, diharapkan dapat mengurangi bahilo yang sering bertebaran
                  dijalanan menjelang pemilu agar tidak menambah limbah sampah.'
            ],
        ];

        DB::table('tentang_kamis')->insert($tentang_kami);


        $tentang_pemilu = [
            [
                'judul' => 'Macam - Macam Warna Surat Suara pada Pemilu 2024 dan Tujuannya',
                'tanggal_terbit' => '2023-05-28',
                'nama_penerbit' => 'Pemilu Hijau',
                'link' => 'https://pemiluhijau.com',
                'deskripsi' => 'Pada pemilu 2024 kali ini, terdapat 5 macam surat suara yang dibedakan menurut warnanya masing - masing, berikut adalah contoh surat suara dan juga jenis warnanya',
                'filename' => null,
            ],
        ];

        DB::table('tentang_pemilus')->insert($tentang_pemilu);
    }
}
