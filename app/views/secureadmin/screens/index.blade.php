@section('main')
@extends('layouts.admin')
<h1>Screen List</h1>

<p>{{ link_to_route('secureadmin.screens.create', 'Add new screen') }}</p>

@if ($contacts->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
        <th>Screen Name</th>
        <th>Screen Image</th>
        <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->screen_title}}</td>
          <td><img src="{{URL::to('uploads/screens/'.$contact->screen_image) }}" width="100" height="100" /></td>
                    <?php /*?><td>{{ link_to_route('secureadmin.screens.edit', 'Edit',
 array($contact->id), array('class' => 'btn btn-info')) }}</td><?php */?>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('secureadmin.screens.destroy', $contact->id))) }}                       
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
    There are no screens
@endif

@stop