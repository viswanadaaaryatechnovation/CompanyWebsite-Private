
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
@section('main')

    <section class="container">
  <section id="contact-wrap">
  	<h2 class="title-txt">Offices</h2>
        <section class="titlebtm">
          <div></div>
        </section>
        <div class="clear"></div>
    <section class="row" id="off-address">
        <div class="col-md-6">
          <div class="row" >
          <p style="padding-left: 15px;"><strong>Aarya Technovation India Pvt. Ltd.</strong></p>
            <div class="col-sm-4">
              <p>
                   3rd Floor, Plot No. 63, Jubilee Hills, <br />
                   Hyderabad 500034</br>

Tel. 7674942123</p>
            </div>
            <div class="col-sm-8">
              <section class="map-wrap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3806.38745294277!2d78.39785499999999!3d17.441159999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1415789012317" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
              </section><!-- // map Wrapper -->
            </div>
          </div>
        </div><!--   /Address One -->
        <div class="col-md-6">
          <div class="row" >
          <p style="padding-left: 15px;"><strong>Aarya Technovation Inc.</strong></p>
            <div class="col-sm-4">
              <p align="left">
                   425 Broadway Street,<br /> Redwood City,<br /> CA 94063 <br />

Tel.(408)215-1234
              </p>
            </div>
            <div class="col-sm-8">
              <section class="map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3165.973627841714!2d-122.20321550000004!3d37.4849487!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1415789478274" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
              </section><!-- // map Wrapper -->
            </div>
          </div>
        </div><!-- Address Two -->


      </section><!-- // map Wrapper -->
      <section class="row">
        <section class="col-sm-8">
          <h2 class="title-txt">Send a Message</h2>
          <section class="titlebtm">
            <div></div>
          </section>
          <div class="clear"></div>
          <div class="contact-form">
            <p>Comments or questions are welcome.</p>
            
{{ Form::open(array('url' => 'store')) }}
            <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </div>

     

        <div class="form-group">
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </div>

        <div class="form-group">
            {{ Form::label('message', 'Message:') }}
            {{ Form::textarea('message') }}
        </div>


        <div class="form-group">
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </div>
{{ Form::close() }}
@if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            
@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

             <!--<form method="POST" action="" name="support" id="support_form" role="form" novalidate="novalidate">
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" value="" name="Name" id="Name" class="form-control">
                </div>
                
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" value="" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea name="Message" id="Message" class="form-control" rows="5"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
              </form>-->
          </div>
        </section><!-- Send a Message  -->

        <section class="col-sm-4 contact-details">
          <h2 class="title-txt">Contact details</h2>
          <section class="titlebtm">
            <div></div>
          </section>
          <section class="add-wrap">
              <address>
                <p style="text-align:left">Human Resource<br /><a href="mailto:support@aaryatechnovation.com" style="color: #bd1117;">support@aaryatechnovation.com</a></p>
                <p style="text-align:left">Social Media<br /><a href="mailto:online@aaryatechnovation.com" style="color: #bd1117;">online@aaryatechnovation.com</a></p>
                <!--<p style="text-align:left">Contact Us<br /><a href="mailto:contact@aaryatechnovation.com" style="color: #bd1117;">Contact@aaryatechnovation.com</a></p>-->
                <p style="text-align:left">Investors<br /><a href="mailto:ashvin@aaryatechnovation.com" style="color: #bd1117;">ashvin@aaryatechnovation.com</a></p> 
              </address>
              

            </section>
            

        </section>
      </section>
    </section>

  </section>
  <!--//  Contact form -->


@stop