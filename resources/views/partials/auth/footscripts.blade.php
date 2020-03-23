  {{-- JavaScript Files  --}}

  {{-- jquery --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'jquery.min.js') }}"></script>

  {{-- QuickQuote Script --}}
  <script>
    $(document).ready(function(){
      $(".quickquote_side_button").click(function(){
        $(".quickquote_side_box").addClass("quickquote_side_boxopen");
      });
  
      $(".quickboxclose").click(function(){
        $(".quickquote_side_box").removeClass("quickquote_side_boxopen");
      });
    });
  </script>
  
  {{-- Sticky Header --}}
  <script  src="{{ asset(config('directory.assets-theme-js') . 'header-sticky.js') }}"></script>
  
  {{-- Superfish --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'superfish.min.js') }}"></script>
  {{-- Wow.js --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'wow.min.js') }}"></script>
  {{-- Nav Menu --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'navmenu.js') }}"></script>
  {{-- Scrolla Jquery --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'scrolla.jquery.min.js') }}"></script>

  <script type="text/javascript">
    $('.animate').scrolla({
      mobile: false,
      once: true
    });
  </script>
  
  {{-- Bootstrap Bundle --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'bootstrap.bundle.min.js') }}"></script>
  {{-- FlexSlider --}}
  <script defer src="{{ asset(config('directory.assets-theme-js') . 'jquery.flexslider.js') }}"></script>
  
  {{-- On Demand Page Scripts --}}
  @stack('js')
  
  {{-- On Demand Scripts --}}
  @stack('scripts')