<?php

use App\Http\Controllers\AnggotaControllers;
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
Route::get('/welcome', function () {
    return view('welcome');
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
Route::get('/dataKepalaSekolahGurudanKaryawan', function () {
    return view('admin/dataKepalaSekolahGurudanKaryawan');
});
Route::get('/dataSiswa', function () {
    return view('admin/dataSiswa');
});
// End Admin Section

Auth::routes();

Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardAdmin');

// Route::resource('anggot',AnggotaControllers::class);