<?php

use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\tahunAkademikControllers;
use App\Http\Controllers\KaryawanControllers;
use App\Http\Controllers\MataPelajaranControllers;
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

Route::resource('karyawan', KaryawanControllers::class);
Route::resource('mapel', MataPelajaranControllers::class);
Route::post('/store_tahun_akademik',[MataPelajaranControllers::class,'store_tahun_akademik'])->name('store.tahun_akademik');
Route::get('/tahun_akademik/index',[MataPelajaranControllers::class,'index_tahun_akademik'])->name('index.tahun_akademik');
Route::get('/tahun_akademik/destroy/{id}',[MataPelajaranControllers::class,'destroy_tahun_akademik'])->name('destroy.tahun_akademik');
Route::get('/mata_pelajaran/destroy/{id}',[MataPelajaranControllers::class,'destroy_mapel'])->name('destroy.mapel');

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// Begin Login Section
Route::get('/login_admin', function () {
    return view('auth/login');
});
Route::get('/loginkepalasekolahdanguru', function () {
    return view('auth/kepalaSekolahdanGuru/loginKepalaSekolahdanGuru');
});
// End Login Section

// Begin Admin Section
Route::get('/dashboardAdmin', function () {
    return view('admin/dashboardAdmin');
});
Route::get('/masterMataPelajaranAdmin', function () {
    return view('admin/masterMataPelajaranAdmin');
});
Route::get('/kelolaKelasAdmin', function () {
    return view('admin/kelolaKelasAdmin');
});
Route::get('/kelolaProjekPancasilaAdmin', function () {
    return view('admin/kelolaProjekPancasilaAdmin');
});
Route::get('/updateInformasiAdmin', function () {
    return view('admin/updateInformasiAdmin');
});
Route::get('/profilAdmin', function () {
    return view('admin/profilAdmin');
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
Route::get('/profilKepalaSekolah', function () {
    return view('kepalaSekolah/profilKepalaSekolah');
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
Route::get('/profilGuru', function () {
    return view('guru/profilGuru');
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
Route::get('/raporPancasila', function () {
    return view('rapor/pancasila');
});
Route::get('/raporDownloadAll', function () {
    return view('rapor/raporDownloadAll');
});
Route::get('/legerNilaiWaliKelas', function () {
    return view('waliKelas/legerNilaiWaliKelas');
});
Route::get('/profilWaliKelas', function () {
    return view('waliKelas/profilWaliKelas');
});
// End Wali Kelas Section

// Begin Siswa dan Orang Tua
Route::get('/dashboardSiswaOrangTua', function () {
    return view('siswaOrangTua/dashboardSiswaOrangTua');
});
Route::get('/nilaiKeseluruhanSiswaOrangTua', function () {
    return view('siswaOrangTua/nilaiKeseluruhanSiswaOrangTua');
});
Route::get('/keteranganDiriPesertaDidik', function () {
    return view('siswaOrangTua/nilaiRapor/keteranganDiriPesertaDidik');
});
Route::get('/nilaiRaporSiswaOrangTua', function () {
    return view('siswaOrangTua/nilaiRapor/nilaiRaporSiswaOrangTua');
});
Route::get('/profilSiswaOrangTua', function () {
    return view('siswaOrangTua/profilSiswaOrangTua');
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