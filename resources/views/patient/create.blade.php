@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('patient.partials.error')
            <div class="card">
                <div class="card-header">
                    <h3>Registrar paciente</h3>
                </div>
                <div class="card-body">
                    <label for="citizenData">Copie y pegue aquí los datos devueltos en la consulta del CURP de la página oficial</label>
                    <textarea name="citizenData" id="citizenData" cols="80" rows="10"></textarea>
                    <br>
                    <button id="parse" class="btn btn-sm btn-primary">Extraer datos</button>
                    {!! Form::open(['route' => 'patients.store']) !!}

                        @include('patient.partials.general')

                        <a href="javascript:history.back()" class="btn btn-sm btn-secondary float-right">Cancelar</a>
                        <button type="submit" class="btn btn-sm btn-primary float-right">Guardar</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function(){
    $('#parse').click(function()
    {
        var citizenData = $("#citizenData").val();
        
        if(citizenData != '')
        {
            var regExCitizenData = /^CURP:[\s]*[A-Z0-9]{18}.*$[\n\r]^Nombre\(s\):[\s]*[A-ZÑ\s]+$[\n\r]^Primer apellido:[\s]*[A-ZÑ\s]+$[\n\r]^Segundo apellido:[\s]*[A-ZÑ\s]+$[\n\r]^Sexo:[\s]*(HOMBRE|MUJER){1}$[\n\r]^Fecha de nacimiento:[\s]*(\d{2}\/\d{2}\/\d{4}){1}$[\n\r]*.*$/gm;
            
            if(regExCitizenData.test(citizenData))
            {
                var regExCurp = /^CURP:[\s]*[A-Z0-9]{18}.*$/gm;
                var rowCurp = regExCurp.exec(citizenData);
                var trashRowCurp = /^CURP:[\s]*/;
                var curp = rowCurp[0].replace(trashRowCurp, '');
                $('#curp').val(curp);

                var regExFirstSurname = /^Primer apellido:[\s]*[A-ZÑ\s]+$/gm;
                var rowFirstSurname = regExFirstSurname.exec(citizenData);
                var trashRowFirstSurname = /^Primer apellido:[\s]*/;
                var firstSurname = rowFirstSurname[0].replace(trashRowFirstSurname, '');
                $('#first_surname').val(firstSurname);

                var regExSecondSurname = /^Segundo apellido:[\s]*[A-ZÑ\s]+$/gm;
                var rowSecondSurname = regExSecondSurname.exec(citizenData);
                var trashRowSecondSurname = /^Segundo apellido:[\s]*/;
                var secondSurname = rowSecondSurname[0].replace(trashRowSecondSurname, '');
                $('#second_surname').val(secondSurname);

                var regExFirstName = /^Nombre\(s\):[\s]*[A-ZÑ\s]+$/gm;
                var rowFirstName = regExFirstName.exec(citizenData);
                var trashRowFirstName = /^Nombre\(s\):[\s]*/;
                var firstName = rowFirstName[0].replace(trashRowFirstName, '');
                $('#first_name').val(firstName);

                var regExSex = /^Sexo:[\s]*(HOMBRE|MUJER){1}$/gm;
                var rowSex = regExSex.exec(citizenData);
                var trashRowSex = /^Sexo:[\s]*/;
                var sex = rowSex[0].replace(trashRowSex, '');
                $('#sex_id').val(sex == 'HOMBRE' ? 'M' : 'F');

                var regExBirthDate = /^Fecha de nacimiento:[\s]*(\d{2}\/\d{2}\/\d{4}){1}$/gm;
                var rowBirthDate = regExBirthDate.exec(citizenData);
                var trashRowBirthDate = /^Fecha de nacimiento:[\s]*/;
                var birthDate = rowBirthDate[0].replace(trashRowBirthDate, '');
                var parts = birthDate.split('/');
                $('#birth_date').val(parts[2] + '-' + parts[1] + '-' + parts[0]);

                //var regExCurp = /Nacionalidad:[\s]*[A-ZÁÉÍÓÚÑ]+/;
                //var rowCurp = regExCurp.exec(citizenData);
                //var trashRowCurp = /^CURP:[\s]*/;
                //var curp = rowCurp[0].replace(trashRowCurp, '');
                //document.getElementById('curp').value = curp;

                //var regExCurp = /Entidad de nacimiento:[\s]*[A-ZÁÉÍÓÚÑ]+/;
                //var rowCurp = regExCurp.exec(citizenData);
                //var trashRowCurp = /^CURP:[\s]*/;
                //var curp = rowCurp[0].replace(trashRowCurp, '');
                //document.getElementById('curp').value = curp;
            }
            else
            {
                alert('El texto pegado no parece ser el esperado.\nFavor de copiar y pegar de nuevo.');
            }
        }
        else
        {
            alert('No hay texto para analizar.');
        }
    });

    $('#sex').change(function(){
        $('#sex_id').val($('#sex').val());
    });

});
</script>
@endpush