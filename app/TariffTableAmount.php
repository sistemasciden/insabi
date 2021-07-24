<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TariffTableAmount extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tariff_table_id', 'tariff_table_description_id', 'socioeconomic_level_id', 'amount',
    ];

    //Relaciones
    public function tariffTable()
    {
    	return $this->belongsTo('App\TariffTable');
    }

    public function tariffTableDescription()
    {
    	return $this->belongsTo('App\TariffTableDescription');
    }

    public function socioeconomicLevel()
    {
    	return $this->belongsTo('App\SocioeconomicLevel');
    }
}
