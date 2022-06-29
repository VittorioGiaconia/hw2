<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('start', 'App\Http\Controllers\StartController@start');

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login');

Route::get('register', 'App\Http\Controllers\RegisterController@register_form');
Route::post('register', 'App\Http\Controllers\RegisterController@do_register');
Route::get('register/email/{email}', 'App\Http\Controllers\RegisterController@checkEmail');

Route::get('logout', 'App\Http\Controllers\LogoutController@logout');

Route::get('home','App\Http\Controllers\HomeController@home');
Route::get('home_api','App\Http\Controllers\HomeController@api');
Route::get('home_insert/{autore}/{titolo}/{contenuto}/{url_img}/{url_link}','App\Http\Controllers\HomeController@inserisci_in_DB');


Route::get('preferiti','App\Http\Controllers\PreferitiController@preferiti');
Route::get('preferiti_view','App\Http\Controllers\PreferitiController@print');
Route::get('preferiti_delete/{titolo}','App\Http\Controllers\PreferitiController@delete');

Route::get('formula1','App\Http\Controllers\Formula1Controller@formula1');
Route::get('formula1_insert/{autore}/{titolo}/{contenuto}/{url_img}/{url_link}','App\Http\Controllers\MotocrossController@inserisci_in_DB');


Route::get('motocross','App\Http\Controllers\MotocrossController@motocross');
Route::get('motocross_insert/{autore}/{titolo}/{contenuto}/{url_img}/{url_link}','App\Http\Controllers\MotocrossController@inserisci_in_DB');

Route::get('bike','App\Http\Controllers\BikeController@bike');
Route::get('bike_insert/{autore}/{titolo}/{contenuto}/{url_img}/{url_link}','App\Http\Controllers\MotocrossController@inserisci_in_DB');

Route::get('search','App\Http\Controllers\SearchController@search');
Route::get('search_insert/{autore}/{titolo}/{contenuto}/{url_img}/{url_link}','App\Http\Controllers\MotocrossController@inserisci_in_DB');
