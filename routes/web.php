<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbkController;
// use PDF;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('abk/simpan',[AbkController::class,'save'])->name('abk.save');

Route::get('abk/add', [AbkController::class,'index'])->name('add.abk');
Route::get('abk', [AbkController::class,'listJabatan'])->name('abk');
Route::get('abk/show/{id}', [AbkController::class,'showAbk'])->name('abk.cetak');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('abk/cetak/{id}', [AbkController::class,'cetak'])->name('abk.show');
