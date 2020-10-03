<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'data',
        'preco',
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function professional()
    {
        return $this->belongsTo('App\Professional');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
