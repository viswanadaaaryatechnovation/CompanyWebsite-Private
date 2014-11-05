<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
		ul.pagination{list-style-type: none;}	
		ul.pagination li { display: inline; padding: 5px; }
        </style>
    </head>

    <body>
        <div class="container">
         

<h1>Sign In</h1>

{{ Form::open(array('url' => 'secureadmin/login')) }}
    <ul>
        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </li>
        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

</div>

    </body>

</html>