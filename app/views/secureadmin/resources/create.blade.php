@section('main')
@extends('layouts.admin')
<h1>Add Post</h1>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
{{ Form::open(array('route' => 'secureadmin.resources.store')) }}
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
            {{ Form::textarea('description','', array('class'=>'ckeditor')) }}
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