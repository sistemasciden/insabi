{{ Form::hidden('id', null) }}

<div class="form-group">
    {{ Form::label('file_number', 'Número de Expediente') }}
    {{ Form::text('file_number', null, ['class' => 'form-control', 'maxlength' => '7']) }}
</div>

<div class="form-group">
    {{ Form::label('curp', 'CURP') }}
    {{ Form::text('curp', null, ['style' => 'text-transform:uppercase;', 'class' => 'form-control', 'maxlength' => '18', 'readonly']) }}
</div>

<div class="form-group">
    {{ Form::label('first_surname', 'Primer Apellido') }}
    {{ Form::text('first_surname', null, ['style' => 'text-transform:uppercase;', 'class' => 'form-control', 'maxlength' => '128', 'readonly']) }}
</div>

<div class="form-group">
    {{ Form::label('second_surname', 'Segundo Apellido') }}
    {{ Form::text('second_surname', null, ['style' => 'text-transform:uppercase;', 'class' => 'form-control', 'maxlength' => '128', 'readonly']) }}
</div>

<div class="form-group">
    {{ Form::label('first_name', 'Nombre(s)') }}
    {{ Form::text('first_name', null, ['style' => 'text-transform:uppercase;', 'class' => 'form-control', 'maxlength' => '256', 'readonly']) }}
</div>

<div class="form-group">
    {{ Form::label('sex_id', 'Sexo') }}
    {{ Form::text('sex_id', null, ['style' => 'text-transform:uppercase;', 'class' => 'form-control', 'maxlength' => '256', 'readonly']) }}
    {{-- {{ Form::select('sex', $sexes, null, ['placeholder' => 'Seleccione...', '']) }} --}}
</div>

<div class="form-group">
    {{ Form::label('birth_date', 'Fecha de Nacimiento') }}
    {{ Form::date('birth_date', null, ['class' => 'form-control', 'readonly']) }}
</div>