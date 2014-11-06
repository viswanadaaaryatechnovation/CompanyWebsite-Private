@section('main')
@extends('layouts.admin')
<h1>Pages List</h1>

<p>{{ link_to_route('secureadmin.pages.create', 'Add new Page') }}</p>

@if ($pages->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->name}}</td>
                    <td>{{ link_to_route('secureadmin.pages.edit', 'Edit',
 array($page->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.pages.destroy', $page->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$pages->links(); }}
@else
    <p class="error">There are no Pages</p>
@endif

@stop