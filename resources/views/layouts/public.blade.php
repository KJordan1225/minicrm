<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GA TEST CRM</title>
		
		<!-- Basic Page Needs
		================================================== -->
		<title>Gamma Alpha Chapter</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="HOME">
		<meta name="keywords" content="HOME">
		<meta name="twitter:card" content="summary_large_image" />
		
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script type="text/javascript" src="https://afarkas.github.io/lazysizes/lazysizes.min.js"></script>
		<!-- WEBSITE JS -->
				
		
		<!-- PAGE JS -->        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
        
		<!-- CSS 
		================================================== -->
		<link rel="stylesheet" href="{{ asset('assets/custom/css2/combined.min.css?innove') }}" type='text/css'>         
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//static.sitemantic.com/webbuilder/js/lightbox/src/css/lightbox.css">
		<link id="theme" rel="stylesheet" href="{{ asset('assets/custom/css2/default.css?innove') }}"  type='text/css'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Lato:400,700,300,100" type='text/css'>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />



		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="{{ asset('assets/custom/images2/favicon-32x32.png') }}">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
			<style id="footerBefore">
				.footerBefore:before {
					
				}
			</style>

		<!-- Fonts -->
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=Petit+Formal+Script&display=swap');
		</style>
	</head>
	
	<body>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
			fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<header class="blockHeader wb-header logo_left " fixed="true">
			<div class="container boxWidget">
				<!-- <div class="logoWidget logo logoTextSettingClass">
					<a href="#" title="">
						<span id="logoTextWrap" style="display:block;">
							<span class="websiteLogoName" style="color:#4b006e;font-family: Petit Formal Script;font-size:24px;margin-top:5%">
								Gamma Alpha Chapter
							</span>
							<span class="websiteLogoSlogan" style="color:#fff;font-family:Roboto;font-size:20px;margin-top:2.5%">
								Omega Psi Phi Fraternity, Inc.
							</span>
						</span>
					</a>
				</div>             -->
				<div class="navbar navbar-default navbar-static-top ">
					<div class="navbar-header" id="5170628" compid="5170628" pageid="0" component-data="{}">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>     
											
					<div class="navWidget navbar-collapse collapse">
						<ul class="parent-nav-ul nav navbar-nav navbar-right cl-effect-6">
							<li class="dropdown">
								<a href="{{ url('/') }}" pageslug="home" linktype="Page" class="siteNavLink">
									HOME
								</a>
							</li>
							<li class="dropdown">
								<a href="#" pageslug="about" linktype="Page" class="siteNavLink">
									ABOUT
								</a>
							</li>
							<li class="dropdown">
								<a href="{{ route('programs') }}" pageslug="programs" linktype="Page" class="siteNavLink" style="font-size: 12px">
									PROGRAMS
								</a>
							</li>
							<li class="dropdown">
								<a href="{{ url('/fullcalender') }}" pageslug="events" linktype="Page" class="siteNavLink">
									EVENTS
								</a>
                            </li>
							<li class="dropdown">
								<a href="{{ route('contactus') }}" pageslug="contact" linktype="Page" class="siteNavLink">
									CONTACT US
								</a>
							</li>
                            <li class="dropdown">
                            @guest
								<a href="{{ route('login') }}" pageslug="brosLogin" linktype="Page" class="siteNavLink">
									BROTHERS LOGIN
								</a>
								@endguest
								
								@auth
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<button type="submit">Logout</button>
									<!-- <a href="route('logout')"
											onclick="event.preventDefault();
														this.closest('form').submit();"
											style="color: #fff;">
										{{ __('Log Out') }}
									</a> -->
								</form>								
								@endauth
							</li>
						</ul>
					</div>
				</div>
			</div>
		<div class="container header-image-text"></div>
	</header>
	
	<div id="home" class="page wb-page">
		<style id="sectionStyle-5170488">
			#section-5170488:before {
				background-color:#4b006e;
				opacity:75%;content:""; 
				position:absolute; 
				top:0%; 
				display:block; 
				left:0%; 
				right:0%; 
				bottom:0%; 
				width:100%; 
				height:100%;
			}
		</style>
		<section id="section-5170488" class="wb-heroHeader dark" style="background:#4b006e url(assets/custom/images2/oppf-founders.png)  no-repeat center center;position: relative; overflow: hidden; background-size: cover;margin-top:0px">
			<div class="wb-heroHeader-wrapper">
				<div class="richTextWidget wb-heroHeader-content">
					<h2 class="main-heading" style="margin-bottom: 10px; text-align: center;">
						<span style="color: #cfb53b;">
							Welcome to Gamma Alpha Chapter
						</span>
					</h2>
					<h6 style="text-transform: capitalize; text-align: center;">
						<span style="color: #cfb53b;">
							Proudly Serving the Roanoke Valley
						</span>
					</h6>
				</div> 
			</div>
		</section>
		
		<div class="slot-container">
                            
			{{$slot}}
		
		</div>
		
		<footer class="footerBefore wb-footer  wb-footer theme-dark-color-11  " style="background: url(//images.unsplash.com/photo-1505236858219-8359eb29e329?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=1430&amp;amp;q=80) fixed no-repeat center center;position: relative; background-size: cover;margin-top:0px">
		<div class="container boxWidget">
			<div class="footer-content ">
				<div class="row ">
					<div class=" col-lg-4 col-md-4 col-sm-12 ">
						<div class="footer-logo ">
							<div class="richTextWidget  ">
								<a style="text-transform: capitalize;" href="#">
									Chapter Overview
								</a>
									<p>
									Guided by the cardinal principles of scholarship,
									manhood, perseverance, and uplift, Gamma Alpha 
									has cultivated a legacy of leadership, service,
									and excellence, fostering personal and 
									professional growth among its members and the 
									community as a whole.</p>
								</div>
							</div>
						</div>
				
						<div class="col-lg-4 col-md-4 col-sm-12 ">
							<div class=" ">
								<div class="richTextWidget  ">
									<h5>Contact</h5>
								</div>            
								<div class="richTextWidget footer-links ">
									<ul>
										<li>
											<span 
												style="margin-left: 5px;" 
												class="fa">&#61505;
											</span>
											<a href="#">
												Gamma Alpha Chapter, Roanoke, VA, 
												USA
											</a>
										</li>
										<li>
											<span 
												style="margin-left: 3px;" 
												class="fa">&#61589;
											</span> 
											<a href="#">123 456 7890</a>
										</li>
										<li>
											<span class="fa">&#62134;</span>
											<a href="#">support@yourdomain.com</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
						<div class="col-lg-4 col-md-4 col-sm-12 ">
							<div class=" ">
								<div class="richTextWidget  ">
									<h5>
										<span style="color: #ffffff;">Services</span>
									</h5>
								</div>            
								<div class="richTextWidget footer-links ">
									<ul>
										<li>
											<a href="#">Scholarship Campaigns</a>
										</li>
										<li>
											<a href="#">Development Initiatives</a>
										</li>
										<li>
											<a href="#">Health and Wellness Initiatives</a>
										</li>
									<ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container boxWidget">
				<div class="footer-copyright ">
					<div class="row ">
						<div class="richTextWidget col-lg-8 col-md-8 col-sm-12 ">
							<p>Copyright 2024 All Rights Reserved. Made by <span style="color:#6d6dff;font-weight:800;">IBShadowNet.com</span></p>
						</div>
						<div class="socialIconsWidget  col-lg-4 col-md-4 col-sm-12   ">
							<ul compid="5170648" pageid="0" component-data='{"socialIcons":[{"id":"icon1","slug":"facebook","url":"https:\/\/www.facebook.com\/","code":"&amp;#xf09a;"},{"id":"icon2","slug":"twitter","url":"https:\/\/www.twitter.com\/","code":"&amp;#xf099;"},{"id":"icon3","slug":"linkedin","url":"https:\/\/www.linkedin.com\/","code":"&amp;#xf0e1;"}]}' class="editSocialIcon"><li><a href="https://www.facebook.com/" target="_blank"><span class="fa">&#61594;</span></a></li>
								<li><a href="https://www.twitter.com/" target="_blank"><span class="fa">&#61593;</span></a></li>
								<li><a href="https://www.linkedin.com/" target="_blank"><span class="fa">&#61665;</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

        <script src="{{ asset('assets/custom/js2/manProgAcc.js') }}"></script>
        <script src="https://static.sitemantic.com/webbuilder/js/lightbox/src/js/lightbox.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>


        <script>
            window.lazySizesConfig = window.lazySizesConfig || {};
            window.lazySizesConfig.lazyClass = 'lazy';
            window.lazySizesConfig.srcAttr = 'data-original';

            wow = new WOW(
            {
            animateClass: 'animated',
            offset:       100
            }
        );
        wow.init();
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-38222064-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script language='JavaScript' type='text/javascript'>
            var ecommerceConfig={
                'bussinessAccount' :'',
                'paymentGatewayUrl':''
            }

            var imageBg = null;
                var imageBg = {"imageHeight":"","imageUrl":"","pageId":"home","text":"","bgOpacity":null,"bgColor":"cfb53b","showText":false,"parallaxEffect":false,"hide":false,"pageid":"164114"};

            $('.dropdown').find('a').each(function() {
                $(this).attr('href',$(this).attr('href')+"?innove");
            });
        </script>
        <script>
            var AppConfig = {

                'siteId': 'ee818810a7513046c506dc33b217ae59',
                'api_url': 'https://system.sitemantic.com/apps/api/',
                'api_key': '',
                'template' : 'inspire-hub'
            }

        </script>        
        <script custom-script-id="website_global" src="//static.sitemantic.com/webbuilder/js/website_global.js"></script>		
	</body>
</html>