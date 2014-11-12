
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
  <section class="blogWrap">
    <section class="container">
      <section class="col-md-8">
      
	@if ($posts->count())
      @foreach($posts as $post)
      <article class="postWrap clearfix">
          <header class="entry-header">
            <h2 class="entry-title"><a rel="bookmark" href="blog-inner.html">{{$post->title}} </a></h2>

            <div class="entry-meta">
              <!--<span class="byline">By <span class="author vcard"><a  href="#" class="url fn n">Admin</a></span></span>
              <span class="cat-links"> in <a rel="category tag"  href="#">Freelancing</a>, </span>-->
              <span class="sep"></span>
              <span class="posted-on">
                <a rel="bookmark" title="12:00 am" href="#">
                  <i class="fa fa-calendar"></i>
                  <time class="entry-date published">{{date('M d Y', time($post->created_at))}}</time>
                </a>
              </span>
            </div>          
          </header>
{{$post->description}}
              <?php /*?><div class="more-link">
                {{ HTML::link('blog-inner/1', 'Continue reading', array('class'=>'btn-more'))}} </div></p><?php */?>

      </article>
	@endforeach
  @else
    <p class="error">There are no Posts</p>
@endif
      
      

      <section class="clearfix text-right"> 
          {{$posts->links(); }}

      </section>

      </section>

      <section class="col-md-4">

          <section class="sidebar recent-entries"> 
          <h1>Recent Post</h1>
            <ul>
            @foreach($posts as $post)
              <li>
              	{{ HTML::link('blog-inner/'.$post->id, $post->title, true)}}
                
                <span class="post-date">{{date('M d, Y', time($post->created_at))}}</span>
              </li>
             @endforeach 
            </ul>

          </section>
<!--
          <section class="sidebar recent-entries"> 
          <h1>Popular Post</h1>
            <ul>
              <li>
                <a href="#">The Inside Secrets Of Millionaires Under The Age Of 29</a>
                <span class="post-date">June 20, 2013</span>
              </li>
              <li>
                <a href="#">Responsive WordPress Themes</a>
                <span class="post-date">June 16, 2013</span>
              </li>
              <li>
                <a href="#">Finally! An Acne Cream That Actually Does What It Says</a>
                <span class="post-date">May 28, 2013</span>
              </li>
              <li>
                <a href="#">Unlock The Secrets Of Selling High Ticket</a>
                <span class="post-date">April 26, 2013</span>
              </li>
              <li>
                <a href="#">Take Advantage Of The Stock Market</a>
                <span class="post-date">March 14, 2013</span>
              </li>
            </ul>

          </section>
-->


      </section> 
    </section>



</section> 




@stop