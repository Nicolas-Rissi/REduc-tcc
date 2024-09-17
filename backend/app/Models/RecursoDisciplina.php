<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoDisciplina extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rec_desci';
    protected $table = 'recurso_disciplina';

    protected $fillable = [
        'id_recurso',
        'id_disciplina'
    ];

    public function disciplina()
    {
        return $this->hasOne(Disciplinas::class, 'id_disciplina', 'id_disciplina');
    }
}
