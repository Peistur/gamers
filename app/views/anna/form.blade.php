

{{ Form::open( array('route' => 'anna.second', 'method' => 'post') ) }}

<p>
    {{ Form::label('p1', 'Et dius Anna?'); }}
    {{ Form::checkbox('p1', 'value'); }}
</p>

<p>
    {{ Form::label('p2', 'Fas anys avui?'); }}
    {{ Form::checkbox('p2', 'value'); }}
</p>

<p>
    {{ Form::label('p3', 'Ets la persona més meravellosa del món sencer?'); }}
    {{ Form::checkbox('p3', 'value'); }}
</p>

<p>
    {{ Form::submit('Respon!'); }}
</p>


{{ Form::close() }}
