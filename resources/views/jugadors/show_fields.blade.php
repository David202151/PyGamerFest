<!-- Id Jug Field -->
<div class="col-sm-12">
    {!! Form::label('id_jug', __('models/jugadors.fields.id_jug').':') !!}
    <p>{{ $jugador->id_jug }}</p>
</div>

<!-- Nombre Jug Field -->
<div class="col-sm-12">
    {!! Form::label('nombre_jug', __('models/jugadors.fields.nombre_jug').':') !!}
    <p>{{ $jugador->nombre_jug }}</p>
</div>

<!-- Cedula Jug Field -->
<div class="col-sm-12">
    {!! Form::label('cedula_jug', __('models/jugadors.fields.cedula_jug').':') !!}
    <p>{{ $jugador->cedula_jug }}</p>
</div>

<!-- Telefono Jug Field -->
<div class="col-sm-12">
    {!! Form::label('telefono_jug', __('models/jugadors.fields.telefono_jug').':') !!}
    <p>{{ $jugador->telefono_jug }}</p>
</div>

<!-- Correo Jug Field -->
<div class="col-sm-12">
    {!! Form::label('correo_jug', __('models/jugadors.fields.correo_jug').':') !!}
    <p>{{ $jugador->correo_jug }}</p>
</div>

<!-- Observaciones Jug Field -->
<div class="col-sm-12">
    {!! Form::label('observaciones_jug', __('models/jugadors.fields.observaciones_jug').':') !!}
    <p>{{ $jugador->observaciones_jug }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/jugadors.fields.created_at').':') !!}
    <p>{{ $jugador->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/jugadors.fields.updated_at').':') !!}
    <p>{{ $jugador->updated_at }}</p>
</div>

