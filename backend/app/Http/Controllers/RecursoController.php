<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $query = Recursos::query();

        $query->with([
            'recursoCapes.areaConhecimento',
            'recursoCursos.curso',
            'recursoDisciplinas.disciplina'
        ])->paginate();

        $recursos = $query->paginate();

        return response()->json($recursos);
    }
}
