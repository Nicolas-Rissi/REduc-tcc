<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_recurso';
    protected $table = 'recursos';

    protected $fillable = [
        'titulo',
        'descricao',
        'datacadastro',
        'video_path',
        'artigo_path',
        'img_recurso_path',
        'id_usuario',
        'id_ferramenta',
        'id_tiporecurso',
        'status'
    ];

    protected $casts = [
        'status' => 'bool'
    ];

    public function recursoCapes()
    {
        return $this->hasMany(RecursoCapes::class, 'id_recurso', 'id_recurso');
    }

    public function recursoCursos()
    {
        return $this->hasMany(RecursoCurso::class, 'id_recurso', 'id_recurso');
    }

    public function recursoDisciplinas()
    {
        return $this->hasMany(RecursoDisciplina::class, 'id_recurso', 'id_recurso');
    }
}
