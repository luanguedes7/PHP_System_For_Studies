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

Route::get('/', 'PrincipalControler@principal')->name('site.index');
Route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return 'a';})->name('site.login'); 

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::fallback(function(){
    echo "A rota acessada não existe. <a href=/> Clique aqui </a> para ser redirecionado!";
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


/*
Route::get('/contato/{nome}/{categoria_id}', //Desse modo, os parâmetros são obrigatórios. Para deixá-los opcionais, basta colocar interrogação ao final do entre chaves
    function(string $name, int $categoria_id){
    echo "Estamos aqui";
})->where('categoria_id', '[0-9]+'); // Where possibilita que os parâmetros sejam passados de forma correta.
*/
