<?php 
get_header();
/* Template Name: Contact Us */
?>

<section class="page-header">
	<div class="bg-img" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-breadcrumb.jpg"></div>
	<div class="overlay"></div>
	<div class="shapes">
		<div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/pager-header-shape-2.png" alt="shape"></div>
	</div>
	<div class="container-2">
		<div class="page-header-content">
			<h1 class="title">Our Contacts</h1>
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Contact</li>
			</ul>
		</div>
	</section>
	<!-- ./ page-header -->

	<section class="contact-section section-padding">
		<div class="container">
			<div class="row gy-lg-0 gy-5">
				<div class="col-lg-7">
					<div class="blog-contact-form">
						<h2 class="title mb-0">Message Us</h2>
						<p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
						<div class="request-form">
							<form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-item">
											<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
											<div class="icon"><i class="fa-regular fa-user"></i></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-item">
											<input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
											<div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<div class="form-item">
											<select class="select-control form-control country">
												<option value="" selected>Select Services</option>
												<option value="bookkeeping"><a href="#">Bookkeeping</a></option>
												<option value="payroll"><a href="#">Payroll</a></option>
												<option value="invoicing"><a href="#">Invoicing</a></option>
												<option value="accounts-receivables"><a href="#">Accounts Receivables</a></option>
												<option value="accounts-payables"><a href="#">Accounts Payables</a></option>
												<option value="reporting"><a href="#">Reporting weekly/ monthly/ quarterly/ annual</a></option>
												<option value="bas-ias"><a href="#">BAS / IAS lodgment</a></option>
												<option value="management-reporting"><a href="#">Management reporting</a></option>
												<option value="budgeting-forecasting"><a href="#">Budgeting Forecasting</a></option>
												<option value="tax-planning"><a href="#">Tax planning and consulting</a></option>
												<option value="stp-finalisation"><a href="#">STP Finalisation</a></option>
												<option value="superannuation"><a href="#">Superannuation processing</a></option>
												<option value="sgc-statement"><a href="#">SGC statement</a></option>
											</select>
										</div>

									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<div class="form-item message-item">
											<textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
											<div class="icon"><i class="fa-light fa-messages"></i></div>
										</div>
									</div>
								</div>
								<div class="submit-btn">
									<button id="submit" class="bz-primary-btn" type="submit">Submit Message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12">
					<div class="contact-content">
						<div class="contact-top">
							<h3 class="title">Contact with us</h3>
							<p>Completely recapitalize 24/7 communities via standards compliant metrics whereas.</p>
						</div>
						<div class="contact-list">
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-phone"></i>
								</div>
								<div class="content">
									<h4 class="title">Phone Number</h4>
									<span><a href="tel:+65485965789">0411306623</a></span>
								</div>
							</div>
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-location-dot"></i>
								</div>
								<div class="content">
									<h4 class="title">Our Address</h4>
									<p>Dee Why NSW 2099</p>
								</div>
							</div>
							<div class="list-item">
								<div class="icon">
									<i class="fa-sharp fa-solid fa-clock"></i>
								</div>
								<div class="content">
									<h4 class="title">Mail For Support</h4>
									<span><a href="mailto:info@outsourcebookkeeping.com.au">info@outsourcebookkeeping.com.au</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ contact-section -->

	<section class="">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13269.494755061265!2d151.29102504999997!3d-33.75100815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b0d55874e2bee61%3A0x5017d681632b440!2sDee%20Why%20NSW%202099%2C%20Australia!5e0!3m2!1sen!2snp!4v1724222165953!5m2!1sen!2snp" width="100%" height="450" style="border:0; padding:0; margin:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>

	<?php 
	get_footer();