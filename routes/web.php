<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Basic
Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo '<center>';
    echo '<h1><u>Halo Semuanya</u></h1><br>';
    echo '<b>Kami Sedang belajar Laravel</b>';
    echo '</center>';
});

// Route Basic lanjut ke Views
// CAra Route basic file
Route::get('/home', function () {
    return view('home');
});

// cara Route basic folder (nama folder: pages)
Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/nama', function () {
    return view('pages.nama');
});

Route::get('/alamat', function () {
    return view('pages.alamat');
});

// route parameter
// 1 data sama dengan 1 variable
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{kelas}/{hobby}', function ($a,$b,$c,$d,$e,$f) {
    echo '<h1><u>Laravel Route Parameter Biodata</u></h1><br>';
    return view('pages.biodata', compact ('a','b','c','d','e','f'));
});

// Route Opsional Parameter
Route::get('/pesanan/{makanan?}', function ($a = 'Mohon Maaf Pesanan Anda Tidak Ada') {
    return view('pages.pesanan' , compact ('a'));
});

