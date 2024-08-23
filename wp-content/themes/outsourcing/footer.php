<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outsourcing
 */

?>

<footer class="footer-section footer-2 overflow-hidden">
	<div class="shapes">
		<div class="shape shape-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/footer-shape-1.png" alt="footer"></div>
		<div class="shape shape-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/footer-shape-2.png" alt="footer"></div>
		<div class="shape shape-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shapes/footer-shape-3.png" alt="footer"></div>
	</div>
	<div class="container-2">
		<div class="row footer-wrap">
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget">
					<div class="widget-header">
						<div class="footer-logo">
							<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/outsourcebookkeeping-footer.svg"
									alt="img"></a>
						</div>
					</div>
					<div>
						<div class="footer-contact">
							<i class="fa fa-location-dot"></i>Dee Why NSW 2099
						</div>
						<div class="footer-contact">
							<i class="fa fa-phone"></i><a href="tel:0411306623">0411306623</a>
						</div>
						<div class="footer-contact">
							<i class="fa fa-envelope"></i><a
								href="tel:info@outsourcebookkeeping.com.au">info@outsourcebookkeeping.com.au</a>
						</div>
					</div>
					<ul class="footer-social">
						<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-6">
				<div class="footer-widget widget-space">
					<div class="widget-header">
						<h3 class="widget-title">Quick Links</h3>
					</div>
					<ul class="footer-list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Why Us</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-6">
				<div class="footer-widget">
					<div class="widget-header">
						<h3 class="widget-title">Service</h3>
					</div>
					<ul class="footer-list">
						<li><a href="#">Bookkeeping</a></li>
						<li><a href="#">Payroll</a></li>
						<li><a href="#">Invoicing</a></li>
						<li><a href="#">Our Work</a></li>
						<li><a href="#">Management Reporting</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget widget-space">
					<div class="widget-header">
						<h3 class="widget-title">Our Newsletter</h3>
					</div>
					<p>Sign up to Private's weekly newsletter to get the latest updates.</p>
					<div class="footer-form form-2 mb-20">
						<form action="#" class="rr-subscribe-form">
							<input class="form-control" type="email" name="email" placeholder="Email address">
							<input type="hidden" name="action" value="mailchimpsubscribe">
							<button class="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area area-2">
		<div class="container-2">
			<div class="row copyright-content">
				<div class="col-md-6">
					<p>© 2024 Copyright Outsource Bookkeeping. Developed By <a href="https://webtechnepal.com/"
							target="_blank">Webtech Nepal</a></p>
				</div>
				<div class="col-md-6">
					<ul class="copy-list">
						<li><a href="contact.html">Terms & Conditions</a></li>
						<li><a href="contact.html">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- ./ footer-section -->

<div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>

<?php wp_footer(); ?>

</body>

</html>