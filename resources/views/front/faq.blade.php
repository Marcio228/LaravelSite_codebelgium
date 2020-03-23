@extends('front.layouts.home')

@section('title', 'FAQ | Code belgium | Coding BootCamp')

@push('head')
   
  <meta name="description" content="Know more from our Frequently Asked Questions. 9-week Software Engineering Bootcamp"/>
  <meta name="keywords" content="Coding Bootcamp " />

  <meta property="og:type" content="website"/>
  <meta property="og:title" content="FAQ | Code belgium | Coding BootCamp" />
  <meta property="og:description" content="Know more from our Frequently Asked Questions. 9-week Software Engineering Bootcamp" />
  <meta property="og:url" content="https://www.codebelgium.com/faq" />
  <meta property="og:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}"/>

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="Know more from our Frequently Asked Questions. 9-week Software Engineering Bootcamp" />
  <meta name="twitter:title" content="FAQ | Code belgium | Coding BootCamp" />
  <meta name="twitter:image" content="{{ asset(config('directory.logo') . 'front-header-logo.png') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/faq" />
@endpush

@section('content')

<section class="blog_page_panel">
	<div class="container">
    	<div class="row">
        	
            <div class="col-12 col-lg-8">
            	 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Why choose Code Belgium? 
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                	Code Belgium trains students from scratch in 9 weeks, no matter which educational background they belong to. Also our students work on live projects and get hired from the industry’s best IT companies. We have an on campus as well as off campus training depending on the flexibility of students.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       How can I apply for the boot camp?
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                	You can apply by submitting the form provided. Our student advisor will then get in touch with you through Skype or any other video call and will try to understand your requirements in more detail. Soon after that you will get a mail regarding your selection and further process.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       What is the fee?
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                	The fee for this bootcamp is €6000. You have an option to pay it onetime or by monthly installments.
                </div>
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Can I learn this course online?
                    </a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                <div class="panel-body">
                	Yes, our Remote Software Engineering Program is designed for students or working professionals who can learn according to their own comfortable timing and place. A mentor will be assigned who will guide you throughout the course. You can reach out to him anytime with your doubts and queries.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                      Can I learn from home?
                    </a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                <div class="panel-body">
                     Yes, you can learn this from home. We have a Remote Software Engineering Program for students or working professionals who wish to learn in their comfortable timings. Kindly learn more about the course in the Courses page.
                </div>
            </div>
        </div>
        
	<div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                     Is there any placement assistance?                   
                    </a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                <div class="panel-body">
                	Yes, our expert instructors mentor our students with job assistance. We assist in CV building, mock interviews building an overall job opportunity pipeline and getting a foot at the door of top companies.
                </div>
            </div>
        </div>

         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeven">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Who can join this boot camp?
                    </a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                <div class="panel-body">
                  Anyone who is interested in coding and programming irrespective of their age and educational backgrounds as well as who can read, speak and understand English.
                </div>
            </div>
        </div>

         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEight">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Do you provide internships?
                    </a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                <div class="panel-body">
                  Yes, we provide internships to our students where they will be working on live projects of companies.
                </div>
            </div>
        </div>

         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                      What are the timings of the boot camp?
                    </a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                <div class="panel-body">
                   The timing of the bootcamp will be from 9am – 7pm. It’s a 9 week program.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTen">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       I am from a non IT background, so can I apply for this bootcamp?
                    </a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                <div class="panel-body">
                  Yes, you can apply for this boot camp as we teach you from scratch. We have a pre course session where you will be taught from basics.  Learn more about our program in the Courses page. 
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEleven">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Are there any easy installment options for the payment of fees?
                    </a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                <div class="panel-body">
                  Yes, we provide students payment flexibility so that their learning won’t be compromised. We have an option of onetime as well as monthly installments according to the students flexibility. Discounts are also available in certain cases.  Please get in touch to know about discounts and scholarships available at Code Belgium.
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwelve">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       I am not from Belgium, can I join this course?
                    </a>
                </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                <div class="panel-body">
                  Yes, our Remote Software Engineering Program is designed for students or working professionals who can learn according to their own comfortable timing and place. A mentor will be assigned to you who will guide throughout the course. You can reach out to him anytime with your doubts and queries.
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThirteen">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseTen">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                      What is the course duration?
                    </a>
                </h4>
            </div>
            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                <div class="panel-body">
                  The course duration is of 9 weeks. You can start the Pre course even before the boot camp starts to brush up with the basics.
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFourteen">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       Will I be certified after this course?
                    </a>
                </h4>
            </div>
            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                <div class="panel-body">
                  Yes, you will be given a certificate on completion of this boot camp. 
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFifteen">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       I already have basic programming knowledge, should I still join?
                    </a>
                </h4>
            </div>
            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                <div class="panel-body">
                  Of Course! Our program covers from basics to advanced development skills. Even if you are an experienced developer, you will also learn the advanced skills from this course. 
                </div>
            </div>
        </div>

            <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSixteen">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                        <i class="more-less fa fa-plus" aria-hidden="true"></i>
                       In which language bootcamp is conducted?
                    </a>
                </h4>
            </div>
            <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                <div class="panel-body">
                  All our courses are in English language only, as we provide content at an international level. So, you must be able to read, speak and understand Basic English. 
                </div>
            </div>
            </div>

        </div>
    </div>
    


    <div class="col-12 col-lg-4">      
        <div class="blog_page_right_box">
          <div class="blog_page_right_box_heading">Our Courses</div>
            <div class="blog_page_right_box_inner">
              <div class="blog_page_right_box_inner_textarea">
                  <a href="/courses/coding">Fullstack Software Engineering Bootcamp</a>  
                    <a href="/courses/coding-remote">Remote Software Engineering Program</a>  
                </div>
            </div>
        </div>
        

        {{-- Blogs Sidebar --}}
        @if($newposts->count() > 0)
          <div class="blog_small_boxright_panel">
            <h3>Latest Blog</h3>

            @foreach($newposts as $post)
              <div class="blog_small_boxright">
                <a href="{{ $post->link }}"><img src="{{ asset(config('directory.post-media') . $post->thumbnail ) }}" alt=""/> </a>
                <article>
                  <a href="{{ $post->link }}"><h4>{{$post->title}}</h4> </a>
                  {{$post->min_excerpt}}
                  <a href="{{ $post->link }}">Read more</a>
                </article>
              </div>
            @endforeach
          </div>
        @endif 
                
            
            </div>
        </div>
    </div>
</section>

@endsection

@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
 	<div class="about_banner_panel"> 
		<img src="{{ asset(config('directory.assets-theme-images') . 'faq.jpg') }}" alt="coding bootcamp"/>
        <article>FAQ</article>
   </div>

</section>

@endsection