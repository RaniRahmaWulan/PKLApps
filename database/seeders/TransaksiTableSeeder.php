<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trans=[
            ['no_transaksi' => 56746747 , 'id_pengunjung' => 20011 ,'id_karyawan' => '11121' ,'jmlh_kamar' => 1 ,'tgl_masuk' => '2022-07-15' , 'tgl_keluar' => '2022-07-19' , 'lama_nginep' => 4 ,'total_harga' => 6000000],
            ['no_transaksi' => 45343212 , 'id_pengunjung' => 20012 ,'id_karyawan' => '11122' ,'jmlh_kamar' => 2 ,'tgl_masuk' => '2022-07-12' , 'tgl_keluar' => '2022-07-15', 'lama_nginep' => 3 , 'total_harga' => 1500000],
            ['no_transaksi' => 97789658 , 'id_pengunjung' => 20013 ,'id_karyawan' => '11123' ,'jmlh_kamar' => 1 ,'tgl_masuk' => '2022-07-15' , 'tgl_keluar' => '2022-07-16', 'lama_nginep' => 1 ,'total_harga' => 750000 ],
            ['no_transaksi' => 68009876 , 'id_pengunjung' => 20014 ,'id_karyawan' => '11124' ,'jmlh_kamar' => 1 ,'tgl_masuk' => '2022-07-11' , 'tgl_keluar' => '2022-07-16' , 'lama_nginep' => 5 , 'total_harga' => 2000000],
            ['no_transaksi' => 35567876 , 'id_pengunjung' => 20015 ,'id_karyawan' => '11125' ,'jmlh_kamar' => 3 ,'tgl_masuk' => '2022-07-13' , 'tgl_keluar' => '2022-07-15' , 'lama_nginep' => 2 ,'total_harga' => 3000000],
        ];

        // masukkan data ke database
        DB::table('transaksi')->insert($trans);
    }
}
