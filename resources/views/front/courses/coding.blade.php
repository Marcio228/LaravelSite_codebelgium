@extends('front.layouts.home')

@section('title', 'Fullstack Software Engineering Bootcamp | Code belgium')

@section('content')



{{-- Course Info --}}
<section class="course_details_topcapsulpanel">
	<div class="course_details_left_capsul  animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
    <div class="course_details_left_capsul_inner">
      <h3>Learn to code. Become a software engineer (On Campus)</h3>
      <p>This is a 9-week program where we teach you coding. No matter, if you are a beginner or from an IT background, we are open for all. With the help of Pre-Course, our students learn from basics, so that everybody starts at the same level. After the students are thorough with basics, we start our intensive bootcamp. We also provide career guidance, in which our mentors will guide students to get hired by the companies.</p>
            
      <p><strong>NEW: Get a €500 early bird discount and check your eligibility for Scholarship!</strong></p>
            
      <a href="/apply">Apply Now</a>
    </div>
  </div>
    
  <div class="course_details_rightcapsul  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  	<article>Join Us to become an IT professional and get into top companies around the world.</article>
  </div>
</section>



<section class="course_details_inforfrmation_panel  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">

	<div class="container">
    <h2>Course Information</h2>

    <div class="informationboxtab">
      {{-- Tab Headings --}}
    	<div class="informationboxtab_top">
        <div class="inner inner1 informationboxtab_top_active">
          <a class=" tabbutton1"><span>Pre Course</span></a>  
        </div>
            
        <div class="inner inner2">
        	<a class="tabbutton2"><span>Learn it all</span> </a>  
        </div>
        
        <div class="inner inner3">
        	<a class=" tabbutton3"><span>Projects</span></a>  
        </div>
        
        <div class="inner inner4">
        	<a class="tabbutton4"><span>Career Guidance</span></a>  
        </div>
      </div>
        
      {{-- <div class="informationboxtab_weeks_panel">
      	<div class="left">Weeks</div>
        <div class="right">
        	<div class="digit">0-2</div>
          <div class="digit">2-4</div>
          <div class="digit">4-7</div>
          <div class="digit">7-9</div>
          <div class="digit">4</div>
          <div class="digit">5</div>
          <div class="digit">6</div>
          <div class="digit">7</div>
          <div class="digit">8</div>
          <div class="digit">10</div>
          <div class="digit">11</div>
          <div class="digit">12</div>
          <div class="digit">13</div>
          <div class="digit">14</div>
          <div class="digit">15</div>
        </div>
      </div> --}}
            
      <div class="informationboxtab_weeks_panel">
        <div class="left">Weeks</div>
        <div class="right">
          <div class="digit">1</div>
          <div class="digit">2</div>
          <div class="digit">3</div>
          <div class="digit">4</div>
          <div class="digit">5</div>
          <div class="digit">6</div>
          <div class="digit">7</div>
          <div class="digit">8</div>
          <div class="digit">9</div>
          <div class="digit">10</div>
          <div class="digit">11</div>
          <div class="digit">12</div>
          <div class="digit">13</div>
          <div class="digit">14</div>
          <div class="digit">15</div>
          <div class="digit">16</div>
        </div>
      </div>

      <div class="informationboxtab_contain">

      	<div class="tabstepbox1">
          <h3>Web Prework</h3>
          <p>This pre-course is for beginners to start with the basics and experienced ones to brush up their knowledge. This will help to bring all students at the same level in the bootcamp. A mentor will be assigned and will take you through the fundamentals of programming with JavaScript, HTML, CSS and many more. Completing and fully understanding the pre-work is essential for students to prepare themselves for the bootcamp. You can connect with your mentor over video call or by any other medium for doubts and queries. On completion of this course, you will be ready for our bootcamp.</p>
              
          <div class="row">
          	<div class="col-12 col-md-4">
              <ul>
              	<li>Web Fundamentals - How the web works</li>
              	<li>Command Line Terminal - Basic commands</li>
                <li>Git & Github</li>
              	<li>Documentation</li>
              </ul>
            </div>
              
            <div class="col-12 col-md-4">
            	<ul>
                <li>Object Oriented Concepts</li>
              	<li>Terminal - Basic commands</li>
                <li>Programming Foundations</li>
              	<li>Programming Ethics</li>
              </ul>
            </div>
            
            <div class="col-12 col-md-4">
            	<ul>
                <li>HTML / CSS - Foundations</li>
                <li>JavaScript - Foundations</li>
                <li>Tech Workflow</li>
                <li>LAMP Stack</li>
              </ul>
            </div>
          </div>
              
          <div class="informationboxtab_contain_perple">
          	<h4>Remote Prep</h4>
            <p>Beginners can learn this module part time from home, 1 to 2 months prior to the bootcamp as per your flexibility.</p>
          </div>
          
           <div class="informationboxtab_contain_sky">
          	<h4>Optional Module</h4>
            <p>This is an optional module for experienced ones. You can join this module to brush up your basics and fundamentals. It would be preferred to take at least one week of pre course training before the bootcamp.</p>
          </div>
        </div>


        <div class="tabstepbox2">
          <h3>Bootcamp</h3>
          <p>Here you begin your 9 weeks On-Campus training at Code Belgium. Below mentioned topics will be covered in this section and we make sure that your concepts are clear in all of them.</p>
              
          <div class="row">
            <div class="col-12 col-md-4">
              <ul>
                <li>Algorithmic Thinking</li>
                <li>Data Structures</li>
                <li>SQL Database</li>
              </ul>
            </div>
              
            <div class="col-12 col-md-4">
              <ul>
                <li>JavaScript Programming</li>
                <li>PHP Programming</li>
                <li>Wordpress Web Development</li>
              </ul>
            </div>
            
            <div class="col-12 col-md-4">
              <ul>
                <li>Wordpress SEO & Security</li>
                <li>MVC Architecture</li>
                <li>RestFul API</li>
              </ul>
            </div>
          </div>
          
          <div class="informationboxtab_contain_sky">
            <h4>Compulsary Module</h4>
            <p>This is the mandatory module of your course. You will learn all the concepts and also implement them alongside. Even if you are familiar with all the technologies, you will still learn a lot in this training.</p>
          </div>
        </div>


        <div class="tabstepbox3">
          <h3>Live Projects</h3>
          <p>On completion of the bootcamp, you will be given an opportunity to work on live projects of top IT companies where you can put all your knowledge and skills into real execution. This will play as a value addition to your portfolio.</p>
              
          <div class="row">
            <div class="col-12 col-md-4">
              <ul>
                <li>PHP Framework : Laravel</li>
                <li>JavaScript Framework : Vue.JS</li>
              </ul>
            </div>
              
            <div class="col-12 col-md-4">
              <ul>
                <li>AWS Server Management</li>
                <li>DigitalOcean & Kubernetes</li>
              </ul>
            </div>
            
            <div class="col-12 col-md-4">
              <ul>
                <li>PHP Dependency Management : Composer</li>
                <li>CDN : Cloud Delivery Network</li>
              </ul>
            </div>
          </div>
          
          <div class="informationboxtab_contain_sky">
            <h4>Compulsary Module</h4>
            <p>This is a very important module of your course. You will build projects out of the concepts that you learnt. You will feel the joy of building applications on your own.</p>
          </div>
        </div>

        <div class="tabstepbox4">
          <h3>Secure your Job</h3>
          <p>This is an optional module. However, we recommend students to take benefits from our industry specialists. Services like CV building and personal branding including interview mastery helps students to secure a job easily.</p>
              
          <div class="row">
            <div class="col-12 col-md-4">
              <ul>
                <li>Career Success</li>
                <li>Resume Makeover</li>
              </ul>
            </div>
              
            <div class="col-12 col-md-4">
              <ul>
                <li>Learning Linkedin</li>
                <li>Interview Mastery</li>
              </ul>
            </div>
            
            <div class="col-12 col-md-4">
              <ul>
                <li>Personal Branding</li>
                <li>Startup Mindset</li>
              </ul>
            </div>
          </div>
              
        </div>
          
      </div>
    </div>
  </div>
