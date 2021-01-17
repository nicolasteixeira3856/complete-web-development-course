<?php
if ( ! function_exists( 'learnmore_show_empty_content_guidelines' ) ) :
	/**
	 * Outputs a message about a need of adding more posts/categories
	 *
	 * @package LearnMore
	 */
	function learnmore_show_empty_content_guidelines() {

		$args = array( 'parent' => 0, 'hide_empty' => 0 );
		$categories = get_categories( $args );
		$categories_amount = count( $categories );

		// If there's only 1 category and this category is the default one show the message
		if ( $categories_amount === 1 && $categories[0]->slug === 'uncategorized' ) {
			if ( current_user_can( 'administrator' ) ) { ?>
				<p>
				<?php esc_html_e( 'This page is empty because this template ignores the default "Uncategorized" category.', 'learnmore' ); ?>
				<br>
				<?php esc_html_e( 'Please add at least one additional category and assign at least one post to it.', 'learnmore' ); ?></p>
				<p><?php esc_html_e( '(You are able to see this message only because you have "admin" capabilities)', 'learnmore' ); ?></p>
			<?php
			}
		}
	}
endif;
