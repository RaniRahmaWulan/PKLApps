<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class detail_transaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt= [
            ['id_dtl_transaksi' => '20011' , 'no_transaksi' => 56746747 , 'no_kamar' => 345],
            ['id_dtl_transaksi' => '20012' , 'no_transaksi' => 45343212 , 'no_kamar' => 167],
            ['id_dtl_transaksi' => '20013' , 'no_transaksi' => 97789658 , 'no_kamar' => 213],
            ['id_dtl_transaksi' => '20014' , 'no_transaksi' => 68009876 , 'no_kamar' => 134],
            ['id_dtl_transaksi' => '20015' , 'no_transaksi' => 35567876 , 'no_kamar' => 34],
        ];

         // masukkan data ke database
         DB::table('detail_transaksi')->insert($dt);
    }
}
