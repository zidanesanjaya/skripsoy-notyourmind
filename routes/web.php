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

Route::get('/', function () {
    return view('index');
});


// Beginning Login Section
Route::get('/login_admin', function () {
    return view('auth/admin/adminLogin');
});
// End Login Section

// Beginning Admin Section
Route::get('/dashboardAdmin', function () {
    return view('admin/dashboardAdmin');
});
Route::get('/mataPelajaranAdmin', function () {
    return view('admin/mataPelajaranAdmin');
});
Route::get('/updateInformasiAdmin', function () {
    return view('admin/updateInformasiAdmin');
});
Route::get('/tahunAkademikAdmin', function () {
    return view('admin/tahunAkademikAdmin');
});
Route::get('/kelolaGurudanKaryawan', function () {
    return view('admin/kelolaUser/kelolaGurudanKaryawan');
});
Route::get('/kelolaSiswa', function () {
    return view('admin/kelolaUser/kelolaSiswa');
});
Route::get('/dataKepalaSekolah', function () {
    return view('admin/kelolaUser/dataKepalaSekolah');
});
// End Admin Section
