<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Public Routes
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GabungController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\BacaMateriController;

// Admin Routes
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TagArtikelController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\MateriDetailController;
use App\Http\Controllers\Admin\KategoriArtikelController;


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

Route::get('/', [BerandaController::class, 'index'])->name('index');
Route::get('/kuliah', [KuliahController::class, 'index'])->name('kuliah');
Route::get('/carimateri', [KuliahController::class, 'index'])->name('carimateri');
Route::resource('/gabung', GabungController::class);
Route::get('/materi/{id}/{title:slug}', [BacaMateriController::class, 'index'])->name('materi');

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/tag-article', TagArtikelController::class);
    Route::resource('/materi', MateriController::class);
    Route::resource('/kategori-artikel', KategoriArtikelController::class);
    Route::get('/detail-materi/{id}/{title:slug}', [MateriDetailController::class, 'index'])->name('detail-materi');
});


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});
Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
