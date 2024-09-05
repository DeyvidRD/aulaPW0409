<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);

Route::get('/listar_produto', [ProdutoController::class, 'listarP']);

Route::post('/criar_produto', [ProdutoController::class, 'criarP']);