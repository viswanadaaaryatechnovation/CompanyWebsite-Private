@section('main')
@extends('layouts.admin')
<h1>Posts List</h1>

<p>{{ link_to_route('secureadmin.resources.create', 'Add new Post') }}</p>

@if ($resources->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            	<th>Titlt</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($resources as $resource)
                <tr>
                	<td>{{$resource->title}}
                    <td>{{ $resource->description}}</td>
                    <td>{{ link_to_route('secureadmin.resources.edit', 'Edit',
 array($resource->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.resources.destroy', $resource->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$resources->links(); }}
@else
    <p class="error">There are no Posts</p>
@endif

@stop