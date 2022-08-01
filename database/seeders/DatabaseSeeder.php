<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
        ]);

        $this->call([
            SiswaTableSeeder::class,
        ]);

        $this->call([
            PesertaTableSeeder::class,
        ]);

        $this->call([
            mataPelajaranTableSeeder::class,
        ]);

        // tugas tanggal 18 bulan juli 2022
        $this->call([
           PengunjungTableSeeder::class,
        ]);

        $this->call([
            detail_transaksiTableSeeder::class,
         ]);

         $this->call([
            KamarTableSeeder::class,
         ]); 

         $this->call([
            KaryawanTableSeeder::class,
         ]);

         $this->call([
            TransaksiTableSeeder::class,
         ]);
    }
}
