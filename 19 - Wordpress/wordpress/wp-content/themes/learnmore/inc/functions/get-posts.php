<?php
if ( ! function_exists( 'learnmore_get_posts' ) ) :
	/**
	 * Extends each array's object with associated posts
	 *
	 * @package LearnMore
	 */
	function learnmore_get_posts( $data = array() ) {
		foreach ( $data as $key=>$category ) {
			$args = learnmore_get_posts_args( $category );
			$all_posts = get_posts( $args );
			$data[$key]->posts = $all_posts;
		}
		return $data;
	}
endif;

if ( ! function_exists( 'learnmore_get_posts_args' ) ) :
	// Returns $args for 'get_categories' function based on user provided settings.
	function learnmore_get_posts_args( $category ) {
		$args = array(
			'orderby'    => get_theme_mod( 'kb_article_orderby', 'date' ),
			'order'      => get_theme_mod( 'kb_article_order', 'ASC' ),
			'numberposts' => get_theme_mod( 'kb_article_count', 5 ),
			'category'    => $category->term_id,
		);
		return $args;
	}
endif;
