<header  id="myHeader" class="animate" data-animate="fadeInRight" data-duration="1s" data-delay="0s">
  <div class="container">
    @include('flash::message')
    <div class="left">
      <div class="logo">
        <a href="/"> <img src="{{ asset(config('directory.logo') . 'front-header-logo.png') }}" alt="" /></a>
      </div>
      
      {{-- Header Left Menu --}}
      <nav id="nav-menu-container" > 
        {{-- Generated Menu --}}
        {!! $FrontHeaderMenuLeft->asUl(['class' => 'nav-menu']) !!}

      </nav>

    </div>		
  
    <div class="right">    
      {!! $FrontHeaderMenuRight->asUl() !!}                       
    </div>
  </div>	
</header>