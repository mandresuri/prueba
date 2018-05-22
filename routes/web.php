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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as'   => 'users'
    ]);
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    Route::get('/user/deactivate{id}',[
        'uses' => 'UsersController@deactivate',
        'as' => 'user.deactivate'
    ]);
    Route::get('/user/activate{id}',[
        'uses' => 'UsersController@activate',
        'as' => 'user.activate'
    ]);
    Route::get('/user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    Route::get('user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as'   => 'user.admin'
    ]);
    Route::get('user/not-admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as'   => 'user.not.admin'
    ]);
    Route::get('user/profile',[
        'uses' => 'ProfileController@index',
        'as'   => 'user.profile'
    ]);
    Route::post('user/profile/update',[
        'uses' => 'ProfileController@update',
        'as'   => 'user.profile.update'
    ]);
});
