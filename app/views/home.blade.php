@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop   
@section('main')
<section id="slider-wrap">
    <div class="container">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        	@foreach($screens as $screen) 
            	<div class="item @if($i == 0) active @endif">
                <img src="uploads/screens/{{$screen->screen_image}}" class="img-responsive"/>
            </div> 
            @if($i++) @endif
            @endforeach
            <!--<div class="item">
                <img src="images/rating-tower.jpg" class="img-responsive"/>
            </div> 
            <div class="item">
                <img src="images/snap-a-ride.jpg" class="img-responsive"/>
            </div>-->
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">

            <ul class="nav">
            @if($i=0) @endif
            @foreach($screens as $screen)
              <li data-target="#custom_carousel" data-slide-to="{{$i}}" class="active"><a href="#"><img src="uploads/screens/{{$screen->screen_icon}}"/></a></li>
              @if($i++) @endif
              @endforeach
              <!--<li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="images/rating-tower-logo.png"/></a></li>
              <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="images/snap-a-ride-logo.png"/></a></li> -->
            </ul>

            <div class="more-links">
            {{ HTML::link('pitch', 'Pitch AN idea', true)}}
            {{ HTML::link('companies', 'More Companies', true)}}
<!--              <a href="javascript:;">  <i class="fa fa-angle-double-right"></i></a>
              <a href="javascript:;"> More Companies </i></a>-->
            </div>
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
  </ul>-->
<!--// Social Slider  -->

</section>
  <!--//  Slider -->

  <!-- How it Work pages  --> 
  <div id="work-wrap">
    <div class="container">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
      <li  class="active"><a href="#blog" role="tab" data-toggle="tab">Blog</a></li>
      <li><a href="#how-it-work" role="tab" data-toggle="tab">Resources</a></li>
        <!--<li><a href="#customer-services" role="tab" data-toggle="tab">Customer Services</a></li>-->
         
      </ul> 

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="how-it-work">
          <ul class="videos row">
          @foreach($resources as $resource)
            <li class="col-md-4">
              <div class="vid">
              <a href="resources-inner/{{$resource->id}}">
              <img width="302" height="164" src="http://img.youtube.com/vi/{{str_replace('https://www.youtube.com/v/','',$resource->video_url)}}/0.jpg"></a></div>
              <!--<iframe width="302" height="164" src="{{$resource->video_url}}" frameborder="0" allowfullscreen></iframe>-->
              <div class="video-text">
                <h1>{{$resource->title}}</h1>
                <p>{{substr($resource->description,0,80)}}@if(strlen($resource->description)>80)...{{ HTML::link('resources-inner/'.$resource->id, 'See more', true)}}@endif</p>
              </div>
            </li>
            @endforeach
                      </ul>
          <div class="clear-20"></div>
          {{ HTML::link('resources', 'View All', array('class'=>'btn left view'))}}
           <!--<a href="#" class="btn left view">View All</a>-->
           
        </div>
        <!--<div role="tabpanel" class="tab-pane" id="customer-services">

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
           
        
        </div>-->
        <div role="tabpanel" class="tab-pane active" id="blog">
          <ul class="videos row">
          @foreach($posts as $post)
            <li class="col-md-4">
            @if($post->image != '')
              <div class="vid">
              <a href="blog-inner/{{$post->id}}">
              <img width="302" height="164" src="uploads/post/{{$post->image}}"></a></div>
              @endif
              <div class="video-text">
                <h1>{{$post->title}}</h1>
                <p>{{substr($post->description,0,80)}}@if(strlen($post->description)>80)...{{ HTML::link('blog-inner/'.$post->id, 'See more', true)}}@endif</p>
              </div>
            </li>
            @endforeach
                      </ul>
          <div class="clear-20"></div>
          {{ HTML::link('blog', 'View All', array('class'=>'btn left view'))}}
           <!--<a href="#" class="btn left view">View All</a>-->
           
        </div>
        <?php /*?><div role="tabpanel" class="tab-pane" id="blog">
          <ul class="post-block row">
          @foreach($posts as $post)          
            <li class="col-md-4"> 
              <div class="entry-content clearfix">
                 <header class="entry-header">
                    <h2 class="entry-title"><a rel="bookmark" href="blog">{{$post->title}}</a></h2>
                 </header>
                 <p>{{substr($post->description,0,80)}}@if(strlen($post->description)>80)...@endif</p>
              </div> 
              
            </li>
            @endforeach
                  </ul>
		<div class="clear-20"></div>
           {{ HTML::link('blog', 'View All', array('class'=>'btn left view'))}}
        </div><?php */?>
      </div>
		<div class="subscribe">
        <form method="post" onsubmit="return false" id="subscribers">
        <input type="email" id="email" name="email"  style="display:inline; border: 1px solid #dcdcdc; height: 37px;width: 300px;vertical-align: middle;" />
        <input type="submit" value=" Subscribe " onclick="sendsubsciber()" class="btn left view" />
        </form>
        </div>

 
       
    </div>
  </div><!--// How it Work pages  -->
<!--// How it Work pages  -->
@stop