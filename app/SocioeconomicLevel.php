<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocioeconomicLevel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'description',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */

    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */

    //Relaciones
    public function tariffTableAmounts()
    {
    	return $this->hasMany('App\TariffTableAmount');
    }
}
