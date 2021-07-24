<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationSession extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'date', 'tariff_table_amount_id', 'user_id_who_entered',
    ];

    //Relaciones
    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }

    public function tariffTableAmount()
    {
    	return $this->belongsTo('App\TariffTableAmount');
    }
}
