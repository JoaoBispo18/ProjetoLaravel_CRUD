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

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-produto', function(Request $request){
    //dd($request->all());

    Produto::create([
        'Nome' => $request->Nome,
        'Valor' => $request->Valor,
        'Estoque' => $request->Estoque,
    ]);

    echo "Produto criado com Sucesso.";
});

Route::get('/listar-produto/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produtos = Produto::find($id);
    return view('listar', ['Produto' => $produtos]);
});

Route::get('/editar-produto/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produtos = Produto::find($id);
    return view('editar', ['Produto' => $produtos]);
});

Route::post('/editar-produto/{id}' ,function(Request $request, $id){
    //dd($request->all());
    $produtos = Produto::find($id);

    $produtos->update([
        'Nome' => $request->Nome,
        'Valor' => $request->Valor,
        'Estoque' => $request->Estoque
    ]);

    echo "Produto editado com sucesso.";
});

Route::get('/excluir-produto/{id}', function($id){
    //dd($request->all());
    $Produto = Produto::find($id);
    $Produto->delete();

    echo "Produto excluido com Sucesso.";
});