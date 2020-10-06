<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'data',
        'os',
        'status',
    ];

    protected $dates = [
        'data',
    ];

    public function advertisement()
    {
        return $this->belongsTo('App\Advertisement');
    }

    public function professional()
    {
        return $this->belongsTo('App\Professional', 'person_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }

    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }

    public function feedback()
    {
        return $this->hasOne('App\Feedback');
    }

    public function getDataFormattedAttribute()
    {
        return $this->data->format('d/m/Y');
    }
}
