<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataBayiController;
use App\Http\Controllers\DataIbuController;
use App\Http\Controllers\userController;


Route::get('/', [userController::class, 'dataibu'])->name('cek/ibu');
Route::get('/api/data-ibu/{nik}', [userController::class, 'getDataByNik']);

Route::get('/cek/bayi', [userController::class, 'databayi'])->name('cek/bayi');
Route::get('/api/data-bayi/{nik}', [userController::class, 'getDataByNik2']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/post', [AuthController::class, 'login'])->name('aclogin');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

//data ibu
Route::get('data_ibu', [DataIbuController::class, 'index'])->name('ibu');
Route::post('/storeIbu', [DataIbuController::class, 'store'])->name('storeIbu');
Route::get('/data-ibu/{id}/edit', [DataibuController::class, 'edit'])->name('data-ibu.edit');
Route::post('/data-ibu/{id}/update', [DataibuController::class, 'update'])->name('data-ibu.update');
Route::delete('/data-ibu/{id}', [DataibuController::class, 'destroy'])->name('data-ibu.destroy');
//data bayi
Route::get('data_bayi', [DataBayiController::class, 'index'])->name('bayi');
Route::post('store/bayi', [DataBayiController::class, 'store'])->name('storeBayi');
Route::get('/data-bayi/{id}/edit', [DataBayiController::class, 'edit'])->name('data-bayi.edit');
Route::post('/data-bayi/{id}/update', [DataBayiController::class, 'update'])->name('data-bayi.update');
Route::delete('/data-bayi/{id}', [DataBayiController::class, 'destroy'])->name('data-bayi.destroy');