</section>



{{-- Salary Earning --}}
<section class="salary_earning_panel">
	<div class="salary_earning_panel_left  animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
  	<h2>Average Annual Salary<br>after this Bootcamp</h2>
      <div class="salary_earning_panel_left_matter">
 	    	<img src="{{ asset(config('directory.assets-theme-images') . 'salary-bullet.jpg') }}"   alt="salary graph"/>
        Software Developer
        <span>€60 000 Gross - €70 000</span>
      </div>
      
      <div class="salary_earning_panel_left_matter">
 	    	<img src="{{ asset(config('directory.assets-theme-images') . 'salary-bullet2.jpg') }}"   alt="salary graph"/>
        Full-Stack Developer
        <span>€55 000 Gross - €65 000</span>
      </div>
      
       <div class="salary_earning_panel_left_matter">
 	    	<img src="{{ asset(config('directory.assets-theme-images') . 'salary-bullet.jpg') }}"   alt="salary graph"/>
        Web Developer
        <span>€50 000 Gross - €60 000</span>
      </div>
      
       <div class="salary_earning_panel_left_matter">
 	    	<img src="{{ asset(config('directory.assets-theme-images') . 'salary-bullet.jpg') }}"   alt="salary graph"/>
        Mobile App Developer
        <span>€60 000 Gross - €70 000</span>
      </div>
    </div>
