<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Disciplina;
use App\Models\Disciplina_turmas;
use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Usuario;
use App\Models\Aluno_turma;
use App\Models\User;
use App\Models\Usuario_turmas;
use Inertia\Inertia;
use PhpParser\Node\Expr\Cast\String_;

use function Psy\debug;

class TurmaController extends Controller
{
    public function showAll()
    {
        $turmas = Turma::all();
        $professores = User::where('tipo', 'Professor')->get();
        return Inertia::render('DashboardTurmas', ['turmas' => $turmas, 'professores' => $professores]);
    }

    public function addDisc(string $id)
    {

        $disciplinas = Disciplina::all();

        return view('adm.turmas.createTurmasDisc', ['disciplinas' => $disciplinas , 'turmas_id' => $id]);

    }

    public function addDiscCreate(Request $request)
    {
        $credentials = $request->only('disciplina_id','turmas_id');

        $resp = new Disciplina_turmas([
            'disciplina_id' => $credentials['disciplina_id'],
            'turmas_id' => $credentials['turmas_id'],

        ]);
        $resp->save();
        return redirect('/turmas');

    }

    public function showOne(String $id)
    {

      try {

        if ($id == null ) {
            echo 'vazioo';
        }


        $disciplinas = DB::table('disciplina_turmas')
        ->join('turmas', 'disciplina_turmas.turmas_id', '=', 'turmas.id')
        ->select('disciplina_turmas.disciplina_id')
        ->where('turmas_id', '=', $id) // Substitua 1 pelo ID da turma desejada
        ->get();


        $ids = [];
        $tamanho = count($disciplinas);
        for ($i=0; $i < $tamanho; $i++) {
            array_push($ids,$disciplinas[$i]->disciplina_id);

        }

        $turmas = DB::table('disciplinas') // Substitua 'sua_tabela' pelo nome da tabela do seu Model
        ->whereIn('id', $ids)
        ->get();

        $usersIds = Usuario_turmas::where('turma_id', $id)->pluck('aluno_id')->all();
        $alunos = User::whereIn('id', $usersIds)->select('nome')->get();

        return view('adm.turmas.turmaone', ['disciplinas' => $turmas, 'alunos' => $alunos]);


       } catch (\Throwable $th) {
        echo 'erro';
       }
    }


    public function createIndex(){
        $disciplinas = Disciplina::all();
        $professores = Usuario::where('tipo','Professor')->get();
        return view('adm.turmas.createTurmas', ['disciplinas' => $disciplinas, 'professores' => $professores]);
    }

    public function create(Request $request)
    {

        try {
            $credentials = $request->only('nome', 'semestre', 'turno','disciplina_id', 'professor_id');

            if (($credentials['nome'] == null ||
                $credentials['semestre'] == null ||
                $credentials['turno'] == null ||
                $credentials['disciplina_id'] == null ||
                $credentials['professor_id'] == null)) {
                return response()->json(
                    [
                        'msg' => 'dados incompletos!',
                    ],
                    301
                );
            }
            //MODELO RECEBE OS DADOS PARA SEREM
            $turma = new Turma([
                'nome' => $credentials['nome'],
                'semestre' => $credentials['semestre'],
                'turno' => $credentials['turno'],
                'professor_id' => $credentials['professor_id'],
            ]);
            $turma->save();

            $inner = new Disciplina_turmas([
                'disciplina_id' => $credentials['disciplina_id'],
                'turmas_id' => $turma->id,

            ]);
          $inner->save();


            //RETORNA A RESPOSTA
            return redirect('/turmas');

        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'error' => $th->getMessage()], 302);
        }
    }

    public function updateIndex(string $id){
        $disciplinas = Disciplina::all();
        $professores = Usuario::where('tipo','=', 2)->get();
        $turmas = Turma::all()->where('id',$id)->first();
        return view('adm.turmas.editTurmas', ['turmas' => $turmas, 'disciplinas' => $disciplinas, 'professores' => $professores]);
    }

    public function update(Request $request, string $id)
    {
            try {
                if (Turma::where('id', $id)->exists()) {
                    $turma = [
                        'nome' => $request->nome,
                        'semestre' => $request->semestre,
                        'turno' => $request->turno,

                        'professor_id' => $request->professor_id,
                    ];

                    Turma::where('id', $id)->update($turma);
                    return redirect('/turmas');
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
        $course = Turma::all()->where('id', $id)->first();
        if (!$course) {
            return response([
                'msg' => 'turma não removida',
                'data' => $course
            ]);
        }
        //REMOVE User
        $course->delete();
        return redirect('/turmas');
    }

    public function alunoIndex(String $id)
{
    $turma = Turma::where('id',$id)->first();
    $alunos = Usuario::where('tipo','Aluno')->get();
    return view('adm.turmas.addAluno', ['turma' => $turma, 'alunos' => $alunos]);
}

public function addAluno(Request $request)
{
    $credentials = $request->only('aluno_id', 'turma_id');

    $register = new Usuario_turmas([
        'aluno_id' => $credentials['aluno_id'],
        'turma_id' => $credentials['turma_id']
    ]);

    $register->save();

    return redirect('/turmas');
}
public function search(Request $request)
    {
        $turmas = Turma::where('nome', 'LIKE', '%' . $request->text . '%')
        ->orWhere('semestre', 'LIKE', '%' . $request->text . '%')
        ->orWhere('turno', 'LIKE', '%' . $request->text . '%')
        ->paginate(10);
        $professores = Usuario::all();
        return view('adm.turmas.turmas', ['turmas' => $turmas, 'professores' => $professores]);
    }

}
