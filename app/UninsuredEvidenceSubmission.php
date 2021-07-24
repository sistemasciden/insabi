<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UninsuredEvidenceSubmission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'submission_date', 'user_id_who_entered',
    ];

    public function patient()
    {
    	$this->belongsTo('App\Patient');
    }
}
