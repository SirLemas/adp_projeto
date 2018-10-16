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

Route::get('/', 'LoginController@login')->name('login');
Route::post('/cadastre-se', 'LoginController@cadastrar')->name('cadastrar');
Route::get('/perfil', 'LoginController@perfil')->name('perfil');
Route::post('/publicar','PublicacaoController@postarPublicacao')->name('publicar');
Route::get('/pesquisar', 'PublicacaoController@pesquisarPublicacao')->name('pesquisar');
Route::post('/alterar', 'PublicacaoController@alterarPublicacao')->name('alterar');
Route::post('/deletar', 'PublicacaoController@deletarPublicacao')->name('deletar');
