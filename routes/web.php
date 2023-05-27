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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/signup', [AuthController::class, 'signupView'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::get('/', function () {
        return redirect('/login');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, "showHome"]);
    // Route::post('/new-penyewa', [AddPenyewa::class, 'addPenyewa']);
    Route::get('/detail', [PenyewaController::class, 'showPenyewa']);
    Route::get('/kamar-to-sewa', [KamarController::class, 'showKamarToSewa']);
    Route::post('/kamar-to-sewa', [KamarController::class, 'sendKamarToSewa']);
    Route::get('/new-penyewa', function () {
        return view('addPenyewa.index');
    });

});