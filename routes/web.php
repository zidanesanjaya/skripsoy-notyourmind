<?php

use App\Http\Controllers\AnggotaControllers;
use App\Http\Controllers\TahunAkademikControllers;
use App\Http\Controllers\KaryawanControllers;
use App\Http\Controllers\MataPelajaranControllers;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PDFcontroller;
use App\Http\Controllers\KelasControllers;
use App\Http\Controllers\NilaiControllers;

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

Route::resource('siswa', SiswasController::class);

Route::resource('kelas', KelasControllers::class);
Route::get('/data-kelas', [KelasControllers::class, 'data_kelas']);
Route::get('/data-nilai-siswa', [KelasControllers::class, 'data_nilai_siswa']);
Route::get('/data-nilai-pancasila', [KelasControllers::class, 'data_pancasila'])->name('data.nilai_pancasila');

Route::get('/get-json-nilai/{nisn}/{ta}/{semester}', [KelasControllers::class, 'get_json_nilai']);
Route::get('/leger-nilai', [KelasControllers::class, 'leger_nilai']);
Route::get('/get-detail-nilai/{nisn}', [KelasControllers::class, 'getNilaiDetail']);

Route::get('/get-kelas-exist/{id}', [KelasControllers::class, 'getKelasExists']);
Route::post('/update-siswa-kelas', [KelasControllers::class, 'updateSiswaKelas'])->name('update.siswa_kelas');
Route::post('/delete-siswa-kelas', [KelasControllers::class, 'deleteSiswaKelas'])->name('delete.siswa_kelas');
Route::post('/update-mapel', [KelasControllers::class, 'updateMapel'])->name('update.kelas_mapel');

Route::resource('nilai', NilaiControllers::class);
Route::get('/sumatif', [NilaiControllers::class, 'indexSumatif'])->name('index.indexSumatif');
Route::get('/get-nilai-pancasila/{nisn}/{semester}/{tahun_akademik}/{id_pancasila}', [NilaiControllers::class, 'get_nilai_pancasila']);
Route::post('/store-nilai-pancasila', [NilaiControllers::class, 'insertUpdatePancasila'])->name('store.nilai_pancasila');
Route::post('/store-sumatif', [NilaiControllers::class, 'storeSumatif'])->name('store.sumatif');
Route::post('/store-ekstrakulikuler', [NilaiControllers::class, 'update_ekstrakulikuler']);
Route::post('/update-nilai', [NilaiControllers::class, 'updateNilai']);
Route::get('/nilai-akhir', [NilaiControllers::class, 'nilaiAKhir'])->name('index.nilaiAKhir');
Route::get('/get-ekstrakulikuler/{id}', [NilaiControllers::class, 'getEkstrakulikuler']);
Route::get('/nilai-keseluruhan-siswa', [NilaiControllers::class, 'nilaiKeseluruhanSiswa']);
Route::get('/nilai-rapor-siswa/{id_tahun_akademik}/{semester}', [NilaiControllers::class, 'nilaiRaporSiswa']);
Route::get('/nilai-rapor-json/{nisn}', [NilaiControllers::class, 'getJsonRapor']);
Route::post('/update-nilai-akhir', [NilaiControllers::class, 'post_nilaiAkhir']);
Route::post('/import-nilai', [NilaiControllers::class, 'importNilai'])->name('import.nilai');
Route::get('/export-nilai', [NilaiControllers::class, 'exportLeger'])->name('export.nilai');

Route::get('/unduhPancasila/{nisn}', [NilaiControllers::class, 'unduhPancasila']);
Route::get('/unduhRapor/{nisn}', [NilaiControllers::class, 'unduhRapor']);
Route::get('/getExcelNilai/{tingkat}/{kelas}', [NilaiControllers::class, 'getExcelKelas']);


Route::get('/get-json-sumatif-by-id/{id}', [NilaiControllers::class, 'getSumatifByMapel'])->name('index.getSumatifByMapel');
Route::get('/get-json-data-siswa/{id}/{id_1}/{id_2}/{id_3?}', [NilaiControllers::class, 'loadDataSiswa'])->name('index.loadDataSiswa');
Route::get('/initSiswa/{mapel}/{kelas}/{tingkat}/{sumatif}', [NilaiControllers::class, 'initSiswa'])->name('index.initSiswa');
Route::get('/get-json-nilai-akhir/{id}/{id2}/{id3}', [NilaiControllers::class, 'getNilaiAkhir'])->name('index.loadNilaiAKhir');

Route::get('/destroy-siswa/{id}', [SiswasController::class, 'destroySiswa'])->name('destroy.siswa');
Route::get('/get-siswa/{id}', [SiswasController::class, 'getSiswaById']);

