@extends('front.layouts.home')

@section('title', 'Best Coding Bootcamp | Code Belgium')

@push('head')
   
  <meta name="description" content="Become a coder with Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks."/>
  <meta name="keywords" content="Best Coding Bootcamp " />

  <meta property="og:type" content="website"/>
  <meta property="og:title" content="Become a Coder in just 9 weeks | Code Belgium" />
  <meta property="og:description" content="Become a coder with Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks." />
  <meta property="og:url" content="https://www.codebelgium.com" />
  <meta property="og:image" content="{{ asset(config('directory.assets-theme-images') . 'girlstudying.jpg') }}"/>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="Become a coder with Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks." />
  <meta name="twitter:title" content="Become a Coder in just 9 weeks | Code Belgium" />
  <meta name="twitter:image" content="{{ asset(config('directory.assets-theme-images') . 'girlstudying.jpg') }}" />

  <link rel="canonical" href="https://www.codebelgium.com" />
@endpush

@section('content')


<section>
	<div class="container">
    <h2 class="animate main-heading" data-animate="fadeIn" data-duration="1s" data-delay="0s">Why Code Belgium</h2>
    <div class="main_panel">

      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
      	<div class="main_panel_inner_box">
          <div class="thumb_cont">
            <div class="thumb">
           	  <img src="{{ asset(config('directory.assets-theme-images') . 'main-ico1.png') }}"   alt=""/> 
           	</div>
          </div>
         	<h3>Open for all backgrounds</h3>
          <p>Here at Code Belgium, you are trained from the scratch i.e. from basics, so no matter if you are a beginner or an experienced one. Don’t worry if you are not from an IT background, we are open for all.</p>
        </div>
        <div class="main_panel_inner_boxback"></div>   
      </div>
      
      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.5s">
      	<div class="main_panel_inner_box ">   
          <div class="thumb_cont">
           	<div class="thumb">
         	    <img src="{{ asset(config('directory.assets-theme-images') . 'main-ico2.png') }}"   alt=""/> </div>
            </div>
          	<h3>Promising Future</h3>
            <p>Unlike other courses, our courses are designed keeping in mind the best technologies. You can use your knowledge right away. You can begin your start-up, or get a job with this coding bootcamp. You will carry this knowledge for life!</p>
          </div>
        <div class="main_panel_inner_boxback"></div>    
      </div>
      
      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="1s">
      	<div class="main_panel_inner_box">
          <div class="thumb_cont">
          	<div class="thumb">
         	    <img src="{{ asset(config('directory.assets-theme-images') . 'main-ico3.png') }}"   alt=""/> </div>
            </div>
          	<h3>Personal training</h3>
            <p>Self learning can lack personal guidance from an expert. The courses in Code Belgium is structured in such a way that you get the personal attention from the best coding bootcamp industry expert. Our remote and classroom training helps our students to reach out to the mentors whenever needed.</p>
          </div>
        <div class="main_panel_inner_boxback"></div>  
      </div>
      
      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
      	<div class="main_panel_inner_box">
          <div class="thumb_cont">
     	    	<div class="thumb">
         	  	<img src="{{ asset(config('directory.assets-theme-images') . 'main-ico4.png') }}"   alt="Best Coding bootcamp"/> </div>
	          </div>
	        	<h3>Practical Learning</h3>
	          <p>Turn your knowledge into skills, through our extensive practical sessions where our students will work from easy to hard core problems with ease.</p>
	        </div>
        <div class="main_panel_inner_boxback"></div>  
      </div>
            
      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="0.5s">
      	<div class="main_panel_inner_box">
         	<div class="thumb_cont">
           	<div class="thumb">
         	    <img src="{{ asset(config('directory.assets-theme-images') . 'main-ico5.png') }}"   alt=""/> 
         	  </div>
          </div>
         	<h3>Results speaks</h3>
          <p>Our trained students get placed in world’s best IT industries within 3 months of course completion. We also guarantee you internship as part of our courses with our partner companies.</p>
        </div>   
        <div class="main_panel_inner_boxback"></div>
      </div>
            
      <div class="main_panel_inner animate" data-animate="fadeInUp" data-duration="1s" data-delay="1s">
      	<div class="main_panel_inner_box">
        	<div class="thumb_cont">
            <div class="thumb">
           	  <img src="{{ asset(config('directory.assets-theme-images') . 'main-ico6.png') }}"   alt=""/>
           	</div>
          </div>
        	<h3>Portfolio builder</h3>
          <p>We let you work on live projects of companies, and help you build your portfolio which will help you in getting hired easily. Code Belgium also trains and prepares our students to crack the interviews.</p>
        </div> 
        <div class="main_panel_inner_boxback"></div>  
      </div>
    </div>
  </div>
</section>



