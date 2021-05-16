<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('Homepage');
})->name('Homepage');*/

Route::get('/', 'App\Http\Controllers\PublicController@showEventHome')
        ->name('Homepage');

Route::get('/catalog', 'App\Http\Controllers\PublicController@showFullCatalog')
        ->name('FullCatalog');

Route::get('/faq', 'App\Http\Controllers\PublicController@showFAQ')
        ->name('FAQ');

Route::get('/catalog/event/{eventId}', 'App\Http\Controllers\PublicController@showEvent')->name('DettagliEvento');