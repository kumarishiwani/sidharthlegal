<?php 
function submit(){
    if(isset($_POST['contact_btn'])){
        $to = "akguptah@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = "Consultation Form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $mailMsg = mail($to,$subject,$message,$headers);
        if($mailMsg){
            echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        }else{
            echo "<script type='text/javascript'>alert('submission failed!')</script>";
        }
        //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        //header('Location: thank_you.php');
        // You cannot use header and echo together. It's one or the other.
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- Document Meta
    ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="zytheme"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Multi-purpose Business html5 landing page">
	<link href="assets/images/favicon/favicon.ico" rel="icon">

	<!-- Fonts
    ============================================= -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMerriweather:300,300i,400,400i,700,700i,900,900i' rel='stylesheet' type='text/css'>

	<!-- Stylesheets
    ============================================= -->
	<link href="assets/css/external.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

	<!-- Document Title
    ============================================= -->
	<title>Sidharth Acharya</title>
</head>

<body class="body-scroll">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">	<!-- Header
        ============================================= -->
		<header id="navbar-spy" class="header header-1 header-transparent header-fixed">

			<nav id="primary-menu" class="navbar navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					
						<a class="logo" href="index-2.html">
						<!--<img class="logo-dark" src="assets/images/logo/logo.jpeg" alt="appy Logo">
						<img class="logo-light" src="assets/images/logo/logo.jpeg" alt="appy Logo">
						<h1>Siddharth Acharya</h1>-->
					</a>
					</div>
					<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
						<ul class="nav navbar-nav nav-pos-right navbar-left nav-split">
							<li class="active"><a data-scroll="scrollTo" href="#slider">home</a>
							</li>
							<li><a data-scroll="scrollTo" href="#about">about</a>
							<li><a data-scroll="scrollTo" href="#feature2">feature</a>
							</li>
							
							</li>
							<li><a data-scroll="scrollTo" href="#team">team</a>
							</li>
							<li><a data-scroll="scrollTo" href="#banner3">why us</a>
							</li>
							<li><a data-scroll="scrollTo" href="#testimonial">Feedback</a>
							</li>
							<li><a data-scroll="scrollTo" href="#banner">Free Consultation</a>
							</li>
							<li><a href="blog-standard.html">blog</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</nav>

		</header><!-- Slider #1
=== === === === === === === === === === === === === === -->
<section id="slider" class="section slider">
	<div class="slide--item bg-overlay bg-overlay-dark">
		<div class="bg-section">
			<img src="assets/images/slider/bg-4.jpg" alt="bg">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--headline">Welcome to Legal Firm</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--bio">Our business is understanding your problem and getting legal solution for you</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--action">
						<a class="btn btn--primary btn--bordered" href="#">Free Consultation</a>
					</div>
				</div>
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</div>
	<!-- .slide-item end -->
</section>
<!-- #slider end -->

<!-- Counter #1
=== === === === === === === === === === === === === === -->
<section id="counter1" class="counter">
	<div class="container">
		<div class="counter-container">
			<div class="row">
				<!-- count #1 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740327_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">821</div>
							<div class="count-title">Cases won</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #2 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740337_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">189</div>
							<div class="count-title">Skilled lawyers</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #3 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740291_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">2630</div>
							<div class="count-title">Happy clients</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #4 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740322_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">540</div>
							<div class="count-title">Great Rewards</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
			<!-- .row end -->
		</div>
	</div>
	<!-- .container end -->
</section>
<!-- #counter1 end -->

<!-- About
=== === === === === === === === === === === === === === -->
<section id="about" class="section about pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
				<img class="img-responsive center-block" src="assets/images/team/team-4.png" alt="ipad"/>
			</div>
			<!-- .col-md-6 end -->
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
				<div class="heading heading-1 mt-70 wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">About Our Firm</h2>
					<div class="heading--divider"></div>
				</div>
				<div class="about-content wow fadeInUp" data-wow-duration="1s">
					<p>Incorporated in 1978 as a primary litigation practice by Mrs.Siddharth Acharya, He worked in the field of services and expertise and is now one of the leading law firms in India. He offers comprehensive counsel on a range of legal services including Mergers & Acquisitions, Private Equity, Real Estate, Education, Intellectual Property, Employment and Labour, Licensing and Registrations, Taxation (Direct & Indirect), Business Setup (globally), thus catering to every legal need from across the globe.

</p>
					<p>Our services extend through diverse sectors of industry including assistance to facilitate foreign direct investments and business setup in India and our clientele include an array of domestic and international individuals and companies.

</p>
					<p> The mandates we have received so far validates our belief that the depth of transactional experience and the energy we espouse as a young firm, sets us apart from the traditional law firms. We pride ourselves on the ability to offer a level of client service, interface and involvement that is unparalleled.

					</p>
<p>The firm comprises of a team of lawyers who have extensive experience in providing blue chip clients with solution-oriented advice in a transparent and time-bound manner.

</p>
					<!--<img class="signture" src="assets/images/background/signture.png" alt="signture">-->
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #feature2 end -->
<!-- Feature #2
=== === === === === === === === === === === === === === -->
<section id="feature2" class="section feature feature-2 feature-left bg-white mb-60">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Practice Areas</h2>
					<p class="heading--desc">Reputation. Respect. Result.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<!-- Panel #1 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740324_cc"></i>
					</div>
					<div class="feature--content">
						<h3>MERGERS AND ACQUISITIONS</h3>
						<p>We provide innovative and all-inclusive advice aimed at maximising value for our clients. Much of this is owing to our expertise in practice areas complimenting M&A transactions. We handle various corporate, litigation, employee benefits, tax, regulatory and compliance, competition, intellectual property, and other issues related to these transactions.

</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #2 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740303_cc"></i>
					</div>
					<div class="feature--content">
						<h3>STRATEGIC ALLIANCES AND JOINT VENTURES</h3>
						<p>Siddharth Acharya represents and advises a number of prominent players on joint ventures and private equity transactions.We have acted for clients in various cross-border acquisitions of Indian companies and have also advised purchasers, sellers, vendors, vendees, lenders, investors and financial advisors.Legal advice is provided with a view to arriving at an investment model that provides the client with the most beneficial tax structure and addresses regulatory requirements.

</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #3 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_741284_cc"></i>
					</div>
					<div class="feature--content">
						<h3>PRIVATE EQUITY AND VENTURE CAPITAL</h3>
						<p>We have worked with diverse private equity funds dealing with almost every facet of the fund life cycle, providing the full range of legal services, including corporate, tax, finance, real estate, local licensing and other regulatory issues.The practice derives its strength from the Firm's market leading corporate/M&A practice and its lawyers' experience in advising clients in corporate commercial transactions across various sectors of the economy including certain highly regulated sectors such as telecoms, mining and resources, real estate, power, insurance and financial services.

</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->
		
			<!-- Panel #4 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
                        <i class="icon icon-noun_741291_cc"></i>
						
					</div>
					<div class="feature--content">
						<h3>STRUCTURED FINANCE</h3>
						<p>The lawyers in our Banking and Finance team our specialized and dedicated with considerable experience and an in-depth understanding of the banking and finance sector. Our lawyers build strong relationships with in-house legal teams, working alongside them to provide reliable and expert advice. The firm’s vast experience and knowledge of the industry, in collaboration with the diverse skills of our lawyers, enables us to represent our clients before regulatory bodies and in formal legal proceedings.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #5 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_741298_cc"></i>

						
					</div>
					<div class="feature--content">
						<h3>DISPUTES STRATEGY</h3>
						<p>Siddharth Acharya works virtually in every area of dispute resolution. Our dispute resolution team regularly advise clients on a variety of contentious matters involving commercial contracts, civil disputes, shareholders’ disputes,corporate and securities law,labour and employment matters, real estate issues and economic offences.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #6 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740314_cc"></i>
					</div>
					<div class="feature--content">
						<h3>REAL ESTATE</h3>
						<p>The Firm's lawyers have the experience of advising various participants in the real estate sector, including real estate developers, financial institution, fund, lessors, lessees and buyers.The property dispute lawyers at our Delhi-based firm are known to conduct effective due diligence for transactions and assist clients to ensure compliance with Real Estate (Regulation and Development) Act, 2016 (RERA). Our real estate desk is also known for helping investors by filing Real Estate (Regulation and Development) Act, 2016 (RERA) complaints.



</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #feature2 end -->
<!-- Team #1
=== === === === === === === === === === === === === === -->
<!--<section id="team" class="team team-1">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Experted Attorneys</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end 
		</div>
		<!-- .row end -->
		<!-- <div class="row">
			<!-- Member #1 
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="member">
					<div class="member-img">
						<img src="assets/images/team/team-1.jpg" alt="member"/>
						<div class="member-overlay">
							<div class="member-social">
								<div class=" pos-vertical-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<!-- .memebr-ovelay end 
					</div>
					<!-- .member-img end -->
					<!--<div class="member-info">
						<h5>Mark Smith</h5>
						<h6>CEO & Manager</h6>
					</div>
					<!-- .member-info end 
				</div>
				<!-- .member end 
			</div>
			<!-- .col-md-3 end -->

			<!-- Member #2 -->
			<!--<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="member">
					<div class="member-img">
						<img src="assets/images/team/team-2.jpg" alt="member"/>
						<div class="member-overlay">
							<div class="member-social">
								<div class=" pos-vertical-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<!-- .memebr-ovelay end 
					</div>
					<!-- .member-img end 
					<div class="member-info">
						<h5>Ryan Printz</h5>
						<h6>Family Lawyer</h6>
					</div>
					<!-- .member-info end 
				</div>
				<!-- .member end 
			</div> -->
			<!-- .col-md-3 end -->

			<!-- Member #3 -->
			<!--<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="member">
					<div class="member-img">
						<img src="assets/images/team/team-3.jpg" alt="member"/>
						<div class="member-overlay">
							<div class="member-social">
								<div class=" pos-vertical-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<!-- .memebr-ovelay end 
					</div>
					<!-- .member-img end 
					<div class="member-info">
						<h5>Steve Martin</h5>
						<h6>Financial Lawyer</h6>
					</div>
					<!-- .member-info end 
				</div>
				<!-- .member end 
			</div>
			<!-- .col-md-3 end 
		</div>
	</div>
</section> <!-- #team end  -->
<!-- Banner #3
=== === === === === === === === === === === === === === -->
<section id="banner3" class="bg-white pt-0 pb-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 pr-0 pl-0">
				<div class="col-img  bg-overlay">
					<div class="bg-section">
						<img src="assets/images/background/bg-1.jpg" alt="Background"/>
					</div>
				</div>
			</div>
			<!-- .col-md-6 end-->
			<div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
							<h2 class="heading--title">Why Hire Us ?</h2>
							<p class="heading--desc">Our question to ourself is this, can we re-bundle services in an acceptable, affordable and convenient way?? This is a work in progress. But we think clients accept the idea of having a single supplier again and that's the direction we are moving</p>
							<div class="heading--divider mb-80"></div>
						</div>
					</div>
					<!-- .col-md-6 end -->
				</div>
				<!-- .row end -->
				<div class="row mb-50">
					<!-- Panel #1 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_740300_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Exclusively Areas</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

					<!-- Panel #2 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_741355_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Group of Lawyers</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

				</div>
				<!-- .row end -->
				<div class="row">
					<!-- Panel #3 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_740296_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Cases Results</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

					<!-- Panel #4 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_741305_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Experts in Law</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #banner3 end -->
<!-- Testimonial #2
=== === === === === === === === === === === === === === -->
<section id="testimonial" class="testimonial">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Clients Feedback</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="carousel" data-slide="3" data-slide-res="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
					<!-- Testimonial #1 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="assets/images/testimonial/1.png" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Steve Martin</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->

					<!-- Testimonial #2 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="assets/images/testimonial/2.png" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Maya Jonson</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->

					<!-- Testimonial #3 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="assets/images/testimonial/3.png" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Mark Smith</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->


					<!-- Testimonial #4 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="assets/images/testimonial/2.png" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Mark Smith</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section> <!-- .testimonial2 end -->
<!-- Clients Carousel Section
=== === === === === === === === === === === === === === -->
<section id="clients" class="clients clients-carousel bg-theme">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="carousel carousel-dots" data-slide="5" data-slide-res="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
					<!-- Client #1 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/1.jpg" alt="client">
					</div>

					<!-- Client #2 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/2.jpg" alt="client">
					</div>

					<!-- Client #3 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/3.jpg" alt="client">
					</div>

					<!-- Client #4 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/4.jpg" alt="client">
					</div>

					<!-- Client #5 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/5.jpg" alt="client">
					</div>
					<!-- Client #3 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/3.jpg" alt="client">
					</div>

					<!-- Client #4 -->
					<div class="client">
						<img class="center-block" src="assets/images/clients/4.jpg" alt="client">
					</div>
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #clients end -->

<!-- Banner 
=== === === === === === === === === === === === === === -->
<section id="banner" class="section cta pt-0 pb-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
				<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Free Consultation</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80"></div>
				</div>
				<div class="form-request">
					<div class="row">
						<form class="mb-0" method="post" action="submit()">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="text" class="form-control" name="first_name" placeholder="Your Name">
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="email" class="form-control" name="email" placeholder="Your Email">
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-12">
								<select class="form-control" name="last_name">
									<option>Practice Area</option>
									<option>Criminal Law</option>
									<option>International Law</option>
									<option>Financial Law</option>
								</select>
							</div>
							<!-- .col-md-12 end -->
							<div class="col-xs-12 col-sm-12 col-md-12">
								<textarea class="form-control" name="message" rows="3" placeholder="Your Message"></textarea>
							</div>
							<!-- .col-md-12 end -->
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="submit" class="btn btn--primary" name="contact_btn" value="send request">
							</div>
							<!-- .col-md-6 end -->
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 pr-0 pl-0">
				<div class="col-img">
					<div class="bg-section">
						<img src="assets/images/background/bg-2.jpg" alt="Background"/>
					</div>
				</div>
			</div>
			<!-- .col-md-6 end-->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #banner2 end -->

		<!-- Footer #5
============================================= -->
		<footer id="footer" class="footer">
		<!-- Widget Section
	============================================= -->
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-about">
					<div class="footer--widget-content">
						<img class="mb-20" src="assets/images/logo/logo-light.png" alt="logo">
						<p>Proin gravida nibh vel velit auctor aliquet anean lorem quis. bindum auctor, nisi elite conset ipsums sagtis id duis sed odio sit.</p>
						<div class="clearfix"></div>
						<div class="social">
							<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
							<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
							<a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="share-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-recent">
					<div class="footer--widget-title">
						<h5>Blog Posts</h5>
					</div>
					<div class="footer--widget-content">
						<div class="entry">
							<div class="entry--img">
								<img src="assets/images/blog/thumb/1.jpg" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Four ways to cheer yourself up on the Blue Monday!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 6 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
						
						<div class="entry">
							<div class="entry--img">
								<img src="assets/images/blog/thumb/2.jpg" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Old cameras can capture images better than nowdays camera!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 3 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
						
						<div class="entry">
							<div class="entry--img">
								<img src="assets/images/blog/thumb/3.jpg" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Four ways to cheer yourself up on the Blue Monday!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 5 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
					</div>
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-contact">
					<div class="footer--widget-title">
						<h5>Get In Touch</h5>
					</div>
					<div class="footer--widget-content">
						<ul class="list-unstyled mb-0">
							<li><i class="fa fa-map-marker"></i> 1220 Petersham town, Wardll St New South Wales Australia PA 6550.</li>
							<li><i class="fa fa-phone"></i> (04) 491 570 110</li>
							<li><i class="fa fa-envelope-o"></i> contact@zytheme.com</li>
						</ul>
					</div>
				</div><!-- .col-md-4 end -->
			</div>
		</div><!-- .container end -->
	</div><!-- .footer-widget end -->
			<!-- Copyrights
	============================================= -->
		<div class="footer--copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 text--center">
						<span>&copy; 2017, All rights reserved.</span>
					</div>
				</div>
			</div>
			<!-- .container end -->
			</div>
		</footer>
		</div>
		<!-- #wrapper end -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
				<h5 class="modal-title text-center">Disclaimer</h5>
                
            </div>
            <div class="modal-body">
                <div class="disclaimer-text">
					
<p>
The rules of the Bar Council of India do not permit advertisement or solicitation by Advocates in any form or manner.</p>
<p>This website <a href="https://www.siddharthacharya.com">www.siddharthacharya.com</a> and the contents thereof are merely for informational purposes and not in the nature of solicitation or an advertisement. Similarly, any matter/information/content posted by Siddharth Acharya on this website shall not be construed as legal advice.</p>
<p>Siddharth Acharya takes no liability for consequences of any action taken by you relying on the matter/information/content posted on this website.</p>
<p>By entering this website, you confirm and acknowledge that you have voluntarily sought the information relating to and/or posted by Siddharth Acharya and there has been no solicitation/advertisement/inducement by either Siddharth Acharya and/or its partners and/or its members.
</p>
				</div>
                <form class="disclaimer-form text-center">
                    
<button type="button" class="btn btn-success" data-dismiss="modal">I Agree</button>
                </form>
            </div>
        </div>
    </div>
</div>

		<!-- Footer Scripts
============================================= -->
		<script src="assets/js/jquery-2.2.4.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/functions.js"></script>
<script>
    
	$(window).on('load', function () {
		var value = localStorage.getItem("disclaimer");
		if (value === undefined || value === null && window.location.pathname != "/disclaimer.php") {
			window.location.href = "/disclaimer.php";
		}
	});
</script>
</body>
</html>