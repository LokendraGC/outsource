<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outsourcing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo/favicon.svg">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

		<!-- header-area-start -->
		<header class="header header-2 sticky-active">
			<div class="middle-header">
				<div class="container-2">
					<div class="middle-header-inner">
					
						<?php
						$outsource_logo = get_template_directory_uri() . '/assets/img/logo/outsourcebookkeeping-logo.svg';
						$header_logo = get_field('wtn_header_logo', 'options');

						if (isset($header_logo['url'])): ?>
							<div class="header-logo">
								<a href="<?php echo esc_url(site_url('')); ?>">
									<img src="<?php echo esc_url($header_logo['url']); ?>" alt="logo">
								</a>
							</div>
						<?php else: ?>
							<div class="header-logo">
								<a href="<?php echo esc_url(site_url('')); ?>">
									<img src="<?php echo esc_url($outsource_logo); ?>" alt="logo">
								</a>
							</div>
						<?php endif; ?>

						<div class="header-items-wrap">
							<?php if( $phone_num = get_field('wtn_phone_number','options') ): ?>
							<div class="header-item">
								<div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
								<div class="content">
									<span>Call Us</span>
									<a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
								</div>
							</div>
						<?php endif; ?>

							<?php if( $mail = get_field('wtn_email_address','options') ): ?>
							<div class="header-item">
								<div class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
								<div class="content">
									<span>Mail For Support</span>
									<a
										href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
								</div>
							</div>
						<?php endif; ?>
						<?php if( $address = get_field('wtn_address','options') ): ?>
							<div class="header-item">
								<div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
								<div class="content">
									<span>Address</span>
									<p class="address mb-0"><?php echo $address; ?></p>
								</div>
							</div>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="primary-header">
				<div class="container-2">
					<div class="primary-header-inner">
						<div class="header-logo d-lg-none">
							<a href="index.html">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/outsourcebookkeeping-logo.svg" alt="logo">
							</a>
						</div>
						<div class="header-menu-wrap">
							<div class="mobile-menu-items">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li class="menu-item-has-children">
										<a href="service.html">Services</a>
										<ul>
											<li>
												<a href="#">Admin Services</a>
												<ul>
													<li><a href="service-details.html">Business Setup / Registration</a>
													</li>
													<li><a href="service-details.html">Filing </a></li>
													<li><a href="service-details.html">Workers Comp</a></li>
													<li><a href="service-details.html">All Compliance and reporting</a>
													</li>
												</ul>
											</li>
											<li><a href="service-details.html">Bookkeeping</a></li>
											<li><a href="service-details.html">Payroll</a></li>
											<li><a href="service-details.html">Invoicing</a></li>
											<li><a href="service-details.html">Accounts Receivables</a></li>
											<li><a href="service-details.html">Accounts Payables</a></li>
											<li><a href="service-details.html">Reporting weekly/ monthly/ quartery/
													annual</a></li>
											<li><a href="service-details.html">BAS / IAS lodgment</a></li>
											<li><a href="service-details.html">Management reporting</a></li>
											<li><a href="service-details.html">Budgeting Forecasting</a></li>
											<li><a href="service-details.html">Tax planning and consulting</a></li>
											<li><a href="service-details.html">STP Finalisation</a></li>
											<li><a href="service-details.html">Superannuation processing</a></li>
											<li><a href="service-details.html">SGC statement</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Consulting</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Industries</a>
										<ul>
											<li><a href="#">Hospitality (Café, restaurant, Hotel, Club)</a></li>
											<li><a href="#">Retail</a></li>
											<li><a href="#">Building & Construction</a></li>
											<li><a href="#">Health, beauty & Wellness</a></li>
											<li><a href="#">E-commerce</a></li>
											<li><a href="#">All types of small business</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Business</a>
										<ul>
											<li><a href="#">Startup</a></li>
											<li><a href="#">Growing</a></li>
											<li><a href="#">Stablished</a></li>
											<li><a href="#">SME</a></li>
											<li><a href="#">Sole Trader</a></li>
											<li><a href="#">Trust</a></li>
											<li><a href="#">Company</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Software Expertise</a>
										<ul>
											<li>
												<a href="#">Accounting Sofware</a>
												<ul>
													<li><a href="#">Xero</a></li>
													<li><a href="#">Quickbook</a></li>
													<li><a href="#">MYOB</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Bills/ Receipts software</a>
												<ul>
													<li><a href="#">HUBDOC</a></li>
													<li><a href="#">Dext/Receipt bank</a></li>
													<li><a href="#">Ezybills and More</a></li>
												</ul>
											</li>
											<li>
												<a href="#">Payroll Software</a>
												<ul>
													<li><a href="#">Deputy</a></li>
													<li><a href="#">XeroMe</a></li>
													<li><a href="#">EmploymentHero</a></li>
													<li><a href="#">Tradify and more</a></li>
												</ul>
											</li>
											<li>
												<a href="#">All Major POS Software</a>
												<ul>
													<li><a href="#">EPOSNOW</a></li>
													<li><a href="#">Square</a></li>
													<li><a href="#">Lightspeed / Kounta</a></li>
													<li><a href="#">Shopify and more</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Pricing</a>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Resources</a>
										<ul>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Why Choose Us</a></li>
											<li><a href="#">Contact Us</a></li>
											<li><a href="#">Career</a></li>
											<li><a href="#">Blogs & Newsletter</a></li>
											<li><a href="#">Get Quote</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.header-menu-wrap -->
						<div class="header-right-wrap">
							<div class="header-right">
								<a href="#" class="header-btn hide-on-mobile">Get A Quote</a>
								<div class="search-icon dl-search-icon">
									<i class="fa-regular fa-magnifying-glass"></i>
								</div>
								<div class="sidebar-icon">
									<button class="sidebar-trigger open">
										<span></span>
										<span></span>
										<span></span>
									</button>
								</div>
							</div>
							<!-- /.header-right -->
						</div>
					</div>
					<!-- /.primary-header-inner -->
				</div>
			</div>
		</header>
		<!-- /.Main Header -->

		<div id="popup-search-box">
			<div class="box-inner-wrap d-flex align-items-center">
				<form id="form" action="#" method="get" role="search">
					<input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
				</form>
				<div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
			</div>
		</div>
		<!-- /#popup-search-box -->

		<div id="sidebar-area" class="sidebar-area">
			<button class="sidebar-trigger close">
				<svg class="sidebar-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					x="0px" y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7"
					style="enable-background: new 0 0 16 12.7" xml:space="preserve">
					<g>
						<rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16"
							height="2"></rect>
						<rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16"
							height="2"></rect>
					</g>
				</svg>
			</button>
			<div class="side-menu-content">
				<?php
						$outsource_logo = get_template_directory_uri() . '/assets/img/logo/outsourcebookkeeping-logo.svg';
						$header_logo = get_field('wtn_header_logo', 'options');

						if (isset($header_logo['url'])): ?>
							<div class="side-menu-logo">
								<a href="<?php echo esc_url(site_url('')); ?>">
									<img src="<?php echo esc_url($header_logo['url']); ?>" alt="logo">
								</a>
							</div>
						<?php else: ?>
							<div class="side-menu-logo">
								<a href="<?php echo esc_url(site_url('')); ?>">
									<img src="<?php echo esc_url($outsource_logo); ?>" alt="logo">
								</a>
							</div>
						<?php endif; ?>

				<div class="side-menu-wrap"></div>
				<?php if( $sidebar_about = get_field('sidebar_details','options') ): ?>
				<div class="side-menu-about">
					<div class="side-menu-header">
						<h3>About Us</h3>
					</div>
					<?php echo $sidebar_about; ?>
					<a href="<?php echo site_url('contact-us'); ?>" class="bz-primary-btn">Contact Us</a>
				</div>
			<?php endif; ?>
				<div class="side-menu-contact">
					<div class="side-menu-header">
						<h3>Contact Us</h3>
					</div>
					<ul class="side-menu-list">
						<?php if( $address = get_field('wtn_address','options') ): ?>
						<li>
							<i class="fas fa-map-marker-alt"></i>
							<p><?php echo $address; ?></p>
						</li>
					<?php endif; ?>
					<?php if( $phone_num = get_field('wtn_phone_number','options') ): ?>
						<li>
							<i class="fas fa-phone"></i>
							<a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
						</li>
					<?php endif; ?>
					<?php if( $mail = get_field('wtn_email_address','options') ): ?>
						<li>
							<i class="fas fa-envelope-open-text"></i>
							<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
						</li>
					<?php endif; ?>
					</ul>
				</div>
				<?php if( have_rows('wtn_social_media','options') ): ?>
				<ul class="side-menu-social">
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
					<li class="facebook"><a href="<?php echo $media_linkk; ?>" target="<?php echo $media_target; ?>"><i class="fab <?php echo $icon; ?>"></i></a></li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			</div>
		</div>
		<!--/.sidebar-area-->
		
<div>
    <a href="<?php echo site_url('contact-us'); ?>" class="booknow-side">
        <span class="book-text">
            Contact Us
        </span>
    </a>
</div>
