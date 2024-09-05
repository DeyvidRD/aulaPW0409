<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function criar(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->cpf = $request->cpf;
        $user->email = $request->email;

        $user->save();
        return redirect('/listar_usuario');
    }

    public function listar() {
        $users = User::all();

        return view("users", ["users"=>$users]);
    }

    public function formCriarUsuario() {
        return view("cadastro_usuario");
    }

}

