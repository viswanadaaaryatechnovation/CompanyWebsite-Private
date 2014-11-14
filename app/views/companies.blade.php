
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
@section('main')
  <section id="companies" class="inner-page">
    <!--<section class="innerHeader clearfix relative">
      <div class="overlay"></div>
      <section class="container text-center relative">
        <h1 class="upCase">Compaines</h1>
        <span>C</span> </section>
    </section>--><!-- // Inner page  -->

    <section class="container">
      <!--<section class="row">
        <section class="col-md-12">
        <div class="breadcrumbs">
         
            <a class="home" href="index.html">AARIYA Technovation</a> &gt; Companies      </div>
        </section>
      </section>--> 
    <!-- //Breadcrumb  -->

    <section class="row">
      <section class="col-md-12">
        <h2>Our Business</h2>
        <section class="titlebtm">
            <div></div>
          </section>
        <p>We invest in software products that can scale to great heights. Some of our businesses include Buy N Use, Snap A Ride, Rating Tower, 99 Luxuries, Good By Choice.</p>
      </section>
    </section>
   <section class="row">
      <section class="col-md-12">
        
        <section class="row companies-wrap">
          <section class="col-md-3 col-sm-4">
            <a class="our-clients" href="#">
              <img  src="images/buy-n-use-logo.png">
            </a>
          </section>

          <section class="col-md-9 col-sm-8">
            <p>Buynuse – Buy N Use is a world class community based online classifieds trading platform
where customers can easily discover anything they want to buy, sell or trade in a very safe, 
friendly and cost conscious manner.</p>
          </section>
        </section><!--  Companies  -->
        <section class="row companies-wrap">
          <section class="col-md-3 col-sm-4">
            <a class="our-clients" href="#">
              <img  src="images/snap-a-ride-logo.png">
            </a>
          </section> 
          <section class="col-md-9 col-sm-8">
            <p>Snap a ride – You can wait, make a call or even whistle to call a cab. But why go through all 
this if you can have a reliable service just at a touch of your finger tip. A new, smart, safe 
and cost conscious way to travel within and outside the city.</p>
          </section>
        </section><!--  Companies  -->
        <section class="row companies-wrap">
          <section class="col-md-3 col-sm-4">
            <a class="our-clients" href="#">
              <img  src="images/rating-tower-logo.png">
            </a>
          </section> 
          <section class="col-md-9 col-sm-8">
            <p>Rating Tower – One resource to refer to for the best local reviews.</p>
          </section>
        </section><!--  Companies  -->
      </section>  
    </section>
    </section>

  </section> 



  <!--//  Inner pages -->

@stop