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
    return view('Homepage');
})->name('Homepage');

Route::get('/catalog', 'App\Http\Controllers\PublicController@showFullCatalog')
        ->name('FullCatalog');

Route::get('/faq', 'App\Http\Controllers\PublicController@showFAQ')
        ->name('FAQ');

Route::get('/catalog/event/{eventId}', 'App\Http\Controllers\PublicController@showEvent')->name('DettagliEvento');