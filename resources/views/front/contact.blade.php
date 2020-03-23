@extends('front.layouts.home')

@section('title', 'Become a Web Developer | Contact Now | Code Belgium')

@push('head')
   
  <meta name="description" content="To Become a Web Developer  Contact Code Belgium’s Team in Brussels and Land a job in the best Tech companies."/>
  <meta name="keywords" content="Become a Web Developer" />

  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Become a Web Developer | Contact Now | Code Belgium" />
  <meta property="og:description" content="To Become a Web Developer  Contact Code Belgium’s Team in Brussels and Land a job in the best Tech companies." />
  <meta property="og:url" content="https://www.codebelgium.com/contact" />
  <meta property="og:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}"/>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="To Become a Web Developer  Contact Code Belgium’s Team in Brussels and Land a job in the best Tech companies." />
  <meta name="twitter:title" content="Become a Web Developer | Contact Now | Code Belgium" />
  <meta name="twitter:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/contact" />
@endpush

@section('content')

<section class="contact_mid_panel">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2510.728688804398!2d4.370761262645157!3d50.841437775642994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c5fbdb02dc25%3A0x570312b5a1c48ac4!2sWeWork!5e0!3m2!1sen!2sin!4v1560486671514!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <div class="left">
    	<div class="left_inner">
        	<article>
            	<h3>Our Office Address</h3>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Code Belgium, WeWork Belmont Court, Rue Belliard 53, Brussels 1000</p>
                 <p><i class="fa fa-phone" aria-hidden="true"></i>+44 20-8144-9991</p>
                 
                   <p><i class="fa fa-envelope" aria-hidden="true"></i> contact@codebelgium.com</p>
            </article>
        </div>
    </div>
    
</section>

@endsection

@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
   <div class="about_banner_panel"> 
		<img src="{{ asset(config('directory.assets-theme-images') . 'contact-banner.jpg') }}" alt="coding bootcamp"/>
        <article>Contact Us</article>
   </div>

</section>
@endsection