@section('main')
@extends('layouts.admin')
<h1>Edit Contact</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' =>
 array('secureadmin.contactus.update', $contact->id))) }}
    <ul>
    	<li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        <li>
            {{ Form::label('message', 'Message:') }}
            {{ Form::text('message') }}
        </li>
        
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('secureadmin.contactus.index', 'Cancel', $contact->
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