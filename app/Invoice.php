<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'data_pagamento',
        'descricao',
        'tipo_pagamento',
    ];

    protected $dates = [
        'data_pagamento',
    ];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
