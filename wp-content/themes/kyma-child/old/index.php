<?php 
$form_msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name=$_REQUEST['name']; 
	$email=$_REQUEST['email']; 
	$message=$_REQUEST['message']; 
	if (($name=="")||($email=="")||($message=="")){ 
		$form_msg = '
		<div class="alert">
			<span class="closebtn">×</span>  
			All fields are required, please fill the form again.
		</div>       
		'; 
			} 
	else{         
			$from="From: $name<$email>\r\nReturn-path: $email"; 
			$subject="Message sent using Unbranded Creative contact form"; 
			$mail_body = "name: " .$name . "\r\n" . "email: " .$email . "\r\n";
			$mail_body .= "\r\n message: ".$message;
			mail("info@unbrandedcreative.com", $subject, $mail_body, $from); 
			$form_msg = '
		<div class="alert success">
		<span class="closebtn">×</span>  
		Message Sent! We will contact you shortly.
		</div>       
		';  

	}    
}
?> 


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Unbranded Creative Firm</title>
	<meta name="description" content="">
	<meta name="keywords" content="creative agency">
	<meta name="author" content="Unbranded Creative">        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/theme-nearblack.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/unbranded.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>-child/old/css/font-opensans.css" rel="stylesheet" type="text/css">
</head>
<body class="boxed-layout">
	<div class="nav-container">
<!-- 		    <nav class="absolute transparent">
								<div class="nav-bar">
										
										<div class="module widget-handle offscreen-toggle right">
												<i class="ti-menu"></i>
										</div>
								</div>
								<div class="offscreen-container bg-dark text-center">
										<div class="close-nav">
												<a href="#">
														<i class="ti-close"></i>
												</a>
										</div>
										<div class="v-align-transform text-center">
												<a href="#"><img alt="Logo" class="image-xs mb40 mb-xs-24" src="img/logo-light.png"></a>
												<ul class="mb40 mb-xs-24">
														<li class="fade-on-hover"><a href="#"><h5 class="uppercase mb8">Single Link</h5></a></li>
												</ul>
												<p class="fade-half">
														3A Ton Duc Thang<br>
														Q1, Ben Nghe<br>
														(08) 88888 88888<br>
														info@unbrandedcreative.com
												</p>
												<ul class="list-inline social-list">
														<li>
																<a href="#">
																		<i class="ti-twitter-alt"></i>
																</a>
														</li>
														<li>
																<a href="#">
																		<i class="ti-dribbble"></i>
																</a>
														</li>
														<li>
																<a href="#">
																		<i class="ti-vimeo-alt"></i>
																</a>
														</li>
												</ul>
										</div>
								</div>
						</nav> -->

		</div>
		
		<div class="main-container">
					
			<section class="cover fullscreen image-slider slider-arrow-controls controls-inside parallax">
						<ul class="slides">
								<li class="overlay image-bg">
										<div class="background-image-holder">
												<img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>-child/old/img/bg01.jpg">
										</div>
										<div class="container v-align-transform">
												<div class="row">
														<div class="col-sm-12 text-center">
																<img alt="Logo" class="image-logo" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbraded-logo-initials.svg">
														</div>
												</div>
												
										</div>
										
										<div class="align-bottom text-center">
												<!-- <a class="btn btn-white mb32" href="#">LET's MEET US</a> -->
												<?php echo $form_msg; ?>
										</div>
								</li>
						</ul>
				</section><section class="image-bg bg-light overlay pt112 pb112 pt-xs-80 pb-xs-80">
						<div class="container">
								<div class="row">
										<div class="col-md-8 col-md-offset-2 col-sm-8 text-center">
												
												<h3 class="mb32">We are storytellers. Whether through the written word or a visual image, we use all the tools in our chest to create a compelling narrative.</h3>
												
										</div>
								</div>
								
						</div>
						
				</section><section class="image-bg parallax pt240 pb180 pt-xs-80 pb-xs-80">
				<div class="background-image-holder">
					<img alt="image" class="background-image" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/bg02.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<h1>CONTENT IS KING</h1>
							<p class="lead mb48 mb-xs-32">Every brand has a story. How was passion transformed into a brand? What message do you want to tell the world?<br><br>
							 Let us help tell your tale.
							</p>
							
						</div>
					</div>
					
				</div>
				
			</section>
			
			<section class="projects pt48">
						<div class="container">
								<div class="row pb24">
										<div class="col-sm-12 text-center">
												<ul class="filters mb0">
												</ul>
										</div>
								</div>
								
								<div class="row masonry-loader">
										<div class="col-sm-12 text-center">
												<div class="spinner"></div>
										</div>
								</div>
								<div class="row masonry masonryFlyIn">
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Branding">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/design/3a3.png">
																<div class="title">
																		<h5 class="uppercase mb0">3A Station Logo</h5>
																		<span>Branding / Design</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Branding">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="http://saigoneer.com/eat-drink/eat-drink-categories/saigon-food-culture/7401-video-saigoneer-x-pasteur-street-brewing-company-the-saigoneer-session" target="_blank">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/content/3.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Saigoneer Session Growler</h5>
																		<span>Branding / Content</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Branding">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="http://saigoneer.com/">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/design/saigoneer4.png">
																<div class="title">
																		<h5 class="uppercase mb0">Saigoneer</h5>
																		<span>Branding / Design</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Branding">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/design/saigonartmap.png">
																<div class="title">
																		<h5 class="uppercase mb0">Saigon Artmap</h5>
																		<span>Branding / Design</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Photo&Video">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/photo/6.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Six Senses Con Dao</h5>
																		<span>Photo / Interiors</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Photo&Video">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/photo/8.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">The Log</h5>
																		<span>Photo / Food</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Web">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="http://lusinespace.com/" target="_blank">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/web/lusinespace.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">L'Usine Website</h5>
																		<span>Webdesign / Webdev</span>
																</div>
														</a>
												</div>
										</div>		                
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Web">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="http://saigonartbook.com/" target="_blank">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/web/sgab.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Saigon Artbook Website</h5>
																		<span>Web Design</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Web">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="http://theblissmag.com/" target="_blank">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/web/bliss.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Bliss Magazine</h5>
																		<span>Webdesign / Webdev</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Photo&Video">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/photo/9.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Saigon's Lookout</h5>
																		<span>Photo / Food</span>
																</div>
														</a>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 masonry-item project" data-filter="Photo&Video">
												<div class="image-tile inner-title hover-reveal text-center">
														<a href="#">
																<img alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/photo/13.jpg">
																<div class="title">
																		<h5 class="uppercase mb0">Saigon's Lookout</h5>
																		<span>Photo / Food</span>
																</div>
														</a>
												</div>
										</div>
								</div>
								
						</div>
						
				</section>
				<section class="bg-primary">
						<div class="container">
								<div class="row">
										<div class="col-sm-12 text-center">
												<h3 class="mb0 inline-block p32 p0-xs">WE ARE SAIGONEER</h3>
												
										</div>
								</div>
								
						</div>

				</section>
				<section class="team">
						<div class="container">
								<div class="row">
										<div class="col-md-4 col-sm-6">
												<div class="image-tile outer-title text-center">
														<img class="serious" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/alberto-1.jpg">
														<img class="fun" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/alberto-2.jpg">
														<div class="title mb16">
																<h5 class="uppercase mb0">Alberto Prieto</h5>
																<span>Tech Guru<br></span>
														</div>
														<p class="mb0">

														</p>
												</div>
										</div>
										<div class="col-md-4 col-sm-6">
												<div class="image-tile outer-title text-center">
														<img class="serious" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/lee-1.jpg">
														<img class="fun" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/lee-2.jpg">
														<div class="title mb16">
																<h5 class="uppercase mb0">Lee Starnes</h5>
																<span>Creative Director</span>
														</div>
														<p class="mb0">

														</p>
												</div>
										</div>
										<div class="col-md-4 col-sm-6">
												<div class="image-tile outer-title text-center">
														<img class="serious" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/brian-1.jpg">
														<img class="fun" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbranded/portraits/brian-2.jpg">
														<div class="title mb16">
																<h5 class="uppercase mb0">Brian Letwin</h5>
																<span>Agency Director<br></span>
														</div>
														<p class="mb0">

														</p>
												</div>
										</div>
								</div>
								
						</div>
						
				</section>




			<section class="image-square right">
				<div class="col-md-6 p0 image">
					<div class="map-canvas" data-address="3A Ton Duc Thang, Q1, Ho Chi Minh" data-map-zoom="15" data-maps-api-key="AIzaSyCTbFyE_RkBbmcK606B9sn2fEB1lFtiDHw"></div>
				</div>
				<div class="col-md-6 content">
					<form class="form-email" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">

						<h6 class="uppercase text-center">Let's create Something!</h6>
						<input type="text" class="validate-required" name="name" placeholder="Your Name">
						<input type="text" class="validate-required validate-email" name="email" placeholder="Email Address">
