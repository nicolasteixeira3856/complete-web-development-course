<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 *
 * @package LearnMore
 */
add_filter( 'body_class', 'learnmore_body_classes' );

function learnmore_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Footer widget area count.
	$footer_widget_count = 0;
	if ( is_active_sidebar( 'footer-1' ) ) {
		$footer_widget_count++;
	}
	if ( is_active_sidebar( 'footer-2' ) ) {
		$footer_widget_count++;
	}
	if ( is_active_sidebar( 'footer-3' ) ) {
		$footer_widget_count++;
	}
	if ( is_active_sidebar( 'footer-4' ) ) {
		$footer_widget_count++;
	}

	$classes[] = 'footer-widgets-' . $footer_widget_count;


	$classes[] = 'knowledgebase-layout-1';

	$classes[] = 'sidebar-layout-default';

	return $classes;
}
