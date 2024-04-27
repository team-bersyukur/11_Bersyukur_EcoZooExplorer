<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TreasureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZonaController;
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
// Route::get('/', function () {
//     return view('userPage.welcome');
// });
// Route::get('/', function () {
//     return view('userPage.main');
// });

Route::get('/', [DashboardUserController::class, 'index'])->name('home');
Route::get('/treasure', [DashboardUserController::class, 'treasure'])->name('treasure');

// ==== Login and Register Routes ====
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/resetPassword', [LoginController::class, 'resetPassword'])->middleware('guest');
Route::post('/reset', [LoginController::class, 'reset'])->middleware('guest');
Route::post('/ubahPass', [LoginController::class, 'ubahPass'])->middleware('guest');
// ==== End Login and Register Routes ====


// ==== Admin Routes ====

// Manual Route
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->middleware('admin');
Route::post('/deleteUser/{user:id}', [UserController::class, 'deleteUser'])->middleware('admin');
Route::get('/editUser/{user:id}', [UserController::class, 'editUser'])->middleware('admin');
Route::put('/acak-treasure', [TreasureController::class, 'acakTreasure'])->middleware('admin');
Route::post('/kode-unik', [TreasureController::class, 'kodeUnik']);

// Resource Route
Route::resource('/master/data-hewan', HewanController::class)->middleware('admin');
Route::resource('/master/data-zona', ZonaController::class)->middleware('admin');
Route::resource('/master/data-bangunan', BangunanController::class)->middleware('admin');
Route::resource('/master/data-treasure', TreasureController::class)->middleware('admin');

// ==== End Admin Routes ====

// ==== User Routes ====

// Manual Route
Route::get('/seluruh-user', [UserController::class, 'seluruhUser'])->middleware(['admin']);
Route::get('/getUserDetail/{user:id}', [UserController::class, 'getUserDetail'])->name('getUserDetail')->middleware(['admin']);
Route::post('/changeDataUser/{user:id}', [UserController::class, 'changeDataUser'])->middleware('auth');
Route::get('/zona/{zona:id}', [DashboardUserController::class, 'getZona']);
Route::get('/search-lokasi', [DashboardUserController::class, 'searchLokasi']);

// Resource Route


// ==== End User Routes ====
