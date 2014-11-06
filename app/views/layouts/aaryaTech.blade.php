<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  	<meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Aarya Technovation - Home</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main-style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sanchez:400,700" rel="stylesheet" />
    <link href="{{asset('css/custom-styles.css')}}" rel="stylesheet" type="text/css" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{asset('js/html5shiv.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>
  <header>
    <section class="logo-search">
      <section class="container">
        <section class="row">
          <section class="col-sm-5">
          	<a href="index.html"><img class="companyLogo" src="images/Aaryatech-logo.png" title="Aarya Technovation" alt="Aarya Technovation - Logo"/></a>
            <a  href="index.html" class="navbar-brand"><span class="Logo-Name">AARYA</span> Technovation</a>
          </section><!-- // logo -->
          <section class="col-sm-7">
            <div class="up-nav text-right"> 
              <a href="javascript:;" title="" target="_blank">Careers</a>
              <a href="javascript:;" title="" target="_blank">Offices</a>
              {{ HTML::link('secureadmin', 'Login', true)}}
              <!--<a href="javascript:;" title="" target="_blank">Login</a>-->                
            </div>  
            <!--<div class="">
              <form role="form" class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="SEARCH AARYA TECHNOVATION ">
                </div>
                <button class="btn btn-primary" type="submit">Sign in</button>
              </form>
            </div>-->
          </section><!-- // logo -->
        </section>
      </section>
    </section><!--  Logo and search wrap -->
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{$index}}">{{ HTML::link('/', 'Home', true)}}</li>
    <li class="{{$aboutus}}">{{ HTML::link('aboutus', 'AARYA Technovation', true)}}</li>

    <li class="{{$companies}}">{{ HTML::link('companies', 'Companies', true)}}</li>
            
 <li class="{{$invester}}">{{ HTML::link('companies', 'Investors', true)}}</li>
            
 <li class="{{$contact}}">{{ HTML::link('contact', 'Contact Us', true)}}</li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav><!-- Navigation  -->
  </header><!--  // header Section  -->

  <!--  Slider -->
  @yield('main')

<!-- Upper Footer -->
  <div id="upper-footer">
    <div class="container">
    <div class="row">  
      <div class="footer-col col-md-3">
        <h1>Get To Know Us</h1>
        <ul>
          <li><a href="javascript:;">Careers</a></li>
          <li><a href="javascript:;">Offices</a></li>
          <li><a href="javascript:;">Companies</a></li>
          <li><a href="javascript:;">Vision</a></li>
          <li><a href="javascript:;">Team</a></li>
        </ul>
      </div><!-- //Get to Know Us -->
      <div class="footer-col col-md-3">
        <h1>Companies</h1>
        <ul>
          <li><a href="javascript:;">Facebook</a></li>
          <li><a href="javascript:;">Google</a></li>
          <li><a href="javascript:;">Airbnb</a></li>
          <li><a href="javascript:;">Pandora</a></li>
          <li><a href="javascript:;">PureStorage</a></li>
        </ul>
      </div><!-- //Companies -->
      <div class="footer-col col-md-3">
        <h1>Let Us Help You</h1>
        <ul>
          <li><a href="javascript:;">Resources</a></li>
          <li><a href="javascript:;">Blog</a></li>
          <li><a href="javascript:;">News</a></li>
        </ul>
      </div>
      <div class="footer-col col-md-3">
        <h1>Investor</h1>
        <ul>
          <li><a href="javascript:;">Rates</a></li>
          <li><a href="javascript:;">Investment Opportunities</a></li>
          <li><a href="javascript:;">Testimonials</a></li>
          <li><a href="javascript:;">Raise Funding</a></li>
        </ul>
      </div>
    </div>
    
    
  </div>
</div><!-- // Upper footer  -->

<!-- lower Footer -->
<div id="lower-footer">
  <div class="container">
    <i class="copy">&copy; Copyright 2014 Aarya Technovation</i>
    <ul class="ex-links">
      <li><a href="javascript:;">Terms</a></li>
      <li><a href="javascript:;">Help</a></li>
      <li class="m-right"><a href="javascript:;">Company Portfolio</a></li>
    </ul>
  </div>
</div><!--// lower Footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});

    </script>
  </body>
</html>