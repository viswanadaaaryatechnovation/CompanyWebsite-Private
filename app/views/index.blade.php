@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop   
@section('main')
<section id="slider-wrap" >
    <div class="container">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <img src="images/home_facebook.jpeg" class="img-responsive"/>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <img src="images/home_airbnb.jpeg" class="img-responsive"/>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <img src="images/home_facebook.jpeg" class="img-responsive"/>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <img src="images/home_airbnb.jpeg" class="img-responsive"/>
                </div>           
            </div>
            <div class="item">
                <div class="container-fluid">
                    <img src="images/home_facebook.jpeg" class="img-responsive"/>
                </div>           
            </div>
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
              <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="images/facebook-logo.png"/></a></li>
              <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="images/airbnb-logo.png"/></a></li>
              <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="images/cloudera-logo.png"/></a></li>
              <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="images/pandora-logo.png"/></a></li>
              <li data-target="#custom_carousel" data-slide-to="4"><a href="#"><img src="images/pure-storage-logo.png"/></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>

<!--  Social Slider  -->
  <!--<ul class="get-social">
    <li class="sc-ic-dim fb"><a href="javascript:;"></a></li>
    <li class="sc-ic-dim tw"><a href="javascript:;"></a></li>
    <li class="sc-ic-dim lkd"><a href="javascript:;"></a></li>
    <li class="sc-ic-dim g-plus"><a href="javascript:;"></a></li>
    <li class="sc-ic-dim pi"><a href="javascript:;"></a></li>
    <li class="sc-ic-dim play"><a href="javascript:;"></a></li>
  </ul> -->
<!--// Social Slider  -->

</section>
  <!--//  Slider -->

  <!-- How it Work pages  --> 
  <div id="work-wrap">
    <div class="container">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#how-it-work" role="tab" data-toggle="tab">How it works</a></li>
        <li><a href="#customer-services" role="tab" data-toggle="tab">Customer Services</a></li>
        <li><a href="#blog" role="tab" data-toggle="tab">Blog</a></li> 
      </ul> 

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="how-it-work">
          <ul class="videos row">
            <li class="col-md-4">
              <div class="vid"><img src="images/video1.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
            <li class="col-md-4">
              <div class="vid"><img src="images/video2.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
            <li class="col-md-4">
              <div class="vid"><img src="images/video3.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
          </ul>
          <div class="clear-20"></div>
           <a href="#" class="btn left view">View All</a>
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
        <div role="tabpanel" class="tab-pane" id="customer-services">

          <ul class="videos row">
            <li class="col-md-4">
              <div class="vid"><img src="images/video1.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
            <li class="col-md-4">
              <div class="vid"><img src="images/video2.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
            <li class="col-md-4">
              <div class="vid"><img src="images/video3.jpg"></div>
              <div class="video-text">
                <h1>Sed ut perspiciatis unde omnis</h1>
                <p>Consectetur adipisicing eiusmod incididunt ut labore dolore magnader delom udecen.</p>
              </div>
            </li>
          </ul>
          <div class="clear-20"></div>
           <a href="#" class="btn left view">View All</a>
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
        <div role="tabpanel" class="tab-pane" id="blog">
          <ul class="post-block row">
            <li class="col-md-4"> 
              <div class="entry-content clearfix">
                 <header class="entry-header">
                    <h2 class="entry-title"><a rel="bookmark" href="javascript:;">It’s Not All Black and White</a></h2>
                 </header>
                 <p>
                    Donec gravida ligula sapien. Aenean tristique imperdiet quam, eu tincidunt turpis pellentesque vel. Pellentesque
                 </p>
                 <div class="post-thumbnail">
                    <a href="javascript:;"><img src="images/blog.jpg" class="grayscale img-responsive"></a>
                 </div>
                 <!-- .entry-thumbnail -->
                 <div class="meta-divider"></div>
                 <div class="entry-date">
                    <a title="View all posts by this date" href="javascript:;">November 02, 2014</a>
                 </div>
                 <!-- .entry-date -->
                 <div class="entry-meta">
                    <span class="entry-author">
                    By  <span class="author vcard"><a  href="javascript:;" class="url fn n">Serge Kij</a></span>     </span> <!-- .entry-author -->
                    <span class="entry-category">in<a title="All posts from Formats" href="javascript:;">Formats</a></span>    
                    <!-- .vlc-list -->
                 </div>
              </div> 
            </li>
            <li class="col-md-4"> 
              <div class="entry-content clearfix">
                 <header class="entry-header">
                    <h2 class="entry-title"><a rel="bookmark" href="javascript:;">It’s Not All Black and White</a></h2>
                 </header>
                 <p>
                    Donec gravida ligula sapien. Aenean tristique imperdiet quam, eu tincidunt turpis pellentesque vel. Pellentesque 
                 </p>
                 <div class="post-thumbnail">
                    <a href="javascript:;"><img src="images/blog.jpg" class="grayscale img-responsive"></a>
                 </div>
                 <!-- .entry-thumbnail -->
                 <div class="meta-divider"></div>
                 <div class="entry-date">
                    <a title="View all posts by this date" href="javascript:;">November 03, 2014</a>
                 </div>
                 <!-- .entry-date -->
                 <div class="entry-meta">
                    <span class="entry-author">
                    By  <span class="author vcard"><a  href="javascript:;" class="url fn n">Serge Kij</a></span>     </span> <!-- .entry-author -->
                    <span class="entry-category">in<a title="All posts from Formats" href="javascript:;">Formats</a></span>    
                    <!-- .vlc-list -->
                 </div>
              </div> 
            </li>
            <li class="col-md-4"> 
              <div class="entry-content clearfix">
                 <header class="entry-header">
                    <h2 class="entry-title"><a rel="bookmark" href="javascript:;">It’s Not All Its-Not-All-Black-and-White-750x500ck and White</a></h2>
                 </header>
                 <p>
                    Donec gravida ligula sapien. Aenean tristique imperdiet quam, eu tincidunt turpis pellentesque vel. Pellentesque 
                 </p>
                 <div class="post-thumbnail">
                    <a href="javascript:;"><img src="images/blog.jpg" class="grayscale img-responsive"></a>
                 </div>
                 <!-- .entry-thumbnail -->
                 <div class="meta-divider"></div>
                 <div class="entry-date">
                    <a title="View all posts by this date" href="javascript:;">November 03, 2014</a>
                 </div>
                 <!-- .entry-date -->
                 <div class="entry-meta">
                    <span class="entry-author">
                    By  <span class="author vcard"><a  href="javascript:;" class="url fn n">Serge Kij</a></span>     </span> <!-- .entry-author -->
                    <span class="entry-category">in<a title="All posts from Formats" href="javascript:;">Formats</a></span>    
                    <!-- .vlc-list -->
                 </div>
              </div> 
            </li>
          </ul>
          <div class="clear-20"></div>
           <a href="#" class="btn left view">View All</a>
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
      </div>


 
       
    </div>
  </div><!--// How it Work pages  -->
@stop