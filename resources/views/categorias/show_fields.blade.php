<!-- Id Cat Field -->
<div class="col-sm-12">
    {!! Form::label('id_cat', __('models/categorias.fields.id_cat').':') !!}
    <p>{{ $categoria->id_cat }}</p>
</div>

<!-- Tipo Cat Field -->
<div class="col-sm-12">
    {!! Form::label('tipo_cat', __('models/categorias.fields.tipo_cat').':') !!}
    <p>{{ $categoria->tipo_cat }}</p>
</div>

<!-- Numero Jugadores Cat Field -->
<div class="col-sm-12">
    {!! Form::label('numero_jugadores_cat', __('models/categorias.fields.numero_jugadores_cat').':') !!}
    <p>{{ $categoria->numero_jugadores_cat }}</p>
</div>

<!-- Competencia Cat Field -->
<div class="col-sm-12">
    {!! Form::label('competencia_cat', __('models/categorias.fields.competencia_cat').':') !!}
    <p>{{ $categoria->competencia_cat }}</p>
</div>

<!-- Descripcion Cat Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion_cat', __('models/categorias.fields.descripcion_cat').':') !!}
    <p>{{ $categoria->descripcion_cat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/categorias.fields.created_at').':') !!}
    <p>{{ $categoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/categorias.fields.updated_at').':') !!}
    <p>{{ $categoria->updated_at }}</p>
</div>

