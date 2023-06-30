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

Route::controller(AnggotaControllers::class)->name('tableAnggota.')->prefix('tableAnggota')->group(function () {
    $route = array('index', 'fetchstudent', 'store');
    foreach ($route as $route) {
        Route::any($route == 'index' ? '' : '/' . $route, $route)->name($route);
    }
});

Route::get('/dataSiswa', function () {
    return view('admin/dataSiswa');
});
// End Admin Section

Auth::routes();

Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardAdmin');

Route::post('/createAnggota', [App\Http\Controllers\AnggotaControllers::class, 'store'])->name('createAnggota');

Route::put('/updateAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'update'])->name('updateAnggota');

Route::get('/deleteAnggota/{id}', [App\Http\Controllers\AnggotaControllers::class, 'delete'])->name('deleteAnggota');

// begin::Tahun Akademik
Route::resource('tahunAkademik', tahunAkademikControllers::class);
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