Route::resource('karyawan', KaryawanControllers::class);
Route::get('/get-employee/{id}', [KaryawanControllers::class, 'getEmployee']);
Route::get('/destroy-user/{id}', [KaryawanControllers::class, 'destroyUser'])->name('destroyUser');
Route::get('/index-all-employee', [KaryawanControllers::class, 'index_all_employee'])->name('index.all_employee');
Route::get('/nilai-siswa-all', [KaryawanControllers::class, 'index_nilai_siswa'])->name('index.nilai_siswa');
Route::get('/nilai-detail-siswa/{id}', [KaryawanControllers::class, 'nilai_siswa_detail']);

Route::resource('mapel', MataPelajaranControllers::class);
Route::get('/get-mapel/{id}', [MataPelajaranControllers::class, 'getMapel']);
Route::get('/mapel/destroy/{id}', [MataPelajaranControllers::class, 'destroy_mapel'])->name('destroy.mapel');

Route::post('/store_tahun_akademik', [MataPelajaranControllers::class, 'store_tahun_akademik'])->name('store.tahun_akademik');
Route::get('/tahun_akademik/index', [MataPelajaranControllers::class, 'index_tahun_akademik'])->name('index.tahun_akademik');
Route::get('/tahun_akademik/destroy/{id}', [MataPelajaranControllers::class, 'destroy_tahun_akademik'])->name('destroy.tahun_akademik');

Route::post('/update-profile', [HomeController::class, 'updateProfile'])->name('update.profile');
Route::get('/informasi-sekolah', [HomeController::class, 'informasiSekolah'])->name('index.informasi_sekolah');
Route::get('/my-profile', [HomeController::class, 'my_profile'])->name('index.myprofile');
Route::get('/pancasila', [HomeController::class, 'pancasila'])->name('index.pancasila');
Route::get('/get-json-pancasila', [HomeController::class, 'get_json_pancasila']);

Route::get('/update-profile', [HomeController::class, 'my_profile'])->name('index.myprofile');
Route::post('/update-informasi-sekolah', [HomeController::class, 'updateInformasiSekolah'])->name('update.informasi_sekolah');
Route::post('/update-pancasila', [HomeController::class, 'updatePancasila'])->name('update.updatePancasila');
Route::get('/destroy-pancasila/{id}', [HomeController::class, 'destroyPancasila'])->name('destroy.pancasila');
Route::get('/keterangan-siswa', [HomeController::class, 'detail_siswa'])->name('index.detail_siswa');
Route::get('/show-rapor/{id}/{id2}', [HomeController::class, 'postShowRapor']);
Route::get('/deleteKelas/{id}', [KelasControllers::class, 'deleteKelas']);

// Begin Login Section
Route::get('/login_admin', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('auth.login');
    }
});

// Begin Login Section
Route::get('/login_user', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('auth.kepalaSekolahdanGuru.loginKepalaSekolahdanGuru');
    }
});

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    } else {
        return view('auth.login_siswa');
    }
});

Route::post('/login_admin', [LoginController::class, 'login_admin'])->name('login');
Route::post('/login_user', [LoginController::class, 'login_user'])->name('login.user');
Route::post('/login', [LoginController::class, 'login_siswa'])->name('login.siswa');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return redirect('/login');
});
// End Login Section

// Begin Admin Section
Route::get('/dashboard', [HomeController::class, 'index'])->name('index.dashboard');

Route::get('/masterMataPelajaranAdmin', function () {
    return view('admin/masterMataPelajaranAdmin');
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
Route::get('/nilaiKeseluruhanSiswaKepalaSekolah', function () {
    return view('kepalaSekolah/dataNilaiSiswaKepalaSekolah/nilaiKeseluruhanSiswaKepalaSekolah');
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
Route::get('/kelolaSumatif', function () {
    return view('guru/kelolaSumatif');
});
Route::get('/inputNilaiSiswaGuru', function () {
    return view('guru/inputNilaiSiswaGuru');
});
Route::get('/inputUjianSiswaGuru', function () {
    return view('guru/inputUjianSiswaGuru');
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

Route::get('/profilSiswaOrangTua', function () {
    return view('siswaOrangTua/profilSiswaOrangTua');
});
// End Siswa dan Orang Tua


Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardAdmin');

Route::post('/createAnggota', [App\Http\Controllers\AnggotaControllers::class, 'store'])->name('createAnggota');

Route::put('/updateAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'update'])->name('updateAnggota');

Route::get('/deleteAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'delete'])->name('deleteAnggota');

// begin::Tahun Akademik
Route::resource('tahunAkademik', TahunAkademikControllers::class);

Route::get('/deleteTahunAkademik/{id}', [App\Http\Controllers\TahunAkademikControllers::class, 'delete']);
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

// begin::pdf
Route::get('/downloadRaporSemester', [PDFcontroller::class, 'PDFRaporSemester']);
Route::get('/downloadRaporPancasila', [PDFcontroller::class, 'PDFRaporPancasila']);
// end::pdf
