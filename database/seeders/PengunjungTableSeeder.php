<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung=[
            ['id_pengunjung' => 20011 , 'nm_pengunjung' => 'Chanyeol' ,'alamat' => 'Jakarta' ,'JK' => 'Pria' ,'no_tlp' => '087777777771','no_ktp' => '4444444444467'],
            ['id_pengunjung' => 20012 , 'nm_pengunjung' => 'RefaDes' ,'alamat' => 'Kalimantan' ,'JK' => 'Wanita' ,'no_tlp' => '086555555555','no_ktp' => '3433344333212'],
            ['id_pengunjung' => 20013 , 'nm_pengunjung' => 'Syifafad' ,'alamat' => 'Bogor' ,'JK' => 'wanita' ,'no_tlp' => '084466443656','no_ktp' => '4498789800082'],
            ['id_pengunjung' => 20014 , 'nm_pengunjung' => 'Refayfaashy' ,'alamat' => 'Karawang' ,'JK' => 'wanita' ,'no_tlp' => '086788656879','no_ktp' => '7464744738372'],
            ['id_pengunjung' => 20015 , 'nm_pengunjung' => 'FaisPurnama' ,'alamat' => 'Bandung' ,'JK' => 'Pria' ,'no_tlp' => '086788765446','no_ktp' => '7467483873736'],
        ];

        // masukkan data ke database
        DB::table('pengunjung')->insert($pengunjung);
    }
}
