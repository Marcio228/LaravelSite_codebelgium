@extends('front.layouts.home')

@section('title', 'Brussels Coding Bootcamps | Blogs | Code Belgium')

@section('description', "Become a coder with Brussels Coding Bootcamps ,Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks.")

@section('keywords', "Brussels Coding Bootcamps,coding, bootcamps, programming, developer, software engineering, software developer, web developer, coder, java, python, swift, php, c++, javascript")

@push('head')

  <meta property="og:type" content="Blogs"/>
  <meta property="og:title" content="Brussels Coding Bootcamps | Blogs | Code Belgium" />
  <meta property="og:description" content="Become a coder with Brussels Coding Bootcamps ,Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks." />
  <meta property="og:url" content="https://www.codebelgium.com/blog" />
  <meta property="og:image" content="{{ asset(config('directory.assets-theme-images') . 'blog-banner.jpg') }}"/>

  <meta name="twitter:card" content="Blogs" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="Become a coder with Code Belgium that offers you an interactive and extensive Software Engineering Bootcamp and start coding with the best coding bootcamp in few weeks." />
  <meta name="twitter:title" content="Brussels Coding Bootcamps | Blogs | Code Belgium" />
  <meta name="twitter:image" content="{{ asset(config('directory.assets-theme-images') . 'blog-banner.jpg') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/blog" />
@endpush

@section('content')

<section class="blog_page_panel">
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-8">
              <div class="row">

                @foreach($posts as $post) 
                  <div class="col-12 col-md-6">
                      <div class="blog_page_panel_box">
                          <div class="blog_page_panel_box_thumb">
                              <img src="{{ asset(config('directory.post-media') . $post->thumbnail) }}"   alt=""  class="large"/>
                                <div class="social">
                                  <a href="https://www.facebook.com/sharer/sharer.php?u={{ $post->link }}"><img src="{{ asset(config('directory.assets-theme-images') . 'facebook-icon.png') }}"  alt=""/></a>
                                    <a href="http://twitter.com/share?text={{ $post->title }}&url={{ $post->link }}"><img src="{{ asset(config('directory.assets-theme-images') . 'twitter-icon.png') }}"  alt=""/></a>
                                </div>
                            </div>
                            <a href="{{ $post->link }}"> <h3>{{ $post->title }}</h3> </a>
                            <p>{{ $post->excerpt }}</p>
                            <a href="{{ $post->link }}" class="button">Read More</a>
                        </div>
                    </div>
                @endforeach    
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
                    <a href="{{ $post->link }}"> <img src="{{ asset(config('directory.post-media') . $post->thumbnail) }}" alt=""/> </a>
                    <article>
                      <a href="{{ $post->link }}"> <h4>{{$post->title}}</h4> </a>
                      {{$post->min_excerpt}}
                      <a href="{{ $post->link }}">Read more</a>
                    </article>
                  </div>
                @endforeach
              </div>
            @endif 


              {{-- Post Categories --}}
              @if($postcategories->count() > 0)  
                <div class="blog_page_right_box">
                  <div class="blog_page_right_box_heading">Categories</div>
                  <div class="blog_page_right_box_inner">
                    <div class="blog_page_right_box_inner_textarea">

                      @foreach($postcategories as $postcategory)
                        <a href="blogs/category/{{ $postcategory->slug }}"> {{ $postcategory->name }} </a>  
                      @endforeach

                    </div>
                  </div>
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
    <img src="{{ asset(config('directory.assets-theme-images') . 'blog-banner.jpg') }}" alt="coding bootcamp"/>
        <article>Blogs</article>
   </div>
</section>
@endsection