<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatapemesananController;
use App\Http\Controllers\FasilitashotelController;
use App\Http\Controllers\FasilitaskamarController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('fasilitashotel', FasilitashotelController::class);
Route::resource('fasilitaskamar', FasilitaskamarController::class);
Route::resource('datapemesanan', DatapemesananController::class);

Route::get('/datapemesanan/createid/{id}',[DatapemesananController::class,'createid'])->name('createid');



// ========== T A M U ==========
Route::get('/', function () {
    return view('index');
});
Route::get('/room', function () {
    return view('room-card');
});
Route::get('/room-detail', function () {
    return view('room-detail');
});
Route::get('/room-book', function () {
    return view('room-book');
});
// ==============================