<!-- 						<div class="col-sm-6">
							<div class="radio-group">
								<span class="title">My estimated timeframe is around</span>
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>4 Weeks</span>
									<input type="radio" name="timeframe" value="4 Weeks">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio active">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>8 Weeks</span>
									<input type="radio" name="timeframe" value="8 Weeks">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>12 Weeks</span>
									<input type="radio" name="timeframe" value="12 Weeks">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>18 Weeks</span>
									<input type="radio" name="timeframe" value="18 Weeks">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="radio-group">
								<span class="title">My estimated budget is around</span>
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>$3,000</span>
									<input type="radio" name="budget" value="$3,000">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio active">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>$6,000</span>
									<input type="radio" name="budget" value="$6,000">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>$9,000</span>
									<input type="radio" name="budget" value="$9,000">
								</div>
						
								<div class="planner-radio">
									<div class="mock-radio">
										<div class="radio-outer">
											<div class="radio-inner"></div>
										</div>
									</div>
									<span>&gt; $10,000</span>
									<input type="radio" name="budget" value="> $10,000">
								</div>
							</div>
						</div>	 -->							

						<textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
						<button type="submit">Send Message</button>

					</form>
				</div>
			</section>
		
			
					
			
					
			<footer class="footer-2 bg-dark text-center-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<a href="#"><img class="image-xxs fade-half" alt="Pic" src="<?php echo get_template_directory_uri(); ?>-child/old/img/unbraded-logo-initials.svg"></a>
						</div>
					
						<div class="col-sm-4 text-center">
							<span class="fade-half">
								© Copyright 2016 Unbranded Creative - All Rights Reserved
							</span>
						</div>
					
						<div class="col-sm-4 text-right text-center-xs">
							<ul class="list-inline social-list">
								<!-- <li><a href="#"><i class="ti-twitter-alt" target="_blank"></i></a></li> -->
								<li><a href="https://www.facebook.com/UnbrandedCreative/?fref=ts" target="_blank"><i class="ti-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/unbrandedcreative/"><i class="ti-instagram" target="_blank"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
		
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-80330822-1', 'auto');
		ga('send', 'pageview');
	</script>		

	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/flexslider.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/lightbox.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/masonry.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/twitterfetcher.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/spectragram.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/ytplayer.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/countdown.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/smooth-scroll.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/parallax.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>-child/old/js/scripts.js"></script>
</body>
</html>
