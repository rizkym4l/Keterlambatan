<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\terlambatController;
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
    return redirect('login');
});

Route::get('/dashboard', [dashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
// 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/data', [dataController::class,'index'])->name('data');
    Route::get('/tambahRayon', [dataController::class,'tambahRayon']);
    Route::post('/createrayon', [dataController::class,'createrayon']);
    Route::get('/rombel', [dataController::class,'rombel']);
    Route::get('/tambahrombel', [dataController::class,'tambahrombel']);
    Route::post('/createrombel', [dataController::class,'createrombel']);
    Route::delete('/hapusrombel/{id}', [dataController::class,'hapusrombel']);
    Route::get('/editrombel/{id}', [dataController::class,'editrombel']);
    Route::patch('editrombel/updaterombel/{id}', [dataController::class,'updaterombel']);
    Route::get('datasiswa', [dataController::class,'indexsiswa']);
    Route::post('createsiswa', [dataController::class,'createsiswa']);
    Route::get('terlambat',[terlambatController::class,'tambahterlambat'])->name('terlambat');
    Route::post('createterlambat',[terlambatController::class,'createterlambat']);
    Route::get('dataterlambat',[terlambatController::class,'index']);
    Route::get('editterlambat/{id}',[terlambatController::class,'edit']);
    route::patch('editterlambat/updaterombel/{id}',[terlambatController::class,'update']);
    route::delete('hapusterlambat/{id}/{wkt}',[terlambatController::class,'hapus'])->name('hapusterlambat');
    Route::get('/exportexcel',[terlambatController::class,'exportexcel']);
    Route::post('/cari',[terlambatController::class,'cari']);
    Route::get('/rekap',[terlambatController::class,'rekap']);
    Route::get('/pdf/{id}',[terlambatController::class,'pdf']);
    Route::get('/lihat/{id}',[terlambatController::class,'lihat']);

});

require __DIR__.'/auth.php';
