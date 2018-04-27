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


/*oussama PART*/
  Route::get("med_listPatients",function(){
   return view('medecinListPatients');
  });
  Route::get('medecinHome',function(){
    return view('home');
  });
  Route::get('medecinListRDV',function(){
    return view('medecinListRDV');
  });

/*END oussama PART*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home_medecin', function () {
    return view('welcome')->with('typeUser','medecin');
});
Route::get('/medecin_page_content', function () {
    return view('welcome')->with('teypeUser','medecin-dash');
});
Route::get('/medecin_profile_page', function () {
    return view('layout/medecin_profile_page');
});

Route::get('/medecinHistory', function () {
    return view('medecinHistory');
});
Route::get('/home_labo', function () {
    return view('welcome')->with('typeUser','labo');
});

Route::get('/home_clinique', function () {
    return view('welcome')->with('typeUser','clinique');
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

Route::get('/labo_messagerie', function () {
    return view('layout.labo_patients');
});

Route::get('medecinDash',function(){
    return view('medecinDash');
  });
  Route::get('medecinProfile',function(){
    return view('medecinProfile');
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
