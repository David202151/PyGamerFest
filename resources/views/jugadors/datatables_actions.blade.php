{!! Form::open(['route' => ['jugadors.destroy', $id_jug], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('jugadors.show', $id_jug) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('jugadors.edit', $id_jug) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]) !!}
</div>
{!! Form::close() !!}
