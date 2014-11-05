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
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            <div id="navbar" style="height:auto" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>{{ HTML::link('secureadmin', 'Users', true)}}</li>
            <li>{{ HTML::link('secureadmin/contactus', 'Contacts', true)}}</li>
            <li>{{ HTML::link('secureadmin/logout', 'Logout', true)}}</li>
            
          </ul>
        </div>

            @yield('main')
        </div>

    </body>

</html>