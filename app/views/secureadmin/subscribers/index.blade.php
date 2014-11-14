@section('main')
@extends('layouts.admin')
<h1>Subscribers List</h1>

<p>{{ link_to_route('secureadmin.subscribers.create', 'Add new subscriber') }}</p>

@if ($subscribers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
        <th>Email</th>
		<th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($subscribers as $subscriber)
                <tr>
          <td>{{ $subscriber->email }}</td>
                    <td>{{ link_to_route('secureadmin.subscribers.edit', 'Edit',
 array($subscriber->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.subscribers.destroy', $subscriber->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

              
        </tbody>
      
    </table>
{{$subscribers->links(); }}
@else
    There are no subscribers
@endif

@stop