<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('login');
});

Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::middleware(['CekLogin'])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    
    Route::get('/siswa',[AdminController::class,'indexsiswa'])->name('siswa');
    Route::get('/tambahsiswa',[AdminController::class,'tambahsiswa'])->name('tambahsiswa');
    Route::post('/storesiswa',[AdminController::class,'storesiswa'])->name('storesiswa');
    Route::get('/ubahsiswa/{id}',[AdminController::class,'editsiswa'])->name('ubahsiswa');
    Route::put('/updatesiswa',[AdminController::class,'updatesiswa'])->name('updatesiswa');
    Route::get('/hapussiswa/{id}',[AdminController::class,'deletesiswa'])->name('hapussiswa');
    
    Route::get('/guru',[AdminController::class,'indexguru'])->name('guru');
    Route::get('/tambahguru',[AdminController::class,'tambahguru'])->name('tambahguru');
    Route::post('/storeguru',[AdminController::class,'storeguru'])->name('storeguru');
    Route::get('/ubahguru/{id}',[AdminController::class,'editguru'])->name('ubahguru');
    Route::put('/updateguru',[AdminController::class,'updateguru'])->name('updateguru');
    Route::get('/hapusguru/{id}',[AdminController::class,'deleteguru'])->name('hapusguru');
});

