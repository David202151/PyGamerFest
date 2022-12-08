<!-- Id Equi Field -->
<div class="col-sm-12">
    {!! Form::label('id_equi', __('models/equipos.fields.id_equi').':') !!}
    <p>{{ $equipo->id_equi }}</p>
</div>

<!-- Nombre Equi Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_equi', __('models/equipos.fields.nombre_equi').':') !!}
    <p>{{ $equipo->nombre_equi }}</p>
</div>

<!-- Observaciones Equi Field -->
<div class="col-sm-12">
    {!! Form::label('observaciones_equi', __('models/equipos.fields.observaciones_equi').':') !!}
    <p>{{ $equipo->observaciones_equi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/equipos.fields.created_at').':') !!}
    <p>{{ $equipo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/equipos.fields.updated_at').':') !!}
    <p>{{ $equipo->updated_at }}</p>
</div>

