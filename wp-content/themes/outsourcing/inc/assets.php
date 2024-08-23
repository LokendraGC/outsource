<?php 

/**
 * Enqueue scripts and styles.
 */
function outsourcing_scripts() {

	// Enqueue CSS files
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome-min', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
	wp_enqueue_style('venobox-min', get_template_directory_uri() . '/assets/css/venobox.min.css');
	wp_enqueue_style('animate-min', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style('keyframe-animation', get_template_directory_uri() . '/assets/css/keyframe-animation.css');
	wp_enqueue_style('daterangepicker', get_template_directory_uri() . '/assets/css/daterangepicker.css');
	wp_enqueue_style('odometer-min', get_template_directory_uri() . '/assets/css/odometer.min.css');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
	wp_enqueue_style('swiper-min', get_template_directory_uri() . '/assets/css/swiper.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	

	// Enqueue JavaScript files
	wp_enqueue_script('jquery-3-6-0-min', get_template_directory_uri() . '/assets/js/vendor/jquary-3.6.0.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/vendor/bootstrap-bundle.js', array(), _S_VERSION, true);
	wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/vendor/imagesloaded-pkgd.js', array(), _S_VERSION, true);
	wp_enqueue_script('waypoints-min', get_template_directory_uri() . '/assets/js/vendor/waypoints.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('venobox-min', get_template_directory_uri() . '/assets/js/vendor/venobox.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('odometer-min', get_template_directory_uri() . '/assets/js/vendor/odometer.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/vendor/meanmenu.js', array(), _S_VERSION, true);
	wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/vendor/smooth-scroll.js', array(), _S_VERSION, true);
	wp_enqueue_script('jquery-isotope', get_template_directory_uri() . '/assets/js/vendor/jquery.isotope.js', array(), _S_VERSION, true);
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper-min', get_template_directory_uri() . '/assets/js/vendor/swiper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('moment-min', get_template_directory_uri() . '/assets/js/vendor/moment.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('daterangepicker-min', get_template_directory_uri() . '/assets/js/vendor/daterangepicker.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('split-type-min', get_template_directory_uri() . '/assets/js/vendor/split-type.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gsap-min', get_template_directory_uri() . '/assets/js/vendor/gsap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('scroll-trigger-min', get_template_directory_uri() . '/assets/js/vendor/scroll-trigger.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/vendor/nice-select.js', array(), _S_VERSION, true);
	wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array(), _S_VERSION, true);
	wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js', array(), _S_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);


	wp_localize_script( 'raithane-mainjs', 'RAITHAANEobj', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'token'  => wp_create_nonce( '%RAITHAANE%' ),
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'outsourcing_scripts' );
