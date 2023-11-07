<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina_turmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'disciplina_id',
        'turmas_id'
    ];
}
