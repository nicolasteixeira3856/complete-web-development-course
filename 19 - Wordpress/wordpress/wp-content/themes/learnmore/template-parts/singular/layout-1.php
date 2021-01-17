<div class="container grid">
	<div class="cell cell--8@medium">
		<main class="site-main" role="main">
			<?php
			while ( have_posts() ) :
				the_post(); ?>

				<header class="entry-header">
					<?php
					if ( is_single() && true == get_theme_mod( 'singular_meta', true ) ) {
						get_template_part( 'template-parts/entry-meta' );
					}
					the_title( '<h1 class="entry-title">', '</h1>' );
					?>
				</header>

				<div class="entry-content">
				<?php

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
				</div>

				<?php
				if ( is_single() && true == get_theme_mod( 'singular_next_prev', true ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next ', 'learnmore' ) . '&gt; ' . '</span> ' .
								'<span class="screen-reader-text">' . esc_html__( 'Next post:', 'learnmore' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . ' &lt;' . esc_html__( ' Previous', 'learnmore' ) . '</span> ' .
								'<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'learnmore' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						)
					);
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main>
	</div>

	<div class="cell cell--4@medium">
		<?php get_sidebar(); ?>
	</div>
</div>
