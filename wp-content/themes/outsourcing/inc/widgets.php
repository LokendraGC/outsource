<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function outsourcing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'outsourcing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'outsourcing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu First', 'outsourcing' ),
			'id'            => 'footer-menu-first',
			'description'   => esc_html__( 'Add widgets here.', 'outsourcing' ),
			'before_widget' => '<div class="footer-widget widget-space"><div class="widget-header">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="widget-header"><h3 class="widget-title">',
			'after_title'   => '</div></h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu Second', 'outsourcing' ),
			'id'            => 'footer-menu-second',
			'description'   => esc_html__( 'Add widgets here.', 'outsourcing' ),
			'before_widget' => '<div class="footer-widget widget-space">
			<div class="widget-header">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="widget-header"><h3 class="widget-title">',
			'after_title'   => '</div></h3>',
		)
	);

}
add_action( 'widgets_init', 'outsourcing_widgets_init' );
