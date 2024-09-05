<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_usuario', [UserController::class, "formCriarUsuario"]);

Route::get('/listar_usuario', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);