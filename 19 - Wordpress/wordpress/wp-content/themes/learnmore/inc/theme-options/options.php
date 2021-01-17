<?php

if ( ! class_exists( 'Kirki' ) ) {
	return;
}

Kirki::add_config( 'learnmore_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// ----------------------------------------------------------------------------------------------
// Knowledgebase
// ----------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/theme-options/partials/knowledgebase/index.php';
require get_template_directory() . '/inc/theme-options/partials/knowledgebase/search.php';
require get_template_directory() . '/inc/theme-options/partials/knowledgebase/categories.php';
require get_template_directory() . '/inc/theme-options/partials/knowledgebase/articles.php';

// ----------------------------------------------------------------------------------------------
// Archive pages
// ----------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/theme-options/partials/archive-pages/index.php';
require get_template_directory() . '/inc/theme-options/partials/archive-pages/header.php';

// ----------------------------------------------------------------------------------------------
// Single layouts
// ----------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/theme-options/partials/singular/index.php';

// ----------------------------------------------------------------------------------------------
// Colors
// ----------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/theme-options/partials/colors/index.php';
require get_template_directory() . '/inc/theme-options/partials/colors/header-colors.php';
// require get_template_directory() . '/inc/theme-options/partials/colors/body-background.php';


// ----------------------------------------------------------------------------------------------
// Typography
// ----------------------------------------------------------------------------------------------
require get_template_directory() . '/inc/theme-options/partials/typography/index.php';
require get_template_directory() . '/inc/theme-options/partials/typography/font-families.php';
