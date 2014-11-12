@section('main')
@extends('layouts.admin')
<h1>Posts List</h1>

<p>{{ link_to_route('secureadmin.posts.create', 'Add new Post') }}</p>

@if ($posts->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            	<th>Titlt</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                	<td>{{$post->title}}
                    <td>{{ $post->description}}</td>
                    <td>{{ link_to_route('secureadmin.posts.edit', 'Edit',
 array($post->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.posts.destroy', $post->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$posts->links(); }}
@else
    <p class="error">There are no Posts</p>
@endif

@stop