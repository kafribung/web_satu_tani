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

// User
// Petunjuk
Route::view('syarat-dan-ketentuan', 'client.instruction.syarat-dan-ketentuan')->name('syarat-dan-ketentuan');
Route::view('kebijakan-privasi', 'client.instruction.kebijakan-privasi')->name('kebijakan-privasi');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
