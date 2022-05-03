<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomePageController@index');
Route::get('/about', 'HomePageController@about');
Route::get('/contact', 'HomePageController@contact');
Route::get('/vacancies', 'HomePageController@vacancies');
Route::get('/learning_disabilities', 'HomePageController@learning_disabilities');
Route::get('/mental_health', 'HomePageController@mental_health');
Route::get('/children_and_young_peoples_service', 'HomePageController@children_and_young_peoples_service');
Route::get('/domiciliary_care', 'HomePageController@domiciliary_care');
Route::get('/complaints', 'HomePageController@complaints');