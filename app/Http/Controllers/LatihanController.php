<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu(){
        $a = [
            array (
                'menu1' =>'Beranda',
                'menu2' => 'Berita' ,
                'menu3' => 'Tentang',
                'menu4' =>  'Olahraga',
                'or' => [
                'Bulu Tangkis' , 'Sepak Bola'],
                'menu5' => ['Politik' ,'Manca Negara']
                )
        ];
        // dd($a);
        return view('pages.menu' , ['menu' => $a]);
    }

    public function dosen(){
        $b = [
            array ('id' => 1, 'namadosen' => 'Yusuf Bachtiar' , 'matkul' => 'Pemrograman Mobile' ,
            'mahasiswa' => [
                ['nama' => 'Muhammad Soleh' , 'nilai' => 78],
                ['nama' => 'Jujun Junaedi' , 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri' , 'nilai' => 90],
                ['nama' => 'Ubay Holin' , 'nilai' => 87],
                ['nama' => 'Fadhillah' , 'nilai' => 95]
            ]),

            array ('id' => 2, 'namadosen' => 'Yaris Riyadi' , 'matkul' => 'Pemrograman Web' ,
            'mahasiswa' => [
                ['nama' => 'Alfred McTomminay' , 'nilai' => 67],
                ['nama' => 'Brune Kasmir' , 'nilai' => 90],
                ['nama' => 'Akid Hendra' , 'nilai' => 50],
                ['nama' => 'Dany Irawan' , 'nilai' => 70],
                ['nama' => 'Candra Mega Putra' , 'nilai' => 60]
            ]),
        ];
        //dd($b);
        return view('pages.dosen' , ['dosen' => $b]);
    }

    public function stasiuntv(){
        $tv = [

            ['stasiun' => 'TVRI','Siaran' => 'Klik Indonesia Petang', 'Jam_tayang' => '18:00','tanggal' => '13 july 2022'],
            ['stasiun' => 'NET TV','Siaran' => 'Shinbis House', 'Jam_tayang' => '16:00','tanggal' => '12 july 2022'],
            ['stasiun' => 'BEINSPORT','Siaran' => 'Event Highlights', 'Jam_tayang' => '11:35','tanggal' => '14 july 2022'],
            ['stasiun' => 'Ochannel','Siaran' => 'Berita', 'Jam_tayang' => '15:00','tanggal' => '11 july 2022'],
            ['stasiun' => 'Indosiar','Siaran' => 'Twin Dragon', 'Jam_tayang' => '21:30','tanggal' => '13 july 2022'],
        ];
        return view('pages.tv',['stasiuntv' => $tv]);
    }
}

