
<html lang="en">

<head>

	






	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="uploads/logo.ico" type="image/png">
	<title><?php echo $this->db->get('settings')->row()->system_vendor; ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="common/template/css/bootstrap.css">
	<link rel="stylesheet" href="common/template/vendors/linericon/style.css">
	<link rel="stylesheet" href="common/template/css/font-awesome.min.css">
	<link rel="stylesheet" href="common/template/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="common/template/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="common/template/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="common/template/vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="common/template/css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					
					<div class="col-lg-9 col-sm-6 col-8 header-top-right">
						<a href="tel:+9530123654896"><span class="lnr lnr-phone-handset"></span> <span class="text"><span class="text">+953
									012 3654 896</span></span></a>
						<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text"><span class="text">support@colorlib.com</span></span></a>
						<a href="#" class="primary-btn text-uppercase">Appointment</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="uploads/logo.ico" alt=""> <span style="font-size: 30px; font-weight: bold;"> <?php echo $this->db->get('settings')->row()->system_vendor; ?></span></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="#">Home</a></li><li class="nav-item active"><a class="nav-link" href="auth/login">Hospital Apps</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<h2>
						Growing up your <br>
						children with our most <br>
						smart monitization <br>
					</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
					<a class="primary-btn text-uppercase" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area section_gap">
		<div class="container">
			<div class="row">
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="<?php base_url();?>common/template/img/features/icon1.png" alt="">
							<h4>Emergency Services</h4>
						</div>
						<div class="feature_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam.</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Call Us: 215 - 3695 - 9584</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="<?php base_url();?>common/template/img/features/icon2.png" alt="">
							<h4>Doctors Schedule</h4>
						</div>
						<div class="feature_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam.</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single_feature">
						<div class="feature_head">
							<img src="<?php base_url();?>common/template/img/features/icon3.png" alt="">
							<h4>Online Appointment</h4>
						</div>
						<div class="feature_content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam.</p>
							<div class="feature_btn">
								<a href="#" class="f_btn">Get Appointment</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="about_details lite_bg">
						<h2>Welcome to Medicare Center</h2>
						<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
							especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.</p>
						<ul class="list_wrap">
							<li class="about_lists">Women face higher conduct standards especially in the workplace that’s why it’s crucial
								that.</li>
							<li class="about_lists">Women face higher conduct standards especially in the workplace that’s why it’s crucial
								that.</li>
							<li class="about_lists">Women face higher conduct standards especially in the workplace that’s why it’s crucial
								that.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
					<div class="about_right overlay">
						<div class="about_inner">
							<h4>Doctors Time table</h4>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
							<p>Mon to Friday -- 07.00 AM to 10.00 PM</p>
						</div>

					</div>
				</div>
			</div>
			<div class="about_bg overlay"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Department Area =================-->
	<section class="department_area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Medicare Popular Departments</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon1.png" alt="">
						</div>
						<h4>Cardiology</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon2.png" alt="">
						</div>
						<h4>Urology</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon3.png" alt="">
						</div>
						<h4>Dental Care</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon4.png" alt="">
						</div>
						<h4>Eye Care</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon5.png" alt="">
						</div>
						<h4>Neurology</h4>
					</div>
				</div>
				<!-- single department -->
				<div class="col-lg-2 text-center col-sm-6">
					<div class="single_department">
						<div class="dpmt-thumb">
							<img src="<?php base_url();?>common/template/img/department/d-icon6.png" alt="">
						</div>
						<h4>Plastic Surgery</h4>
					</div>
				</div>
				<a class="primary-btn text-uppercase" href="#">Learn More</a>
			</div>
		</div>
	</section>
	<!--================ End Department Area =================-->

	<!--================ Start Counter Area =================-->
	<section class="section_gap counter_area overlay">
		<div class="container">
			<div class="row">
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">30</span>K</h1>
						<p>Years <br> of Experiences</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">2</span>K+</h1>
						<p>Instant <br> Blood Donors </p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">5</span>K+</h1>
						<p>Well Cured <br> Patients</p>
					</div>
				</div>
				<!--single-counter-->
				<div class="col-lg-3 col-sm-6">
					<div class="single_counter">
						<h1> <span class="counter_number">20</span>K+</h1>
						<p>Internal <br> Stuff Groups</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start Counter Area =================-->

	<!--================ Start Team Area =================-->
	<section class="section_gap team_area lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Medicare Popular Departments</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="<?php base_url();?>common/template/img/team/member1.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Ethel Davis</h4>
							<p class="profession">Sr. Faculty Data Science</p>
							<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="<?php base_url();?>common/template/img/team/member2.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Rodney Cooper</h4>
							<p class="profession">Sr. Faculty Data Science</p>
							<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="<?php base_url();?>common/template/img/team/member3.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Dane Walker</h4>
							<p class="profession">Sr. Faculty Data Science</p>
							<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
						</div>
					</div>
				</div>
				<!-- single-team-member -->
				<div class="col-lg-3 col-sm-6">
					<div class="single_member">
						<div class="author">
							<img src="<?php base_url();?>common/template/img/team/member4.png" alt="">
						</div>
						<div class="author_decs">
							<div class="social_icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
							<h4>Lena Keller</h4>
							<p class="profession">Sr. Faculty Data Science</p>
							<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Team Area =================-->

	<!--================ Start Blog Area =================-->
	<section class="section_gap blog_area">
		<div class="container">
			<div class="row">
				<!-- recent blog -->
				<div class="col-lg-6">
					<div class="recent_blog">
						<div class="blog_title">
							<h2>Our Recent Blogs</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua.</p>
						</div>
					</div>
					<div class="row">
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="<?php base_url();?>common/template/img/recent-blog/blog1.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="<?php base_url();?>common/template/img/recent-blog/blog2.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- single-blog -->
						<div class="col-lg-12 col-sm-12">
							<div class="single_blog">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-3">
										<div class="blog_thumb">
											<img class="img-fluid" src="<?php base_url();?>common/template/img/recent-blog/blog3.jpg" alt="">
										</div>
									</div>
									<div class="col-lg-8 col-md-8">
										<div class="blog_details">
											<div class="blog_meta">
												<span><i class="fa fa-calendar"></i>13th Dec</span>
												<span><i class="fa fa-heart-o"></i>15</span>
												<span><i class="fa fa-comment-o"></i>04</span>
											</div>
											<h4>
												<a href="#">Portable Fashion for women</a>
											</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- appoinment area -->
				<div class="col-lg-6">
					<div class="recent_blog appoinment">
						<div class="blog_title">
							<h2>Make an Appointment</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua.</p>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
							<form class="form_area" id="myForm" action="mail.html" method="post">
								<div class="row">
									<div class="col-lg-12 form_group">
										<input name="name" placeholder="Patient name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
										 class="common_input form-control" required="" type="text">
										<input name="email" placeholder="Email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
										 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common_input form-control"
										 required="" type="email">
										<input name="name" placeholder="Date of birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
										 class="common_input form-control" required="" type="text">
										<select class="default-select">
											<option data-display="Doctor’s name">Doctor’s name</option>
											<option value="1">Rashimul</option>
											<option value="2">Shofi</option>
										</select>
										<input name="subject" placeholder="Appointment date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
										 class="common_input mb-10 form-control" required="" type="text">

										<textarea class="common_textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
										 onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<div class="col-lg-12 text-center">
										<button class="primary-btn text-uppercase">confirm booking</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section-gap">
		<div class="footer_top section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">About Us</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
								magna aliqua.
							</p>
						</div>
					</div>
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">Contact Us</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
								magna aliqua.
							</p>
							<p class="number">
								012-6532-568-9746 <br>
								012-6532-569-9748
							</p>
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4 class="text-white">Newsletter</h4>
							<p>You can trust us. we only send offers, not a single spam.</p>
							<div class="d-flex flex-row" id="mc_embed_signup">
								<form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get">
									<div class="input-group add-on">
										<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
										 required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
										<div class="input-group-btn">
											<button class="genric-btn text-uppercase">
												get started
											</button>
										</div>
									</div>
									<div class="info mt-20"></div>
								</form>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="common/template/js/jquery-3.2.1.min.js"></script>
	<script src="common/template/js/popper.js"></script>
	<script src="common/template/js/bootstrap.min.js"></script>
	<script src="common/template/js/stellar.js"></script>
	<script src="common/template/vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="common/template/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="common/template/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="common/template/js/jquery.ajaxchimp.min.js"></script>
	<script src="common/template/vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="common/template/vendors/counter-up/jquery.counterup.js"></script>
	<script src="common/template/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="common/template/js/gmaps.min.js"></script>
	<script src="common/template/js/theme.js"></script>
</body>

</html>