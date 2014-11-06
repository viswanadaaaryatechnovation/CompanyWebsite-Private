@extends('layouts.admin')
@section('main')
<h1>Admin Users</h1>

<p>{{ link_to_route('secureadmin.create', 'Add new admin user') }}</p>

@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
		<th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name}}</td>
          <td>{{ $user->username}}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
                    <td>{{ link_to_route('secureadmin.edit', 'Edit',
 array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.destroy', $user->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$users->links(); }}
@else
    There are no users
@endif

@stop