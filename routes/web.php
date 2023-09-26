<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/form', [StudentController::class, 'index'])->name('form');
Route::post('/create', [StudentController::class, 'create'])->name('create');
Route::get('/data', [StudentController::class, 'show'])->name('data');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');