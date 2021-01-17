<div class="grid">
	<div class="cell cell--8@medium">
		<main class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
				<header class="page-header">

					<?php
					if ( is_search() ) {
						echo '<h1 class="page-title">';
						printf( esc_html__( 'Search Results for: %s', 'learnmore' ), '<span>' . get_search_query() . '</span>' );
						echo '</h1>';
					} elseif ( is_archive() ) {
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					}
					?>
				</header><!-- .page-header -->
			<?php endif; ?>

			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php
							if ( is_sticky() && is_home() ) :
								echo learnmore_get_svg( array( 'icon' => 'pin' ) );
								endif;
							?>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>">
									<?php echo learnmore_get_svg( array( 'icon' => 'news' ) ); ?>
									<?php the_title(); ?>
								</a>
							</h2>
						</header>

						
						<?php
						if ( true == get_theme_mod( 'archive_meta', true ) ) {
							get_template_part( 'template-parts/entry-meta' );
						}
						?>
						

						<div class="entry-excerpt">
							<?php
							if ( true == get_theme_mod( 'archive_excerpt', true ) ) {
								the_excerpt();
							}
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'learnmore' ),
									'after'  => '</div>',
								)
							);
							?>
						</div>
					</article>
					<?php
				endwhile;

				learnmore_posts_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- .site-main -->
	</div>
	<div class="cell cell--4@medium">
			<?php get_sidebar(); ?>
	</div>
</div>
