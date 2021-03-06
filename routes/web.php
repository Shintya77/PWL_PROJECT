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
use App\Http\Controllers\FormBarangController;
use App\Http\Controllers\FormPinjamanController;
use App\Http\Controllers\FormPembayaranController;
use App\Http\Controllers\CetakController;


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
Route::resource('/formnasabah',FormController::class)->only(['edit','update']);
Route::resource('/formbarang',FormBarangController::class)->middleware('auth');
Route::resource('/formpinjaman',FormPinjamanController::class)->middleware('auth');
Route::resource('/formpembayaran',FormPembayaranController::class)->middleware('auth');



//Admin



Route::group(['middleware' => ['auth', 'CekAdmin']], function () {
    // isi router
    Route::get('/dasboard',[AdminController::class, 'dasboard']);
    Route::resource('nasabah',NasabahController::class);
    Route::resource('petugas',PetugasController::class);
    Route::resource('/barang',BarangController::class);
    Route::resource('/gudang',GudangController::class);

    Route::get('/barang/cetak_pdf', [BarangController::class, 'cetak_pdf']);
    Route::get('/nasabah/cetak', [CetakController::class, 'cetak'])->name('nasabah.cetak');
    Route::get('/pinjaman/cetak_pdf', [PinjamanController::class, 'cetak_pdf'])->name('pinjaman.cetak_pdf');
    Route::get('/pembayaran/cetak', [PembayaranController::class, 'cetak'])->name('pembayaran.cetak');
    
    Route::resource('/pembayaran',PembayaranController::class);
    Route::resource('/pinjaman',PinjamanController::class);
});

