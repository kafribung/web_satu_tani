<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FinishPaymentController;
use App\Http\Controllers\Dashboard\CreateMarketCooperative3Controller;
use App\Http\Controllers\{BawangPetaniController , CartController, CheckoutController, ConfrirmController, HomeController};
use App\Http\Controllers\Admin\{AdminController, CooperativeController, DashboardController, FarmerController, UserController, ValiadationController, WaitingForPaymentController, ProcessPaymentController, RetailOnionController, SendPaymentController};
use App\Http\Controllers\Dashboard\{CreateMarketController, CreateMarketCooperative2Controller, CreateMarketCooperativeController, CreateMarketFarmer2Controller, CreateMarketFarmer3Controller, CreateMarketFarmerController, PostingController, ProfileController, ResetPasswordController, OrderanController, OrderanFinishController, OrderanProcessController, OrderanSendController};

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
    Route::delete('/petani/{user:id}', [FarmerController::class, 'destroy'])->name('petani.destroy');

    // Koperasi
    Route::get('/koperasi', [CooperativeController::class, 'index'])->name('koperasi.index');
    Route::delete('/koperasi/{user:id}', [CooperativeController::class, 'destroy'])->name('koperasi.destroy');

    // Validasi
    Route::get('/validasi', [ValiadationController::class, 'index'])->name('validasi.index');
    Route::patch('/validasi/{user:id}', [ValiadationController::class, 'update'])->name('validasi.update');
    Route::delete('/validasi/{id}', [ValiadationController::class, 'destroy'])->name('validasi.delete');



    // Menunggu Pembayaran
    Route::get('waiting-for-payment', [WaitingForPaymentController::class, 'index'])->name('waiting-for-payment.index');
    Route::patch('waiting-for-payment/{checkout}', [WaitingForPaymentController::class, 'update'])->name('waiting-for-payment.update');

    // Proses
    Route::get('prosess-payment', [ProcessPaymentController::class, 'index'])->name('prosess-payment.index');
    Route::patch('prosess-payment/{checkout}', [ProcessPaymentController::class, 'update'])->name('prosess-payment.update');

    // Dikirim
    Route::get('send-payment', [SendPaymentController::class, 'index'])->name('send-payment.index');
    Route::patch('send-payment/{checkout}', [SendPaymentController::class, 'update'])->name('send-payment.update');

    // Selesai
    Route::get('finish-payment', [FinishPaymentController::class, 'index'])->name('finish-payment.index');
    Route::patch('finish-payment/{checkout}', [FinishPaymentController::class, 'update'])->name('finish-payment.update');

    // Bawang Eceran
    Route::prefix('bawang-eceran')->name('bawang-eceran')->group(function () {
        Route::get('', [RetailOnionController::class, 'index'])->name('.index');
        Route::get('/{product:slug}', [RetailOnionController::class, 'show'])->name('.show');
    });
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
    Route::get('buat-toko', CreateMarketController::class)->name('buat-toko');
    // Buat toko petani
    Route::middleware('validation_nonactive')->prefix('buat-toko')->name('buat-toko')->group(function () {
        Route::get('/petani', [CreateMarketFarmerController::class, 'index'])->name('.petani');
        Route::post('/petani', [CreateMarketFarmerController::class, 'store_img'])->name('.petani');
        Route::get('/petani/lengkapi-info', [CreateMarketFarmer2Controller::class, 'index'])->name('.petani.lengkapi-info');
        Route::patch('/petani/lengkapi-info', [CreateMarketFarmer2Controller::class, 'update'])->name('.petani.lengkapi-info');
        Route::get('/petani/selesai', CreateMarketFarmer3Controller::class)->name('.petani.selesai');
    });

    // Buat toko koperasi
    Route::middleware('validation_nonactive')->prefix('buat-toko')->name('buat-toko')->group(function () {
        Route::get('/koperasi', [CreateMarketCooperativeController::class, 'index'])->name('.koperasi');
        Route::post('/koperasi', [CreateMarketCooperativeController::class, 'store_img'])->name('.koperasi');
        Route::get('/koperasi/lengkapi-info', [CreateMarketCooperative2Controller::class, 'index'])->name('.koperasi.lengkapi-info');
        Route::patch('/koperasi/lengkapi-info', [CreateMarketCooperative2Controller::class, 'update'])->name('.koperasi.lengkapi-info');
        Route::get('/koperasi/selesai', CreateMarketCooperative3Controller::class)->name('.koperasi.selesai');
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

    //Kerangjang
    Route::prefix('keranjang')->name('keranjang')->group(function () {
        Route::post('/{productid}', [CartController::class, 'store'])->name('.keranjang');
        Route::delete('/{cart}', [CartController::class, 'destroy'])->name('.delete');
    });

    // Pembayaran
    Route::prefix('pembayaran')->name('pembayaran')->group(function () {
        Route::get('', [CheckoutController::class, 'index'])->name('.index');
        Route::post('', [CheckoutController::class, 'store'])->name('.create');
    });

    // Konfirmasi
    Route::get('konfirmasi', [ConfrirmController::class, 'index'])->name('konfirmasi.index');
    Route::patch('konfirmasi/{checkout:id}', [ConfrirmController::class, 'update'])->name('konfirmasi.update');

    // Pesanan
    Route::get('pesanan', OrderanController::class)->name('pesanan.index');

    // DiProses
    Route::get('diproses', OrderanProcessController::class)->name('diproses.index');

    // Dikirim
    Route::get('dikirim', OrderanSendController::class)->name('dikirim.index');

    // Selesai
    Route::get('selesai', OrderanFinishController::class)->name('selesai.index');
});

    // Petunjuk
    Route::view('syarat-dan-ketentuan', 'client.instruction.syarat-dan-ketentuan')->name('syarat-dan-ketentuan');
    Route::view('kebijakan-privasi', 'client.instruction.kebijakan-privasi')->name('kebijakan-privasi');
    Route::view('tanya-jawab', 'client.instruction.tanya-jawab')->name('tanya-jawab');
    Route::view('panduan', 'client.instruction.panduan')->name('panduan');
    Route::view('tentang-kami', 'client.instruction.tentang-kami')->name('tentang-kami');

    // Produk Bawang Eceran
    Route::prefix('bawang-eceran')->name('bawang-eceran')->group(function () {
        Route::get('', [BawangPetaniController::class, 'index'])->name('.index');
        Route::get('/{product:slug}', [BawangPetaniController::class, 'show'])->name('.show');
    });

Auth::routes(['verify' => true]);
