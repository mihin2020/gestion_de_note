<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ParametreController;



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

Route::get('/index','Dashboard_directeurController@display' );
Route::post('/index','ParametreController@store' );
Route::get('/index','ParametreController@show');
Route::get('/update/{id}','ParametreController@update');
Route::get('/delete/{id}','ParametreController@destroy');

Route::get('/index1', function () {
    return view('index1');
});

Route::get('/connexion','ConnexionController@display');//affichage du formulaire de connexion
Route::post('/connexion','ConnexionController@login'); 

Route::get('/inscription','InscriptionController@display');
Route::post('/inscription','InscriptionController@traitement');
Route::get('/success','SuccessController@success');
Route::get('/no_confirm','No_confirmController@wrong');

Route::get('/ajout_prof','Ajout_profController@display')->name('ajout_prof');
Route::post('/ajout_prof','Ajout_profController@store' );

Route::get('/ajout_mat','Ajout_matController@display')->name('ajout_prof');

Route::get('/data_6eme','Data_6emeController@display')->name('data_6eme');

Route::get('/data_5eme','Data_5emeController@display')->name('data_5eme'); //affichage du formulaire d'inscription

