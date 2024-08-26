<?php 

// Contact Form 7: Disable automatic paragraph tags
add_filter('wpcf7_autop_or_not', '__return_false');

// Initialize custom form tags
add_action( 'wpcf7_init', 'custom_select_service' );


function custom_select_service() {
	wpcf7_add_form_tag( 'select_service_name', 'custom_select_service_name_handler' );
}

function custom_select_service_name_handler(){
	
	$html = '<select class="select-control form-control country" name="service">';
	$html .= '<option value="" selected>Select Services</option>';

	$args = array(	
		'post_type' => 'service',
		'post_status' => 'publish',
		'posts_per_page' => -1 
	);
	$service_data = new WP_Query($args);
	if( $service_data->have_posts() ):

		while( $service_data->have_posts() ): $service_data->the_post();

			$html .= '<option value="'. esc_url(get_permalink()) .'">'. esc_html(get_the_title()) .'</option>';

		endwhile;
		wp_reset_postdata();
	else:
		$html .= '<option disabled>No Services available</option>';
	endif;

	$html .= '</select>'; 

	return $html;
}