</section>



{{-- Instructor and Course Details --}}
<section class="coursedtl_instructor_panel">
	<div class="container">

    <h2>Your Instructor</h2>
    <div class="col-12 col-lg-6 mx-auto"> 
     	<div class="coursedtl_instructor_panel_large  animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
        <img src="{{ asset(config('directory.assets-theme-images') . 'instructor-vinaybansal.jpg') }}"  alt="instructor" class="coursedtl_instructor_panel_large_left"/>
        <div class="coursedtl_instructor_panel_large_right">
         	<span>Vinay Bansal</span>
         	Vinay is a Software Engineer and founder of a Multi National Company. He has trained and mentored students from all over the world, and helped them start their career. He is the best instructor any student could get.
        </div>
      </div>  
    </div>
      
    <h3>Batch</h3>       
    <div class="row">
     	
      <div class="col-12 col-md-4">
        <div class="coursedtl_instructor_panel_smallbox  animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
          <h4>Apr 6' 2020 – Jun 9' 2020</h4>
          <p><strong> Admissions Closed </strong></p>
        </div>
      </div>


      <div class="col-12 col-md-4">
        <div class="coursedtl_instructor_panel_smallbox  animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
          <h4>Jul 6' 2020 – Sep 9' 2020</h4>
          <p><strong>Pre Course Begins From : </strong> 1 June</p>
          <p> <strong>Mon - Fri:</strong> 9:00am - 5:00pm</p>
          <a href="/apply">Apply Now</a>
        </div>
      </div>


      <div class="col-12 col-md-4">
        <div class="coursedtl_instructor_panel_smallbox  animate" data-animate="fadeInUp" data-duration="1s" data-delay="0s">
          <h4>Oct 6' 2020 – Dec 9' 2020</h4>
          <p><strong>Pre Course Begins From : </strong> 1 Sep</p>
          <p> <strong>Mon - Fri:</strong> 9:00am - 5:00pm</p>
          <a href="/apply">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>



