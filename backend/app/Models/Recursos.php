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

    public function capes()
    {

    }
}
