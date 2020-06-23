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

Route::get('/', function () { return view('welcome'); });

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);

Route::get ('/feirante/adicionar',        ['as'=>'feirante.adicionar','uses'=>'Principal\FeiranteController@create']);
Route::group(['middleware'=>'auth'],function(){

//    Route::get ('/admin/cursos',              ['as'=>'admin.cursos',      'uses'=>'Principal\FeiranteController@index']);
//    Route::get ('/feirante/adicionar',        ['as'=>'feirante.adicionar','uses'=>'FeiranteController@create']);
//    Route::post('/feirante/salvar',           ['as'=>'feirante.salvar',   'uses'=>'FeiranteController@store']);
//    Route::get ('/feirante/editar/{id}',      ['as'=>'feirante.editar',   'uses'=>'FeiranteController@edit']);
//    Route::put ('/feirante/atualizar/{id}',   ['as'=>'feirante.atualizar','uses'=>'FeiranteController@update']);
//    Route::get ('/feirante/deletar/{id}',     ['as'=>'feirante.deletar',  'uses'=>'FeiranteController@destroy']);


    //FEIRANTES
    Route::get('feirantes',                      ['as' => 'feirantes.listar',         'uses' => 'FeiranteController@index']);
    Route::get('feirantes_adicionar',            ['as' => 'feirantes_adicionar',      'uses' => 'FeiranteController@create']);
    Route::post('feirantes_salvar',              ['as' => 'feirantes_salvar',         'uses' => 'FeiranteController@store']);
    Route::get('/feirantes/editar/{id}',         ['as' => 'feirantes.editar',         'uses' => 'FeiranteController@edit']);
    Route::get('/feirantes/visualizar/{id}',     ['as' => 'feirantes.visualizar',     'uses' => 'FeiranteController@show']);
    Route::put('/feirantes/atualizar/{id}',      ['as' => 'feirantes.atualizar',      'uses' => 'FeiranteController@update']);
    Route::get('/feirantes/excluir/{id}',        ['as' => 'feirantes.excluir',        'uses' => 'FeiranteController@destroy']);
    Route::put('/feirantes/alterar_imagem/{id}', ['as' => 'feirantes.alterar_imagem', 'uses' => 'FeiranteController@alterar_imagem']);
    Route::put('/feirantes/alterar_status/{id}', ['as' => 'feirantes.alterar_status', 'uses' => 'FeiranteController@alterar_status']);


    Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'ProfileController@sair']);


    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put ('/profile/update/{id}',   ['as'=>'profile.update','uses'=>'ProfileController@update']);
    Route::put ('/profile/password/{id}',   ['as'=>'profile.password','uses'=>'ProfileController@password']);
    Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
    Route::get('map', function () {return view('pages.maps');})->name('map');
    Route::get('icons', function () {return view('pages.icons');})->name('icons');
    Route::get('table-list', function () {return view('pages.tables');})->name('table');


    //CLIENTES
    Route::get('clientes',                      ['as' => 'clientes.listar',         'uses' => 'ClienteController@index']);
    Route::get('clientes_adicionar',            ['as' => 'clientes_adicionar',      'uses' => 'ClienteController@create']);
    Route::post('clientes_salvar',              ['as' => 'clientes_salvar',         'uses' => 'ClienteController@store']);
    Route::get('/clientes/editar/{id}',         ['as' => 'clientes.editar',         'uses' => 'ClienteController@edit']);
    Route::get('/clientes/visualizar/{id}',     ['as' => 'clientes.visualizar',     'uses' => 'ClienteController@show']);
    Route::put('/clientes/atualizar/{id}',      ['as' => 'clientes.atualizar',      'uses' => 'ClienteController@update']);
    Route::get('/clientes/excluir/{id}',        ['as' => 'clientes.excluir',        'uses' => 'ClienteController@destroy']);
    Route::put('/clientes/alterar_imagem/{id}', ['as' => 'clientes.alterar_imagem', 'uses' => 'ClienteController@alterar_imagem']);
    Route::put('/clientes/alterar_status/{id}', ['as' => 'clientes.alterar_status', 'uses' => 'ClienteController@alterar_status']);


    //FORMAS DE PAGAMENTO
    Route::get('formas_pagamento',                      ['as' => 'formas_pagamento.listar',         'uses' => 'FormaPagamentoController@index']);
    Route::get('formas_pagamento_adicionar',            ['as' => 'formas_pagamento_adicionar',      'uses' => 'FormaPagamentoController@create']);
    Route::post('formas_pagamento_salvar',              ['as' => 'formas_pagamento_salvar',         'uses' => 'FormaPagamentoController@store']);
    Route::get('/formas_pagamento/editar/{id}',         ['as' => 'formas_pagamento.editar',         'uses' => 'FormaPagamentoController@edit']);
    Route::get('/formas_pagamento/visualizar/{id}',     ['as' => 'formas_pagamento.visualizar',     'uses' => 'FormaPagamentoController@show']);
    Route::put('/formas_pagamento/atualizar/{id}',      ['as' => 'formas_pagamento.atualizar',      'uses' => 'FormaPagamentoController@update']);
    Route::get('/formas_pagamento/excluir/{id}',        ['as' => 'formas_pagamento.excluir',        'uses' => 'FormaPagamentoController@destroy']);
    Route::put('/formas_pagamento/alterar_imagem/{id}', ['as' => 'formas_pagamento.alterar_imagem', 'uses' => 'FormaPagamentoController@alterar_imagem']);
    Route::put('/formas_pagamento/alterar_status/{id}', ['as' => 'formas_pagamento.alterar_status', 'uses' => 'FormaPagamentoController@alterar_status']);


    //PRODUTOS
    Route::get('produtos',                      ['as' => 'produtos.listar',         'uses' => 'ProdutoController@index']);
    Route::get('produtos_adicionar',            ['as' => 'produtos_adicionar',      'uses' => 'ProdutoController@create']);
    Route::post('produtos_salvar',              ['as' => 'produtos_salvar',         'uses' => 'ProdutoController@store']);
    Route::get('/produtos/editar/{id}',         ['as' => 'produtos.editar',         'uses' => 'ProdutoController@edit']);
    Route::get('/produtos/visualizar/{id}',     ['as' => 'produtos.visualizar',     'uses' => 'ProdutoController@show']);
    Route::put('/produtos/atualizar/{id}',      ['as' => 'produtos.atualizar',      'uses' => 'ProdutoController@update']);
    Route::get('/produtos/excluir/{id}',        ['as' => 'produtos.excluir',        'uses' => 'ProdutoController@destroy']);
    Route::put('/produtos/alterar_imagem/{id}', ['as' => 'produtos.alterar_imagem', 'uses' => 'ProdutoController@alterar_imagem']);
    Route::put('/produtos/alterar_status/{id}', ['as' => 'produtos.alterar_status', 'uses' => 'ProdutoController@alterar_status']);


    //ORDENS DE SERVICO
    Route::get('ordens',                      ['as' => 'ordens.listar',         'uses' => 'OrdemServicoController@index']);
    Route::get('ordens_adicionar',            ['as' => 'ordens_adicionar',      'uses' => 'OrdemServicoController@create']);
    Route::post('ordens_salvar',              ['as' => 'ordens_salvar',         'uses' => 'OrdemServicoController@store']);
    Route::get('/ordens/editar/{id}',         ['as' => 'ordens.editar',         'uses' => 'OrdemServicoController@edit']);
    Route::get('/ordens/visualizar/{id}',     ['as' => 'ordens.visualizar',     'uses' => 'OrdemServicoController@show']);
    Route::put('/ordens/atualizar/{id}',      ['as' => 'ordens.atualizar',      'uses' => 'OrdemServicoController@update']);
    Route::get('/ordens/excluir/{id}',        ['as' => 'ordens.excluir',        'uses' => 'OrdemServicoController@destroy']);
    Route::put('/ordens/alterar_imagem/{id}', ['as' => 'ordens.alterar_imagem', 'uses' => 'OrdemServicoController@alterar_imagem']);
    Route::put('/ordens/alterar_status/{id}', ['as' => 'ordens.alterar_status', 'uses' => 'OrdemServicoController@alterar_status']);
});

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
    Route::get('map', function () {return view('pages.maps');})->name('map');
    Route::get('icons', function () {return view('pages.icons');})->name('icons');
    Route::get('table-list', function () {return view('pages.tables');})->name('table');
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

*/