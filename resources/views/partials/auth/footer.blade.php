{{-- Footer Contact US --}}
<section class="contact_index_panel animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  <div class="container">
      <h3>Schedule a call</h3>
        {{ Form::open(array('action' => 'Front\FrontendController@contactSubmission')) }}
          <div class="row"> 
            <div class="col-12 col-md-6">
              {{ Form::text('name', null, array('placeholder' => 'Full Name') ) }}
            </div>
            <div class="col-12 col-md-6">
              {{ Form::text('phone', null, array('placeholder' => 'Phone') ) }}
            </div>
            <div class="col-12 col-md-6">
              {{ Form::email('email', null, array('placeholder' => 'E-mail Address') ) }}
            </div>
            <div class="col-12 col-md-6">
              {{ Form::text('message', null, array('placeholder' => 'Message') ) }}
            </div>
        </div>
        {{ Form::submit('Submit') }}

        {{ Form::close() }}

        <h2>Contact us</h2>
    </div>
</section>

{{-- Footer Section --}}
<section class="bottom_panel">
	<div class="container">
    	<i class="fa fa-map-marker large_adressico" aria-hidden="true"></i>
        
      <div class="row">

      	<div class="col-12 col-md-4">
        	<div class="iconbox animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
            <img src="{{ asset(config('directory.assets-theme-images') . 'foot-ico1.png') }}"   alt=""/> 
              <strong>Email</strong>
              contact@codebelgium.com
          </div>
        </div>
        <div class="col-12 col-md-4">  
          <div class="iconbox animate" data-animate="fadeIn" data-duration="1s" data-delay="0.5s">
          	<img src="{{ asset(config('directory.assets-theme-images') . 'foot-ico2.png') }}"   alt=""/> 
          	<strong>Call Us !</strong>
          	(+91) 9326060580
        	</div>
        </div>
        <div class="col-12 col-md-4">      
          <div class="iconbox animate" data-animate="fadeIn" data-duration="1s" data-delay="1s">
          	<img src="{{ asset(config('directory.assets-theme-images') . 'foot-ico3.png') }}"  alt=""/> 
          	<strong>Address</strong>
          	Code Belgium
            WeWork Belmont Court, Rue Belliard 53, Brussels 1000
        	</div>
        </div>
      </div>
        
    <div class="social">
    	<a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
  </div>
</section>