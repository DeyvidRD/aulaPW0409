<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller

{
    public function criarP(Request $request) {
        $produto = new produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect('/listar_produto');
    }

    public function listarP() {
        $produtos = produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }
}
