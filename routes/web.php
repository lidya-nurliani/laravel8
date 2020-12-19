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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/berita','App\Http\Controllers\BeritaController@index')->name('berita.index');
Route::get('/berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}', [App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');

Route::get('/kecamatan','App\Http\Controllers\KecamatanController@index')->name('kecamatan.index');
Route::get('/kecamatan/create', [App\Http\Controllers\KecamatanController::class, 'create'])->name('kecamatan.create');
Route::post('/kecamatan', [App\Http\Controllers\KecamatanController::class, 'store'])->name('kecamatan.store');
Route::get('/kecamatan/{id}', [App\Http\Controllers\KecamatanController::class, 'show'])->name('kecamatan.show');

Route::get('/luas','App\Http\Controllers\LuasController@index')->name('luas.index');
Route::get('/luas/create', [App\Http\Controllers\LuasController::class, 'create'])->name('luas.create');
Route::post('/luas', [App\Http\Controllers\LuasController::class, 'store'])->name('luas.store');
Route::get('/luas/{id}', [App\Http\Controllers\LuasController::class, 'show'])->name('luas.show');

Route::get('/tanaman','App\Http\Controllers\TanamanController@index')->name('tanaman.index');
Route::get('/tanaman/create', [App\Http\Controllers\TanamanController::class, 'create'])->name('tanaman.create');
Route::post('/tanaman', [App\Http\Controllers\TanamanController::class, 'store'])->name('tanaman.store');
Route::get('/tanaman/{id}', [App\Http\Controllers\TanamanController::class, 'show'])->name('tanaman.show');