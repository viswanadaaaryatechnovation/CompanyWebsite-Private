<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
<link href="{{asset('css/admin-styles.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            
        <div id='cssmenu'>
<ul>
   <li>{{ HTML::link('secureadmin', 'Users', true)}}</li>
            <li>{{ HTML::link('secureadmin/contactus', 'Contacts', true)}}</li>
            <li>{{ HTML::link('secureadmin/pages', 'Pages', true)}}</li>
            <li>{{ HTML::link('secureadmin/metafields', 'Meta Tags', true)}}</li>
            <li>{{ HTML::link('secureadmin/screens', 'Screens', true)}}</li>
            <li>{{ HTML::link('secureadmin/posts', 'Posts', true)}}</li>
            <li>{{ HTML::link('secureadmin/resources', 'Resources', true)}}</li>
            <li>{{ HTML::link('secureadmin/logout', 'Logout', true)}}</li>
            
</ul>
</div>

            @yield('main')
        </div>

    </body>

</html>