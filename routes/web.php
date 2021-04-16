<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\Ajout_profController;
use App\Http\Controllers\New_identifyController;
use App\Http\Controllers\Ajout_matController;



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



//Route concernant le dashboard
Route::get('/index','Dashboard_directeurController@display' );
Route::post('/index','ParametreController@store');
Route::get('/index','ParametreController@index');
Route::get('/update/{id}','ParametreController@update');
Route::get('/edit/{id}','ParametreController@edit');
Route::get('/delete/{id}','ParametreCntroller@destroy');
Route::get('/index1', function () {
    return view('index1');
});

//Route sur l'authentification
Route::get('/new_connexion','New_identifyController@display');
Route::post('/new_identify','New_identifyController@modification');
Route::get('/connexion','ConnexionController@display');//affichage du formulaire de connexion
Route::post('/connexion','ConnexionController@login'); 
Route::get('/deconnexion','LogoutController@logout'); 
Route::get('/inscription','InscriptionController@display');
Route::post('/inscription','InscriptionController@traitement');
Route::get('/success','SuccessController@success');
Route::get('/no_confirm','No_confirmController@wrong');

//Route sur l'ajout de prof
Route::get('/ajout_prof','Ajout_profController@display')->name('ajout_prof');
Route::post('/ajout_prof','Ajout_profController@store' );
Route::get('/ajout_prof','Ajout_profController@show');
Route::get('/delete/{id}','Ajout_profController@destroy');

//Route sur l'ajout de matiere
Route::get('/ajout_mat','Ajout_matController@display')->name('ajout_mat');
Route::post('/ajout_mat','Ajout_matController@store');
Route::get('/delete/{id}','Ajout_matController@destroy');


//route sur ajout d'eleve
Route::get('/ajout_eleve','Ajout_eleveController@display')->name('ajout_eleve');
Route::post('/ajout_eleve','Ajout_eleveController@store' );
Route::get('/ajout_eleve','Ajout_eleveController@show');
Route::get('/delete/{id}','Ajout_eleveController@destroy');


//Route sur l'affichage de note de 6e
Route::get('/data_6eme','Data_6emeController@display')->name('data_6eme');
Route::post('/note','NoteController@store')->name('data_6eme');

//Route sur l'affichage de note de 5e
Route::get('/data_5eme','Data_5emeController@display')->name('data_5eme'); //affichage du formulaire d'inscription

Route::get('/ajout_note','Ajout_noteController@display')->name('ajout_note');


//Route sur l'affichage de note de 6e
Route::resource('/resultat_6eme','Resultat6_Controller');