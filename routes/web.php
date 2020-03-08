<?php

use Illuminate\Support\Facades\Route;

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
    return View('index');
});

Route::get('/orcamentos','controladorOrcamentos@index',function(){
});
Route::get('/orcamentos/novo','controladorOrcamentos@create',function(){
});
Route::post('/orcamentos','controladorOrcamentos@store',function(){
});
Route::get('/orcamentos/pesquisar/data','controladorOrcamentos@getOrcamentosData',function(){
});
Route::get('/orcamentos/pesquisar','controladorOrcamentos@getOrcamentosCliente',function(){
});
Route::get('/orcamentos/pesquisar/vendedor','controladorOrcamentos@getOrcamentosVendedor',function(){
});

