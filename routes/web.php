<?php

use App\Http\Controllers\Dashboard\{CreateMarketFarmerController, ProfileController, ResetPasswordController};
use Illuminate\Routing\RouteGroup;
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

Route::view('/', 'client.home.home');

// ==========================User

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::view('dashboard', 'client.dashboard.dashboard')->name('dashboard');

    // Profil
    Route::prefix('profil')->name('profil')->group(function () {
        Route::get('', [ProfileController::class, 'index'])->name('');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('.edit');
        Route::patch('/edit', [ProfileController::class, 'update'])->name('.edit');
    });

    // Reset Password
    Route::prefix('reset-password')->name('reset.password')->group(function () {
        Route::get('', [ResetPasswordController::class, 'edit']);
        Route::patch('', [ResetPasswordController::class, 'update']);
    });

    // Buat Toko
    Route::view('buat-toko', 'client.dashboard.create-market')->name('buat-toko');
    Route::get('buat-toko/petani', [CreateMarketFarmerController::class, 'index'])->name('buat-toko-petani');
});


// Petunjuk
Route::view('syarat-dan-ketentuan', 'client.instruction.syarat-dan-ketentuan')->name('syarat-dan-ketentuan');
Route::view('kebijakan-privasi', 'client.instruction.kebijakan-privasi')->name('kebijakan-privasi');
Route::view('tanya-jawab', 'client.instruction.tanya-jawab')->name('tanya-jawab');
Route::view('panduan', 'client.instruction.panduan')->name('panduan');
Route::view('tentang-kami', 'client.instruction.tentang-kami')->name('tentang-kami');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
