<!DOCTYPE html>
<html lang="en">

<head>
	<title>Web Developer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<?php include 'db_connect.php'; ?>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span>M</span>usab</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="hero-wrap js-fullheight">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
				<div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
					<div class="text text-center">
						<?php if (!$success): ?>
							<div class="subheading container" style="color: red; font-weight: bold;"><?= $status ?></div>
							<br><br>
						<?php endif; ?>
						<span class="subheading">Assalamu Alaikum! I am</span>
						<h1>Musab</h1>
						<h2>I'm a
							<span class="txt-rotate" data-period="2000"
								data-rotate='[ "Software Engineer.", "Flutter Developer.", "Full-stack Developer.", "Problem Solver.", "Team Player." ]'></span>
						</h2>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="mouse">
			<a href="#" class="mouse-icon">
				<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
			</a>
		</div>
	</section>


	<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-6 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center"
							style="background-image:url(images/about.jpg);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 pl-md-5 py-5">
					<div class="row justify-content-start pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h1 class="big">About</h1>
							<h2 class="mb-4">About Me</h2>
							<p>I am a Full-stack Developer with over 5 years of experience in creating web and mobile
								applications, delivering high-quality software solutions on time and within budget.</p>
							<ul class="about-info mt-4 px-md-0 px-2">
								<li class="d-flex"><span>Name:</span> <span>Musab</span></li>
								<li class="d-flex"><span>Date of birth:</span> <span>March 15, 1996</span></li>
								<li class="d-flex"><span>Address:</span> <span>Sri Lanka</span></li>
								<li class="d-flex"><span>Zip code:</span> <span>00001</span></li>
								<li class="d-flex"><span>Email:</span> <span>musab@gmail.com</span></li>
								<li class="d-flex"><span>Phone: </span> <span>+94-77-123-4567</span></li>
							</ul>
						</div>
					</div>
					<div class="counter-wrap ftco-animate d-flex mt-md-3">
						<div class="text">
							<p class="mb-4">
								<span class="number" data-number="150">0</span>
								<span>Projects Completed</span>
							</p>
							<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<nav id="navi">
						<ul>
							<li><a href="#page-1">Education</a></li>
							<li><a href="#page-2">Experience</a></li>
							<li><a href="#page-3">Skills</a></li>
							<li><a href="#page-4">Awards</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-9">
					<div id="page-1" class="page one">
						<h2 class="heading">Education</h2>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2020-2024</span>
								<h2>Bachelor of Science (BSc) in Software Engineering</h2>
								<span class="position">Kingston University - UK</span>
								<p>Specialized in software engineering, focusing on system development, programming, and
									software architecture.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2018</span>
								<h2>National Diploma in Information and Communication Technology (NVQ 5)</h2>
								<span class="position">Sri Lanka - German Training Institute</span>
								<p>Covered advanced topics in ICT, including software development, system analysis, and
									database management.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2015</span>
								<h2>ICT Technician (NVQ 4)</h2>
								<span class="position">Vocational Training Authority of Sri Lanka</span>
								<p>Gained foundational knowledge in ICT, with a focus on hardware troubleshooting,
									networking, and software installation.</p>
							</div>
						</div>
					</div>

					<div id="page-2" class="page two">
						<h2 class="heading">Experience</h2>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2020 – Present</span>
								<h2>Software Engineer</h2>
								<span class="position">Imara Software Solutions</span>
								<p>Driving the development of cutting-edge mobile applications using Flutter, while
									creating high-performance web solutions with Laravel and WordPress. Specialized in
									integrating third-party APIs to build scalable, customized systems, collaborating
									with teams to enhance functionality and deliver seamless, reliable user experiences.
								</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2018 – 2020</span>
								<h2>Web Developer</h2>
								<span class="position">Imara Software Solutions</span>
								<p>Crafted dynamic, responsive web applications with Angular while managing WordPress
									platforms to ensure peak performance. Led both front-end and back-end initiatives,
									consistently delivering impactful, high-quality solutions that elevated user
									engagement and exceeded client goals.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2015 – 2018</span>
								<h2>Freelance Developer</h2>
								<span class="position">Self-Employed</span>
								<p>Delivered full-stack mobile and web development services, focusing on innovative
									UI/UX design and robust API integration. Using PHP and WordPress, created scalable,
									high-performing projects while maintaining top-tier functionality with continuous
									improvements and updates.</p>
							</div>
						</div>
					</div>


					<div id="page-3" class="page three">
						<h2 class="heading">Skills</h2>
						<div class="row progress-circle mb-5">
							<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
									<h2 class="h5 font-weight-bold text-center mb-4">Flutter</h2>

									<!-- Progress bar 1 -->
									<div class="progress mx-auto" data-value='90'>
										<span class="progress-left">
											<span class="progress-bar border-primary"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar border-primary"></span>
										</span>
										<div
											class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
											<div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
										</div>
									</div>
									<!-- END -->

									<!-- Demo info -->
									<div class="row text-center mt-4">
										<div class="col-6 border-right">
											<div class="h4 font-weight-bold mb-0">28%</div><span
												class="small text-gray">Last week</span>
										</div>
										<div class="col-6">
											<div class="h4 font-weight-bold mb-0">60%</div><span
												class="small text-gray">Last month</span>
										</div>
									</div>
									<!-- END -->
								</div>
							</div>

							<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
									<h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

									<!-- Progress bar 1 -->
									<div class="progress mx-auto" data-value='80'>
										<span class="progress-left">
											<span class="progress-bar border-primary"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar border-primary"></span>
										</span>
										<div
											class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
											<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
										</div>
									</div>
									<!-- END -->

									<!-- Demo info -->
									<div class="row text-center mt-4">
										<div class="col-6 border-right">
											<div class="h4 font-weight-bold mb-0">28%</div><span
												class="small text-gray">Last week</span>
										</div>
										<div class="col-6">
											<div class="h4 font-weight-bold mb-0">60%</div><span
												class="small text-gray">Last month</span>
										</div>
									</div>
									<!-- END -->
								</div>
							</div>

							<div class="col-lg-4 mb-4">
								<div class="bg-white rounded-lg shadow p-4">
									<h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

									<!-- Progress bar 1 -->
									<div class="progress mx-auto" data-value='75'>
										<span class="progress-left">
											<span class="progress-bar border-primary"></span>
										</span>
										<span class="progress-right">
											<span class="progress-bar border-primary"></span>
										</span>
										<div
											class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
											<div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
										</div>
									</div>
									<!-- END -->

									<!-- Demo info -->
									<div class="row text-center mt-4">
										<div class="col-6 border-right">
											<div class="h4 font-weight-bold mb-0">28%</div><span
												class="small text-gray">Last week</span>
										</div>
										<div class="col-6">
											<div class="h4 font-weight-bold mb-0">60%</div><span
												class="small text-gray">Last month</span>
										</div>
									</div>
									<!-- END -->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>Flutter</h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
											aria-valuemin="0" aria-valuemax="100" style="width:90%">
											<span>90%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>jQuery</h3>
									<div class="progress">
										<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
											aria-valuemin="0" aria-valuemax="100" style="width:85%">
											<span>85%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>HTML5</h3>
									<div class="progress">
										<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
											aria-valuemin="0" aria-valuemax="100" style="width:95%">
											<span>95%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>CSS3</h3>
									<div class="progress">
										<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
											aria-valuemin="0" aria-valuemax="100" style="width:90%">
											<span>90%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>WordPress</h3>
									<div class="progress">
										<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
											aria-valuemin="0" aria-valuemax="100" style="width:70%">
											<span>70%</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="progress-wrap ftco-animate">
									<h3>SEO</h3>
									<div class="progress">
										<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
											aria-valuemin="0" aria-valuemax="100" style="width:80%">
											<span>80%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="page-4" class="page four">
						<h2 class="heading">Awards</h2>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2021</span>
								<h2>Outstanding Software Engineer Award</h2>
								<span class="position">Imara Software Solutions</span>
								<p>Recognized for exceptional contributions to software development, including
									delivering high-quality Flutter applications and seamless web solutions under tight
									deadlines.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2020</span>
								<h2>Leadership Excellence Award</h2>
								<span class="position">Imara Software Solutions</span>
								<p>Awarded for outstanding leadership and team coordination in successfully managing
									complex development projects while fostering a collaborative environment.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2019</span>
								<h2>Innovative Developer Award</h2>
								<span class="position">Freelance</span>
								<p>Recognized for implementing creative and innovative solutions in web and mobile
									application development that enhanced user engagement and functionality.</p>
							</div>
						</div>
						<div class="resume-wrap d-flex ftco-animate">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ideas"></span>
							</div>
							<div class="text pl-3">
								<span class="date">2018</span>
								<h2>Best Project Award</h2>
								<span class="position">Sri Lanka - German Training Institute</span>
								<p>Awarded for the successful completion of a top-tier project demonstrating advanced
									software engineering skills and innovative solutions.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Services</h1>
					<h2 class="mb-4">Services</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-analysis"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Design</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>

				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-ideas"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Web Developer</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>

				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-innovation"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">App Developing</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-ux-design"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Branding</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-idea"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Product Strategy</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1 shadow">
						<span class="icon">
							<i class="flaticon-flasks"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Phtography</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary
								regelialia.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-0">
			<div class="row no-gutters justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Projects</h1>
					<h2 class="mb-4">Our Projects</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-1.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-2.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-3.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-4.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-5.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/work-6.jpg);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Branding &amp; Illustration Design</a></h3>
							<span>Web Design</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
		<div class="container-fluid px-md-5">
			<div class="row d-md-flex align-items-center">
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 shadow">
						<div class="text">
							<strong class="number" data-number="100">0</strong>
							<span>Awards</span>
						</div>
					</div>
				</div>
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 shadow">
						<div class="text">
							<strong class="number" data-number="1200">0</strong>
							<span>Complete Projects</span>
						</div>
					</div>
				</div>
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 shadow">
						<div class="text">
							<strong class="number" data-number="1200">0</strong>
							<span>Happy Customers</span>
						</div>
					</div>
				</div>
				<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
					<div class="block-18 shadow">
						<div class="text">
							<strong class="number" data-number="500">0</strong>
							<span>Cups of coffee</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-hireme img" style="background-image: url(images/bg_1.jpg)">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 ftco-animate text-center">
					<h2>I'm <span>Available</span> for freelancing</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
					<p>I am available to discuss your software development needs and help bring your ideas to life. Feel
						free to get in touch!</p>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<div>
							<h3 class="mb-4">Address</h3>
							<p>57/2 Poles Road, Puttalam, Sri Lanka</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<div>
							<h3 class="mb-4">Contact Number</h3>
							<p><a href="tel:+94755513162">+94 755 513 162</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<div>
							<h3 class="mb-4">Email Address</h3>
							<p><a href="mailto:musab.dot@gmail.com">musab.dot@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box text-center p-4 shadow">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<div>
							<h3 class="mb-4">Website</h3>
							<p><a href="https://musab.dev">musab.dev</a></p>
						</div>
					</div>
				</div>
			</div>



			<div class="row no-gutters block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-light p-4 p-md-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						</div>
					</form>

				</div>

				<div class="col-md-6 d-flex">
					<div class="img" style="background-image: url(images/about.jpg);"></div>
				</div>
			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About Me</h2>
						<p>Musab Ibnu Siraj, a passionate Software Engineer dedicated to crafting innovative solutions.
							Experienced in web and mobile application development with a focus on delivering
							high-quality results.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://twitter.com/yourhandle" target="_blank"><span
										class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://facebook.com/yourprofile" target="_blank"><span
										class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://instagram.com/yourprofile" target="_blank"><span
										class="icon-instagram"></span></a></li>
							<!-- Add or remove social links as needed -->
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Contact Me</h2>
						<ul class="list-unstyled">
							<li><a href="tel:+94755513162"><span class="icon-long-arrow-right mr-2"></span>+94 755 513
									162</a></li>
							<li><a href="mailto:musab.dot@gmail.com"><span
										class="icon-long-arrow-right mr-2"></span>musab.dot@gmail.com</a></li>
							<li><span class="icon-long-arrow-right mr-2"></span>57/2 Poles Road, Puttalam, Sri Lanka
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						&copy;
						<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Designed &
						developed by Musab Ibnu Siraj
					</p>
				</div>
			</div>
		</div>
	</footer>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>

	<script src="js/main.js"></script>

</body>

</html>