{{-- A typical Day Plan --}}
<section class="course_detail_typicial_panel">
	<div class="container">
    <h2>Your Day at Code Belgium</h2>
        
      <div id="amazingcarousel-container-1">
        <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;margin:0px auto 0px;">
          <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
                    
              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/coffee-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                    <h3>Revise</h3>
                    <p>9:00AM - 9:30AM</p>
                     “It's never too late - in fiction or in life - to revise.” Grab your coffee, review and discuss yesterday's work, then get ready for today's learning.

                  </article>
                </div>
              </li>

              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/lectures-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                   <h3>Lectures</h3>
                    <p>9:30AM - 11:30PM</p>
                    “Develop a passion for learning. If you do, you will never cease to grow.” Once you're ready, we start with an engaging & interactive lecture, before putting your knowledge into practice.

                  </article>
                </div>
              </li>
                      

              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/practice-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                	 <h3>Practice</h3>
                    <p>11:30AM - 2:00PM</p>
                    “Practice makes man perfect.” After the lecture, you practice and check your executional skill.

                  </article>
                </div>
							</li>


              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/break-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                   <h3>Break</h3>
                    <p>2:00PM - 3:00PM</p>
                    “Refresh and take a break.” Time for your lunch, some chat with your fellow mates, a break before we head further.

                  </article>
                </div>
              </li>


              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/discussion-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                   <h3>Discussion</h3>
                    <p>3:00PM - 4:30PM</p>
                    “Discussion is an exchange of knowledge.” You can come up with your doubts and queries, so that you don’t leave this room with any incomplete knowledge.

                  </article>
                </div>
              </li>


              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/implement-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                   <h3>Implement</h3>
                    <p>4:30PM - 6:00PM</p>
                    “Knowledge is not power; implementation of knowledge is power.” Make your concepts stronger by implementing whatever you have learnt in the day.

                  </article>
                </div>
              </li>


              <li class="amazingcarousel-item">
                <div class="course_detail_typicial_panel_inner">
                  <img src="{{ asset(config('directory.assets-theme-images') . 'routine/socialize-thumb.jpg') }}"   alt="coding bootcamp"/>
                  <article>
                   <h3>Socialize</h3>
                    <p>6:00PM - 7:00PM</p>
                    “Forget those phony socializing, and get in reality.” You can have a chilled time with your friends and fellow mates by socializing and sharing your views.

                  </article>
                </div>
              </li>





            </ul>
          <div class="amazingcarousel-prev"></div>
          <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">jQuery Image Scroller</a></div>
      </div>
    </div>
  </div>
</section>



{{-- Flexible Payments --}}
<section class="flexi_panel">

	<div class="flexi_panel_left">
    <h2>Flexible payments With Monthly Installments</h2>
        
    <div class="flexi_panel_left_box  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
      	<div class="flexi_panel_left_box_matter">
          <div class="title">4 Month Flexi Plan</div>
          <div class="maintext"><span>€2750</span> per Month</div>
        </div>
      <img src="{{ asset(config('directory.assets-theme-images') . 'prple-ico1.png') }}"  alt="payment" class="picico"/>
    </div>    
  </div>
    
    
  <div class="flexi_panel_right">
    <h2>One Time payment</h2>
        
    <div class="flexi_panel_right_box  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
    	<img src="{{ asset(config('directory.assets-theme-images') . 'prple-ico2.png') }}"  alt="one time payment" class="picico"/>
    	<div class="flexi_panel_right_box_matter">
        <div class="title">LOWEST COST</div>
        <div class="maintext"><span>€9500</span></div>
      </div>
    </div>   
  </div>
</section>


<section class="course_wnttogo_panel">
	<div class="course_wnttogo_panel_left  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
    <h2>Start Today With Just €750 Upfront Deposit</h2>
    <article>Don’t get left behind. Secure your spot soon and start the program</article>
      
    <h3> Scholarships and Discounts:</h3>
      
    <p>We have multiple scholarships and discounts available. Get in touch with our team to know more.</p>
    
    <p>Early bird Discount.</p>
    
    <p>Women in tech scholarship - To Reduce gender gap in Tech</p>
    
    <p>Group Discounts - Joining with friends?  Connect with our team for good offers.</p>
      
  </div>
  <div class="course_wnttogo_panel_right  animate" data-animate="fadeInRight" data-duration="1s" data-delay="0.5s">
  	<div class="course_wnttogo_panel_right_inner">
      <h2>Want to go further and learn to code in 9 weeks?</h2>
      <p>We are the best in Belgium.</p>
          
      <a href="/apply" class="applynow_button">Apply Now</a> <a href="#" class="callback_button">Request call back</a>
    </div>
  </div>
