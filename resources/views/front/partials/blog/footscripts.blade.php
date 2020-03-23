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
  
  {{-- Inline Sticky Header --}}
  <script>$(window).scroll(function(){if($(this).scrollTop()>0){$('header').addClass('sticky');}else{$('header').removeClass('sticky');}});</script>
  
  {{-- Superfish --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'superfish.min.js') }}"></script>
  {{-- Wow.js --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'wow.min.js') }}"></script>
  {{-- Nav Menu --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'navmenu.js') }}"></script>
  {{-- Scrolla Jquery --}}
  <script src="{{ asset(config('directory.assets-theme-js') . 'scrolla.jquery.min.js') }}"></script>
  {{-- reCaptcha --}}
  <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
  <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('GOOGLE_RECAPTCHA_KEY') }}', {action: 'contact_form'}).then(function(token) {
           var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
        });
    });
  </script>

  {{-- To hide Flash in 3 seconds --}}
  <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  </script>


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



  <!-- ZOHO Sales IQ Code -->

  <script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"0bfc39d310365581e442c50044694ef55a981a3ceb35e166b066581be9cca79f1a2010ab7b6727677d37b27582c0e9c4", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>

<!-- End Zoho sales IQ Code -->
  
  {{-- On Demand Page Scripts --}}
  @stack('js')
  
  {{-- On Demand Scripts --}}
  @stack('scripts')