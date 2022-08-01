<?php

use App\Http\Controllers\SlotController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\mataPelajaranController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\pengenalanController;
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
Route::get('/pesanan/{makanan?}/{makanan1?}', function ($a , $b ,$c= 'Mohon Maaf Pesanan Anda Tidak Ada') {
    return view('pages.pesanan' , compact ('a','b' , 'c'));
});

// passing data dari Controller ke view 
Route::get('/pengenalan' , [App\Http\Controllers\pengenalanController::class, 'Pengenalan']);

// passing data dinamis (route parameter) dari controller ke view
// 'intro' disini merupakan nama dari function yang kita buat di views/pages/pengenalan.blade.php
// dalam memanggil passing data ada dua cara yaitu 1.[App\Http\Controllers\pengenalanController::class, 'intro']
// atau dapat juga 2. langsung nama controllernya  [pengenalanController::class, 'siswa']
Route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\pengenalanController::class, 'intro']);

Route::get('/siswa', [App\Http\Controllers\pengenalanController::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class, 'menu']);
Route::get('/dosen', [App\Http\Controllers\LatihanController::class, 'dosen']);
Route::get('/stasiuntv', [App\Http\Controllers\LatihanController::class, 'stasiuntv']);

// menampilkan data database ke view
Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);

Route::get('/siswapost', [App\Http\Controllers\SiswaController::class, 'siswa']);
 Route::get('/peserta', [App\Http\Controllers\PesertaController::class, 'peserta']);
 Route::get('/mapel', [App\Http\Controllers\mataPelajaranController::class, 'mataPelajaran']);

 Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'pengunjung']);
Auth::routes();

// Route::resource('slot', SlotController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Menampilkan data database CRUD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('slot', SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


