<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Models\Usuario;
use App\Models\Disciplina;
use App\Models\Aluno;
use App\Models\Aluno_disciplina;

class AlunoController extends Controller
{
    public function disciplina(String $userId){

        $disciplinas = Aluno_disciplina::where('aluno_id', $userId)->get();
        $disciplinaIds = $disciplinas->pluck('disciplina_id');

        $disciplinasEncontradas = Disciplina::whereIn('id', $disciplinaIds)->select('nome')->get();

        foreach($disciplinasEncontradas as $disciplina){
            $disciplina->nome;
        }
        return response()->json(['data' => ['disciplinas' =>$disciplinasEncontradas]],200);
    }

    public function boletim(){

    }

}
