<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pragyan Summit 2k16</title>
		<meta name="description" content="Pragyan’s Youth Business Summit is an opportunity for young minds to congregate under a single roof, and participate in fruitful discussions with the pioneers of our nation. Hear the outlooks of some of the brightest minds of the nation; from technology to management, from multinational companies to leading startups. Prepare to broaden your horizons and open up your mind, while you get the chance to interact with these exceptional individuals and share your innovative ideas. As a participant of the summit, you aren’t just a spectator. You are a cog in the wheel that is moving towards revolutionizing our nation in all aspects. 
Let’s celebrate ideas. Let’s celebrate the youth. Let’s celebrate technology." />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="Codeply">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />
		<link rel="stylesheet" href="{{ asset('/css/unslider.css') }}" />
		<script async="" src="//www.google-analytics.com/analytics.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-19500581-1', 'auto');
		ga('send', 'pageview');
		</script>


		<script>var base_url = "{{ action('ViewController@index') }}";</script>
		<meta name="_token" content="{{ csrf_token() }}"/>

	</head>
	<body>
		<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="page-scroll" href="#first"><img src="{{asset('/images/pragyanlogo.png')}}" class="img-responsive" style="height:60px"></a><!--
																						 <a class="navbar-brand page-scroll" href="#first" style="overflow:none">
																						 Pragyan Summit</a>-->
				</div>
				<div class="navbar-collapse collapse" id="bs-navbar">
					<ul class="nav navbar-nav">
						<li>
							<a class="page-scroll" href="#one">Intro</a>
						</li>
						<!-- <li>
						     <a class="page-scroll" href="#two">Highlights</a>
						     </li> -->
						<li>
							<a class="page-scroll" href="#three">Speakers</a>
						</li>
						<li>
							<a class="page-scroll" href="#four">Schedule</a>
						</li>
						<li>
							<a class="page-scroll" href="#sponsors">Sponsors</a>
						</li>
						<li>
							<a class="page-scroll" href="#venue">Venue</a>
						</li>
						<li>
							<a class="page-scroll" href="#last">Register</a>
						</li>
						<li><a class="page-scroll" href="#contacts">Contact</a></li>
					</ul>
					<!-- <ul class="nav navbar-nav navbar-right">
					     <li>

					     About
					     </li>
					     </ul> -->
				</div>
			</div>
		</nav>
		<header id="first" style="background-image:url('{{asset('/images/bg1.jpg')}}')">
			<!-- <header id="first" style=""> -->
			<div class="header-content">
				<div class="inner" id="headertext">
					<center>
						<h4>
							<img src="{{asset('/images/pragyanlogo.png')}}" class="img-responsive">
						</h4>
						<h1 style="font-family:'Lato';">Pragyan Youth Business Summit 2016</h1>
						<hr>
						<a href="#one" class="btn btn-primary btn-xl page-scroll">Learn More</a>
					</center>
				</div>
			</div>
		</header>
		
		<section class="bg-primary" id="one" >
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<h2 class="margin-top-0 text-primary">About us</h2>
						<br>
						<p class="text-faded">
							Pragyan’s Youth Business Summit is an opportunity for young minds to congregate under a single roof, and participate in fruitful discussions with the pioneers of our nation. Hear the outlooks of some of the brightest minds of the nation; from technology to management, from multinational companies to leading startups. Prepare to broaden your horizons and open up your mind, while you get the chance to interact with these exceptional individuals and share your innovative ideas. As a participant of the summit, you aren’t just a spectator. You are a cog in the wheel that is moving towards revolutionizing our nation in all aspects.
							<br>
							Let’s celebrate ideas. Let’s celebrate the youth. Let’s celebrate technology.
						</p>
						<a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		<!-- <section id="two">
		     <div class="container">
		     <div class="row">
                     <div class="col-lg-12 text-center">
                     <h2 class="margin-top-0 text-primary">Flexible Layouts</h2>
                     <hr class="primary">
                     </div>
		     </div>
		     </div>
		     <div class="container">
		     <div class="row">
                     <div class="col-lg-4 col-md-4 text-center">
                     <div class="feature">
                     <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                     <h3>Responsive</h3>
                     <p class="text-muted">Your site looks good everywhere</p>
                     </div>
                     </div>
                     <div class="col-lg-4 col-md-4 text-center">
                     <div class="feature">
                     <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                     <h3>Customizable</h3>
                     <p class="text-muted">Easy to theme and customize with SASS</p>
                     </div>
                     </div>
                     <div class="col-lg-4 col-md-4 text-center">
                     <div class="feature">
                     <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                     <h3>Consistent</h3>
                     <p class="text-muted">A mature, well-tested, stable codebase</p>
                     </div>
                     </div>
		     </div>
		     </div>
		     </section> -->
		<section id="three" class="no-padding">
			<div class="container-fluid">
				<h3 class="text-center text-primary">Keynote Speakers</h3>
				<hr>
				<br>
				<div class="row no-gutter">
					
					<div class="col-lg-4 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Sudhakar Ram</div>
							<div class="about">
								Avid blogger , anchor ,author of the best seller “The Connected Age” and a recipient of the CNBC Asia’s “India’s Business Leader of the Year” are just a few of the  many things that makes him stand out among the rest of them. A multifaceted personality, Sudhakar Ram is the Chairman, Managing Director and Chief Executive Officer of the Global software phenomenon “Mastek”. He is an alumnus of the prestigious IIM-Calcutta and Loyola College, Chennai. “Mastek” was the brainchild of Sudhakar Ram and three other MBA Graduates from IIM Ahmedabad. He is among the first ones to prove why venturing into entrepreneurship is the most sensible and rewarding investment ever made. </div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/sudhakarram.jpg')}}" class="img-responsive" alt="Image 1">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3> Sudhakar Ram</h3>
										<h4>CEO and MD of Mastek</h4>
										<!-- <i class="icon-lg ion-ios-search"></i> -->
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Rajeev Gupta</div>
							<div class="about">
								Creating his mark as an assistant collector in the year 1981 on a small time scale, Shri Rajeev Gupta slowly escalated the ranks of various organizations from becoming the secretary of various cadres to becoming a commissioner for a private cadre in Agra, Gorakhpur and Uttar Pradesh. He then proceeded to become the Managing Director of the Agricultural Co-Op of India, taking a seat at the Ministry of Youth Affairs and Sports as the Secretary. Within a span of 32 years, Shri Rajeev Gupta has become well known in the industry for his role in various private cadres to agriculture, transport and even defense on a national scale. He has also received training from various institutes such as the Uttarakhand Academy of Administration, the National Informatics Centre, HUDCO and the Indian Institute of Management, Bangalore.
							</div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/rajeevgupta.jpg')}}" class="img-responsive" alt="Image 2">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Rajeev Gupta</h3>
										<h4>Secretary, Youth Affairs, Govt. of India</h4>
										<!-- <i class="icon-lg ion-ios-search"></i> -->
									</div>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-lg-4 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Kumud Srinivasan</div>
							<div class="about">
								Focused, motivated, natural leader. These are but a few of the many adjectives that can be used to describe Kumud Srinivasan, the President of Intel India. Her extensive career spans over 28 years and tracks a growth from Director, Factory Automation at Intel, New Mexico to President of Intel's Indian operations. Her leadership roles have seen her gain experience in IT, business growth, external partnerships, and site operations, across Intel’s global footprint. This University of California, Berkeley alumnus also serves on several national and international education and industry boards. She also currently holds the position of Chairperson of the National Institute of Technology, Tiruchirappalli. This Youth Business Summit is your chance to hear Kumud Srinivasan voice her views and goals.
							</div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/kumudsrinivasan.jpg')}}" class="img-responsive" alt="Image 4">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Kumud Srinivasan</h3>
										<h4>President, Intel India</h4>
										<!-- <i class="icon-lg ion-ios-search">Thala</i> -->
									</div>
								</div>
							</div>
						</a>
					</div>
					
				</div>
				<br>
				<br>
				
				<center><h3 class="text-center text-primary">Panelists</h3></center>
				<hr>
				<br>

				<div class="row no-gutter">
					<div class="col-lg-4 col-lg-offset-2 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">
								Anand Subramanian
							</div>
							<div class="about">
								Meet Anand Subramanian , the Senior Director of Marketing Communications and Spokesperson of OLA Cabs, India’s smartest and largest cab network. Being an integral part of many successful tech startups like ‘Cocubes.com’, ‘Future Vista view Edutech Pvt Ltd’ and many more, has helped him gain immense experience as a marketing and communication leader and has made him the one stop solution provider at Ola Cabs . He has been a torchbearer in the brand building of startups in India. Stay tuned to hear him share Ola’s take on “Make in India”  campaign , discuss the necessity of environmental policies to be adopted by startups,reveal Ola’s future plans and much more. </div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/anandsubramanian.jpg')}}"class="img-responsive" alt="Image 3">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Anand Subramanian</h3>
										<h4>Director of Marketing Communication, Ola Cabs</h4>
										<!-- <i class="icon-lg ion-ios-search"></i> -->
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Dheeraj Sinha</div>
							<div class="about">
								A man who wears many hats, Dheeraj Sinha leads the strategic planning function for Grey (WPP Group) and is also the author of two highly acclaimed books – ‘Consumer India – Inside the Indian Mind and Wallet’, and ‘India Reloaded – Inside the Resurgent Indian Consumer Market’. A man with years of experience, he has worked for huge brands and companies such as Emirates, Colgate, Reliance Mobile, MasterCard, and many more. The many accolades he has to his name include the Jay Chiat Planning Award, the Asian Marketing Effectiveness Award and the Yahoo Big Idea Chair. He is also a three time recipient of the prestigious Atticus Awards, and was named in CampaignAsia’s top 40 under 40 list for 2014 for advertising and marketing. Hear what he has to say on the ‘Make In India’ campaign at Pragyan’s Youth Business Summit 2016. </div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/dheerajsinha.jpg')}}" class="img-responsive" alt="Image 4">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Dheeraj Sinha</h3>
										<h4> Chief Strategy Officer, GREY<br>author, Consumer India-Inside the Indian mind and wallet</h4>
										<!-- <i class="icon-lg ion-ios-search">Thala</i> -->
									</div>
								</div>
							</div>
						</a>
					</div>


					<div class="col-lg-4 col-lg-offset-2 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Govindraj Ethiraj</div>
							<div class="about">
								Govindraj Ethiraj is the Founder of Ping Digital Broadcast, a start-up television knowledge, news and  talent network for digital audiences. This television and print journalist is also the founder of www.indiaspend.org, India’s first data journalism initiative and social entrepreneurship venture. Not one to fit in with conventional roles, he has extended his profile by writing  for both Forbes India and the Business Standard and is also a Consulting Editor with television channel Headlines Today where he presently anchors the show: Bottomline. He has sown the seed for several leading journalistic mediums: The Founder-Editor in Chief of Bloomberg TV, India, Editor (New Media) Business Standard newspaper and five years with CNBC- TV18 where he actively drove the channels expansion initiatives. Govindraj Ethiraj will be taking on the role of moderator at the Youth Business Summit.
							</div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/govindraj.jpg')}}" class="img-responsive" alt="Image 4">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Govindraj Ethiraj</h3>
										<h4>Founder, Ping Digital Broadcast & www.indiaspend.org</h4>
										<!-- <i class="icon-lg ion-ios-search">Thala</i> -->
									</div>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-lg-4 col-sm-6 speaker">
						<div class="details" style="display:none">
							<div class="name">Alok Sarogi</div>
							<div class="about">
								Appointed in the year 2013 by Indian automobile giant - Ashok Leyland - as their Corporate Communications Head, Mr. Alok Saraogi added the position to a long list of continuously growing achievements and accomplishments. Mr.Saraogi brings with him over 20 years of experience spanning FMCG, Services and Advertising,  Automobile, Retail, Aviation, Internet Services and Communication Industries. Apart from this he was also the Global Brand Com Head of Jet Airways and the Vice President of FutureBrands Ltd. He has also been nominated as Marketer of the Year and recognized by the CMO Council as a member of the 50 Most Talented Brand Leaders in India. He is a known speaker at seminars and conferences across the country on subjects ranging from consumer behavior, marketing insights to the digital space. 
							</div>
						</div>
						<a href="#galleryModal" class="gallery-box" data-toggle="modal" >
							<img src="{{asset('/images/speakers/aloksaraoji.jpg')}}" class="img-responsive" alt="Image 5">
							<div class="gallery-box-caption">
								<div class="gallery-box-content">
									<div>
										<h3>Alok Sarogi</h3>
										<h4>Head of Brand and Communications, Ashok Leyland</h4>
										<!-- <i class="icon-lg ion-ios-search">thambi</i> -->
									</div>
								</div>
							</div>
						</a>
					</div>

				</div>
			</div>
		</section>
		<section class="container-fluid" id="four">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
					<h2 class="text-center text-primary">Schedule</h2>
					<hr>
				</div>

				<style type="text/css">
					@media screen and (min-width: 992px) {
						.schedule-text{
							float:left !important;
						}
						.schedule-badge{
							float:right !important;
						}
					}
				</style>
	

				<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12" style="text-align:center">
						<div class="media wow fadeInRight">
							
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">09:30 AM - 10:00 AM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Opening Remarks</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">10:00 AM - 10:40 AM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Keynote by Speaker 1</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">10:40 AM - 11:00 AM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Break with refreshments</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">11:00 AM - 11:40 AM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Keynote by Speaker 2</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">11:40 AM - 12:20 PM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Keynote by Speaker 3</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">12:20 PM - 02:00 PM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Networking Lunch</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">02:00 PM - 03:30 PM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Panel Discussion</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">03:30 PM - 04:10 PM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Keynote by Speaker 4</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="badge schedule-badge" style="background-color:#D9411E;color:#D3D3D3">04:15 PM - 05:00 PM</span>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12" style="background-color:#333333; font-size:1.4em;">
										<span class="schedule-text" style="font-size:1em;">Valediction</span>
									</div>
								</div>
				</div>
			</div>
		</section>

		<section id="sponsors">
			<aside class="bg-dark" style="background-color:white">
				<div class="container text-center">
					<div class="call-to-action">
						<h2 class="text-primary">Our Sponsors</h2>
					</div>
					<br>
					<hr/>
					<br>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<div class="row">
								<!-- <h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6> -->
								<div class="col-md-4 col-sm-4 col-xs-4 text-center" style="margin: 0 auto; overflow:none;">
									<img src="{{ asset('/images/sp1.png') }}" class="img-responsive">    
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4 text-center" style="margin: 0 auto; overflow:none;">
									<img src="{{ asset('/images/sp2.png') }}" class="img-responsive">    
									<!-- <i class="icon-lg ion-social-sass" title="sass"></i> -->
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4 text-center" style="margin: 0 auto; overflow:none;">
									<img src="{{ asset('/images/sp3.png') }}" class="img-responsive" style="width:100%">    
									<!-- <i class="icon-lg ion-social-javascript-outline" title="javascript"></i> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</section>
		<section id="venue">
			<div class="container">
				<center><h3>Hilton Chennai</h3></center>
				<br>

				<div class="row">
					
					<div id="hiltonimg" class="col-md-6 col-sm-12 col-xs-12">
						<div id="my-slider">
							<ul>
								<li><img src="{{asset('/images/hilton/2.jpg')}}" class="img-responsive"></li>
								<li><img src="{{asset('/images/hilton/3.jpg')}}" class="img-responsive"></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12" style="height:100%">
						<div class="img-responsive" style="height:100% !important;">
							<iframe style="width:100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJVVf9rz5nUjoRrVsT-8U6c3I&key=AIzaSyBIqg_lj6tAX0mCQlPLTUmg35MCthrgrS8"></iframe> 
						</div>
					</div>
					<!-- <div class="col-md-4 col-sm-12"><img src="{{asset('/images/hilton/1.jpg')}}" class="img-responsive"></div> -->
					<!-- 
					     <div class="col-md-6 col-sm-12"><img src="{{asset('/images/hilton/2.jpg')}}" class="img-responsive"></div>
					     <div class="col-md-6 col-sm-12"><img src="{{asset('/images/hilton/3.jpg')}}" class="img-responsive"></div>
					   -->
				</div>
			</div>
			<!-- <div class="container">
			     <div class="row">
			     <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
			     </div>
			     </div>
			     </div> -->
		</section>

		<section id="last" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h2 class="margin-top-0 wow fadeIn text-primary">Request an invite</h2>
						<hr class="primary">
						<p>Sign up for a free networking opportunity, during a luncheon, with these trailblazers. Fill out the form below along with your statement of purpose. Register your invite requests on or before December 15th, 2015.
							<br>We'll get back to you as soon as possible.</p>
					</div>
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<form class="contact-form row" id="myregform">
							<div class="col-md-4">
								<label></label>
								<input name="name" type="text" class="form-control" placeholder="Name" required maxlength="40">
							</div>
							<div class="col-md-4">
								<label></label>
								<input name="email" type="email" class="form-control" placeholder="Email" required maxlength="40">
							</div>
							<div class="col-md-4">
								<label></label>
								<input name="phone" type="text" pattern="[0-9]{10}" class="form-control" placeholder="10 digit phone number" required maxlength="40">
							</div>
							<div class="col-md-12">
								<label></label>
								<select name="type" class="form-control">
									<option value="Student" selected>Student</option>
									<option value="Corporate">Corporate</option>
								</select>
							</div>
							<div class="col-md-12">
								<label></label>
								<textarea name="sop" maxlength="2000" class="form-control" rows="9" placeholder="Your statement of purpose here.." required></textarea>
							</div>
							<br>
							<div class="col-md-4 col-md-offset-4" id="captcha">
								<?php echo Recaptcha::render(["theme"=>"dark"]); ?>
							</div>

							<div class="col-md-4 col-md-offset-4">
								<label></label>
								<button type="button" id="submit" class="btn btn-primary btn-block btn-lg">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section id="contacts">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="margin-top-0 text-primary">Contact</h2>
						<hr class="primary">
					</div>
				</div>
			</div>
			<div class="container">
			
			<style>
				
				@media screen and (min-width: 480px) {
				
					table.contact-table td{
						padding: 5px;
					}

				}
				@media screen and (max-width: 480px) {
					
					table.contact-table td{
						padding: 2px;
					}					

					td.long-email{
						color:#D9411E;
						font-size: 0.75em;
						/*display: none!important;*/
					}
					
					td.email {

						color:#D9411E;
					}
				}
			</style>
			
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="feature" style="width:100%;">
							<i class="icon-lg ion-ios-book-outline wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"></i>
							<h3>Students</h3>
							<table class="contact-table">
								<tr>
									<td>Priyanka</td>
									<td class="long-email">saipriyanka@pragyan.org</td>
									<td>+91&nbsp;97913&nbsp;95753</td>
								</tr>
								<tr>
									<td>Arjun</td>
									<td class="email">arjunbala@pragyan.org</td>
									<td>+91&nbsp;90031&nbsp;87061</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="feature" style="width:100%;">
							<i class="icon-lg ion-briefcase wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></i>
							<h3>Corporates</h3>
							<table class="contact-table">
								<tr>
									<td>Shrimithran</td>
									<td class="long-email">shrimithranr@pragyan.org</td>
									<td>+91&nbsp;91766&nbsp;53503</td>
								</tr>
								<tr>
									<td>Naman</td>
									<td class="email">naman@pragyan.org</td>
									<td>+91&nbsp;98845&nbsp;79108</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="feature" style="width:100%;">
							<i class="icon-lg ion-ios-paper-outline wow fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"></i>
							<h3>Media</h3>
							<table class="contact-table">
								<tr>
									<td>Bharat</td>
									<td class="long-email">saibharat@pragyan.org</td>
									<td>+91&nbsp;98409&nbsp;49888</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-3 text-left">
						<h4>Follow</h4>
						<ul class="list-inline">
							<li><a rel="nofollow" href="https://twitter.com/nitt_pragyan" title="Twitter"><i class="icon-lg ion-social-twitter-outline" style="font-size:25px"></i></a>&nbsp;</li>
							<li><a rel="nofollow" href="https://www.facebook.com/pragyan.nitt/" title="Facebook"><i class="icon-lg ion-social-facebook-outline" style="font-size:25px"></i></a>&nbsp;</li>
							<li><a rel="nofollow" href="https://www.pragyan.org/blog/" title="Blog"><i class="icon-lg ion-social-rss-outline" style="font-size:25px"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-sm-offset-1 text-center">
						<h4>Made with <i class="ion-heart"></i> by <a href="delta.nitt.edu">Delta Force</a> ©2015</h4>
					</div>
				</div>
			</div>
		</footer>
		<!-- The Modals start here -->
		<div id="mymodal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-body">
						<!-- <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" /> -->
						<center><h2><div id="mymodalname"></div></h2></center>
						<p>
							<div id="mymodalabout"></div>
						</p>
						<p>
							<br/>
							<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close</button>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--scripts loaded here from cdn for performance -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/js/unslider.min.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('/js/wow.js') }}"></script>
		<script src="{{ asset('/js/scripts.js') }}"></script>
		<script src="{{ asset('/js/myajax.js') }}"></script>

		<script type="text/javascript">

		$(document).ready(function(){
			
			$.ajaxSetup({
				headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
			});

			$("#submit").click(function(){
				$.ajax({
					method: "POST",
					url: base_url+"/register",
					data: $("#myregform").serialize()             
				}).done(function( msg ) {
					console.log(msg);
					if(msg == "true")
					{
						$("#myregform").html("Successfully Registered");
					}
					else
					{
						alert("Please Try again. Invalid Data");
						location.reload();
					}
				});

			});
		});

		</script>
	</body>
</html>
