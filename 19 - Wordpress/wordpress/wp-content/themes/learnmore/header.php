<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LearnMore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php learnmore_body_open(); ?>
	<a class="screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'learnmore' ); ?></a>

	<header class="site-header" role="banner">
		<div class="grid container site-header-container">
			<div class="cell cell--3@large">
				<div class="site-branding">
					<?php learnmore_site_branding(); ?>
				</div>
			</div>
			<div class="cell cell--9@large">
				<?php get_template_part( 'template-parts/menus/menu-primary' ); ?>
			</div>
		</div>

		<!-- homepage only search bar -->
		<?php
		if ( is_page_template( 'page-templates/knowledgebase.php' ) ) :
			get_template_part( 'template-parts/header/primary-search' );
		else :
			if ( true === get_theme_mod( 'archive_bottom_bar', true ) ) {
				get_template_part( 'template-parts/header/bottom-bar' );
			}
		endif;
		?>
		<!-- homepage only search bar: ends -->
	</header>

	<div class="site-content container" id="content">
