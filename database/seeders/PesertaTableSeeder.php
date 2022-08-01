<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datapeserta =[
            ['NoSiswa' => 2001, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2001, 'Kode_MP' => 'MP02'],
            ['NoSiswa' => 2003, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2003, 'Kode_MP' => 'MP02'],
            ['NoSiswa' => 2004, 'Kode_MP' => 'MP01'],
            ['NoSiswa' => 2004, 'Kode_MP' => 'MP03'],
        ];
         // masukkan data ke database
         DB::table('peserta')->insert($datapeserta);
    }
}
