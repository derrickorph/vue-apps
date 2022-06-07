<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('/');


  
Route::get('/dashboard', function () {
    return view('layouts.app');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::view('{any}', 'layouts.app')->middleware(['auth'])->where('any','.*');