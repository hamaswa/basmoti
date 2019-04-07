{!! Form::open(['route' => ['menu.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
<a href="{{ route('menu.edit', $id) }}" class='btn btn-default btn-xs'>
        Edit
    </a>

    {!! Form::button('Delete', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}