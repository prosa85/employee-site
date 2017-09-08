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
$router->get('test', function(){
	return Auth::user()->requestforms()->get();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group( function(){

	Route::resource('posts', 'testCrud\\PostsController');
	Route::resource('requestforms', 'RequestForms\\requestformsController');
	Route::resource('entries', 'RequestForms\\EntriesController');
	Route::resource('users', 'UsersController');
});