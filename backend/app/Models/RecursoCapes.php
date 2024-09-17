<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursoCapes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rec_capes';
    protected $table = 'recurso_capes';

    protected $fillable = [
        'id_recurso',
        'id_areaconhecimento'
    ];

    public function recursos()
    {

    }
}
