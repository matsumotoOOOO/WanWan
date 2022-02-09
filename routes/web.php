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


Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    
    Route::get('dog/health', 'Admin\DogController@health')->name('health');
    Route::post('dog/health', 'Admin\DogController@check')->name('check');

    Route::get('dog/register', 'Admin\DogController@register')->name('dog_register');
    Route::post('dog/register', 'Admin\DogController@register_ok')->name('dog_register_ok');

    Route::get('dog/select', 'Admin\DogController@select')->name('select');
    Route::get('dog/all_history', 'Admin\DogController@all_history')->name('all_history');
    Route::get('dog/each_history', 'Admin\DogController@each_history')->name('each_history');
    
    Route::get('dog/practice', 'Admin\DogController@practice')->name('practice');

});

Auth::routes();

Route::get('/', 'Admin\DogController@welcome');
Route::get('/home', 'HomeController@index')->name('home');