
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
@section('main')
  <section class="blogWrap">
    <div class="container">
    <div class="login-form-section">
        <div class="login-content ">
            <form>
                <div class="section-title">
                    <h3>Sign In</h3>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group">
                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Username" class="form-control" required="required">
                    </div>
                </div>
                <div class="textbox-wrap">
                    <div class="input-group">
                        <span class="input-group-addon "><i class="fa fa-key"></i></span>
                        <input type="password" placeholder="Password" class="form-control " required="required">
                    </div>
                </div>
                <div class="login-form-action clearfix">
                    <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
                
        <div class="login-form-links ">
            <h4 class="red">Forget your Password?</h4>
            <span>Dont worry</span>
            <a class="red" href="#">Click Here</a>
            <span>to Get New One</span>
        </div>
            </div>
</div>



</section> 



@stop