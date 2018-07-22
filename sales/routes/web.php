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
Route::get('/', 'WelcomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'UserController@showAdminInicialPage')->name('admin');
Route::get('/produtos', 'ProductController@index')->name('gerir.produtos');
Route::get('/produtos/{id}', 'ProductController@getDetails')->name('detalhes.produto');

Route::get('/criar/produto', 'ProductController@showCreateProd')->name('criar.produto');
Route::post('/criar/produto', 'ProductController@storeProd')->name('guardar.produto');

Route::get('/criar/produto', 'ProductController@showCreateProd')->name('criar.produto');

Route::delete('/produto/{produto}', 'ProductController@delete')->name('apagar.produto');

Route::get('/getProdutosCategoria/{categoria}', 'ProductController@getProdutosCategoria')->name('getProdutosCategoria');



Route::get('/getProdutosOrderByPrice/{id}/{categoria}', 'ProductController@getProdutosOrderByPrice')->name('getProdutosOrderByPrice');

Route::get('/categorias', 'CategoriaController@index')->name('gerir.categoria');