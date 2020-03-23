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

  {{-- LinkedIn Insight Code --}}
    <script type="text/javascript">
      _linkedin_partner_id = "690251";
      window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
      window._linkedin_data_partner_ids.push(_linkedin_partner_id);
      </script><script type="text/javascript">
      (function(){var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript";b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);})();
      </script>
      <noscript>
      <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=690251&fmt=gif" />
    </noscript>
  {{-- LinkedIn Insight Code --}}

  {{-- Quora Pixel Code --}}
    <script>
    !function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
    qp('init', 'a7e6a435c6874274b9173daaac0c19b2');
    qp('track', 'ViewContent');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/a7e6a435c6874274b9173daaac0c19b2/pixel?tag=ViewContent&noscript=1"/></noscript>
{{-- Quora Pixel Code End --}}

{{-- Quora Action Code --}}
<script>qp('track', 'Generic');</script>
<script>qp('track', 'GenerateLead');</script>
<script>qp('track', 'CompleteRegistration');</script>
{{-- End of Quora Action Code --}}


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6Z8WLL');</script>
<!-- End Google Tag Manager -->


<!-- Event snippet for Filling Contact forms conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-723096576/CtnaCIj4iKgBEICo5tgC', 'event_callback': callback }); return false; } </script>



  <meta charset="utf-8"> <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset(config('directory.favicon') . 'favicon.ico') }}">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="@yield('keywords')" name="keywords">
  <meta content="@yield('description')" name="description">

  @stack('head')

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