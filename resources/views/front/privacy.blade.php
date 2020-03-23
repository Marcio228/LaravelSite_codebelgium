@extends('front.layouts.home')

@section('title', 'Privacy Policy | Code Belgium | Brussels Belgium')

@section('description', "We provides this Privacy Policy to explain our practices regarding the collection, use, disclosure, and protection of information that apply to our Service.")

@section('keywords', "Privacy Policy code belgium,Brussels Coding Bootcamps,coding, bootcamps, programming, developer, software engineering, software developer, web developer, coder, java, python, swift, php, c++, javascript")

@push('head')

  <meta property="og:type" content="Privacy Policy"/>
  <meta property="og:title" content="Privacy Policy | Code Belgium | Brussels Belgium" />
  <meta property="og:description" content="We provides this Privacy Policy to explain our practices regarding the collection, use, disclosure, and protection of information that apply to our Service" />
  <meta property="og:url" content="https://www.codebelgium.com/blog" />
  <meta property="og:image" content="{{ asset(config('directory.assets-theme-images') . 'apply-banner.jpg') }}"/>

  <meta name="twitter:card" content="Privacy Policy" />
  <meta name="twitter:creator" content="@codebelgium" />
  <meta name="twitter:description" content="We provides this Privacy Policy to explain our practices regarding the collection, use, disclosure, and protection of information that apply to our Service." />
  <meta name="twitter:title" content="Privacy Policy | Code Belgium | Brussels Belgium" />
  <meta name="twitter:image" content="{{ asset(config('directory.assets-theme-images') . 'apply-banner.jpg') }}" />

  <link rel="canonical" href="https://www.codebelgium.com/privacy-policy" />
@endpush



@section('content')

	<div class="container">
	<div class="privacy-container">
		<p>We provides this Privacy Policy to explain our practices regarding the collection, use, disclosure, and protection of information that apply to our Service, as well as your choices regarding the collection and use of information. This Privacy Policy does not apply to information we collect by means (including offline) or from other sources other than through the Service.</p>

		<h3>The Data We Collect: </h3>
		<p>Among the types of Personal Data that this Website collects, by itself or through third parties, there are: Cookies; Usage Data; email address; phone number.
		Complete details on each type of Personal Data collected are provided in the dedicated sections of this privacy policy or by specific explanation texts displayed prior to the Data collection.
		Personal Data may be freely provided by the User, or, in case of Usage Data, collected automatically when using this Website.
		Unless specified otherwise, all Data requested by this Website is mandatory and failure to provide this Data may make it impossible for this Website to provide its services. In cases where this Website specifically states that some Data is not mandatory, Users are free not to communicate this Data without consequences to the availability or the functioning of the Service.
		Users who are uncertain about which Personal Data is mandatory are welcome to contact us.
		Any use of Cookies – or of other tracking tools – by this Website or by the owners of third-party services used by this Website serves the purpose of providing the Service required by the User, in addition to any other purposes described in the present document and in the Cookie Policy, if available.
		Users are responsible for any third-party Personal Data obtained, published or shared through this Website and confirm that they have the third party's consent to provide the Data to the us.</p>

		<h3>Processing of Data: </h3>
		<p>We take appropriate security measures to prevent unauthorized access, disclosure, modification, or unauthorized destruction of the Data.
		The Data processing is carried out using computers and/or IT enabled tools, following organizational procedures and modes strictly related to the purposes indicated. In some cases, the Data may be accessible to certain types of persons in charge, involved with the operation of this Website (administration, sales, marketing, legal, system administration) or external parties (such as third-party technical service providers, mail carriers, hosting providers, IT companies, communications agencies) appointed, if necessary, as Data Processors by us. The updated list of these parties may be requested from us at any time</p>

		<h3>Purpose of Data  Processing</h3>
		<p>The Data concerning the User is collected to allow the us to provide its Services, as well as for the following purposes: Analytics, Remarketing and behavioral targeting, Displaying content from external platforms, Heat mapping and session recording, User database management and Managing contacts and sending messages.
		Users can find further detailed information about such purposes of processing and about the specific Personal Data used for each purpose in the respective sections of this document.</p>

		<h3>User Rights: </h3>
		<p>The User can contact Codebelgium by sending written communication to the address Rue Belliard 53, Brussels 1000 with the reference “Data Protection”, or by sending an e-mail to the address contact@codebelgium.com attaching a copy of your ID, at any time and free of charge. The User shall at all times be able:</p>
		<ul>
			<li>To withdraw his/her consent.</li>
			<li>To obtain confirmation about whether personal data concerning the User is being processed by Ironhack.</li>
			<li>To access his/her personal data.</li>
			<li>To rectify inaccurate or incomplete data.</li>
			<li>To request the erasure of his/her data.</li>
			<li>To restrict the processing of personal data whenever any of the conditions of the data protection regulations are met.</li>
			<li>To request the portability of his/her data.</li>
			<li>File a complaint regarding the protection of his/her personal data with the competent national supervisory authority.</li>
		</ul>

		<p>These rights shall only be exercised where the requirements set forth in the current regulations are duly met.</p>

		<h3>Updates in Privacy: </h3>
		<p>Codebelgium may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from 18/07/2019.</p>
	</div>
	</div>	

@endsection


@push('stylesheet')
<style type="text/css">
	.privacy-container{
	  width: 100%;
	  display: inline-block;
	  padding:20px; 
	  background-color:#FFF;
	}

	.privacy-container h3{font-size:20px;  font-family: 'FiraSans-SemiBold';}
	.privacy-container p{width:100%; display:inline-block; vertical-align:top; margin:10px 0; fonts-size:14px;}
</style>
@endpush



@section('slider')
<section class="slider_contanear animate" data-animate="fadeIn" data-duration="1s" data-delay="0s">
	
   <div class="about_banner_panel"> 
		<img src="{{ asset(config('directory.assets-theme-images') . 'apply-banner.jpg') }}" alt=""/>
        <article>Privacy Policy</article>
   </div>


</section>

@endsection