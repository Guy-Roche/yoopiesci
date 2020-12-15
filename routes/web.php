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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('accueil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accueil', 'HomeController@accueil')->name('accueil');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/joblisting', 'HomeController@joblisting')->name('joblisting');
Route::get('/jobsingle', 'HomeController@jobsingle')->name('jobsingle');
Route::get('/jobproposal', 'HomeController@jobproposal')->name('jobproposal');
Route::get('/usersingle', 'HomeController@usersingle')->name('usersingle');
Route::get('/userlisting', 'HomeController@userlisting')->name('userlisting');

