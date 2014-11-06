@section('main')
@extends('layouts.admin')
<h1>Meta Fields List</h1>

<p>{{ link_to_route('secureadmin.metafields.create', 'Add new meta field') }}</p>

@if ($metafields->count()>0)
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
        <th>Page Name</th>    
        <th>Meta Name</th>
        <th>Meta Content</th>
		<th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($metafields as $metafield)
                <tr>
                <td>{{ $metafield->pname}}</td>
                    <td>{{ $metafield->name}}</td>
          <td>{{ $metafield->content }}</td>
                    <td>{{ link_to_route('secureadmin.metafields.edit', 'Edit',
 array($metafield->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.metafields.destroy', $metafield->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$metafields->links(); }}
@else
    <p class="error">There are no meta fields</p>
@endif

@stop