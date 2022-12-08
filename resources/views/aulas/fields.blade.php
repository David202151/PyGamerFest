<!-- Nombre Aul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_aul', __('models/aulas.fields.nombre_aul').':') !!}
    {!! Form::text('nombre_aul', null, ['class' => 'form-control']) !!}
</div>

<!-- Edificio Aul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edificio_aul', __('models/aulas.fields.edificio_aul').':') !!}
    {!! Form::text('edificio_aul', null, ['class' => 'form-control']) !!}
</div>

<!-- Direccion Aul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion_aul', __('models/aulas.fields.direccion_aul').':') !!}
    {!! Form::text('direccion_aul', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Aul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones_aul', __('models/aulas.fields.observaciones_aul').':') !!}
    {!! Form::text('observaciones_aul', null, ['class' => 'form-control']) !!}
</div>