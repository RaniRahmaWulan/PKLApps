<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\peserta;
use App\Models\mataPelajaran;

class SiswaController extends Controller
{
    public function siswa()
    {
        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $mataPelajaran = mataPelajaran::all();
        return view('post.siswa' , compact('siswa','peserta','mataPelajaran'));
    }
}
