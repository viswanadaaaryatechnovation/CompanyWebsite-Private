@section('main')
@extends('layouts.admin')
<h1>Add Contac</h1>

{{ Form::open(array('route' => 'secureadmin.subscribers.store')) }}
    <ul>

     

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>




        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop