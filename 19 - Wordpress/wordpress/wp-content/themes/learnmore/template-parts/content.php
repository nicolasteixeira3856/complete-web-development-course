<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LearnMore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( is_singular() ) :
		?>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>

		<div class="entry-content">
			<?php
				get_template_part( 'template-parts/entry-meta' );
				learnmore_post_thumbnail();
				the_content();
				learnmore_edit_link();
				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'learnmore' ),
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'learnmore' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">,</span> ',
					)
				);
			?>
		</div><!-- .entry-content -->
		<?php
	else :
		?>

		<header class="entry-header">
			<?php
			if ( is_sticky() && is_home() ) :
				echo learnmore_get_svg( array( 'icon' => 'pin' ) );
				endif;
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
		</header>

		<div class="entry-content">
			<?php
				get_template_part( 'template-parts/entry-meta' );
				learnmore_post_thumbnail();
				the_excerpt();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'learnmore' ),
						'after'  => '</div>',
					)
				);
			?>
		</div>
		<?php
	endif; // End check single.
	?>

</article><!-- #post-## -->
