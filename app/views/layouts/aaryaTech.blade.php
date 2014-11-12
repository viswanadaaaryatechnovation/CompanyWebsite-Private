<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    @yield('meta')
     
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Aarya Technovation - Home</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/main-style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sanchez:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


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
          <a  href="home" class="navbar-brand"><img class="companyLogo" src="{{asset('images/Aarya TechnoVtion VC Coraldraw.png')}}" width="245px" highet="59px" title="Aarya Technovation" alt="Aarya Technovation - Logo"/></a>
          </section><!-- // logo -->
          <section class="col-sm-7">
             
            <div class="up-nav text-right"> 
            {{ HTML::link('careers', 'Careers', true)}}
            {{ HTML::link('contact', 'Contact Us', true)}}
<!--              <a href="careers.html" title="" target="_blank">Careers</a>          <a href="javascript:;" title="" target="_blank">Offices</a>
-->    
             {{ HTML::link('secureadmin', 'Login', array('target' => '_blank'))}}                
            </div>

            <div class="social-wrap text-right">
              <a href="https://www.facebook.com/pages/Aarya-Technovation/1493185997608278" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="javascript:;"><i class="fa fa-google"></i></a>
              <a href="javascript:;"><i class="fa fa-instagram"></i></a>
              <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
              <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
              <a href="javascript:;"><i class="fa fa-tumblr"></i></a>
              <a href="javascript:;"><i class="fa fa-twitter"></i></a>
              <a href="javascript:;"><i class="fa fa-youtube"></i></a>
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
          @if($menu->count() > 0)
		@foreach ($menu as $page)
    		<li class="{{$page->url_name ==$active ? 'active' : ''}}">{{ HTML::link($page->url_name, $page->name, true)}}</li> 
  		@endforeach
    @endif
            

           
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
        
      </div>
      <div class="footer-col col-md-3">
        <h1>Get To Know Us</h1>
        <ul>
        @if(isset($fmenu['getKnowUs']) && count($fmenu['getKnowUs']) > 0)
        @foreach($fmenu['getKnowUs'] as $fm1)
          <li>{{ HTML::link($fm1['url_name'], $fm1['name'], true)}}</li>
        @endforeach  
        @endif
        </ul>
      </div>
      <!-- //Get to Know Us -->
      <?php /*?><div class="footer-col col-md-3">
        <h1>Companies</h1>
        <ul>
        @if(isset($fmenu['companies']) && count($fmenu['companies']) > 0)
        @foreach($fmenu['companies'] as $fm2)
          <li>{{ HTML::link($fm2['url_name'], $fm2['name'], true)}}</li>
        @endforeach  
        @endif
        </ul>
        </ul>
      </div><?php */?><!-- //Companies -->
      <div class="footer-col col-md-3">
        <h1>Let Us Help You</h1>
        <ul>
        @if(isset($fmenu['helpUs']) && count($fmenu['helpUs']) > 0)
        	@foreach($fmenu['helpUs'] as $fm3)
          <li>{{ HTML::link($fm3['url_name'], $fm3['name'], true)}}</li>
        @endforeach  
        @endif
        </ul>
        </ul>
      </div>
      <div class="footer-col col-md-3">
        <h1>Investor</h1>
        <ul>
        @if(isset($fmenu['inverstor']) && count($fmenu['inverstor']) > 0)
        	@foreach($fmenu['inverstor'] as $fm4)
          <li>{{ HTML::link($fm4['url_name'], $fm4['name'], true)}}</li>
        @endforeach  
        @endif
        </ul>
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
      <?php /*?><li><a href="javascript:;">Terms</a></li>
      <li><a href="javascript:;">Help</a></li>
	  <li class="m-right"><a href="javascript:;">Company Portfolio</a></li><?php */?>
      <li>{{ HTML::link('terms', 'Terms', true)}}</li>
      <li>{{ HTML::link('companies', 'Company Portfolio', true)}}</li>
      
    </ul>
    <div class="connect">
            <i class="cn-txt">Connect with us:</i>
            <ul>
              <li><a href="javascript:;"><img src="images/sm-fb.png"></a></li>
              <li><a href="javascript:;"><img src="images/sm-tw.png"></a></li>
              <li><a href="javascript:;"><img src="images/sm-gp.png"></a></li>
              <li class="m-right"><a href="javascript:;"><img src="images/sm-pinterest.png"></a></li>
            </ul>
          </div>
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