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

Auth::routes();

Route::get('/home', 'HomeController@accueil')->name('accueil');
Route::get('/', 'HomeController@soon')->name('soon');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/register2', 'HomeController@register2')->name('register2');
Route::get('/register3', 'HomeController@register3')->name('register3');
Route::get('/register4', 'HomeController@register4')->name('register4');
Route::get('/joblisting', 'HomeController@joblisting')->name('joblisting');
Route::get('/jobsingle', 'HomeController@jobsingle')->name('jobsingle');
Route::get('/jobproposal', 'HomeController@jobproposal')->name('jobproposal');
Route::get('/usersingle', 'HomeController@usersingle')->name('usersingle');
Route::get('/userlisting', 'HomeController@userlisting')->name('userlisting');

