@section('main')
@extends('layouts.admin')
<h1>Edit Contact</h1>
{{ Form::model($subscriber, array('method' => 'PATCH', 'route' =>
 array('secureadmin.subscribers.update', $subscriber->id))) }}
    <ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.subscribers.index', 'Cancel', $subscriber->
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