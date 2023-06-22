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
// End Admin Section
