<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ConsultationSession;
use App\Patient;
use App\TariffTable;
use App\TariffTableAmount;
use App\Http\Requests\Patient\ConsultationSessionRequest;

class ConsultationSessionController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Regresa, en caso de existir, un arreglo con las últimas sesiones registradas del
     * paciente
     *
     * @param int $patientId
     * @param int $quantity
     * @return \Illuminate\Http\Response 
     */
    public function getLastConsultationSessions($patientId, $quantity)
    {
        $lastConsultationSessions = \App\Patient::find($patientId)->consultationSessions()->orderBy('date', 'desc')->take($quantity)->get();

        if($lastConsultationSessions != null)
        {
            $i = 0;
            foreach($lastConsultationSessions as $consultationSession)
            {
                $data[$i]['consultation_session_date'] = $consultationSession['date'];
                $data[$i]['user_name_who_entered'] = \App\User::findOrFail($consultationSession['user_id_who_entered'])['name'];
                $tariffTableDescriptionId = \App\TariffTableAmount::findOrFail($consultationSession['tariff_table_amount_id'])['tariff_table_description_id'];
                $data[$i++]['tariff_table_description_key'] = \App\TariffTableDescription::findOrFail($tariffTableDescriptionId)['key'];
            }
        }

        return isset($data) ? $data : null;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\Patient\ConsultationSessionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultationSessionRequest $request)
    {
        $data = request()->except('_token');

        //dd($data);

        //Obtenemos el Id de tabulador vigente y el Id de descripción de la sesión a la que viene el paciente
        $currentTariffTableId = TariffTable::where('initial_effective_date', '<=', \Carbon\Carbon::now())->orderBy('initial_effective_date', 'DESC')->select('id')->pluck('id')->first();

        //Obtenemos el Id de descripción
        $tariffTableDescriptionId = $data['tariff_table_description_id'];
        
        //Nivel del tabulador del cuál se registrarán los montos por defecto
        $defaultSocioeconomicLevelId = "J";

        //En base a los tres valores anteriores obtenemos el Id del monto a registrar
        $tariffTableAmountId = TariffTableAmount::where('tariff_table_id', $currentTariffTableId)
            ->where('tariff_table_description_id', $tariffTableDescriptionId)
            ->where('socioeconomic_level_id', $defaultSocioeconomicLevelId)->pluck('id')
            ->first();

        //Se guarda un registro por cada sesión, es decir, si el usuario especifica que el paciente pasará a dos sesiones del mismo servicio, serán dos registros
        for($i = 1; $i <= $data['sessions_quantity']; $i++)
        {
            $consultationSessionData = [
                'date' => \Carbon\Carbon::now(),
                'patient_id' => $data['patient_id'],
                'tariff_table_amount_id' => $tariffTableAmountId,
                'user_id_who_entered' => auth()->user()->id,
            ];

            $session = ConsultationSession::create($consultationSessionData);
        }

        return redirect()->route('patients.index')->with('success', 'Datos guardados con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
