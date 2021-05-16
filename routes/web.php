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
// Route::resource('allocation','AllocationController');
// Route::resource('contrat','ContratController');
// Route::resource('demande','DemandeController');
// Route::resource('demandeur','DemandeurController');
// Route::resource('entreprise','EntrepriseController');
// Route::resource('profil','ProfilController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([],function () {
Route::resource('allocation','AllocationController');
Route::resource('contrat','ContratController');
Route::resource('demande','DemandeController');
Route::resource('demandeur','DemandeurController');
Route::resource('entreprise','EntrepriseController');
Route::resource('profil','ProfilController');
});
// Route::get('demandeur.edit/{id}', 'DemandeurController@edit')->name('edit.demandeur');
// Route::post('demandeur.update/{id}', 'DemandeurController@update')->name('update.demandeur');
Route::get('entreprise.validerEntreprise/{id}','EntrepriseController@validerEntreprise')->name('validerEntreprise');
Route::get('entreprise.rejeterEntreprise/{id}', 'EntrepriseController@rejeterEntreprise')->name('rejeterEntreprise');
Route::get('user.index', 'UserController@AddUser')->name('user.add')->middleware('admin');
Route::post('user', 'UserController@store')->name('store.user')->middleware('admin');
Route::get('user.create', 'UserController@index')->name('show.user')->middleware('admin');
Route::get('user.edit/{id}', 'UserController@edit')->name('edit.user')->middleware('admin');
Route::post('user.update/{id}', 'UserController@update')->name('update.user')->middleware('admin');
Route::get('user.delete/{id}', 'UserController@destroy')->name('delete.user')->middleware('admin');
Route::get('user.UserIndex', 'UserController@AddUserIndex')->name('entreprise.HomeEntreprise');
Route::post('users', 'UserController@storeentreprise')->name('storeentreprise.user');
Route::get('/', 'UserController@indexentreprise')->name('showentreprise.user');
// //  // Route::get('entreprise.home', 'UserController@indexentreprise')->name('entreprise.HomeEntreprise')->middleware('admin');
// Route::post('/', 'UserController@storeentreprise')->name('storeentreprise.user')->middleware('user');


Route::get('profil.getId/{demandeur}', 'ProfilController@getId')->name('profil.getId');

Route::get('entreprise.home','EntrepriseController@entreprise')->name('entreprise.HomeEntreprise')->middleware('user');
Route::get('/filtredemande/{id}','DemandeController@filtredemande')->name('filtredemande');


