<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'abbreviation',
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
    
    protected $keyType = 'string';

    //Relaciones
    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
