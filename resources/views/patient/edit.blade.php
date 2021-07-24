@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('patient.partials.error')
            <div class="card">
                <div class="card-header">
                    <h3>Editar paciente</h3>
                </div>
                <div class="card-body">
                    {!! Form::model($patient, ['route' => ['patients.update', $patient->id], 'method' => 'PUT']) !!}

                        @include('patient.partials.general')
                        
                        <a href="{{ route('patients.index') }}" class="btn btn-sm btn-secondary float-right">Cancelar</a>
                        <button type="submit" class="btn btn-sm btn-primary float-right">Guardar</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection