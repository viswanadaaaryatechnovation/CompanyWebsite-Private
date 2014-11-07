@section('main')
@extends('layouts.admin')
<h1>Add Page</h1>

{{ Form::open(array('route' => 'secureadmin.pages.store')) }}
    <ul>
    	<li>
            {{ Form::label('menu', 'Menu:') }}
            {{ Form::select('menu_id', $menulist) }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
        
        <li>
            {{ Form::label('url_name', 'URL Name:') }}
            {{ Form::text('url_name') }}
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