<div class="form-group">
    {{ Form::label('tariff_table_description_id', 'Clave de la sesión') }}
    {{ Form::select('tariff_table_description_id', $pluckedDescriptionCollection, null, ['placeholder' => 'Seleccione...']) }}
</div>

<div class="form-group">
    {{ Form::label('sessions_quantity', 'Número de sesiones') }}
    {{ Form::select('sessions_quantity', [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8,], null) }}
</div>