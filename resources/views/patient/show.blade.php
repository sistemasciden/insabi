@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('patient.partials.error')
            @include('patient.partials.success')
            <div class="card">
                <div class="card-header">
                    <h3>Información del paciente</h3>
                </div>
                <div class="card-body justify-content-center">
                    <table>
                        <thead>
                            <tr>
                                <th><h5>Datos generales</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><strong>No. de Expediente</strong></th>
                                <td><input type="text" value="{{ $patient->file_number }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>CURP</strong></th>
                                <td><input type="text" value="{{ $patient->curp }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>Primer Apellido</strong></th>
                                <td><input type="text" value="{{ $patient->first_surname }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>Segundo Apellido</strong></th>
                                <td><input type="text" value="{{ $patient->second_surname }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>Nombre(s)</strong></th>
                                <td><input type="text" value="{{ $patient->first_name }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>Sexo</strong></th>
                                <td><input type="text" value="{{ $patient->sex_name }}" size="40" disabled></td>
                            </tr>
                            <tr>
                                <th><strong>Fecha de Nacimiento</strong></th>
                                <td><input type="text" value="{{ \Carbon\Carbon::parse($patient->birth_date)->format('d/m/Y') }}" size="40" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <p><h5>Presentación de Cartas de No Derechohabiencia</h5></p>
                    <table class="table table-sm" width="450px">
                        <thead class="thead-light">
                            <tr>
                                <th>Fecha</th>
                                <th>Usuario que capturó</th>
                                <th>Vigencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p id="submissionDate">--</p></td>
                                <td><p id="userNameWhontered">--</p></td>
                                <td><p id="validityPeriodStatus">--</p></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><p id="messageNoSubmissionDate"></p></td>
                            </tr>
                        </tfoot>
                    </table>
                    {{ Form::open(['route' => 'uninsuredevidencesubmissions.store', 'id' => 'formUninsuredEvidenceSubmission', 'name' => 'formUninsuredEvidenceSubmission']) }}
                        <div class="form-group">
                            {{ Form::checkbox('uninsuredEvidenceSubmission', 1, false, ['disabled', 'id' => 'uninsuredEvidenceSubmission']) }}
                            {{ Form::label('uninsuredEvidenceSubmission', 'Presenta Cartas de No Derechohabiencia el día de hoy') }}
                        </div>
                        {{ Form::hidden('submission_date', null) }}
                        <button type="submit" id="submitUninsuredEvidenceSubmission" disabled>Guardar</button>
                    {{ Form::close() }}
                    <hr>
                    <p><h5>Sesiones del paciente</h5></p>
                    <table class="table table-sm" width="450px">
                        <thead class="thead-light">
                            <tr>
                                <th colspan="3">Últimas sesiones registradas</th>
                            </tr>
                            <tr>
                                <th>Fecha</th>
                                <th>Usuario que capturó</th>
                                <th>Clave</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyConsultationSessions">
                            <tr>
                                <td><p>--</p></td>
                                <td><p>--</p></td>
                                <td><p>--</p></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"><p id="messageNoConsultationSessions"></p></td>
                            </tr>
                        </tfoot>
                    </table>
                    {{ Form::open(['route' => 'consultationsessions.store', 'id' => 'formConsultationSession', 'name' => 'formConsultationSession']) }}
                        {{ Form::hidden('patient_id', $patient->id, ['id' => 'patient_id']) }}
                        <div class="form-group">
                            {{ Form::label('tariff_table_description_id', 'Clave de la sesión') }}
                            {{ Form::select('tariff_table_description_id', $pluckedDescriptionCollection, null, ['placeholder' => 'Seleccione...']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('sessions_quantity', 'Número de sesiones') }}
                            {{ Form::select('sessions_quantity', [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8,], null) }}
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('patients.index', $patient->id) }}" class="btn btn-sm btn-secondary float-right">Regresar</a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-sm btn-warning float-right">Editar Paciente</a>
                    <a href="javascript:$('#formConsultationSession').submit()" class="btn btn-sm btn-primary float-right">Guardar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('metas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('scripts')
<script>
    $(document).ready(function(){


        //Habilita/Deshabilita el botón para guardar el registro de la presentación de Cartas de No Derechohabiencia
        //con el evento click del checkbox de esa sección
        $("#uninsuredEvidenceSubmission").click(function(){
            if($("#uninsuredEvidenceSubmission").is(":checked"))
            {
                $('#submitUninsuredEvidenceSubmission').attr('disabled', false);
            }
            else
            {
                $('#submitUninsuredEvidenceSubmission').attr('disabled', true);
            }
        });

        //Consulta la última fecha de presentación de Cartas de No Derechohabiencia y llena las celdas de la tabla
        //de esa sección
        var ajaxGetUninsuredEvidenceSubmission = function(patientId){
            var url = "{{ url('getlastuninsuredevidencesubmission') }}" + "/" + patientId;

            $.get(url, function(data){
                if(data != 'null')
                {
                    var objData = JSON.parse(data);
                    if(objData.submission_date != null){
                        $("#submissionDate").html(objData.submission_date);
                        $("#userNameWhontered").html(objData.user_name_who_entered);
                        $("#validityPeriodStatus").html(objData.validity_period_status);
                        if(objData.validity_period_status == 'Expirado')
                        {
                            $('#uninsuredEvidenceSubmission').attr('disabled', false);
                        }
                        else
                        {
                            $('#uninsuredEvidenceSubmission').attr('checked', false).attr('disabled', true);
                            $('#submitUninsuredEvidenceSubmission').attr('disabled', true);
                        }
                    }
                }
                else
                {
                    $("#messageNoSubmissionDate").html("No hay registros de Presentación de Cartas de No Derechohabiencia.");
                    $('#uninsuredEvidenceSubmission').attr('disabled', false);
                }
            })
            .fail(function(data){
                alert('Ocurrió un error al consultar los datos de Presentación de Cartas de No Derechohabiencia. Favor de reportarlo al administrador del sistema.');
            });
        }

        //Llamado a la función que consulta la última fecha de presentación de Cartas de No Derechohabiencia al momento de cargar esta página
        ajaxGetUninsuredEvidenceSubmission(<?=$patient->id?>);

        //Registrar en BD con fecha actual la presentación de Cartas de No Derechohabiencia
        $("#submitUninsuredEvidenceSubmission").click(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();
            var formData = {
                uninsuredEvidenceSubmission: jQuery('#uninsuredEvidenceSubmission').val(),
                patient_id: "<?=$patient->id?>",
            };

            $.ajax({
                type: "POST",
                url: "/uninsuredevidencesubmissions",
                data: formData,
                dataType: 'json',
                success: function(data) {
                    ajaxGetUninsuredEvidenceSubmission(<?=$patient->id?>);
                },
                error: function (data) {
                    alert("Ocurrió un error al guardar la fecha de entrega de Cartas de No Derechohabiencia. Favor de reportarlo al administrador del sistema.");
                }
            });
        });

        //Consulta las últimas sesiones de consulta registradas para el paciente y llena las celdas de la tabla
        //de esa sección
        var ajaxGetLastConsultationSessions = function(patientId, quantity){
            var url = "{{ url('getlastconsultationsessions') }}" + "/" + patientId + "/" + quantity;

            $.get(url, function(collection){
                if(collection)
                {
                    var html = '';

                    for(let i of collection)
                    {
                        html += '<tr>';
                        html += '<td><p>' + i.consultation_session_date + '</p></td>';
                        html += '<td><p>' + i.user_name_who_entered + '</p></td>';
                        html += '<td><p>' + i.tariff_table_description_key + '</p></td>';
                        html += '</tr>';
                    }

                    $("#tbodyConsultationSessions").html(html);
                }
                else
                {
                    $("#messageNoConsultationSessions").html("No hay registros de sesiones de consulta.");
                }
            })
            .fail(function(data){
                alert('Ocurrió un error al consultar los datos de Presentación de Cartas de No Derechohabiencia. Favor de reportarlo al administrador del sistema.');
            });
        }

        ajaxGetLastConsultationSessions(<?=$patient->id?>, 20);

    });
</script>
@endpush