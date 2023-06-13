<?php

use App\Http\Controllers\AddKamarController;
use App\Http\Controllers\AddPenyewa;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
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
    Route::get('/home', [HomeController::class, "showHome"]);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/detail', [PenyewaController::class, 'showDetailPenyewa']);
    Route::get('/kamar-to-sewa', [KamarController::class, 'showKamarToSewa']);
    Route::post('/kamar-to-sewa', [KamarController::class, 'sendKamarToSewa']);
    Route::get('/penyewa',[PenyewaController::class, 'showPenyewa']);

    Route::get('/list-kamar', [KamarController::class, 'showListKamar']);
    Route::get('/new-kamar', [KamarController::class, 'showAddKamar']);
    Route::post('/new-kamar', [KamarController::class, 'addKamar']);
    Route::delete('/list-kamar', [KamarController::class, 'deleteKamar']);
    Route::delete('/penyewa', [PenyewaController::class, 'deletePenyewa']);
    Route::post('/new-penyewa', [PenyewaController::class, 'listPenyewa']);
    Route::get('/edit-penyewa', [PenyewaController::class, 'passPenyewa']);    
    Route::get('/edit', [KamarController::class, 'passData']);
    Route::post('/edit', [KamarController::class, 'updateKamar']);

});