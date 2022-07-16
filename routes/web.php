<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Public Routes
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GabungController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\BacaMateriController;
use App\Http\Controllers\ForumDiskusiController;
use App\Http\Controllers\BuatPertanyaanController;
use App\Http\Controllers\ArtikelController as PublicArtikelController;
use App\Http\Controllers\DetailArtikelController;

// Admin Routes
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\MateriDetailController;
use App\Http\Controllers\Admin\KategoriArtikelController;
use App\http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\TagArtikelController;
use App\Http\Controllers\Admin\ImageUploadArtikelController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ChangePasswordController;

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
Route::get('/carimateri', [KuliahController::class, 'search'])->name('carimateri');
Route::get('/materi/{id}/{title:slug}', [BacaMateriController::class, 'index'])->name('materi');
Route::resource('/gabung', GabungController::class);
Route::get('/forum', [ForumDiskusiController::class, 'index'])->name('forum');
Route::get('/buat-pertanyaan', [BuatPertanyaanController::class, 'index'])->name('buat-pertanyaan');
Route::get('/artikel', [PublicArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{id}/{title:slug}', [DetailArtikelController::class, 'index'])->name('artikel-detail');
Route::get('/cariartikel', [PublicArtikelController::class, 'search'])->name('cariartikel');
Route::get('/kategori-artikel/{slug}', [PublicArtikelController::class, 'categories'])->name('artikel-kategori');
Route::get('/tag-artikel/{slug}', [PublicArtikelController::class, 'tags'])->name('artikel-tags');

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/materi', MateriController::class);
    Route::get('/detail-materi/{id}/{title:slug}', [MateriDetailController::class, 'index'])->name('detail-materi');
    Route::resource('/kategori-artikel', KategoriArtikelController::class);
    Route::resource('/artikel', ArtikelController::class);
    Route::get('/daftar-artikel', [ArtikelController::class, 'list'])->name('daftar-artikel');
    Route::resource('/tag-artikel', TagArtikelController::class);
    Route::post('/image-upload-artikel', [ImageUploadArtikelController::class, 'store'])->name('image-upload-artikel');
    Route::resource('/pengguna', UserController::class);
    Route::get('/ganti-password', [ChangePasswordController::class, 'index'])->name('ganti-password');
    Route::post('/ganti-password', [ChangePasswordController::class, 'changePassword'])->name('ganti-password.post');
});


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
