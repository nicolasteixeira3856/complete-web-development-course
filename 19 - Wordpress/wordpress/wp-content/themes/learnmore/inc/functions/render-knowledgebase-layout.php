<?php
if ( ! function_exists( 'learnmore_render_knowledgebase_layout' ) ) :
	/**
	 * Returns html with layout selected by the user
	 *
	 * @package LearnMore
	 */
	function learnmore_render_knowledgebase_layout() {
		get_template_part('template-parts/knowledgebase/layout-1');
	}
endif;
