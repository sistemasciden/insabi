<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curp', 'first_surname', 'second_surname', 'first_name', 'sex_id', 'birth_date', 'file_number', 'user_id_who_entered'
    ];

    //Mutadores y Accesores
    public function setCurpAttribute($value)
    {
        $this->attributes['curp'] = Str::upper($value);
    }

    public function setFirstSurnameAttribute($value)
    {
        $this->attributes['first_surname'] = Str::upper($value);
    }

    public function setSecondSurnameAttribute($value)
    {
        $this->attributes['second_surname'] = Str::upper($value);
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = Str::upper($value);
    }

    public function setSexIdAttribute($value)
    {
        $this->attributes['sex_id'] = Str::upper($value);
    }

    //Relaciones
    public function sex()
    {
        return $this->belongsTo('App\Sex');
    }

    public function consultationSessions()
    {
        return $this->hasMany('App\ConsultationSession');
    }

    public function uninsuredEvidenceSubmissions()
    {
        return $this->hasMany('App\UninsuredEvidenceSubmission');
    }
}
