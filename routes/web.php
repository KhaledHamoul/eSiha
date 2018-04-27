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
    return view('medecinDash');
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
