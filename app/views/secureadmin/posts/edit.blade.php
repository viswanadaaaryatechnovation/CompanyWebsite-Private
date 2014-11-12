@section('main')
@extends('layouts.admin')
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<h1>Edit Post</h1>
{{ Form::model($post, array('method' => 'PATCH', 'route' =>
 array('secureadmin.posts.update', $post->id))) }}
    <ul>
    	    
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>
        
        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description',$post->description, array('class'=>'ckeditor')) }}
        </li>

        
        
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.posts.index', 'Cancel', $post->
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