<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('user.service');
});

//Admin
Route::get('/dasboard',[AdminController::class, 'dasboard']);
Route::get('/nasabah',[AdminController::class, 'nasabah']);
Route::get('/barang',[AdminController::class, 'barang']);
Route::get('/transaksi',[AdminController::class, 'transaksi']);
Route::get('/petugas',[AdminController::class, 'petugas']);


//User
Route::get('/home',[UserController::class, 'home']);
Route::get('/about',[UserController::class, 'about']);
Route::get('/service',[UserController::class, 'service']);
Route::get('/blog',[UserController::class, 'blog']);
Route::get('/contact',[UserController::class, 'contact']);