{{-- Left Curve --}}
<section class="index_leftcurve_panel">
	<div class="index_leftcurve animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
    <picture>
      <source srcset="{{ asset(config('directory.assets-theme-images') . 'coding-img.webp') }}" type="image/webp">
      <source srcset="{{ asset(config('directory.assets-theme-images') . 'coding-img.jpg') }}" type="image/jpeg"> 
      <img src="{{ asset(config('directory.assets-theme-images') . 'coding-img.jpg') }}" alt="Best Coding Bootcamp">
    </picture>
  </div>
    
  <div class="index_leftcurve_matter">
  	<div class="index_leftcurve_matter_inner animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
    	<h3>Work on Live Projects</h3>
      <h4>Forget those made up projects which are just for fun</h4>
      <p>Code Belgium provides course training and internships to our students which helps them to work on live projects. We prepare our students and make them corporate ready to get into the best companies and show their expertise from the first day.</p>
      {{-- <a href="courses/coding">Check out some live projects</a> --}}
      <a href="courses/coding">Check out our full-stack course</a>
    </div>
      
    <div class="index_leftcurve_matter_inner animate" data-animate="fadeIn" data-duration="1s" data-delay="1s">
    	<h3>Dedicated Career Coach</h3>
      <h4>Launch your career with the help of our Career Coaches</h4>
      <p>Our expert instructors mentor our students for an effective job search via resume review, mock interviews and strategy for building a job opportunity pipeline and getting a foot at the door of  top companies or to run your own start-up.</p>
      <a href="contact">Speak to us</a>
    </div>
</section>


{{-- Courses --}}
<section class="desgn_track_panel">
	<div class="container">
    <h2 class="animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">Designed for everyone, Focused on Results!</h2>
    <p>Our courses are designed to give you maximum knowledge in a short time. We focus on building your foundations and make your concepts strong so that you can learn any new technology.</p>
        
    <div class="row">
      <div class="col-12 col-md-6 desgn_track_panel_box animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
        <picture>
          <source srcset="{{ asset(config('directory.assets-theme-images') . 'fulltime-track.webp') }}" type="image/webp">
          <source srcset="{{ asset(config('directory.assets-theme-images') . 'fulltime-track.jpg') }}" type="image/jpeg"> 
          <img src="{{ asset(config('directory.assets-theme-images') . 'fulltime-track.jpg') }}" class="thumb" alt="FullStack Software Engineering">
        </picture>
             
        <h3>Fullstack Software Engineering Bootcamp</h3>
				<p>Learn fundamentals of Web Online with our Professional Mentors, before Bootcamp</p>
				<p>Advance your knowledge at Code Belgium Bootcamp with your instructor</p>
				<p>Start your internship remotely from your home, or alongwith your job</p>
                 
				<a href="courses/coding" class="link">Get in Track</a>
				<a href="contact" class="button">Speak to our Student Advisor</a>
            
      </div>
            
            
      <div class="col-12 col-md-6 desgn_track_panel_box animate" data-animate="fadeIn" data-duration="1s" data-delay="0.5s">
        <picture>
          <source srcset="{{ asset(config('directory.assets-theme-images') . 'remote-track.webp') }}" type="image/webp">
          <source srcset="{{ asset(config('directory.assets-theme-images') . 'remote-track.jpg') }}" type="image/jpeg"> 
          <img src="{{ asset(config('directory.assets-theme-images') . 'remote-track.jpg') }}" class="thumb" alt="Remote Software Engineering">
        </picture>

				<h3>Remote Software Engineering Program</h3>
				<p>Learn From Basics to Advanced from your home</p>
				<p>Self-paced, flexible & online. Learn from your home or while working</p>
				<p>Your personal mentor has got your back</p>

				<a href="courses/coding-remote" class="link">Get in Track</a>
				<a href="contact" class="button">Speak to our Student Advisor</a>
                     
      </div>
    </div>
  </div>
</section>





{{-- Testimonial Section --}}
<section>
	<div class="block_capsul_panel">
    <div class="block_capsul">
      <picture>
        <source srcset="{{ asset(config('directory.assets-theme-images') . 'screen.webp') }}" type="image/webp">
        <source srcset="{{ asset(config('directory.assets-theme-images') . 'screen.png') }}" type="image/png"> 
        <img src="{{ asset(config('directory.assets-theme-images') . 'screen.png') }}" alt="testimonial" class="left animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
      </picture>
   		{{-- <img src="{{ asset(config('directory.assets-theme-images') . 'screen.png') }}" alt="" class="left animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s"/> --}}
      <div class="right animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">

        <div id="introCarousel" class="carousel slide" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators"></ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">

						{{-- Testimonial Slide --}}
				    <div class="carousel-item active">
				      <div class="top">
				        FROM OUR DIRECTOR
				        <span>Build Strong Foundation and prepare corporate ready professionals.</span>
				      </div>
				      <div class="mid">
				        “We focus on making your concepts strong and mentor you to become the future experts!”
				      </div>
				      <div class="bottom">
				        <span>Sujata Bansal</span>
				        Sujata is the director of Code Belgium and Head of Operations.
			        </div>
				    </div>

				    {{-- Testimonial Slide --}}
				    <div class="carousel-item">
				      <div class="top">
				        FROM OUR ALUMNI
				        <span>Code Belgium is the Best Coding Bootcamp Institute</span>
				      </div>
				      <div class="mid">
				        “After an intensive research, I chose this institute (Code Belgium). Their Bootcamp program is the best and is designed as such that anyone can learn and become an expert coder. It helped me in my promotion. Joining them was best decision of my life.”
				      </div>
				      <div class="bottom">
				        <span>Amruta Rathod</span>
				        Amruta was working as junior Web developer and is now Senior Software Engineer.
			        </div>
				    </div>

				    {{-- Testimonial Slide --}}
				    <div class="carousel-item">
				      <div class="top">
				        FROM OUR STUDENT
				        <span>Best institute with best instructors</span>
				      </div>
				      <div class="mid">
                My Instructor has become a key figure on my learning path. His contagious optimism and guide helps find my best alternative and is a constant source of motivation. He helps me to connect myself with my commitment and challenges me to achieve my goals.

				      </div>
				      <div class="bottom">
				        <span>Ana Reyes</span>
				        Ana runs her own company and is looking to get into IT industry.
			        </div>
				    </div>

				  </div>
				</div>	                	
      </div>
    </div>
  </div>
