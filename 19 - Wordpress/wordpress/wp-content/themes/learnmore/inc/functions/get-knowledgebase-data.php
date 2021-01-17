<?php
if ( ! function_exists( 'learnmore_get_knowledgebase_data' ) ) :
	/**
	 * Returns an array of objects containing all knowledgebase data: categories and associated posts
	 *
	 * @package LearnMore
	 */
	function learnmore_get_knowledgebase_data() {
		$categories = learnmore_get_categories();
		$kb_data = learnmore_get_posts( $categories );
		return $kb_data;
	}
endif;
