<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimento extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id', 
        'nome_usuario', 
        'email_usuario', 
        'matricula_usuario', 
        'tipo_requerimento', 
        'observacoes', 
        'status', 
    ];
}
