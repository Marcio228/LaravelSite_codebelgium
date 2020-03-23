@extends('front.layouts.home')

@section('title', 'Coding Bootcamp Brussels | Code Belgium | About Us')

@push('head')
   
  <meta name="description" content="Our student's will not only have the knowledge but also the practical skills of programming. Code Belgium is a 9-week Coding bootcamp in Brussels, Belgium."/>
  <meta name="keywords" content="Coding Bootcamp Brussels  " />

  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Coding Bootcamp Brussels | Code Belgium | About Us" />
  <meta property="og:description" content="Our student's will not only have the knowledge but also the practical skills of programming. Code Belgium is a 9-week Coding bootcamp in Brussels, Belgium." />
  <meta property="og:url" content="https://www.codebelgium.com/about" />
  <meta property="og:image" content="{{ asset(config('directory.assets-theme-images') . 'about-banner.jpg') }}"/>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="Our student's will not only have the knowledge but also the practical skills of programming. Code Belgium is a 9-week Coding bootcamp in Brussels, Belgium." />
  <meta name="twitter:title" content="Coding Bootcamp Brussels | Code Belgium | About Us" />
  <meta name="twitter:image" content="{{ asset(config('directory.assets-theme-images') . 'about-banner.jpg') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/about" />

@endpush

