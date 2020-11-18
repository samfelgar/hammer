<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * Class Status
 * @package App\Enums
 * @method static self aceitacao()
 * @method static self aguardandoPagamento()
 * @method static self pagamentoEfetuado()
 * @method static self emAndamento()
 * @method static self aguardandoConclusao()
 * @method static self concluido()
 * @method static self liberarPagamento()
 * @method static self cancelado()
 */
class Status extends Enum
{

    protected static function values(): array
    {
        return [
            'aceitacao' => 0,
            'aguardandoPagamento' => 1,
            'pagamentoEfetuado' => 2,
            'emAndamento' => 3,
            'aguardandoConclusao' => 4,
            'concluido' => 5,
            'liberarPagamento' => 6,
            'cancelado' => 400,
        ];
    }

    protected static function labels(): array
    {
        return [
            'aceitacao' => 'Aceitação',
            'aguardandoPagamento' => 'Aguardando pagamento',
            'pagamentoEfetuado' => 'Pagamento efetuado',
            'emAndamento' => 'Em andamento',
            'aguardandoConclusao' => 'Aguardando conclusão',
            'concluido' => 'Concluído',
            'liberarPagamento' => 'Liberar pagamento',
            'cancelado' => 'Cancelado',
        ];
    }
}
