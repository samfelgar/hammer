<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'nota',
        'comentario',
    ];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
