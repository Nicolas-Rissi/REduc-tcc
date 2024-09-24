<?php

namespace App\Models\Domain\Recursos;

use App\Models\User;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class RecursoDto extends Data {
    public function __construct(
        public readonly ?int $id_recurso,
        public readonly ?string $titulo,
        public readonly ?string $descricao,
        public readonly ?Carbon $datacadastro,
        // public readonly ?User $usuario, -> Fazer depois
        public readonly ?TipoRecursoDto $tipo_recurso,
        public readonly ?bool $status,
    )
    {
        
    }
}