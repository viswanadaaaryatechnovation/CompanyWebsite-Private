
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
 @section('main')
  <!--  Contact form -->
  <section id="abput-us" class="inner-page">
    <!--<section class="innerHeader clearfix relative">
      <div class="overlay"></div>
      <section class="container text-center relative">
        <h1 class="upCase">About Us</h1>
        <span>A</span> </section>
    </section>--><!-- // Inner page  -->

    <section class="container">
      

      <section class="row">
        <section class="col-md-12">
         <h2>About Us</h2>
          <section class="titlebtm">
            <div></div>
          </section>
        <p class="iner_con_rimage"> <img src="http://aaryatechnovation.com/public/images/about_us.jpg" alt="About Us" title="About Us" /> Aarya Technovation sole purpose is to give customers next generation of online products
and to become world's most creative and customer centric Information Technology 
Company. Our first product BuyNUse.com is to build a world class community based online 
classifieds trading platform where customers can easily discover anything they want to buy, 
sell or trade in a very safe, friendly and cost conscious manner.</p>
<p>We are a team of tech entrepreneurs building disruptive consumer software products. We 
invest in product and unique technologies that will define the future or where consumers will 
eventually transition.</p>

<p>World is full of repeats so we invest in products that define and give the right meaning to 
NEW. Each of our product is unique. We firmly believe that technology is not only related to 
machinery but a new and better way of doing things and serving our consumers.</p></section>
      </section>
     
    </section>

  </section> 




@stop