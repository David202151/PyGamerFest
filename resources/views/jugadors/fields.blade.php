<!-- Nombre Jug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_jug', __('models/jugadors.fields.nombre_jug').':') !!}
    {!! Form::text('nombre_jug', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Jug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula_jug', __('models/jugadors.fields.cedula_jug').':') !!}
    {!! Form::text('cedula_jug', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Jug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_jug', __('models/jugadors.fields.telefono_jug').':') !!}
    {!! Form::text('telefono_jug', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Jug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo_jug', __('models/jugadors.fields.correo_jug').':') !!}
    {!! Form::text('correo_jug', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Jug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observaciones_jug', __('models/jugadors.fields.observaciones_jug').':') !!}
    {!! Form::text('observaciones_jug', null, ['class' => 'form-control']) !!}
</div>