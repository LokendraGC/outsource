<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package outsourcing
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php 
	$search_text = $_GET['s'];
	$ppp = -1;

	$args = array(
		'post_type' =>array('service', 'software','business','consulting','pricing','industry'),
		'post_status' => 'publish',
		'posts_per_page' => $ppp,
		's' => $search_text,
		'search_columns' => array( 'post_title' ),
		'paged' => $paged,
	);

	$post_data = new WP_Query( $args );
	if( $post_data ):
	?>

	<section class="service-section-4 section-padding">
	<div class="container">
		<div class="row gy-4 fade-wrapper">
				
			<?php while( $post_data->have_posts() ):$post_data->the_post(); ?>
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
<?php endif; ?>
</main>

<?php
get_footer();
