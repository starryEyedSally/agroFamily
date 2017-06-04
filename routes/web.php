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

Route::get('/', [
    'uses' => '\Agrofamily\Http\Controllers\HomeController@index',
        'as' => 'home'
    ]
);

Route::post('/login', [
        'uses' => '\Agrofamily\Http\Controllers\Auth\LoginController@login',
        'as' => 'login'
    ]
);

Route::get('/demo', [
        'uses' => '\Agrofamily\Http\Controllers\HomeController@demo',
        'as' => 'demo'
    ]
)->middleware('auth');


//TODO remove this route
Route::get('/make', [
        'uses' => '\Agrofamily\Http\Controllers\HomeController@createUser',
        'as' => 'make'
    ]
);