<?php
if ( ! function_exists( 'learnmore_get_categories' ) ) :
	/**
	 * Returns an array containing all categories [skips the 'Uncategorized' one ] with permalinks.
	 *
	 * Uses WordPress native get_categories function.
	 *
	 * @package LearnMore
	 */
	function learnmore_get_categories() {
		$args = learnmore_get_category_args();
		$categories = get_categories( $args );
		return $categories;
	}
endif;

if ( ! function_exists( 'learnmore_get_category_args' ) ) :

	// Returns $args for 'get_categories' function based on user provided settings.
	function learnmore_get_category_args() {
		$uncategorized_category_id = get_cat_ID( 'Uncategorized' );
		$args = array(
			'orderby'    => get_theme_mod( 'kb_category_orderby', 'name' ),
			'order'      => get_theme_mod( 'kb_category_order', 'ASC' ),
			'hide_empty' => true,
			'exclude'    => $uncategorized_category_id,
			'parent'     => 0, // only top-level terms
		);

		return $args;
	}
endif;