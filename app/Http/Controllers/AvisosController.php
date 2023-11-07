<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aviso;

class AvisosController extends Controller
{
    public function showAll(){
        $notice = Aviso::all();
        return $notice;
    }

    public function create(Request $request){

        try {
            $credentials = $request->only('titulo','aviso', 'usuario_id', 'data');

            //VALIDA DADOS
            if(($credentials['nome'] == null ||
                $credentials['carga_horaria_total']
            ))
            {
                return response([
                    'msg' => 'dados incompletos!',
                ],
                301);
            }
            //MODELO RECEBE OS DADOS PARA SEREM
            $notice = new Aviso([
                'nome' => $credentials['nome'],
                'email' => $credentials['carga_horaria_total'],
            ]);
            $notice->save();

            //RETORNA A RESPOSTA
            return response([
                'msg' => 'Aviso criado com sucesso!',
                'data' => $notice,
            ],200);

        } catch (\Throwable $th) {
            return response('Erro ao registrar Aviso',302);
        }

    }

    public function update(Request $request, string $id){
        try {

            $credentials = $request->only('titulo','aviso', 'usuario_id', 'data');//RECEBE OS CAMPOS DA REQUISICAO

            //ATUALIZA User
            $notice = Aviso::all()->where('id', $id)->first();
            $notice
            ->update(
                [
                    'nome' => $credentials['nome']
                ]);
            //RETORNA A RESPOTA
            return response(
                [
                'msg' => 'Aviso atualizado com sucesso!',
                'data' => $notice,
                ],
                200);

        } catch (\Throwable $th) {
            return 'Aviso não atualizado';
        }

    }

    public function remove(string $id)
    {
        //VERIFICA SE ID EXISTE
        $notice = Aviso::all()->where('id',$id)->first();
        if(!$notice){
            return response([
                'msg' => 'Aviso não removido',
                'data' => $notice
            ]);
        }
        //REMOVE User
        $notice->delete();
        return response([
            'msg' => 'Aviso removido',
            'data' => $notice
        ]);

    }

}
