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
Route::post('/contact-us', 'HomePageController@contactConfirm');
Route::get('/vacancies', 'HomePageController@vacancies');
Route::get('/application', 'HomePageController@application');
Route::get('/heslop-court', 'HomePageController@heslop_court');
Route::get('/non-complex-care', 'HomePageController@non_complex_care');
Route::get('/mayfair', 'HomePageController@mayfair');