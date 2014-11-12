@section('main')
@extends('layouts.admin')
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<h1>Edit Post</h1>
{{ Form::model($resource, array('method' => 'PATCH', 'route' =>
 array('secureadmin.resources.update', $resource->id))) }}
    <ul>
    	    
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>
        
        <li>
            {{ Form::label('video_url', 'Video URL:') }}
            {{ Form::text('video_url') }}
        </li>
        
        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description',$resource->description, array('class'=>'ckeditor')) }}
        </li>

        
        
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.resources.index', 'Cancel', $resource->
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