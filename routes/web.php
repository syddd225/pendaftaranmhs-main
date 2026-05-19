<?php

use App\Http\Controllers\mahasiswaController;
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
    return view('welcome');
});

Route::get('/', [mahasiswaController::class, 'index']);

Route::get('/inputdata',[mahasiswaController::class, 'create']);

Route::post('tambahData', [mahasiswaController::class,'store']);

Route::get('updatedata/{kd_pendaftar}', [mahasiswaController::class, 'edit']);

Route::put('updatedata/{kd_pendaftar}',[mahasiswaController::class, 'update']);

Route::delete('hapusdata/{kd_pendaftar}',[mahasiswaController::class, 'destroy']);