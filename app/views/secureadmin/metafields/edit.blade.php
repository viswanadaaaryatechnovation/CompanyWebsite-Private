@section('main')
@extends('layouts.admin')
<h1>Edit Contact</h1>
{{ Form::model($meta, array('method' => 'PATCH', 'route' =>
 array('secureadmin.metafields.update', $meta->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.metafields.index', 'Cancel', $meta->
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