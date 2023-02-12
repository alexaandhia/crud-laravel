<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');

Route::get('/tambah-data', [StudentController::class, 'create']);
Route::post('/kirim', [StudentController::class, 'store'])->name('kirim-data');

//{id} = path dinamis
//path yang isinya ga tetep atau path yang datanya dikirim dari database
//yang didalem kurawal itu primary key
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::patch('/change/{id}', [StudentController::class, 'update'])->name('change');
//buat delete
Route::delete('/delete/{id}',[StudentController::class, 'destroy'])->name('delete');
//kalo post buat nambah data baru, patch buat ganti data 

Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::post('auth', [StudentController::class, 'auth'])->name('auth');

Route::middleware('isLogin')->group(function(){
    Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [StudentController::class, 'logout'])->name('logout');
});

