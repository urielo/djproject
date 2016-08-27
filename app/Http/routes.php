<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'Backend\CpnjController@index');

Route::get('/testes', function () {
    return view('testes');
});

Route::get('/getdados/{cnpj}', [
    'as' => 'get.cnpj',
    'uses' => 'Backend\Testes@getDados'
]);



Route::group(['prefix'=>'cnpj'],function (){


    Route::post('/create', [
        'as' => 'cpnj.create',
        'uses' => 'Backend\CpnjController@create'
    ]);
    
    Route::get('/form', [
        'as' => 'cpnj.form',
        'uses' => 'Backend\CpnjController@showForm'
    ]);
    
});
