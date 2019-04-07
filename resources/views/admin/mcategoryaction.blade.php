{!! Form::open(['route' => ['mcategory.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>

    {!! Form::button('Delete', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}