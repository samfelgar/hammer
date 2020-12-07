<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement');
    }
}
