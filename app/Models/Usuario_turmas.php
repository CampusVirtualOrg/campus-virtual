<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_turmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id',
        'turma_id'
    ];

    protected $table = 'usuario_turmas';
    }
