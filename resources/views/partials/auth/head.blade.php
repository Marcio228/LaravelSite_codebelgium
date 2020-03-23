<head>
    {{-- Google Analytics Code --}}
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91994486-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-91994486-4');
  </script>

  {{-- Facebook Pixel Code --}}
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '356066998434495');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=356066998434495&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->


  <meta charset="utf-8"> <title>Code Belgium</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('directory.favicon') . 'favicon.ico') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('directory.favicon') . 'favicon.ico') }}">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset(config('directory.assets-theme-css') . 'bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset(config('directory.assets-theme-css') . 'flexslider.css') }}" type="text/css" media="screen" />	

  <!-- Libraries CSS Files -->
  <link href="{{ asset(config('directory.font-awesome') . 'css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset(config('directory.assets-theme-css') . 'animate.min.css') }}" media="screen and (min-width: 767px)">
	
 	<link href="{{ asset(config('directory.assets-theme-css') . 'style.css') }}" rel="stylesheet">
	<link href="{{ asset(config('directory.assets-theme-css') . 'media_screen.css') }}" rel="stylesheet">

  @stack('css')
  @stack('stylesheet')  
</head>