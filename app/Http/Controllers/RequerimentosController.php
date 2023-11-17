<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requerimento;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RequerimentosController extends Controller
{
    public function showAll()
    {
        $requerimentos = Requerimento::all();
        $user = Auth::user();
        return Inertia::render('Adm/Requerimentos/Requerimentos', ['user' => $user, 'requerimentos' => $requerimentos]);
    }

    public function createIndex()
    {
        $user = Auth::user();
        return Inertia::render('CreatePages/createRequerimento', ['user' => $user]);
    }

    public function create(Request $request)
    {
        try {
            $credentials = $request->only('usuario_id', 'nome_usuario', 'email_usuario', 'matricula_usuario', 'tipo_requerimento', 'observacoes', 'status');

            // VALIDA DADOS
            if (($credentials['usuario_id'] == null ||
                $credentials['tipo_requerimento'] == null ||
                $credentials['observacoes'] == null ||
                $credentials['status'] == null
            )) {
                return response(
                    [
                        'msg' => 'dados incompletos!',
                    ],
                    301
                );
            }

            // MODELO RECEBE OS DADOS PARA SEREM SALVOS
            $requerimento = new Requerimento([
                'usuario_id' => $credentials['usuario_id'],
                'nome_usuario' => $credentials['nome_usuario'],
                'email_usuario' => $credentials['email_usuario'],
                'matricula_usuario' => $credentials['matricula_usuario'],
                'tipo_requerimento' => $credentials['tipo_requerimento'],
                'observacoes' => $credentials['observacoes'],
                'status' => $credentials['status'],
            ]);

            $requerimento->save();

            // RETORNA A RESPOSTA
            return redirect('/requerimento');
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'error' => $th->getMessage()], 400);
        }
    }

    public function updateIndex(String $id)
    {
        $requerimento = Requerimento::all()->where('id', $id)->first();
        return Inertia::render('Adm/Requerimentos/EditRequerimentos', ['requerimento' => $requerimento]);
    }

    public function update(Request $request, string $id)
    {
        try {
            $credentials = $request->only('usuario_id', 'nome_usuario', 'email_usuario', 'matricula_usuario', 'tipo_requerimento', 'observacoes', 'status');

            if (Requerimento::where('id', $id)->exists()) {
                $requerimentos = [
                    'usuario_id' => $request->usuario_id,
                    'nome_usuario' => $request->nome_usuario,
                    'email_usuario' => $request->email_usuario,
                    'matricula_usuario' => $request->matricula_usuario,
                    'tipo_requerimento' => $request->tipo_requerimento,
                    'observacoes' => $request->observacoes,
                    'status' => $request->status,
                ];

                Requerimento::where('id', $id)->update($requerimentos);
                return redirect('/requerimentos');
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

    public function remove(string $id)
    {
        //VERIFICA SE ID EXISTE
        $subject = Requerimento::all()->where('id', $id)->first();
        $subject->delete();
        return redirect('/requerimentos');
    }

    public function search(Request $request)
    {
        $subject = Requerimento::where('nome_usuario', 'LIKE', '%' . $request->text . '%')
            ->orWhere('email_usuario', 'LIKE', '%' . $request->text . '%')
            ->orWhere('matricula_usuario', 'LIKE', '%' . $request->text . '%')
            ->paginate(10);
        return view('adm.requerimentos.requerimentos', ['requerimentos' => $subject]);
    }
}
