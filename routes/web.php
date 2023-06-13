<?php


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
    //logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //Home
    Route::get('/home', [HomeController::class, "showHome"]);
    //Penyewa
    Route::get('/detail', [PenyewaController::class, 'showDetailPenyewa']);
    Route::get('/penyewa', [PenyewaController::class, 'showPenyewa']);
    Route::delete('/penyewa', [PenyewaController::class, 'deletePenyewa']);
    Route::get('/new-penyewa', [PenyewaController::class, 'showAddPenyewa']);
    Route::post('/new-penyewa', [PenyewaController::class, 'addPenyewa']);
    Route::get('/edit-penyewa', [PenyewaController::class, 'passPenyewa']);
    Route::post('/edit-penyewa', [PenyewaController::class, 'updatePenyewa']);

    //Sewa
    Route::get('/kamar-to-sewa', [SewaController::class, 'showKamarToSewa']);
    Route::post('/kamar-to-sewa', [SewaController::class, 'sendKamarToSewa']);
    Route::post('/penyewa-to-sewa', [SewaController::class, 'addKamarToPenyewa']);

    //Kamar
    Route::get('/list-kamar', [KamarController::class, 'showListKamar']);
    Route::get('/new-kamar', [KamarController::class, 'showAddKamar']);
    Route::post('/new-kamar', [KamarController::class, 'addKamar']);
    Route::delete('/list-kamar', [KamarController::class, 'deleteKamar']);
    Route::get('/edit', [KamarController::class, 'passData']);
    Route::post('/edit', [KamarController::class, 'updateKamar']);

});