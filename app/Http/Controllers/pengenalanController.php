<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalanController extends Controller
{
    public function Pengenalan(){
        $nama = "Rani Rahma Wulan";
        $umur = "17";
        return view('pages.pengenalan', compact('nama','umur'));
    }
    
    // controller dinamis(route parameter)
    public function intro($nama,$alamat,$umur){

        return view('pages.intro', compact('nama','alamat','umur'));
    }

    public function siswa(){
        $a = [
            array('id' => 1, 'name' => 'Rani' , 'age' => 17, 'mapel' =>
            ['Matematika','B.sunda']),
            array('id' => 2, 'name' => 'Rafeyfa', 'age' => 16, 'mapel' =>
            ['Fisika','B.inggris']),
        ];
        // dd disini dimaksud dengan data dummy,data dummy berfungsi untuk mengecek data yang telah dimasukkan
    //  dd($a);
    return view('pages.siswa' , ['siswa' => $a]);
    }
}

