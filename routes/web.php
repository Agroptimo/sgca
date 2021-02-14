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

Route::view('/','dashboard')->name('dashboard');

Route::get('/client', 'App\Http\Controllers\Client\ClientController@index' )->name('client.index');

// Route::middleware(['auth:sanctum', 'verified'])->group( function () {
//     Route::view('/','dashboard')->name('dashboard');

//     Route::get('/client', 'App\Http\Controllers\Client\ClientController@index' )->name('client.index');

// });