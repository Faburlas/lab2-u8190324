<?php

use App\Http\Controllers\BuyersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/buyers', ['as' => 'buyers', 'uses' => 'App\Http\Controllers\BuyersController@filter']);

Route::get('/buyers/{id}', ['as' => 'buyerInfo', 'uses' => 'App\Http\Controllers\BuyersController@show']);