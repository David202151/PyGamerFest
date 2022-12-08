<!-- Id Aul Field -->
<div class="col-sm-12">
    {!! Form::label('id_aul', __('models/aulas.fields.id_aul').':') !!}
    <p>{{ $aula->id_aul }}</p>
</div>

<!-- Nombre Aul Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_aul', __('models/aulas.fields.nombre_aul').':') !!}
    <p>{{ $aula->nombre_aul }}</p>
</div>

<!-- Edificio Aul Field -->
<div class="col-sm-12">
    {!! Form::label('edificio_aul', __('models/aulas.fields.edificio_aul').':') !!}
    <p>{{ $aula->edificio_aul }}</p>
</div>

<!-- Direccion Aul Field -->
<div class="col-sm-12">
    {!! Form::label('direccion_aul', __('models/aulas.fields.direccion_aul').':') !!}
    <p>{{ $aula->direccion_aul }}</p>
</div>

<!-- Observaciones Aul Field -->
<div class="col-sm-12">
    {!! Form::label('observaciones_aul', __('models/aulas.fields.observaciones_aul').':') !!}
    <p>{{ $aula->observaciones_aul }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/aulas.fields.created_at').':') !!}
    <p>{{ $aula->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/aulas.fields.updated_at').':') !!}
    <p>{{ $aula->updated_at }}</p>
</div>

