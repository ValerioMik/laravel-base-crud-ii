<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/fumetti/{id}','homeController@show') -> name('show');

Route::get('/create','Homecontroller@create')-> name('create');
Route::post('/store','Homecontroller@store')->name('store');

Route:: get('/edit/{id}','HomeController@edit')-> name('edit');
Route::post('/update{id}','HomeController@update')-> name('update');

Route:: get('/delete/{id}','HomeController@delete')-> name('delete');