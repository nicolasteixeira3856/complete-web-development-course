<?php
/**
 * Displays footer site info
 *
 * @package LearnMore
 */

?>
<div class="site-info">
	<span class="site-designer">
		<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'learnmore' ), '<a href="https://humblethemes.com/themes/learnmore/">LearnMore</a>', 'Humble Themes' );
		?>
	</span>
</div><!-- .site-info -->
