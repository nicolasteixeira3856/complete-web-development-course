<?php

/**
 * Retrieves information about the current site.
 *
 * @return string Mostly string values, might be empty.
 */
function learnmore_get_option( $option ) {
	switch ( $option ) {
		case 'main-heading':
			$output = learnmore_get_main_heading();
			break;
		case 'placeholder':
			$output = learnmore_get_main_placeholder();
			break;
		case 'primary-color':
			$output = learnmore_get_primary_color();
			break;
		default:
			$output = '';
	}
	return $output;
}

function learnmore_get_main_heading() {
	return sanitize_text_field( get_theme_mod( 'kb_main_heading', 'Hello, how can we help you today?' ) );
}

function learnmore_get_main_placeholder() {
	return sanitize_text_field( get_theme_mod( 'kb_form_placeholder', 'Search the knowledge base...' ) );
}

function learnmore_get_primary_color() {
	return get_theme_mod( 'color_scheme_primary_color', '#6027ce' );
}
