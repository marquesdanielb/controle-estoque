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
Route::get('/produtos', 'ProdutoController@lista')->name('produtos');
Route::get('/produtos/json', 'ProdutoController@listaJson')->name('produtos-json');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+')->name('detalhes-produto');
Route::get('/produtos/novo', 'ProdutoController@novo')->name('novo-produto');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona')->name('adiciona-produto');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+')->name('remove-produto');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita')->name('edita-produto');
Route::post('/produtos/atualiza/{id}', 'ProdutoController@atualiza')->name('atualiza-produto');
