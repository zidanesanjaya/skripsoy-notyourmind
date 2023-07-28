<?php

use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\tahunAkademikControllers;
use App\Models\Anggota;
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

// Begin Admin Section
Route::get('/dashboardAdmin', function () {
    return view('admin/dashboardAdmin');
});
Route::get('/masterMataPelajaranAdmin', function () {
    return view('admin/masterMataPelajaranAdmin');
});
Route::get('/kelolaKelasdanWaliKelasAdmin', function () {
    return view('admin/kelolaKelasdanWaliKelasAdmin');
});
Route::get('/updateInformasiAdmin', function () {
    return view('admin/updateInformasiAdmin');
});

Route::controller(AnggotaControllers::class)->name('tableAnggota.')->prefix('tableAnggota')->group(function () {
    $route = array('index', 'fetchstudent', 'store');
    foreach ($route as $route) {
        Route::any($route == 'index' ? '' : '/' . $route, $route)->name($route);
    }
});

Route::get('/masterSiswa', function () {
    return view('admin/masterSiswa');
});
// End Admin Section

// Begin Kepala Sekolah Section
Route::get('/dashboardKepalaSekolah', function () {
    return view('kepalaSekolah/dashboardKepalaSekolah');
});
Route::get('/menuDataNilaiSiswaKepalaSekolah', function () {
    return view('kepalaSekolah/dataNilaiSiswaKepalaSekolah/dataNilaiSiswaKepalaSekolah');
});
Route::get('/dataGuruKepalaSekolah', function () {
    return view('kepalaSekolah/dataGuruKepalaSekolah');
});
// End Kepala Sekolah Section

// Begin Guru Section
Route::get('/dashboardGuru', function () {
    return view('guru/dashboardGuru');
});
Route::get('/dataSiswaGuru', function () {
    return view('guru/dataSiswaGuru');
});
Route::get('/inputNilaiSiswaGuru', function () {
    return view('guru/inputNilaiSiswaGuru');
});
// End Guru Section

// Begin Wali Kelas Section
Route::get('/dashboardWaliKelas', function () {
    return view('waliKelas/dashboardWaliKelas');
});
Route::get('/dataSiswaWaliKelas', function () {
    return view('waliKelas/dataSiswaWaliKelas');
});
Route::get('/dataNilaiKelasWaliKelas', function () {
    return view('waliKelas/dataNilaiKelasWaliKelas');
});
Route::get('/legerNilaiWaliKelas', function () {
    return view('waliKelas/legerNilaiWaliKelas');
});
// End Wali Kelas Section

// Begin Siswa dan Orang Tua
Route::get('/dashboardSiswaOrangTua', function () {
    return view('siswaOrangTua/dashboardSiswaOrangTua');
});
Route::get('/nilaiKeseluruhanSiswaOrangTua', function () {
    return view('siswaOrangTua/nilaiKeseluruhanSiswaOrangTua');
});
// End Siswa dan Orang Tua

Auth::routes();

Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardAdmin');

Route::post('/createAnggota', [App\Http\Controllers\AnggotaControllers::class, 'store'])->name('createAnggota');

Route::put('/updateAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'update'])->name('updateAnggota');

Route::get('/deleteAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'delete'])->name('deleteAnggota');

// begin::Tahun Akademik
Route::resource('tahunAkademik', tahunAkademikControllers::class);

Route::get('/deleteTahunAkademik/{id}', [App\Http\Controllers\tahunAkademikControllers::class, 'delete']);
// end::Tahun Akademik

// begin::checkRole
Route::group(['middleware' => ['auth', 'jabatan:kepala_sekolah']], function () {
    // Rute-rute khusus untuk kepala sekolah
});

Route::group(['middleware' => ['auth', 'jabatan:guru']], function () {
    // Rute-rute khusus untuk guru
});

Route::group(['middleware' => ['auth', 'jabatan:karyawan']], function () {
    // Rute-rute khusus untuk karyawan
});
// end::checkRole