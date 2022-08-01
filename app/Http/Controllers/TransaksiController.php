<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengunjung;
use App\Models\detail_transaksi;
use App\Models\kamar;
use App\Models\karyawan;
use App\Models\transaksi;


class TransaksiController extends Controller
{
    public function pengunjung(){
        $pengunjung = pengunjung::all();
        $dt = detail_transaksi::all();
        $kamar = kamar::all();
        $ky = karyawan::all();
        $trans = transaksi::all();
        return view('post.transaksi' , compact('pengunjung','dt','kamar','ky','trans'));
    }

}
