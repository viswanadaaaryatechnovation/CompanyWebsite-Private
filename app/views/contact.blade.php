
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
            <div class="col-sm-4">
              <p>
                  <strong> DieSachbearbeiter</strong> 
                  Schönhauser Allee 167c<br>
                  10435 Berlin ,Germany<br>
                   +49 30 47373795<br>
                  moin@emiladdress.de
              </p>
            </div>
            <div class="col-sm-8">
              <section class="map-wrap">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27437.65087325866!2d76.78014730946656!3d30.72665443510217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1414956715649" width="100%" height="100%" frameborder="0" style="border:0"></iframe> 
              </section><!-- // map Wrapper -->
            </div>
          </div>
        </div><!--   /Address One -->
        <div class="col-md-6">
          <div class="row" >
            <div class="col-sm-4">
              <p>
                  <strong> DieSachbearbeiter</strong><br>
                  Schönhauser Allee 167c<br>
                  10435 Berlin<br>
                  Germany<br>
                  +49 30 47373795<br>
                  moin@emiladdress.de
              </p>
            </div>
            <div class="col-sm-8">
              <section class="map-wrap">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27437.65087325866!2d76.78014730946656!3d30.72665443510217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1414956715649" width="100%" height="100%" frameborder="0" style="border:0"></iframe> 
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
                <p>Email us at <a href="mailto:bobby@clickkidz.com">bobby@clickkidz.com</a>.</p> 
              </address>
              <address>
                <strong>Enquiries </strong><br>
                <a href="mailto:bobby@clickkidz.com">Email us at bobby@clickkidz.com</a>
              </address>

              <address>
                <strong>Locations </strong><br>
                110 Elizabeth Street,<br> Croydon, 2132, Australia.
              </address>
              <address> 0424 756 781<br>
                Fax: 1300 302 690 </address>
            </section>
            

        </section>
      </section>
    </section>

  </section>
  <!--//  Contact form -->


@stop