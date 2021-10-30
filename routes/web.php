<?php

use App\Http\Controllers\todocontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/form', function () {
    return view('welcome');
});

Route::get('/', [todocontroller::class,'presenter'])->name('presenter');
Route::get('/form', function(){return view('form'); })->name('form');
Route::post('/formm', [todocontroller::class,'save'])->name('formm');


Route::get('/formupdate', [todocontroller::class,'update'])->name('formupdate');
Route::get('/delete', [todocontroller::class,'delet'])->name('delete');
Route::post('/formofupdate', [todocontroller::class,'upddate'])->name('formofupdate');





