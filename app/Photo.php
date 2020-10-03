<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path',
        'mime',
        'descricao',
    ];

    public function advertisement()
    {
        return $this->belongsTo('App\Advertisement');
    }
}
