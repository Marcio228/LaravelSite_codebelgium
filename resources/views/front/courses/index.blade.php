@extends('front.layouts.home')

@section('title', 'Courses | Code belgium')

@section('content')

<section class="course_panel animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	<div class="container">
    	<h2>Our Programs</h2>
        <p>Launch a new fulfilling career path by joining our programs</p>
    </div>
</section>

<section class="course_panel_widebox">
	<div class="course_panel_widebox_imagecapsul animate" data-animate="fadeInRight" data-duration="1s" data-delay="0s">
        <picture>
            <source srcset="{{ asset(config('directory.assets-theme-images') . 'full-time-course.webp') }}" type="image/webp">
            <source srcset="{{ asset(config('directory.assets-theme-images') . 'full-time-course.jpg') }}" type="image/jpeg"> 
            <img src="{{ asset(config('directory.assets-theme-images') . 'full-time-course.jpg') }}" alt="coding bootcamp">
        </picture>
    </div>
    <div class="course_panel_widebox_matter">
    	<div class="course_panel_widebox_matter_inner">
    	<img src="{{ asset(config('directory.assets-theme-images') . 'code-ico.png') }}"   alt="fullstack course" class="course_panel_widebox_matter_left"/>
        <div class="course_panel_widebox_matter_right">
        	<div class="top">
            	<span>ON CAMPUS</span> 09 WEEKS
                <h3>Fullstack Software Engineering Bootcamp</h3>
                <p>This is a 9-week program where we teach you coding. No matter, if you are a beginner or from an IT background, we are open for all. With the help of Pre-Course, our students learn from basics, so that everybody starts at the same level. After the students are thorough with basics, we start our intensive bootcamp. We also provide career guidance, in which our mentors will guide students to get hired by the companies.

</p>

	<a href="courses/coding"> Learn More</a>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="course_panel_widebox">
	<div class="course_panel_widebox_imagecapsul animate" data-animate="fadeInLeft" data-duration="1s" data-delay="0s">
        <picture>
            <source srcset="{{ asset(config('directory.assets-theme-images') . 'remote-course.webp') }}" type="image/webp">
            <source srcset="{{ asset(config('directory.assets-theme-images') . 'remote-course.jpg') }}" type="image/jpeg"> 
            <img src="{{ asset(config('directory.assets-theme-images') . 'remote-course.jpg') }}" alt="remote-course">
        </picture>
    </div>
    <div class="course_panel_widebox_matter">
    	<div class="course_panel_widebox_matter_inner">
    	<img src="{{ asset(config('directory.assets-theme-images') . 'remote-ico.png') }}"   alt="coding bootcamp" class="course_panel_widebox_matter_left"/>
        <div class="course_panel_widebox_matter_right">
        	<div class="top">
            	<span>OFF CAMPUS</span> 
                <h3>Remote Software Engineering Program</h3>
                <p>This is a 1-year program for students and working professionals who wish to learn as per their comfort and flexibility. You can learn online from home or any place. In this, there will be a personal mentor assigned who will guide you throughout the course. There will be provision of courseware and other materials. This program is extended to one year where students can learn anytime between this period.

</p>

	<a href="courses/coding-remote"> Learn More</a>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection

@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
   <div class="about_banner_panel"> 
		<img src="{{ asset(config('directory.assets-theme-images') . 'courses-banner.jpg') }}" alt="coding bootcamp"/>
        <article>Transform Knowledge into Skill!</article>
   </div>

</section>

@endsection