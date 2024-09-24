<?php

namespace App\Models\Domain\Recursos;

use Spatie\LaravelData\Data;

class TipoRecursoDto extends Data {
    public function __construct(
        public readonly ?int $id_tiporecurso,
        public readonly ?string $descritivo,
    )
    {
        
    }
}