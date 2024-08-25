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
					<?php if( $footer_logo = get_field('wtn_footer_logo','options') ): ?>
						<div class="widget-header">
							<div class="footer-logo">
								<a href="<?php echo site_url(''); ?>">
									<img src="<?php echo $footer_logo['url']; ?>"
									alt="footer logo">
								</a>
							</div>
						</div>

					<?php else: ?>
						<div class="widget-header">
							<div class="footer-logo">
								<a href="<?php echo site_url(''); ?>">
									<img src="<?php echo get_template_directory_uri(). "/assets/img/logo/outsourcebookkeeping-footer.svg"; ?>"
									alt="footer logo">
								</a>
							</div>
						</div>
					<?php endif; ?>

					<div>
						<?php if( $address = get_field('wtn_address','options') ): ?>
						<div class="footer-contact">
							<i class="fa fa-location-dot"></i><?php echo $address; ?>
						</div>
					<?php endif; ?>

					<?php if( $phone_num = get_field('wtn_phone_number','options') ): ?>
						<div class="footer-contact">
							<i class="fa fa-phone"></i><a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
						</div>
					<?php endif; ?>

					<?php if( $mail = get_field('wtn_email_address','options') ): ?>
						<div class="footer-contact">
							<i class="fa fa-envelope"></i><a
								href="tel:<?php echo $mail; ?>"><?php echo $mail; ?></a>
						</div>
					<?php endif; ?>
					</div>

					<?php if( have_rows('wtn_social_media','options') ): ?>
					<ul class="footer-social">

						<?php
					 while( have_rows('wtn_social_media','options') ): the_row();

					 	$icon = get_sub_field('wtn_media','options');
					 	$media_link = get_sub_field('wtn_link','options');

					 	if( $media_link ){
					 		$media_linkk = $media_link;
					 		$media_target = '_blank'; 
					 	}else{
					 		$media_linkk = '#';
					 		$media_target = '_self';
					 	}
					 ?>
							<li class="facebook"><a href="<?php echo $media_linkk; ?>" target="<?php echo $media_target; ?>"><i class="fa-brands <?php echo $icon; ?>"></i></a></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
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
					<?php if( $footer_news = get_field('ob_footer_description','options') ): ?>
					<p><?php echo $footer_news; ?></p>
				<?php endif; ?>
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
					<p>© <?php echo Date('Y'); ?> Copyright <?php echo bloginfo(); ?>. Developed By <a href="https://webtechnepal.com/"
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