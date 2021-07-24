<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UninsuredEvidenceSubmission;

class UninsuredEvidenceSubmissionController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Regresa, en caso de existir, un string con la representación json de la última
     * fecha de presentación de Cartas de No Derechohabiencia, el usuario del sistema
     * que realizó la captura y una leyenda que describe si el período de vigencia de
     * presentación de las Cartas por parte del paciente, ya expiró o está vigente aún.
     *
     * @param int $patientId
     * @return json string
     */
    public function getLastUninsuredEvidenceSubmission($patientId)
    {
        $lastUninsuredEvidenceSubmission = \App\Patient::findOrFail($patientId)->uninsuredEvidenceSubmissions()->orderBy('submission_date', 'desc')->first();
        $data = NULL;

        if($lastUninsuredEvidenceSubmission !== NULL)
        {
            $data['submission_date'] = $lastUninsuredEvidenceSubmission->submission_date;

            $userNameWhoEntered = \App\User::find($lastUninsuredEvidenceSubmission->user_id_who_entered);

            $data['user_name_who_entered'] = $userNameWhoEntered->name;

            $lastDateOfValidityPeriod = (new \Carbon\Carbon($data['submission_date']))->addMonths(2);

            $validityPeriod = \Carbon\CarbonPeriod::create($data['submission_date'], $lastDateOfValidityPeriod->format('Y-m-d'));

            $validityPeriodStatus = $validityPeriod->contains(\Carbon\Carbon::Now()) ? 'Vigente' : 'Expirado';

            $data['validity_period_end_date'] = $validityPeriod->getEndDate()->format('Y-m-d');
            $data['validity_period_status'] = $validityPeriodStatus;
        }

        return json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['user_id_who_entered'] = auth()->user()->id;
        $data['submission_date'] = \Carbon\Carbon::now();

        //dd($data);

        $uninsuredEvidenceSubmission = \App\UninsuredEvidenceSubmission::create($data);

        return $uninsuredEvidenceSubmission;
    }
}
