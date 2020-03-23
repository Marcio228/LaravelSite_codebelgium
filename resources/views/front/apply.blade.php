@extends('front.layouts.home')

@section('title', 'Apply | Code Belgium')

@push('head')
   
  <meta name="description" content="Apply now to become a coder. Learn coding in just 9 weeks."/>
  <meta name="keywords" content="Best Coding Bootcamp" />

  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Apply Now | Code Belgium" />
  <meta property="og:description" content="Apply now to become a coder. Learn coding in just 9 weeks." />
  <meta property="og:url" content="https://www.codebelgium.com/apply" />
  <meta property="og:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}"/>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="Apply now to become a coder. Learn coding in just 9 weeks." />
  <meta name="twitter:title" content="Apply Now | Code Belgium" />
  <meta name="twitter:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/apply" />
@endpush

@section('content')

<section class="apply_panel_inner">

	<div class="container">
  	<div class="col-12 col-md-8 mx-auto">
    	<h2>Apply to Codebelgium</h2>
      And join a thriving community of people who love what they do
      <div class="apply_panel_inner_box">
        {{ Form::open(array('action' => 'Front\FrontendController@applyStore')) }}

          {{ Form::text('name', null, array('placeholder' => 'Name', 'required') ) }}
          {{ Form::email('email', null, array('placeholder' => 'E-mail', 'required') ) }}
          {{ Form::text('phone', null, array('placeholder' => 'Phone', 'required') ) }}
          {{ Form::select('gender', array('M' => 'Male', 'F' => 'Female', 'O' => 'Others') ) }}
          <p>Course of your interest</p>
          {{ Form::select('course', array('coding' => 'Fullstack Software Engineering Bootcamp', 'coding-remote' => 'Remote Software Engineering Program') ) }}
          <p>Suitable batch for you</p>
          {{ Form::select('batch', array('1' => '6 Jan 2020 - 9 March 2020', '2' => '6 April 2020 - 9 Jun 2020', '3' => '6 Jul 2020 - 6 Sep 2020', '4' => 'Start Immediately') ) }}
          <p>How did you hear about us?</p>
          {{ Form::select('referral', array('social' => 'Social Media', 'google' => 'Google', 'linkedin' => 'Linkedin',  'banner' => 'Banners', 'news' => 'News/Media', 'friends' => 'Friends & Family', ) ) }}
          <label>
          {{ Form::checkbox('privacy', 'true', false, ['required'] ) }}By applying I accept the <a href="privacy-policy">Privacy Policy</a> and the <a href="terms">Terms</a> of Use
          </label>
          <label>
          {{ Form::checkbox('newsletter', 'true' ) }}I do want to receive updates and stay in touch with the Codebelgium community
          </label>
          <input type="hidden" name="g-recaptcha" id="recaptchaResponse">
            @error('g-recaptcha')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          {{ Form::submit('Apply') }}
        {{ Form::close() }}
      </div>     
    </div>
  </div>
</section>

@endsection

@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
   <div class="about_banner_panel"> 
    <picture>
      <source srcset="{{ asset(config('directory.assets-theme-images') . 'apply-banner.webp') }}" type="image/webp">
      <source srcset="{{ asset(config('directory.assets-theme-images') . 'apply-banner.jpg') }}" type="image/jpeg"> 
      <img src="{{ asset(config('directory.assets-theme-images') . 'apply-banner.jpg') }}" alt="Apply-CodeBelgium"/>
    </picture>
		
    <article>Apply</article>
   </div>

</section>

@endsection