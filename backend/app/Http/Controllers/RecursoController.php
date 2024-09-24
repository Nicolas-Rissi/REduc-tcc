<?php

namespace App\Http\Controllers;

use App\Models\Domain\Recursos\RecursoDto;
use App\Models\Recursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request): void {
        $dto = RecursoDto::from($request->all());

        $recurso = Recursos::firstOrNew(['id' => $dto->id_recurso]);
        $recurso->fill($dto->toArray());
        $recurso->id_tiporecurso = $dto->tipo_recurso->id_tiporecurso;
        // $recurso->id_usuario = Auth::getUser()
    }
}
