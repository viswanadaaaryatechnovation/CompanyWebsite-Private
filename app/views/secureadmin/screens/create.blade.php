@section('main')
@extends('layouts.admin')
<h1>Add Scrren</h1>

{{ Form::open(array('route' => 'secureadmin.screens.store','files' => true)) }}
    <ul>

        <li>
            {{ Form::label('screen_title', 'Screen Name:') }}
            {{ Form::text('screen_title') }}
        </li>

     

        <li>
            {{ Form::label('screen_image', 'Screen Image:') }}
            {{ Form::file('screen_image') }}
        </li>
        
        
        <li>
            {{ Form::label('screen_icon', 'Screen Icon:') }}
            {{ Form::file('screen_icon') }}
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