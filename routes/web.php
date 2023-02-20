<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DaftarController::class, 'index']);
Route::get('/form', [DaftarController::class, 'create']);
Route::post('/store', [DaftarController::class, 'store']);
Route::get('/data', [DaftarController::class, 'data']);
Route::get('edit{id}', [DaftarController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [DaftarController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [DaftarController::class,'destroy'])->name('destroy');