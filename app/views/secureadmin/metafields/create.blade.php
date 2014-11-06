@section('main')
@extends('layouts.admin')
<h1>Add Contac</h1>

{{ Form::open(array('route' => 'secureadmin.metafields.store')) }}
    <ul>
		
        <li>
            {{ Form::label('pages', 'Pages:') }}
            {{ Form::select('page_id', $pages) }}
        </li>
        
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

     

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content') }}
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