@section('content')

  <section class="index_leftcurve_panel aboutpage_leftcurve_panel">
  	<div class="index_leftcurve animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
      <img src="{{ asset(config('directory.assets-theme-images') . 'about-left.jpg') }}" alt="coding bootcamp"/>
    </div>
      
    <div class="about_matter_rightcapsul">
    	<h4>Mission</h4>
      <article>Our mission is to prepare students into skilled IT professionals making them the best fit for the industry. Our student's will not only have the knowledge but also the practical skills of programming.
      </article>

      <h4>Our story</h4>
      <article>Looking at the skill gap in IT industry, where students have the knowledge but not enough skills to join a company. Code Belgium is an initiative to train our students from the scratch, no matter which educational background they belong to. Our students work on live projects and get placed with the industry’s top companies where their skills and expertise will speak for our students and they can rightly bag a good salary. We prepare our students in such a way that they can also independently start their own business and be the future industry experts.
      </article>
    </div>
      
  </section>


  <section class="abot_range_panel">
  	<div class="container">
      	<h2>Learning Made Easy</h2>
          <div class="row">
          	<div class="col-12 col-md-6">
              	<div class="abot_range_panelbox animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
             	   	 <img src="{{ asset(config('directory.assets-theme-images') . 'range-ico1.png') }}"  alt="coding bootcamp"/>
                   <article>
                   	<h5>PAYMENT FLEXIBILITY</h5>
                      <p>You get to choose payment options as per your convenience. Onetime payment for extra discount or Monthly payment for flexibility and exit anytime.</p>
                   </article>
                  </div>
              </div>
              
              <div class="col-12 col-md-6">
              	<div class="abot_range_panelbox animate" data-animate="fadeIn" data-duration="1s" data-delay="0.5s">
             	   	 <img src="{{ asset(config('directory.assets-theme-images') . 'range-ico2.png') }}"  alt="coding bootcamp"/>
                   <article>
                   	<h5>SCHOLARSHIPS</h5>
                      <p>We want everyone to learn and get benefits from our training. We have scholarships available based on individuals eligibility and also for females. Contact us to check eligibility.</p>
                   </article>
                  </div>
              </div>
              
              <div class="col-12 col-md-6">
              	<div class="abot_range_panelbox animate" data-animate="fadeIn" data-duration="1s" data-delay="1s">
             	   	 <img src="{{ asset(config('directory.assets-theme-images') . 'range-ico3.png') }}"  alt="coding bootcamp"/>
                   <article>
                   	<h5>COURSES IN ENGLISH</h5>
                      <p>All our courses are in English language only, as we provide content at an international level. So, you must be able to read, speak and understand Basic English.</p>
                   </article>
                  </div>
              </div>
              
              <div class="col-12 col-md-6">
              	<div class="abot_range_panelbox animate" data-animate="fadeIn" data-duration="1s" data-delay="1.5s">
             	   	 <img src="{{ asset(config('directory.assets-theme-images') . 'range-ico4.png') }}"  alt="coding bootcamp"/>
                   <article>
                   	<h5>GROUP DISCOUNTS</h5>
                      <p>Joining with group of friends? Get special discounts for the complete group. Or better, connect us with your college or company to get discounts for all!</p>
                   </article>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="about_why_numbers_panel">
  	<div class="container">
  		<div class="about_why_numbers_panel_why">
      	<h2>Why Us <span>In Numbers</span></h2>
          
          <div class="row">
          	<div class="col-12 col-sm-6 col-lg-3 about_why_numbers_panel_why_box animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
         	    	<img src="{{ asset(config('directory.assets-theme-images') . 'in-numbers-ico1.png') }}" alt="Code Belgium"/>
                  <p>
                  	<span>12</span>
                      TEACHERS
                  </p>
              </div>
              
              <div class="col-12 col-sm-6 col-lg-3 about_why_numbers_panel_why_box animate" data-animate="fadeIn" data-duration="1s" data-delay="0.5s">
         	    	<img src="{{ asset(config('directory.assets-theme-images') . 'in-numbers-ico2.png') }}" alt="MENTORS"/>
                  <p>
                  	<span>7</span>
                      LEARNING TECHNOLOGY
                  </p>
              </div>
              
              <div class="col-12 col-sm-6 col-lg-3 about_why_numbers_panel_why_box animate" data-animate="fadeIn" data-duration="1s" data-delay="1s">
         	    	<img src="{{ asset(config('directory.assets-theme-images') . 'in-numbers-ico1.png') }}" alt="mentors"/>
                  <p>
                  	<span>102</span>
                      STUDENTS JOINED
                  </p>
              </div>
              
              <div class="col-12 col-sm-6 col-lg-3 about_why_numbers_panel_why_box animate" data-animate="fadeIn" data-duration="1s" data-delay="1.5s">
         	    	<img src="{{ asset(config('directory.assets-theme-images') . 'in-numbers-ico4.png') }}" alt="mentors"/>
                  <p>
                  	<span>4</span>
                      BRANCHES
                  </p>
              </div>
        </div>
      </div>
      </div>
      
      
      <div class="block_capsul_panel animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
      	<div class="about_testicapsul">
          	<h2>Testimonials <span>What Students Say</span></h2>
          <div id="introCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
     
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
      		<img src="{{ asset(config('directory.assets-theme-images') . 'testi-user-ana.png') }}" />
              <p>My Instructor has become a key figure on my learning path. His contagious optimism and guide helps find my best alternative, and is a constant sourse of motivation. Always empathic listening connects me with my commitment and challenge  me to achieve my goals from values I can feel related.
              <span>Ana Reyes, Student</span>
              </p>
      </div>
      <div class="carousel-item">
        
        <img src="{{ asset(config('directory.assets-theme-images') . 'testi-user-danish.png') }}" />
              <p>My Instructor (Vinay Bansal) was an amazing person. He is full of knowledge and is expert in his field. With his great communication skills he enables students to discover new ideas and grow rapidly. He is an attentive person and a great professional."
              <span>Danish Kalim, Student</span>
              </p>
        
      </div>
      <div class="carousel-item">
       <img src="{{ asset(config('directory.assets-theme-images') . 'testi-user-amruta.jpg') }}" />
              <p>“After an intensive research, I selected them (Code Belgium). Their Bootcamp program is the best and was as required for my promotion. Joining them was best decision of my life.”"
              <span>Amruta Rathod, Alumni</span>
              </p>
        
        
      </div>
    </div>
    
    <!-- Left and right controls -->
    
  </div>
          
       
          </div>
      </div>
  </section>



  {{-- Our Partners --}}
<section class="partners_panel nobgcolor animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  <div class="container">
    <h2>Our partners</h2>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo1.png') }}"  alt="icici bank"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo2.png') }}"  alt="just dial"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo3.png') }}"  alt="go daddy"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo4.png') }}"  alt="flipkart"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo5.png') }}"  alt="dhl"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo6.png') }}"  alt="amazon"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo7.png') }}"  alt="smart smith"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo8.png') }}"  alt="payumoney"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo9.png') }}"  alt="paytm"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo10.png') }}"  alt="laracasts"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo11.png') }}"  alt="urban clap"/>
  </div>
</section>

@endsection



@section('slider')

<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  
   <div class="about_banner_panel"> 
    <img src="{{ asset(config('directory.assets-theme-images') . 'about-banner.jpg') }}" alt="coding bootcamp"/>
        <article>About Us</article>
   </div>

</section>

@endsection