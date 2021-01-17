<?php

add_action(
	'woocommerce_before_template_part',
	function ($template_name, $template_path, $located, $args) {
		if ($template_name !== 'single-product/product-image.php') {
			return;
		}

		if (
			(is_product() || wp_doing_ajax())
			&&
			(
				blocksy_get_post_editor() === 'brizy'
				||
				blocksy_get_post_editor() === 'elementor'
			)
		) {
			return;
		}

		echo blocksy_render_view(dirname(__FILE__) . '/woo-gallery-template.php');

		ob_start();
	},
	4,
	4
);

add_action(
	'woocommerce_after_template_part',
	function ($template_name, $template_path, $located, $args) {
		if ($template_name !== 'single-product/product-image.php') {
			return;
		}

		if (
			(is_product() || wp_doing_ajax())
			&&
			(
				blocksy_get_post_editor() === 'brizy'
				||
				blocksy_get_post_editor() === 'elementor'
			)
		) {
			return;
		}

		ob_get_clean();
	},
	4,
	4
);

