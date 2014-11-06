@section('main')
@extends('layouts.admin')
<h1>Edit Page</h1>
{{ Form::model($page, array('method' => 'PATCH', 'route' =>
 array('secureadmin.pages.update', $page->id))) }}
    <ul>
    	<li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
        
        
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.pages.index', 'Cancel', $page->
id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop