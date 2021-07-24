<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TariffTable extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'initial_effective_date',
    ];

    //Relaciones
    public function tariffTableAmounts()
    {
    	return $this->hasMany('App\TariffTableAmount');
    }
}
