<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar=[
            ['no_kamar' => 345 ,'jenis_kamar' => 'Presidential Suite' , 'harga' => 1500000],
            ['no_kamar' => 167 ,'jenis_kamar' => 'Single Room' , 'harga' => 500000],
            ['no_kamar' => 213 ,'jenis_kamar' => 'Standart Room' , 'harga' => 7500000],
            ['no_kamar' => 134 ,'jenis_kamar' => 'Single Room' , 'harga' => 500000],
            ['no_kamar' => 34 ,'jenis_kamar' => 'Presiden switt' , 'harga' => 1500000],
        ];
        DB::table('kamar')->insert($kamar);
    }
}
