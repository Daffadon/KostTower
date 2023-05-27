<?php

use App\Http\Controllers\AddKamarController;
use App\Http\Controllers\AddPenyewa;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'signupView']);
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, "showHome"]);

Route::get('/list-kamar', function () {
    return view('listKamar.index');
});

Route::get('/new-penyewa', function () {
    return view('addPenyewa.index');
});
Route::post('/new-penyewa', [PenyewaController::class, 'addPenyewa']);

Route::get('/new-kamar', [KamarController::class, 'addKamar']);

Route::get('/detail', [PenyewaController::class, 'showPenyewa']);