<?php

namespace App\Models\Domain\Recursos;

use Spatie\LaravelData\Data;

class UserDto extends Data {
    public function __construct(
        public readonly ?int $id_usuario,
    )
    {
        
    }
}