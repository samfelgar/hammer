<?php

namespace App;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'data',
        'os',
        'status',
        'client_conclusion'
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
        return $this->advertisement->professional();
    }

    public function client()
    {
        return $this->hasOneThrough('App\Client', 'App\PaymentMethod', 'person_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo('App\PaymentMethod');
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

    public function getStatusAttribute($status)
    {
        return new Status($status);
    }
}
