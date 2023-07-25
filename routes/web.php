<?php

use App\Http\Controllers\Page;
use App\Http\Controllers\mobil;
use App\Http\Controllers\Users;
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

Route::get('/', [Page::class, 'getdata']);
Route::get('/login', [Users::class, 'login'])->name('login');
Route::post('actionlogin', [Users::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [Users::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [Users::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [Users::class, 'register'])->name('register');
Route::post('register/action', [Users::class, 'actionregister'])->name('actionregister');
Route::get('profile', [Users::class, 'profile']);
Route::post('updateprofile', [Users::class, 'profileupdate'])->name('updateprofile');

Route::post('insertmobil', [mobil::class, 'actioninsertmobil'])->name('insertmobil');
