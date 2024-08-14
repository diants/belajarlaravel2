<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('index', function () {
    return view('index');
});

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('helo', function () {
    return 'ini laravel saya!';
});
Route::get('tampilan/{nilai}', function ($nilai) {
    return 'nilai saya adalah : '. $nilai;
});
Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil penjumlahan adalah : '. $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pengurangan adalah : '. $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil perkalian adalah : '. $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pembagian adalah : '. $nilai1 / $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});
*/

use Illuminate\Support\Facades\Route;

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pensil', 'pintu', 'bolpoin', 'buku', 'lampu'];
    // return view('table', ['data' => $data, 'barang' => $data]);
    return view('table', compact('data'));
});

Route::get('/template', function () {
    return view('template');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
?>