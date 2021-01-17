<?php
/**
 * Outputs body open tag and provides fallback for older WordPress versions.
 *
 * @package LearnMore
 */

function learnmore_body_open() {
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
}
