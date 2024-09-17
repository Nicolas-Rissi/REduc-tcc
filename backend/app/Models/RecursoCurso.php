<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoCurso extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rec_curs';
    protected $table = 'recurso_curso';

    protected $fillable = [
        'id_recurso',
        'id_curso'
    ];

    public function curso()
    {
        return $this->hasOne(Cursos::class, 'id_curso', 'id_curso');
    }
}
