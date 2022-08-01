<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ky=[
            ['id_karyawan' => '11121' , 'nm_karyawan' => 'Julaeha', 'JK' => 'Wanita'],
            ['id_karyawan' => '11122' , 'nm_karyawan' => 'Dadan' , 'JK' => 'Pria'], 
            ['id_karyawan' => '11123' , 'nm_karyawan' => 'Ijal' , 'JK' => 'Pria'],
            ['id_karyawan' => '11124' , 'nm_karyawan' => 'Rosaeni' , 'JK' => 'Wanita'],
            ['id_karyawan' => '11125' ,'nm_karyawan' => 'Jidah' , 'JK' => 'Wanita',]
        ];

        DB::table('karyawan')->insert($ky);
    }
}
