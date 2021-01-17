<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package LearnMore
 */

add_action( 'widgets_init', 'learnmore_widgets_init' );

/**
 * Inits LearnMore Widgets.
 *
 * @return void
 */
function learnmore_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Main Sidebar', 'learnmore' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'learnmore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 1', 'learnmore' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here for footer widget area 1.', 'learnmore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 2', 'learnmore' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here for footer widget area 2.', 'learnmore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 3', 'learnmore' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here for footer widget area 3.', 'learnmore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 4', 'learnmore' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here for footer widget area 4.', 'learnmore' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
