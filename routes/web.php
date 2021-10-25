<?php

use App\Http\Controllers\Admin\{AdminController, CooperativeController, DashboardController, FarmerController, UserController, ValiadationController};
use App\Http\Controllers\Dashboard\{CreateMarketFarmer2Controller, CreateMarketFarmerController, PostingController, ProfileController, ResetPasswordController};
use App\Http\Controllers\{BawangPetaniController ,HomeController};
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// ============================================================Admin
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    // Admin
    Route::resource('/admin', AdminController::class);
    // User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::delete('/user/{user:id}', [UserController::class, 'destroy'])->name('user.delete');
    // Petani
    Route::get('/petani', [FarmerController::class, 'index'])->name('petani.index');
    Route::patch('/petani/{user:id}', [FarmerController::class, 'update'])->name('petani.update');
    // Koperasi
    Route::get('/koperasi', [CooperativeController::class, 'index'])->name('koperai.index');
    // Validasi
    Route::get('/validasi', [ValiadationController::class, 'index'])->name('validasi.index');
    Route::patch('/validasi/{user:id}', [ValiadationController::class, 'update'])->name('validasi.update');
});

// ============================================================User
Route::middleware('auth', 'user', 'verified')->group(function () {
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
    Route::middleware('validation_nonactive')->prefix('buat-toko')->name('buat-toko')->group(function () {
        Route::view('', 'client.dashboard.create-market');
        Route::get('/petani', [CreateMarketFarmerController::class, 'index'])->name('.petani');
        Route::post('/petani', [CreateMarketFarmerController::class, 'store_img'])->name('.petani');
        Route::get('/petani/lengkapi-info', [CreateMarketFarmer2Controller::class, 'index'])->name('.petani.lengkapi-info');
        Route::patch('/petani/lengkapi-info', [CreateMarketFarmer2Controller::class, 'update'])->name('.petani.lengkapi-info');
        Route::view('/petani/selesai', 'client.dashboard.create-market-farmer-3')->name('.petani.selesai');
    });

    // Barang
    Route::middleware('validation_active')->prefix('posting')->name('posting')->group(function () {
        Route::get('', [PostingController::class, 'index'])->name('.index');
        Route::get('/create', [PostingController::class, 'create'])->name('.create');
        Route::post('/create', [PostingController::class, 'store'])->name('.create');
        Route::get('/edit/{product}', [PostingController::class, 'edit'])->name('.edit');
        Route::patch('/edit/{product}', [PostingController::class, 'update'])->name('.edit');
        Route::delete('/delete/{product}', [PostingController::class, 'destroy'])->name('.delete');
    });
});

    // Petunjuk
    Route::view('syarat-dan-ketentuan', 'client.instruction.syarat-dan-ketentuan')->name('syarat-dan-ketentuan');
    Route::view('kebijakan-privasi', 'client.instruction.kebijakan-privasi')->name('kebijakan-privasi');
    Route::view('tanya-jawab', 'client.instruction.tanya-jawab')->name('tanya-jawab');
    Route::view('panduan', 'client.instruction.panduan')->name('panduan');
    Route::view('tentang-kami', 'client.instruction.tentang-kami')->name('tentang-kami');

    // Produk
    Route::prefix('bawang-petani')->name('bawang-petani')->group(function () {
        Route::get('', [BawangPetaniController::class, 'index'])->name('.index');
        Route::get('/{product:slug}', [BawangPetaniController::class, 'show'])->name('.show');
    });


Auth::routes(['verify' => true]);
