@section('main')
@extends('layouts.admin')
<h1>Add Post</h1>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
{{ Form::open(array('route' => 'secureadmin.posts.store','files' => true)) }}
    <ul>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>
        <li>
            {{ Form::label('image', 'Blog Image:') }}
            {{ Form::file('image') }}
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