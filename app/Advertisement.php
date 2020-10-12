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

    protected $dates = [
        'data'
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function professional()
    {
        return $this->belongsTo('App\Person', 'person_id');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @return string
     */
    public function getDataFormattedAttribute()
    {
        return $this->data->format('d/m/Y');
    }

    public function getPrecoFormattedAttribute()
    {
        return number_format($this->preco, 2, ',', '.');
    }
}
