<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursosSalvos extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_fav';
    protected $table = 'recursos_salvos';

    protected $fillable = [
        'id_recurso',
        'id_usuario'
    ];
}
