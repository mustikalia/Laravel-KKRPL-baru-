<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user/Login Page/login1');
});

Route::get('/login2', function () {
    return view('user/Login Page/login2');
});
Route::get('/signup', function () {
    return view('user/Login Page/signup');
});
Route::get('/main', function () {
    return view('user/Kategori Page/main1');
});
Route::get('/main2', function () {
    return view('user/Kategori Page/main2');
});
Route::get('/main3', function () {
    return view('user/Kategori Page/main3');
});
Route::get('/main4', function () {
    return view('user/Kategori Page/main4');
});
Route::get('/deskripsi', function () {
    return view('user/Menu Page/deskripsi');
});
Route::get('/pesan', function () {
    return view('user/Menu Page/pesan');
});
Route::get('/pesan1', function () {
    return view('user/Menu Page/pesan1');
});
Route::get('/kirim', function () {
    return view('user/Menu Page/kirim');
});
Route::get('/keranjang', function () {
    return view('user/Menu Page/keranjang');
});
Route::get('/dashboard', function () {
    return view('admin/admin page/dashbord');
});
Route::get('/stok', function () {
    return view('admin/admin page/stok');
});
Route::get('/stok1', function () {
    return view('admin/admin page/stok1');
});
Route::get('/stok2', function () {
    return view('admin/admin page/stok2');
});
Route::get('/pesanadmin', function () {
    return view('admin/admin page/pesanadmin');
});
Route::get('/pesanadmin1', function () {
    return view('admin/admin page/pesanadmin1');
});
Route::get('/tentang', function () {
    return view('admin/admin page/tentang');
});
Route::get('/tentang1', function () {
    return view('admin/admin page/tentang1');
});
Route::get('/pengaturan', function () {
    return view('admin/admin page/pengaturan');
});
Route::get('/pengaturan1', function () {
    return view('admin/admin page/pengaturan1');
});
Route::get('/ubahsandi', function () {
    return view('admin/admin page/ubahsandi');
});
Route::get('/riwayat', function () {
    return view('admin/admin page/riwayat');
});
Route::get('/resep', function () {
    return view('admin/admin page/resep');
});
Route::get('/riwayatresep', function () {
    return view('user/menu page/riwayatresep');
});
Route::get('/tentanguser', function () {
    return view('user/menu page/tentanguser');
});
Route::get('/riwayatuser', function () {
    return view('user/menu page/riwayatuser');
});
Route::get('/pengaturanuser', function () {
    return view('user/menu page/pengaturanuser');
});
Route::get('/pengaturanuser1', function () {
    return view('user/menu page/pengaturanuser1');
});
Route::get('/ubahsandiuser', function () {
    return view('user/menu page/ubahsandiuser');
});