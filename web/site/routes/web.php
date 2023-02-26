<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

//============================ Nas Rotas abaixo criei rotas utilizando o controller --resource ===================================

Route::get('/inicio','App\Http\Controllers\ProjetoController@index')->name('inicio.index');
Route::get('/inicio/produtos','App\Http\Controllers\ProjetoController@show')->name('produtos.show');
Route::get('/inicio/cadastro','App\Http\Controllers\ProjetoController@create')->name('cadastro.create');
Route::post('/inicio/inserir','App\Http\Controllers\ProjetoController@store')->name('inserir.store');

Route::get('/inicio/listaprodutos','App\Http\Controllers\ProjetoController@index')->name('listaprodutos.index');

/* o metodo GET. >> monstra uma informaçao
   o metodo POST. >> insere uma informaçao
   o metodo PUT. >> atualiza uma informaçao
   o metodo DELETE. >> deleta uma informaçao
*/



//================================== ABAIXO UM GRUPO DE ROTAS SIMPLIFICADO ===============================

// abaixo um grupo de rotas simplificado
/*Route::group([
    'prefix'=>'admin',
    'namespace'=>'produto',
    'name'=> 'variedades'
], function(){

Route::get('administrativo', function(){ return 'area administrativa'; })->name('administrativo');
Route::get('produtos', function(){ return 'tipos de frutas'; })->name('produtos');
Route::get('sem_nome', function(){ return 'maça - uva - laranja'; })->name('sem_nome');



});

*/


//========================================= Como redirecionar uma rota ================================================================================


//Route::get('/paca',function(){ return redirect('cliente');});
