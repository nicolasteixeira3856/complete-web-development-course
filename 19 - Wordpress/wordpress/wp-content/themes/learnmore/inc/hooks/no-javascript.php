<?php
if ( ! function_exists( 'learnmore_no_javascript' ) ) :
	/**
	 * Adds custom message when JavaScript is not available.
	 *
	 * @package LearnMore
	 */
	function learnmore_no_javascript() {
		$output = '<noscript>';
		$output .= '<p class="noscript-notification">';
		$output .= esc_html__( 'This website works best with JavaScript enabled.', 'learnmore' );
		$output .= '</p>';
		$output .= '</noscript>';

		echo $output;
	}

endif;

add_action( 'wp_body_open', 'learnmore_no_javascript' );
