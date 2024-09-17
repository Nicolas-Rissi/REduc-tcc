<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_disciplina';
    protected $table = 'disciplinas';

    protected $fillable = [
        'descritivo'
    ];
}
