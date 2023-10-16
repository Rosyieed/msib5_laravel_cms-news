<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\NewsController::class, 'index'])->name('home');
Route::get('/home/create', [App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::get('/home/table', [App\Http\Controllers\NewsController::class, 'table'])->name('news.table');
Route::get('/home/edit/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');

Route::post('/home/store', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::post('/home/update/{id}', [App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::delete('/home/delete/{id}', [App\Http\Controllers\NewsController::class, 'destroy'])->name('news.delete');
