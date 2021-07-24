<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patient;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Patient\PatientRequest;

class PatientController extends Controller
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
        return view('patient.index');
    }

    /**** Yajra Datatables ****/
    public function dataTable()
    {
        return Datatables::of(Patient::query())
            ->addColumn('action_buttons', 'patient.partials.actions')
            ->rawColumns(['action_buttons'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexes = \App\Sex::pluck('name', 'id');

        return view('patient.create', compact('sexes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Patients\PatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $data = request()->except('_token');

        $data['user_id_who_entered'] = auth()->user()->id;

        $patient = Patient::create($data);
        $patient->save();

        return redirect()->route('patients.show', $patient->id)->with('success', 'Paciente registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        $sex = \App\Sex::findOrFail($patient->sex_id);
        $patient['sex_name'] = $sex->name;

        //Fecha de última presentación de Cartas de No Derechohabiencia
        $lastUninsuredEvidenceSubmissions = \App\UninsuredEvidenceSubmission::where('patient_id', $patient->id)->orderBy('submission_date', 'desc')->first();

        $tariffTableDescriptions = \App\TariffTableDescription::whereNotIn('key', ['062-01', '062-02', '062-03', '370-10', '370-12', '370-56'])->get();

        foreach($tariffTableDescriptions as $tariffTableDescription)
        {
            $descriptionCollection[] = ['description' => $tariffTableDescription['key'] . ' - ' . $tariffTableDescription['description'], 'id' => $tariffTableDescription['id']];
        }

        $pluckedDescriptionCollection = collect($descriptionCollection)->pluck('description', 'id');

        $lastThreeConsultationSessions = \App\Patient::findOrFail($patient->id)->consultationSessions()->orderBy('created_at', 'desc')->take(3)->get();


        return view('patient.show', compact('patient', 'lastUninsuredEvidenceSubmissions', 'pluckedDescriptionCollection', 'lastThreeConsultationSessions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);

        $sexes = \App\Sex::pluck('name', 'id');

        $submissionDate = \App\UninsuredEvidenceSubmission::where('patient_id', $id)->max('submission_date');

        return view('patient.edit', compact('patient', 'sexes', 'submissionDate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Patients\PatientRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->update($request->all());

        return redirect()->route('patients.index', $patient->id)->with('success', 'Paciente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);

        $patient->delete();

        return back()->with('success', 'Paciente eliminado con éxito');
    }

    /**
     * Guarda, con fecha actual, la presentación de Cartas de No Derechohabiencia por parte del paciente.
     *
     * @param  App\Http\Requests\Patients\PatientRequest  $request
     * @param int $patientId
     * @param int $userId
     */
    /*public function storeUninsuredEvidenceSubmission(Request $request)
    {
        $data = $request->all();

        //dd($data);
        $data['submission_date'] = \Carbon\Carbon::now();
        $data['patient_id'] = 

        $uninsuredEvidenceSubmission = \App\UninsuredEvidenceSubmission::create($data);
        $uninsuredEvidenceSubmission->save();
    }*/
}
