<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login(Request $request){

    // Define as regras de validação
    $rules = [
        'email' => 'required|email|unique:users|max:255',
        'senha' => 'required|min:6',
    ];


    // Define mensagens de erro personalizadas (opcional)
    $messages = [
        'email.required' => 'O campo email é obrigatório.',
        'senha.required' => 'O campo senha é obrigatório.',
    ];

    // Executa a validação
    $request->validate($rules, $messages);

    $email = $request->input('email');
    $senha = $request->input('senha');

    $login = Usuario::all()->where('email', $email, 'senha', $senha)->first();

    if (empty($login)){
        return redirect('/')->withInput() -> withErrors(['msg'=>"Usuário ou Senha inválidos"]);
    }

    }

    public function logout(){

    }
}

