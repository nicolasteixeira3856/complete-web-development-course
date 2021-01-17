<?php
/**
 * LearnMore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LearnMore
 */

/**
 * Freemius
 */
if ( ! function_exists( 'learnmore_fs' ) ) {
	// Create a helper function for easy SDK access.
	function learnmore_fs() {
		global $learnmore_fs;

		if ( ! isset( $learnmore_fs ) ) {
			// Include Freemius SDK.
			require_once dirname(__FILE__) . '/freemius/start.php';

			$learnmore_fs = fs_dynamic_init( array(
				'id'             => '6877',
				'slug'           => 'learnmore',
				'type'           => 'theme',
				'public_key'     => 'pk_d842551eb4218b64e5f6590c9dc3b',
				'is_premium'     => false,
				'has_addons'     => false,
				'has_paid_plans' => false,
				'menu'           => array(
					'slug'    => 'learnmore-page',
					'account' => false,
				),
			));
		}

		return $learnmore_fs;
	}

	// Init Freemius.
	learnmore_fs();
	// Signal that SDK was initiated.
	do_action( 'learnmore_fs_loaded' );
}

/**
 * Theme options
 */
require get_template_directory() . '/inc/theme-options/options.php';
require get_template_directory() . '/inc/theme-options/get-option.php';
require get_template_directory() . '/inc/hooks/theme-options-config.php';
require get_template_directory() . '/inc/hooks/disable-kirki-telemetry.php';

/**
 * Core functionality
 */
require get_template_directory() . '/inc/core/settings.php';
require get_template_directory() . '/inc/core/gutenberg.php';
require get_template_directory() . '/inc/core/scripts.php';
require get_template_directory() . '/inc/core/widgets.php';
require get_template_directory() . '/inc/core/customizer.php';
require get_template_directory() . '/inc/core/recommended-plugins.php';
require get_template_directory() . '/inc/core/theme-page.php';

/**
 * Functions
 */
require get_template_directory() . '/inc/functions/get-categories.php';
require get_template_directory() . '/inc/functions/get-posts.php';
require get_template_directory() . '/inc/functions/get-knowledgebase-data.php';
require get_template_directory() . '/inc/functions/render-knowledgebase-layout.php';
require get_template_directory() . '/inc/functions/body-open.php';
require get_template_directory() . '/inc/functions/site-logo.php';
require get_template_directory() . '/inc/functions/site-branding.php';
require get_template_directory() . '/inc/functions/posted-on.php';
require get_template_directory() . '/inc/functions/post-pagination.php';
require get_template_directory() . '/inc/functions/post-thumbnail.php';
require get_template_directory() . '/inc/functions/post-terms.php';
require get_template_directory() . '/inc/functions/edit-link.php';
require get_template_directory() . '/inc/functions/css-color-scheme.php';
require get_template_directory() . '/inc/functions/show-empty-content-guidelines.php';

/**
 * Hooks
 * actions and filters used in the theme
 */
require get_template_directory() . '/inc/hooks/body-classes.php';
require get_template_directory() . '/inc/hooks/icons.php';
require get_template_directory() . '/inc/hooks/javascript-detect.php';
require get_template_directory() . '/inc/hooks/no-javascript.php';
