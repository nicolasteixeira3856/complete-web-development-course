<?php
/**
 * Configuration for the Kirki Customizer.
 * The function's argument is an array of existing config values
 * The function returns the array with the addition of our own arguments
 * and then that result is used in the kirki_config filter
 *
 * @param $config the configuration array
 *
 * @return array
 */
function learnmore_kirki_styling( $config ) {
	return wp_parse_args( array(
		'disable_loader' => true,
	), $config );
}

add_filter( 'kirki_config', 'learnmore_kirki_styling' );
