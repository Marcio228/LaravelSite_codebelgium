@extends('front.layouts.blog')

@section('title', "$mainpost->title | Code Belgium")

@section('description', "$mainpost->excerpt")

@section('keywords', "$mainpost->keywords")

@push('head')

  <meta property="og:type" content="Blogs"/>
  <meta property="og:title" content="{{ $mainpost->title }}" />
  <meta property="og:description" content="{{ $mainpost->excerpt }}" />
  <meta property="og:url" content="{{ $mainpost->link }}" />
  <meta property="og:image" content="{{ $mainpost->thumbnail_link }}"/>

  <meta name="twitter:card" content="Blogs" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="{{ $mainpost->description }}" />
  <meta name="twitter:title" content="{{ $mainpost->title }}" />
  <meta name="twitter:image" content="{{ $mainpost->thumbnail_link }}" />

  <link rel="canonical" href="{{ $mainpost->link }}" />
@endpush

@section('content')

<section class="blog_page_panel">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 blogdetails_panel">
        <h2>{{ $mainpost->title }}</h2>
        <img class="feature_image" src="{{ asset(config('directory.post-media') . $mainpost->thumbnail) }}" width="100%"  alt=""/>
        {!! $mainpost->content !!}      
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

<section class="slider_contanear headerafterheight  animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
</section>

@endsection