<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Models\User;
use App\Models\Disciplina;
use App\Models\Aluno_disciplina;
use Inertia\Inertia;

class AlunoController extends Controller
{
    public function index()
    {
        return Inertia::render('DashboardAluno');
    }

    public function disciplinas(String $userId)
    {
        $disciplinas = Aluno_disciplina::where('aluno_id', $userId)->get();
        $disciplinaIds = $disciplinas->pluck('disciplina_id');
        $disciplinasEncontradas = Disciplina::whereIn('id', $disciplinaIds)->select('nome')->get();
    }

    public function boletim()
    {

    }

}
