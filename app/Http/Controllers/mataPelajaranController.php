<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mataPelajaran;

class mataPelajaranController extends Controller
{
    public function mataPelajaran()
    {
        $mataPelajaran = mataPelajaran::all();
        return view('post.mataPelajaran' , compact('mataPelajaran'));
    }
}
