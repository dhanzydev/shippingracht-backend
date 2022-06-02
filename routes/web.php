<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Public Routes
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GabungController;
use App\Http\Controllers\Auth\LogoutController;

// Admin Routes
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TagArtikelController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\MateriDetailController;


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
Route::resource('/gabung', GabungController::class);

Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/tag-article', TagArtikelController::class);
    Route::resource('/materi', MateriController::class);
    Route::get('/detail-materi/{id}/{title:slug}', [MateriDetailController::class, 'index'])->name('detail-materi');
});

Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');