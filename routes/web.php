<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('layouts.user.master');
});

Route::get('/dasboard',[AdminController::class, 'dasboard']);
Route::get('/table',[AdminController::class, 'table']);
Route::get('/form',[AdminController::class, 'form']);
Route::get('/chart',[AdminController::class, 'chart']);
Route::get('/icon',[AdminController::class, 'icon']);


