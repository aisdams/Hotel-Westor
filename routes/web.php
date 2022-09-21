<?php

use App\Models\Datapemesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TamupesanController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\DatapemesananController;
use App\Http\Controllers\CheckpemesananController;
use App\Http\Controllers\FasilitashotelController;
use App\Http\Controllers\FasilitaskamarController;
use App\Http\Controllers\DataResepsionisController;

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


// Route Login

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// End Route Login

// Auth

// check Admin || Guru
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['login:admin']], function () {
        Route::get('admin', [AdminController::class, 'index'])->name('admin');
    });
    Route::group(['middleware' => ['login:resepsionis']], function () {
        Route::get('resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis');
    });
    Route::group(['middleware' => ['login:tamu']], function () {
        Route::get('tamu', [TamuController::class, 'index'])->name('tamu');
    });
});

// ========== D E T A I L ==========
Route::get('/fasilitashotel/detail/{id}',[FasilitashotelController::class,'detail'])->name('detail');
Route::get('/fasilitaskamar/detail/{id}',[FasilitaskamarController::class,'detail'])->name('detail');
Route::get('/checkpemesanan/detail/{id}',[CheckpemesananController::class,'detail'])->name('detail');
Route::get('/dataresepsionis/detail/{id}',[DataResepsionisController::class,'detail'])->name('detail');

// ========== E N D - D E T A I L ==========

Route::resource('fasilitashotel', FasilitashotelController::class)->middleware('auth');
Route::resource('fasilitaskamar', FasilitaskamarController::class)->middleware('auth');
Route::resource('/index/account/mytrip', DatapemesananController::class)->middleware('auth');
Route::resource('dataresepsionis', DataResepsionisController::class)->middleware('auth');
Route::resource('checkpemesanan', CheckpemesananController::class)->middleware('auth');


// ========== T A M U ==========
Route::get('/', function () {
    return view('index');
});
Route::get('/index/account', function () {
    return view('hoteltamu');
});
Route::get('/room', function () {
    return view('room-card');
});
Route::get('/room-detail', [DatapemesananController::class, 'create']);

// ========== RESEPSIONIS
// Route::get('/room-book', [Datapemesanan::class, 'index']);
// Route::get('/create-rb', [Datapemesanan::class, 'create'])->name('create-rb');
// Route::post('/simpan-rb', [Datapemesanan::class, 'store'])->name('simpan-rb');

// Route::get('/room-book', function () {
//     return view('room-book');
// });
// ==============================