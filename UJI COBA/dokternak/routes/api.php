<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route Api Login
Route::post('api_users/login/peternak','ApiUsersController@loginUser');

//Route Api Users
Route::get('api_users', 'ApiUsersController@getAll');
Route::get('api_users/{id}', 'ApiUsersController@getUsers');
Route::post('api_users', 'ApiUsersController@createUsers');
Route::put('api_users/{id}', 'ApiUsersController@updateUsers');
Route::delete('api_users/{id}', 'ApiUsersController@deleteUsers');

//Route Api Petugas
Route::get('api_petugas', 'ApiPetugasController@getAll');
Route::get('api_petugas/{id}', 'ApiPetugasController@getPetugas');
Route::post('api_petugas', 'ApiPetugasController@createPetugas');
Route::put('api_petugas/{id}', 'ApiPetugasController@updatePetugas');
Route::delete('api_petugas/{id}', 'ApiPetugasController@deletePetugas');
Route::get('api_petugas/cari/petugas', 'ApiPetugasController@cariPetugas');

//Route Api Artikel
Route::get('api_artikel', 'ApiArtikelController@getAll');
Route::get('api_artikel/{id_artikel}', 'ApiArtikelController@getArtikel');
Route::post('api_artikel', 'ApiArtikelController@createArtikel');
Route::put('api_artikel/{id}', 'ApiArtikelController@updateArtikel');
Route::delete('api_artikel/{id}', 'ApiArtikelController@deleteArtikel');

//Route Api Puskeswan
Route::get('api_puskeswan', 'ApiPuskeswanController@getAll');
Route::get('api_puskeswan/{id_puskeswan}', 'ApiPuskeswanController@getPuskeswan');
Route::post('api_puskeswan', 'ApiPuskeswanController@createPuskeswan');
Route::put('api_puskeswan/{id_puskeswan}', 'ApiPuskeswanController@updatePuskeswan');
Route::delete('api_puskeswan/{id_puskeswan}', 'ApiPuskeswanController@deletePuskeswan');

//Route Api Tutorial
Route::get('api_tutorial', 'ApiTutorialController@getAll');
Route::get('api_tutorial/{id_tutorial}', 'ApiTutorialController@getTutorial');
Route::post('api_tutorial', 'ApiTutorialController@createTutorial');
Route::put('api_tutorial/{id_tutorial}', 'ApiTutorialController@updateTutorial');
Route::delete('api_tutorial/{id_tutorial}', 'ApiTutorialController@deleteTutorial');

//Route Api Kritik dan saran
Route::get('api_kritikdansaran', 'ApiKritikdanSaranController@getAll');
Route::get('api_kritikdansaran/{id_ks}', 'ApiKritikdanSaranController@getKs');
Route::post('api_kritikdansaran', 'ApiKritikdanSaranController@createKs');
Route::put('api_kritikdansaran/{id_ks}', 'ApiKritikdanSaranController@updateKs');
Route::delete('api_kritikdansaran/{id_ks}', 'ApiKritikdanSaranController@deleteKs');

