<?php

namespace App;

use App\Http\Controllers\ProfessionalController;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Professional extends Person
{
    public function __construct(array $attributes = [])
    {
        $this->tipo = parent::PROFESSIONAL;
        parent::__construct($attributes);
    }

    protected static function booted()
    {
        static::addGlobalScope('professional', function (Builder $builder) {
            $builder->where('tipo', self::PROFESSIONAL);
        });
    }

    public function advertisements()
    {
        return $this->hasMany('App\Advertisement', 'person_id');
    }

    public function services()
    {
        return $this->hasMany('App\Service', 'person_id');
    }

    /**
     * @param string[] $columns
     * @return Professional[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function all($columns = ['*'])
    {
        return parent::all()->where('tipo', parent::PROFESSIONAL);
    }


}