</section>

<section class="course_detais_bottom">
	<div class="contanear">
    <p>Our Alumni work at:</p>
  </div>
</section>


<section class="partners_panel nobgcolor animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
  <div class="container">
   	<h2>Our partners</h2>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo1.png') }}"  alt="icici bank"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo2.png') }}"  alt="just dial"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo3.png') }}"  alt="go daddy"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo4.png') }}"  alt="flipkart"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo5.png') }}"  alt="DHL"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo6.png') }}"  alt="amazon"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo7.png') }}"  alt="smart smith"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo8.png') }}"  alt="payumoney"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo9.png') }}"  alt="paytm"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo10.png') }}"  alt="laracasts"/>
    <img src="{{ asset(config('directory.assets-theme-images') . 'partners/spnsr-logo11.png') }}"  alt="urban clap"/>
  </div>
</section>

@endsection


@push('stylesheet')
<style>
  .informationboxtab_weeks_panel .right .digit{ width:calc(100% / 16 - 4px); }
</style>
@endpush



@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset(config('directory.assets-theme') . 'carouselengine/initcarousel-1.css') }}">
@endpush


@push('js')

<script src="{{ asset(config('directory.assets-theme') . 'carouselengine/initcarousel-1.js') }}"></script>    
<script src="{{ asset(config('directory.assets-theme') . 'carouselengine/amazingcarousel.js') }}"></script>


@endpush


@push('scripts')
<script>

$(document).ready(function(){
    $(".tabbutton1").click(function(){
        $(".tabstepbox1").fadeIn();
        $(".tabstepbox2").fadeOut();
        $(".tabstepbox3").fadeOut();
        $(".tabstepbox4").fadeOut();
        $(".inner1").addClass("informationboxtab_top_active");
        $(".inner2").removeClass("informationboxtab_top_active");
        $(".inner3").removeClass("informationboxtab_top_active");
        $(".inner4").removeClass("informationboxtab_top_active");
    });
    $(".tabbutton2").click(function(){
        $(".tabstepbox1").fadeOut();
        $(".tabstepbox2").fadeIn();
        $(".tabstepbox3").fadeOut();
        $(".tabstepbox4").fadeOut();
        $(".inner1").addClass("informationboxtab_top_active");
        $(".inner2").addClass("informationboxtab_top_active");
        $(".inner3").removeClass("informationboxtab_top_active");
        $(".inner4").removeClass("informationboxtab_top_active");
    });
    $(".tabbutton3").click(function(){
        $(".tabstepbox1").fadeOut();
        $(".tabstepbox2").fadeOut();
        $(".tabstepbox3").fadeIn();
        $(".tabstepbox4").fadeOut();
        $(".inner1").addClass("informationboxtab_top_active");
        $(".inner2").addClass("informationboxtab_top_active");
        $(".inner3").addClass("informationboxtab_top_active");
        $(".inner4").removeClass("informationboxtab_top_active");
    });
    $(".tabbutton4").click(function(){
        $(".tabstepbox1").fadeOut();
        $(".tabstepbox2").fadeOut();
        $(".tabstepbox3").fadeOut();
        $(".tabstepbox4").fadeIn();
        $(".inner1").addClass("informationboxtab_top_active");
        $(".inner2").addClass("informationboxtab_top_active");
        $(".inner3").addClass("informationboxtab_top_active");
        $(".inner4").addClass("informationboxtab_top_active");
    });
});
</script>

@endpush



@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
   <div class="about_banner_panel"> 
		<img src="{{ asset(config('directory.assets-theme-images') . 'course-details-banner.jpg') }}" alt="coding bootcamp"/>
        <article>Fullstack Software Engineering BootCamp </article>
   </div>

</section>

@endsection