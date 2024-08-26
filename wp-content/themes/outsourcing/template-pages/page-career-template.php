<?php 
get_header();
/* Template Name: Career */
?>

<section class="page-header">
	<div class="bg-img" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-breadcrumb.jpg"></div>
	<div class="overlay"></div>
	<div class="shapes">
		<div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/pager-header-shape-2.png" alt="shape"></div>
	</div>
	<div class="container-2">
		<div class="page-header-content">
			<h1 class="title">Career</h1>
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Career</li>
			</ul>
		</div>
	</section>
	<!-- ./ page-header -->

	<section class="about-section-4 section-padding" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/service-bg.png);"> 
		<div class="container">
			<div class="fade-wrapper">
				<div>
					<div class="about-content-4">
						<h2>Jobs at outsource bookkeeping</h2>
						<p>
							Based on Northern Beaches, New South Wales.  More than 10 years of experience in accounting & Bookkeeping, Registered BAS agent
						</p>
						<p>
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque esse sit repudiandae, commodi illo natus. Cumque distinctio vero nulla quo similique, inventore aspernatur ratione, impedit porro pariatur atque error beatae at quidem nobis, corrupti repellendus dignissimos id placeat quod ullam laudantium? Aspernatur, labore iste?
						</p>
						<p>
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque esse sit repudiandae, commodi illo natus. Cumque distinctio vero nulla quo similique, inventore aspernatur ratione, impedit porro pariatur atque error beatae at quidem nobis, corrupti repellendus dignissimos id placeat quod ullam laudantium? Aspernatur, labore iste?
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ./ about-section -->

	<section class="contact-section section-padding">
		<div class="container">
			<div class="blog-contact-form">
				<h2 class="title mb-0 text-center">Fill the form</h2>
				<p class="mb-30 mt-10 text-center">Fill-up The Form and Message us of your amazing question</p>
				<div class="request-form">
					<form action="mail.php" method="post" id="ajax_contact" class="form-horizontal">
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-item">
									<label>Name</label>
									<input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-item">
									<label>Email</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-item">
									<label>Gender</label>
									<div class="radio-style">
										<label>
											<input type="radio" name="gender" value="male" checked>
											Male
										</label>
										<label>
											<input type="radio" name="gender" value="female">
											Female
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-item">
									<label>Please click yes if you are a Vendor</label>
									<div class="radio-style">
										<label>
											<input type="radio" name="Vendor" value="male" checked>
											Yes
										</label>
										<label>
											<input type="radio" name="Vendor" value="female">
											No
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-item">
									<label>Total work Experience(Years)</label>
									<input type="number" id="experience" name="experience" class="form-control" placeholder="Years">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-item">
									<label>Total work Experience(Months)</label>
									<input type="number" id="experience" name="experience" class="form-control" placeholder="Months">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
								<div class="form-item">
									<label>Mobile Number</label>
									<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-item">
									<label>Apply For Position</label>
									<input type="text" id="position" name="position" class="form-control" placeholder="Position">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<div class="form-item">
									<label>Upload you CV (Maximum size 10MB. PDF, DOC, TXT only please)</label>
									<input type="file" id="file" name="file" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-item message-item">
									<label>Write a message</label>
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
	</section>
	<!-- ./ contact-section -->

	<?php 
	get_footer();