
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
      <section class="col-md-9" style="padding-right:33px">
        <h2>Pitch An Idea</h2>
          <section class="titlebtm">
            <div></div>
          </section>
          
          <p>
       We welcome ideas that can transform the present business landscape. Ideas those can create New Needs, New Markets and even New Customer Segments.</p>
       <ul style="margin-left:30px">
        <li>Keep everything simple as we are not interested in complicated. Speak the Obvious. </li>
        <li>We are not interested in competing products or present product iterations dominating the market landscape. We are looking for products that define consumers unmet needs. </li>  
        <li>Talk to us how you came across the genius idea. What was the process like? And talk to us the problem you are solving. Do tell us the most exciting thing about your idea.</li>
        </ul>
        </section>

      <section class="col-md-3">

        <div class="right-head"> Join Our Business Network </div>
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