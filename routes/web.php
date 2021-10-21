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

Route::get('/', 'App\Http\Controllers\PagesController@index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('transactions', 'App\Http\Controllers\TransactionsController');
Route::get('/transactions/index', 'App\Http\Controllers\TransactionsController@index');

Route::get('/transactions/create', 'App\Http\Controllers\TransactionsController@create');

Route::post('/transactions/store','App\Http\Controllers\TransactionsController@store');

Route::get('/transactions/paymentverification/{ref}', 'App\Http\Controllers\TransactionsController@paymentverification');
