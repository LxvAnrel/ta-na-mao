<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //Função responsapel por pegar a requisição e trata-la
    function store(Request $request){

        //Método que valida os campos da requisição
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ], [
            'required' => 'O campo :attribute é obrigatório',
            'email' => 'Digite um :attribute válido',
            'min'=> 'O campo :attribute deve ter pelomenos :min caracteres',
            'confirmed' => 'As senhas não coincidem'
        ],[
            'name' => 'nome',
            'email' => 'e-mail',
            'password' => 'senha',
        ]);

        //Criando um objeto do tipo Usuário
        $user = new User();

        //Definidno os atributos do usuaário, como base na requisição
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        //Solicitando para o model salvar no BD
        $user->save();

        return redirect('/');
    }
}
