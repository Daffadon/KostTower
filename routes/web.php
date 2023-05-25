<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Support\Facades\Route;

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
Route::post('/signup', [AuthController::class, 'login']);

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/new-sewa', function () {
    return view('addKamar.index');
});
Route::get('/new-penyewa', function () {
    return view('addPenyewa.index');
});
Route::get('/det', [PenyewaController::class, 'showPenyewa']);
