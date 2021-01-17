<?php
/**
 * Theme stylesheets and scripts.
 *
 * @package LearnMore
 */

function learnmore_scripts() {
	$learnmore_theme = wp_get_theme();

	// ------------------------------------------
	// If we are on the admin screen we dont need
	// to load the custom scripts and styles.
	// What we need to load is basic stylesheet.
	// ------------------------------------------
	if ( is_admin() ) {
		wp_enqueue_style( 'learnmore-stylesheet', get_stylesheet_uri() );
		return;
	}

	// ------------------------------------------
	// Enqueue LearnMore CSS
	// ------------------------------------------
	$style_src = WP_DEBUG ? 'style.css' : 'style.min.css';
	wp_enqueue_style( 'learnmore-styles', get_theme_file_uri( '/assets/styles/' . $style_src . '' ), false, $learnmore_theme->get( 'Version' ) );

		// If Kirki is not installed then enqueue default fonts.
	if ( ! class_exists( 'Kirki' ) ) {
		wp_enqueue_style( 'learnmore-fonts', '//fonts.googleapis.com/css?family=Roboto:wght@400;500&display=swap' );
	}

	// ------------------------------------------
	// Enqueue LearnMore JS
	// ------------------------------------------
	$scripts_src = WP_DEBUG ? 'bundle.js' : 'bundle.min.js';
	wp_enqueue_script( 'learnmore-scripts', get_theme_file_uri( '/assets/scripts/' . $scripts_src . '' ), false, $learnmore_theme->get( 'Version' ), true );

	// ------------------------------------------
	// Add comments script.
	// ------------------------------------------
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'learnmore_scripts' );

/**
 * Display custom CSS.
 */
function learnmore_custom_styles() {
	$style  = '<style type="text/css" id="theme-custom-styling">';
	$style .= learnmore_color_scheme_css();
	$style .= '</style>';

	echo $style;
}

add_action( 'wp_head', 'learnmore_custom_styles' );


/**
 * Add custom CSS in Customizer.
 */
function learnmore_enqueue_customizer_stylesheet() {
	wp_register_style( 'learnmore-customizer-css', get_template_directory_uri() . '/assets/styles/customizer.css', null, null, 'all' );
	wp_enqueue_style( 'learnmore-customizer-css' );
}
add_action( 'customize_controls_print_styles', 'learnmore_enqueue_customizer_stylesheet' );
