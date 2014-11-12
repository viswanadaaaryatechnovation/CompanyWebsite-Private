
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
        <section class="col-md-12">
        <div class="breadcrumbs">
          <!-- Breadcrumb-->
            <a class="home" href="index.html">AARIYA Technovation</a> &gt; Careers      </div>
        </section>
      </section> 
    <!-- //Breadcrumb  -->

    <section class="row">
      <section class="col-md-9">
        <h2>Work with the world's best entrepreneurs</h2>
          <section class="titlebtm">
            <div></div>
          </section>
        <h3 class="sub-head">Shape Technology</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>

        <h3 class="sub-head">Shape Technology</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
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