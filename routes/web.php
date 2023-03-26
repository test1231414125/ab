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
    return view('welcome');
});

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::post('/admin/save',[App\Http\Controllers\AdminController::class,'save']);
Route::post('/admin/delete/{id}',[App\Http\Controllers\AdminController::class,'delete']);
Route::put('/admin/edit/{id}',[App\Http\Controllers\AdminController::class,'edit']);
Route::get('/admin/cetakpdf',[App\Http\Controllers\AdminController::class,'cetakpdf']);
Route::get('/kepalakeluarga',[App\Http\Controllers\AdminController::class,'keluarga'])->name('keluarga');
