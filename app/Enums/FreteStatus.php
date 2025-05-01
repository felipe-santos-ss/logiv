<?php

namespace App\Enums;

enum FreteStatus: string
{
    case Em_TRANSITO = 'Em Trânsito';
    case SAIU_PARA_ENTREGA = 'Saiu para entrega';
    case ENTREGUE = 'Entregue';

    public function corEtiqueta(): string 
    {
        return match($this) {
            self::Em_TRANSITO => 'bg-yellow-100 text-yellow-800',
            self::SAIU_PARA_ENTREGA => 'bg-blue-100 text-blue-800',
            self::ENTREGUE => 'bg-green-100 text-green-800',
        };
    }
}
