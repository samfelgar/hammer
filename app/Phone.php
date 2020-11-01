<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'ddd',
        'numero',
    ];

    public function person()
    {
        return $this->belongsTo('App\Person', 'person_id');
    }

    public function getFullPhoneAttribute()
    {
        return "({$this->ddd}) {$this->numero}";
    }

    public function __toString()
    {
        return $this->getFullPhoneAttribute();
    }
}
