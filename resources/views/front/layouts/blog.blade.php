<!DOCTYPE html>
<html dir="ltr" lang="en-US">

  <!-- Your Stylesheets, Scripts & Title
  ============================================= -->
  @include('front.partials.blog.head')

  <body>
    


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6Z8WLL"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    {{-- Quick Quote --}}
    <div class="quickquote_side">

			<div class="quickquote_side_button">
		    <img src="{{ asset(config('directory.assets-theme-images') . 'quick-quote-side.png') }}"   alt="" />
		    <img src="{{ asset(config('directory.assets-theme-images') . 'quick-quote-side-s.png') }}"   alt="" />
		  </div>
	    <div class="quickquote_side_box">
	    
	    	<i class="fa fa-times quickboxclose" aria-hidden="true"></i>
	    
	    	<h3>Request Callback</h3>

	    	{{ Form::open(array('action' => 'Front\FrontendController@contactSubmission')) }}

     			{{ Form::text('name', null, array('placeholder' => 'Name') ) }}
          {{ Form::text('phone', null, array('placeholder' => 'Phone') ) }}
          {{ Form::email('email', null, array('placeholder' => 'E-mail') ) }}
          {{ Form::text('message', null, array('placeholder' => 'Message') ) }}
        	{{ Form::submit('Submit') }}

        {{ Form::close() }}
	    </div>
		</div>
  
          @include('front.partials.blog.header')
          
          {{-- Slider --}}
          @yield('slider')
    
          @include('front.partials.blog.content')

          @include('front.partials.blog.footer')

          @include('front.partials.blog.copyrights')

  		    @include('front.partials.blog.footscripts')
  </body>
</html>