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

Route::get('/home', [ 'as'=>'home','uses'=>'Backend\ClienteController@index']);

Route::get('/testes', function () {
    return view('testes');
});

Route::get('/getdados/{cnpj}', [
    'as' => 'get.cnpj',
    'uses' => 'Backend\Testes@getDados'
]);



Route::group(['prefix'=>'cadastro'],function (){


    Route::post('/create', [
        'as' => 'cliente.create',
        'uses' => 'Backend\CpnjController@create'
    ]);

    Route::get('/cliente', [
        'as' => 'cliente.cadastro',
        'uses' => 'Backend\ClienteController@cadastro'
    ]);
    
    Route::get('/cnpj/form', [
        'as' => 'cpnj.form',
        'uses' => 'Backend\CpnjController@showForm'
        
    ]);

    Route::get('/endereco/form', [
        'as' => 'endereco.form',
        'uses' => 'Backend\EnderecoController@showForm'
    ]);
    
    Route::get('/contato/form', [
        'as' => 'contato.form',
        'uses' => 'Backend\ContatoController@showForm'
    ]);
    
});


