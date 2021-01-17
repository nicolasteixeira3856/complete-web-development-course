<?php

if (defined('WC_VERSION') && version_compare(WC_VERSION, '2.3', '>=')) {
	add_filter('woocommerce_add_to_cart_fragments', 'blocksy_header_cart_item_fragment');
} else {
	add_filter('add_to_cart_fragments', 'blocksy_header_cart_item_fragment');
}

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('wp_ajax_blocksy_get_woo_minicart', 'blocksy_get_woocommerce_minicart');
add_action('wp_ajax_nopriv_blocksy_get_woo_minicart', 'blocksy_get_woocommerce_minicart');

if (! function_exists('blocksy_get_woocommerce_minicart')) {
	function blocksy_get_woocommerce_minicart() {
		ob_start();
		woocommerce_mini_cart();
		$content = ob_get_clean();

		wp_send_json_success([
			'count' => WC()->cart->get_cart_contents_count(),
			'minicart' => blocksy_html_tag(
				'div',
				['class' => 'ct-cart-content'],
				$content
			)
		]);
	}
}


if (! function_exists('blocksy_header_cart_item_fragment')) {
	function blocksy_header_cart_item_fragment($fragments) {
		$header = new Blocksy_Header_Builder_Render();
		$elements = new Blocksy_Header_Builder_Elements();

		$fragments['.ct-header-cart > .ct-cart-item'] = $header->render_single_item('cart', [
			'render_args' => [
				'only_item' => true
			]
		]);

		$fragments['.ct-header-cart > .ct-cart-content'] = $header->render_single_item('cart', [
			'render_args' => [
				'only_cart' => true
			]
		]);

		$fragments['#woo-cart-panel .content-container'] = $elements->render_cart_offcanvas([
			'has_container' => false
		]);

		return $fragments;
	}
}
