<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TariffTableDescription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key', 'description',
    ];

    //Relaciones
    public function tariffTableAmounts()
    {
    	return $this->hasMany('App\TariffTableAmount');
    }
}
