<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FormController;


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
    return redirect('login');
});


Route::get('/redirects',[HomeController::class, 'index']);

Auth::routes();

//User
Route::get('/home',[UserController::class, 'home']);
Route::get('/about',[UserController::class, 'about']);
Route::get('/service',[UserController::class, 'service']);
Route::get('/pengajuan',[UserController::class, 'pengajuan']);
Route::get('/contact',[UserController::class, 'contact']);
Route::resource('/formgadai',FormController::class);
Route::resource('/formbarang',FormController::class);



//Admin



Route::group(['middleware' => ['auth', 'CekAdmin']], function () {
    // isi router
    Route::get('/dasboard',[AdminController::class, 'dasboard']);
    Route::resource('nasabah',NasabahController::class);
    Route::resource('petugas',PetugasController::class);
    Route::resource('/barang',BarangController::class);
    Route::resource('/gudang',GudangController::class);

    // Route::get('/nasabah',[AdminController::class, 'nasabah']);
    Route::resource('/pembayaran',PembayaranController::class);
    Route::resource('/pinjaman',PinjamanController::class);
    // Route::get('/petugas',[AdminController::class, 'petugas']);
});
