<?php

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
});


Route::get('/home_medecin', function () {
    return view('welcome')->with('teypeUser','medecin');
});
Route::get('/medecin_page_content', function () {
    return view('welcome')->with('teypeUser','medecin-dash');
});
Route::get('/medecin_profile_page', function () {
    return view('welcome')->with('teypeUser','medecin-profile');;
});


Route::get('/home_labo', function () {
    return view('welcome')->with('teypeUser','labo');
});

Route::get('/home_clinique', function () {
    return view('welcome')->with('teypeUser','clinique');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
