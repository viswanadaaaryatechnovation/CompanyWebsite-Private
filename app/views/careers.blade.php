
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
@section('main')
  <section id="careers" class="inner-page">
   <section class="container">
      <section class="row">
      <section class="col-md-9">
        <h2>Careers</h2>
          <section class="titlebtm">
            <div></div>
          </section>
        <p>We love what we do. We are not only looking for talented people but we are looking for people who want accomplish something great through technology and innovation. Please submit your profile if you want to join a team of entrepreneurs, web designers, developers, digital marketing geniuses.</p>
        <p>We will look at your specific skill set and give you the responsibility of an exceptional project that best fits your skill set. Be a part of an exceptional start up project and see how the next big thing is materialized and taken to the consumers. </p>

<p>We deeply believe that long term relationships are build on honesty, trust and respect. You should be very free to express your views in a constructive manner no matter how different you think. </p>

<p>It doesn't matter if you are a software designer, developer, marketing head or a business analyst. We want everyone to be entrepreneur first so apart from your skill set you need to be an entrepreneur first.</p>

<p>We say big NO to any kind of politics as we believe in a very open and frank culture. We value teamwork a lot.</p>
        </section>

      <section class="col-md-3">

        <div class="right-head"> Join Our Business </div>
        <div class="comp-logo">
          <span><img src="images/buy-n-use-logo-big.png" /></span>
          <span><img src="images/rating-tower-logo-big.png" /></span>
          <span><img src="images/snap-a-ride-logo-big.png" /></span>
        </div>
        
      </section>
    </section>
   </section>
  </section> 



@stop