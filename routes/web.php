<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('adminEvent.dashboard');
});

Route::get('/events','eregisterController@index');
Route::post('/save-events','eregisterController@store');

Route::get('/events','eregisterController@allevents');
Route::delete('/role-deletee/{id}','eregisterController@registerdelete');
Auth::routes();
Route::resource('vacancy', 'VacanciesController');
Route::resource('application', 'ApplicationsController');
// Route::get('vacancy/edit', 'VacanciesController@edit');
// Route::get('vacancy/create', 'VacanciesController@create');

Route::get('/home', 'HomeController@index')->name('home');