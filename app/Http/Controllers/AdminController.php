<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Foundation\Auth\User as AuthUser;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function home()
    {
        return Inertia::render('DashboardAdmin');
    }

    public function users()
    {
        $users = User::where('tipo', 'Aluno');
        return Inertia::render('Adm/Usuarios/Usuarios', ['users' => $users]);
    }

    public function showOne(string $id)
    {
        $User = User::all()->where('id', $id)->first();
        return Inertia::render('', ['']);
    }

    public function register(Request $request)
    {
        try {
            $credentials = $request->only('nome', 'email', 'senha', 'tipo', 'matricula', 'telefone', 'cpf', 'sexo', 'endereco', 'imagem', 'data_nasc'); //DADOS DO User A SER CRIADO
            //VALIDA DADOS
            if (($credentials['nome'] == null ||
                $credentials['email'] == null ||
                $credentials['senha'] == null ||
                $credentials['tipo'] == null ||
                $credentials['matricula'] == null ||
                $credentials['telefone'] == null ||
                $credentials['cpf'] == null ||
                $credentials['sexo'] == null ||
                $credentials['data_nasc'] == null
            )) {
                echo "Dados Incompletos";
            }

            //VERIFICA SE CONTA DE EMAIL JA ESTA CADASTRADO
            $res =  User::all()->where('email', $credentials['email'])->first();
            if ($res) {
                echo 'Email ja cadastrado!';
            }

            //MODELO RECEBE OS DADOS PARA SEREM SALVOS
            $User = new User([
                'nome' => $credentials['nome'],
                'email' => $credentials['email'],
                'senha' => $credentials['senha'],
                'tipo' => $credentials['tipo'],
                'matricula' => $credentials['matricula'],
                'telefone' => $credentials['telefone'],
                'cpf' => $credentials['cpf'],
                'sexo' => $credentials['sexo'],
                'endereco' => $credentials['endereco'],
                'imagem' => $credentials['imagem'],
                'data_nasc' => $credentials['data_nasc'],
            ]);

            $User->save();

        } catch (\Throwable $th) {
            echo "erro no cadastro de User" . $th->getMessage();
        }
    }

    public function indexUpdate(String $id){

        $User = Usuario::all()->where('id', $id)->first();
        return view('adm.users.editar', ['user' => $User]);

    }

    //ATUALIZA User
    public function edit(Request $request)
    {
        try {
            $credentials = $request->only('nome', 'email', 'senha', 'tipo', 'matricula', 'telefone', 'cpf', 'sexo', 'endereco', 'data_nasc');
            if (Usuario::where('email', $request->email)->exists()) {
                $aluno = [
                    'nome' => $request->nome,
                    'email' => $request->email,
                    'senha' => $request->senha,
                    'tipo' => $request->tipo,
                    'matricula' => $request->matricula,
                    'cpf' => $request->cpf,
                    'sexo' => $request->sexo,
                    'endereco' => $request->endereco,
                    'data_nasc' => $request->data_nasc
                ];

                Usuario::where('email', $credentials['email'])->update($aluno);
                return redirect('/users');
            } else {
                return response()->json([
                    "success" => false
                ], 404);
            }
        } catch (\Throwable $e) {
            return response()->json([
                "success" => false,
                "error" => $e->getMessage()
            ], 400);
        }
    }

    //REMOVE Aluno
    public function remove(string $id)
    {
        //VERIFICA SE ID EXISTE
        $User = Usuario::all()->where('id', $id)->first();
        if (!$User) {
            return response([
                'msg' => 'User nao removido',
            ]);
        }
        //REMOVE User
        $User->delete();
        return redirect('/users');
    }

    public function search(Request $request)
    {
        $users = Usuario::where('nome', 'LIKE', '%' . $request->text . '%')
        ->orWhere('email', 'LIKE', '%' . $request->text . '%')
        ->orWhere('matricula', 'LIKE', '%' . $request->text . '%')
        ->orWhere('telefone', 'LIKE', '%' . $request->text . '%')
        ->paginate(10);
        return view('adm.users.alunos', ['users' => $users]);
    }

    public function searchNome(){
        $users = Usuario::orderBy('nome', 'DESC');
        return view('adm.users.alunos', ['users' => $users]);
    }
}
