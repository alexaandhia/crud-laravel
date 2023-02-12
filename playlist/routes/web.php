<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;

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

Route::get('/', [PlaylistController::class, 'index'])->name('home');

//buat halaman login
Route::get('/login', [PlaylistController::class, 'login'])->name('login');
Route::post('auth', [PlaylistController::class, 'auth'])->name('auth');

//buat add lagu baru
Route::get('/add', [PlaylistController::class, 'create'])->name('create');
Route::post('/store', [PlaylistController::class, 'store'])->name('store');

//buat edit
Route::get('/edit/{id}', [PlaylistController::class, 'edit'])->name('edit');
Route::post('/change/{id}', [PlaylistController::class, 'update'])->name('change');

//buat hapus
Route::delete('/delete/{id}',[PlaylistController::class, 'destroy'])->name('delete');


