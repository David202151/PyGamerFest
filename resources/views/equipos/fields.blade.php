<!-- Nombre Equi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_equi', __('models/equipos.fields.nombre_equi').':') !!}
    {!! Form::text('nombre_equi', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Equi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones_equi', __('models/equipos.fields.observaciones_equi').':') !!}
    {!! Form::text('observaciones_equi', null, ['class' => 'form-control']) !!}
</div>