
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
        <h2>Investors</h2>
        <section class="titlebtm">
            <div></div>
          </section>
        <p>For investors we provide great opportunity to invest in our diversified technology company
with innovative products. At the same time we understand the value of potential partners 
and investors so that our vision can be turned into reality and we can grow rapidly from 
a startup into sustainable market leadership. We are more than a bunch of passionate 
founders as not only we will give you access to our detailed presentations of your products
but we will walk you through the detailed analytics and market traction our products have 
achieved.</p>
<p>We are looking for long term partners who can provide seasoned experience, resources,
strategic advice, thoughtful guidance and unwavering support. We strongly believe that a
good fostering partnership happens when both parties are genuinely committed towards a 
common mission and purpose.</p>
<p>We are looking for venture and growth stage funding to gain sustainable global market 
leadership. Please contact us to know more about our projects and to gain access to our
exclusive investors portal where you can see in depth analytics of specific projects.</p>
      </section>
    </section>
   
    </section>

  </section> 



  <!--//  Inner pages -->

@stop