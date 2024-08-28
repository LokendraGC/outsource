<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package outsourcing
 */

get_header();

get_template_part('template-parts/common/banner-section');

?>

	<section class="error-section section-padding">
		<div class="container">
			<div class="error-content text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404-error-page.gif" alt="img">
				<h2 class="text">Page Not Found</h2>
				<p class="mb-30">The page you are looking for was moved, removed, renamed <br>
					or never existed.
				</p>
				<a href="<?php echo site_url('/'); ?>" class="bz-primary-btn">Back to home</a>
			</div>
		</div>
	</section>
	<!-- ./ error-section -->
	<?php
	get_footer();
