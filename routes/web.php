<?php

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

// Dashboard
Route::view('dashboard', 'client.dasboard.dasboard')->name('dashboard');
// Petunjuk
Route::view('syarat-dan-ketentuan', 'client.instruction.syarat-dan-ketentuan')->name('syarat-dan-ketentuan');
Route::view('kebijakan-privasi', 'client.instruction.kebijakan-privasi')->name('kebijakan-privasi');
Route::view('tanya-jawab', 'client.instruction.tanya-jawab')->name('tanya-jawab');
Route::view('panduan', 'client.instruction.panduan')->name('panduan');
Route::view('tentang-kami', 'client.instruction.tentang-kami')->name('tentang-kami');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
