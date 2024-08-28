<?php 
get_header();
get_template_part('template-parts/common/banner-section') ?>

<?php
$post_id = get_the_ID();


$terms = get_the_terms( $post_id, 'pricing-category' );

if ( $terms && ! is_wp_error( $terms ) ) {
    
    $term_ids = wp_list_pluck( $terms, 'term_id' );

    $args = array(
        'post_type' => 'pricing',
        'tax_query' => array(
            array(
                'taxonomy' => 'pricing-category', 
                'field'    => 'term_id',
                'terms'    => $term_ids, 
            ),
        ),
    );

    $query = new WP_Query( $args );

}

if( $query->have_posts() ):
 ?>
<section class="service-section-4 section-padding">
	<div class="container">
		<div class="row gy-4 fade-wrapper">
				
			<?php while( $query->have_posts() ):$query->the_post(); ?>
			<div class="col-lg-4 col-md-6 d-flex">
				<div class="service-item-4 fade-top">
					<div class="service-content">
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo wp_trim_words(get_the_content(),15); ?></p>
						<a href="<?php the_permalink(); ?>" class="read-more">Read Details <i class="fa-regular fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		<?php
		 endwhile;
		 wp_reset_postdata();
		 ?>

		</div>
	</div>
</section>
<!-- ./ service-section -->

<?php 
endif;
get_footer();