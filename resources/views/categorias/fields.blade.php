<!-- Tipo Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_cat', __('models/categorias.fields.tipo_cat').':') !!}
    {!! Form::text('tipo_cat', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Jugadores Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_jugadores_cat', __('models/categorias.fields.numero_jugadores_cat').':') !!}
    {!! Form::number('numero_jugadores_cat', null, ['class' => 'form-control']) !!}
</div>

<!-- Competencia Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('competencia_cat', __('models/categorias.fields.competencia_cat').':') !!}
    {!! Form::text('competencia_cat', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_cat', __('models/categorias.fields.descripcion_cat').':') !!}
    {!! Form::text('descripcion_cat', null, ['class' => 'form-control']) !!}
</div>