@section('main')
@extends('layouts.admin')
<h1>Contact Us List</h1>

<p>{{ link_to_route('secureadmin.contactus.create', 'Add new contact') }}</p>

@if ($contacts->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Message</th>
		<th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name}}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->message }}</td>
                    <td>{{ link_to_route('secureadmin.contactus.edit', 'Edit',
 array($contact->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.contactus.destroy', $contact->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$contacts->links(); }}
@else
    There are no contacts
@endif

@stop