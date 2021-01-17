<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blocksy
 */

$prefix = blocksy_manager()->screen->get_prefix();

$blog_post_structure = get_theme_mod($prefix . '_structure', 'grid');

$blog_post_columns = get_theme_mod($prefix . '_columns', '3');

$columns_output = '';

if ( $blog_post_structure === 'grid' ) {
	$columns_output = 'data-column-set="' . $blog_post_columns . '"';
}

$container_class = 'ct-container';

if ($blog_post_structure === 'gutenberg') {
	$container_class = 'ct-container-narrow';
}

?>

<?php

/**
 * Note to code reviewers: This line doesn't need to be escaped.
 * Function blocksy_output_hero_section() used here escapes the value properly.
 */
echo blocksy_output_hero_section([
	'type' => 'type-2'
]);

?>

<div class="<?php echo $container_class ?>" <?php echo wp_kses_post(blocksy_sidebar_position_attr()); ?> <?php echo blocksy_get_v_spacing() ?>>

	<section>
		<?php
			/**
			 * Note to code reviewers: This line doesn't need to be escaped.
			 * Function blocksy_output_hero_section() used here
			 * escapes the value properly.
			 */
			echo blocksy_output_hero_section([
				'type' => 'type-1'
			]);
		?>

		<?php if ( have_posts() ) { ?>
			<?php if ( have_posts() ) { ?>
				<div class="entries"
					data-layout="<?php echo esc_attr($blog_post_structure); ?>"
					<?php echo blocksy_get_listing_card_type() ?>
					<?php echo blocksy_listing_page_structure() ?>
					<?php echo wp_kses_post($columns_output); ?>
					<?php echo blocksy_schema_org_definitions('blog') ?>
					<?php echo blocksy_generic_get_deep_link() ?>>
			<?php }

				while ( have_posts() ) {
					the_post();
					get_template_part(
						'template-parts/content-loop', get_post_type()
					);
				}
			?>

			<?php if ( have_posts() ) { ?>
				</div>
			<?php }

			/**
				* Note to code reviewers: This line doesn't need to be escaped.
				* Function blocksy_display_posts_pagination() used here escapes the value properly.
				*/
			echo blocksy_display_posts_pagination();
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}

		?>
	</section>

	<?php get_sidebar(); ?>
</div>

