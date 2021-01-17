<?php
/**
 * Declaring Gutenberg support.
 *
 * @package LearnMore
 */

if ( ! function_exists( 'learnmore_add_gutenberg_support' ) ) :

	/**
	 * Adds support for Gutenberg blocks.
	 *
	 * @return void
	 */
	function learnmore_add_gutenberg_support() {
		/*
		The embed blocks automatically apply styles to embedded content
		 * to reflect the aspect ratio of content that is embedded in an iFrame.
		 */
		add_theme_support( 'responsive-embeds' );

		// /* In the Guteberg plugin 8.3, link color control is available to
		// * link color control is available to the Paragraph,
		// * Heading, Group, Columns, and Media & Text blocks.
		// */
		add_theme_support( 'experimental-link-color' );
		add_theme_support( 'align-wide' );
	}

endif;

add_action( 'after_setup_theme', 'learnmore_add_gutenberg_support' );
