<?php

add_action('parse_tax_query', function ($query) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if (! (
		is_home() || is_archive() || is_search()
	)) {
		return;
	}

	if (function_exists('is_woocommerce')) {
		if (is_woocommerce()) {
			return;
		}
	}

	$prefix = blocksy_manager()->screen->get_prefix();

	$query->set(
		'posts_per_page',
		intval(get_theme_mod(
			$prefix . '_archive_per_page',
			10
		))
	);
});

if (! function_exists('blocksy_get_listing_card_type')) {
	function blocksy_get_listing_card_type() {
		$cards_type_output = '';

		$prefix = blocksy_manager()->screen->get_prefix();
		$blog_post_structure = get_theme_mod($prefix . '_structure', 'grid');

		if ($blog_post_structure === 'gutenberg') {
			return $cards_type_output;
		}

		$card_type = get_theme_mod($prefix . '_card_type', 'boxed');

		return 'data-cards="' . $card_type . '"';
	}
}

if (! function_exists('blocksy_listing_page_structure')) {
	function blocksy_listing_page_structure() {
		$prefix = blocksy_manager()->screen->get_prefix();
		$blog_post_structure = get_theme_mod($prefix . '_structure', 'grid');

		if ($blog_post_structure === 'gutenberg') {
			// return 'data-structure="narrow"';
		}

		return '';
	}
}

if (! function_exists('blocksy_cards_get_deep_link')) {
	function blocksy_generic_get_deep_link($suffix = '') {
		$attr = [];

		$prefix = blocksy_manager()->screen->get_prefix();

		if (is_customize_preview()) {
			$attr['data-shortcut'] = 'border';
			$attr['data-location'] = blocksy_first_level_deep_link($prefix);

			if (! empty($suffix)) {
				$attr['data-location'] .= ':' . $suffix;
			}
		}

		return blocksy_attr_to_html($attr);
	}
}

