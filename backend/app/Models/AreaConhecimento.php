<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaConhecimento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_areaconhecimento';
    protected $table = 'area_conhecimento';
}