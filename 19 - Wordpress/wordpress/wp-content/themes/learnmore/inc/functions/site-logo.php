<?php
if ( ! function_exists( 'learnmore_logo' ) ) :
	/**
	 * Adds custom logo option
	 *
	 * @package LearnMore
	 */
	function learnmore_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
	
endif;