</section>






{{-- Our Partners --}}
<section class="partners_panel animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  <div class="container">
   	<h2>Our partners</h2>
    @for ($i = 1; $i <= 11; $i++)
      <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo'. $i .'.png') }}"  alt=""/>
    @endfor{{-- 
  	<img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo1.png') }}"  alt="ICICI Bank"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo2.png') }}"  alt="Just Dial"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo3.png') }}"  alt="Godaddy"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo4.png') }}"  alt="Flipkart"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo5.png') }}"  alt="DHL"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo6.png') }}"  alt="amazon"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo7.png') }}"  alt="smartsmith"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo8.png') }}"  alt="PayuMoney"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo9.png') }}"  alt="Paytm"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo10.png') }}"  alt="Laracasts"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo11.png') }}"  alt="UrbanClap"/> --}}
  </div>
</section>


{{-- Blogs Section --}}
@if($posts->count() > 0)
  <section class="indexblog_panel">
  	<div class="container">
    	<h2>Our latest Blog</h2>
      <div class="row">

        @foreach($posts as $post)
          <div class="col-12 col-md-4 indexblog_panel_box animate" data-animate="fadeIn" data-duration="1s" data-delay="{{ ($loop->index) / 2 }}s">
          <img src="{{ asset(config('directory.post-media') . "$post->thumbnail") }}"   alt=""/>
          <a href="/blog/{{ $post->slug }}"><h3>{{ $post->title }}</h3></a>
          <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $post->published_date }}</div>
          <p>{{ $post->excerpt }}</p>        
          
          <a class="button" href="/blog/{{ $post->slug }}">View More</a>
        </div>
        @endforeach

      </div>
    </div>
  </section>
@endif

@endsection



@section('slider')

  
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  <div class="flexslider">
    <div class="top_canvas">
    
      <video poster="{{ asset(config('directory.assets-theme-images') . 'girlstudying.jpg') }}" playsinline autoplay muted loop>
        <source src="{{ asset(config('directory.assets-theme-images') . 'girlstudying.mp4') }}" type="video/mp4">
      </video>
    </div>       
  </div>
    
  <div class="upper_slider_panel">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-7 upper_slider_panel_left animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0.5s">
          <h2>Investing in Brains!</h2>
          <p>Become a coder with Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks.</p>
          <a href="courses/coding">Explore our program</a></a>
        </div>

        <div class="col-12 col-lg-5">
          <div class="upper_slider_panel_right animate" data-animate="fadeIn" data-duration="1s" data-delay="1s">
            <img src="{{ asset(config('directory.assets-theme-images') . 'rightico-1.png') }}" alt=""/>
            <h3>Bring out the coder in you!</h3>
            <p>Bootcamp courses in Code Belgium are designed for current world scenario and made to keep up with the latest technologies.</p>
            <a href="courses">View Courses</a>
            {{-- <a href="courses">Download syllabus</a> --}}
          </div>
          <div class="upper_slider_panel_right animate" data-animate="fadeIn" data-duration="1s" data-delay="1.5s">
            <img src="{{ asset(config('directory.assets-theme-images') . 'rightico-2.png') }}" alt=""/>
            <h3>Expertise your skills!</h3>
            <p>Become an expert in IT with the best Coding Bootcamp. Code Belgium is Belgium's only training institute to provide full Software Engineering Bootcamp with guaranteed internship and placement.</p>
            <a href="about">Decode us Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>

	{{-- Slider Scripts --}}
	@push('scripts')
	  {{-- Flex Slider --}}
	  <script type="text/javascript">
	    $(function(){
	      //SyntaxHighlighter.all();
	    });
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>
  @endpush

  @push('stylesheet')
    <style>
      .main-heading{
        text-align: center;
        padding-top: 40px;
        font-size: 35px;
        font-family: 'FiraSans-SemiBold';
      }
    </style>
  @endpush

@endsection