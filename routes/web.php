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

Route::get('/home_labo', function () {
    return view('welcome')->with('teypeUser','labo');
});

Route::get('/home_clinique', function () {
    return view('welcome')->with('teypeUser','clinique');
});

Route::get('/labo_profile', function () {
    return view('layout.labo_profile');
});

Route::get('/labo_settings', function () {
    return view('layout.labo_profile_settings');
});

Route::get('/labo_rendez_vous', function () {
    return view('layout.labo_rendez_vous');
});

Route::get('/labo_analyse_radio', function () {
    return view('layout.labo_analyse_radio');
});

Route::get('/labo_patients', function () {
    return view('layout.labo_patients');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
