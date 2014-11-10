@section('main')
@extends('layouts.admin')
<h1>Edit Contact</h1>
{{ Form::model($screen, array('method' => 'PATCH', 'route' =>
 array('secureadmin.screens.update', $screen->id), 'files' => true)) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            
            {{ Form::reset('Reset', array('class' => 'btn btn-info')) }} 
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop