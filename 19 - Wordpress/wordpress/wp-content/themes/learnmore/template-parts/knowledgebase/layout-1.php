<main class="site-main" role="main">
	<div class="home-container container grid">

	<?php
	$data = learnmore_get_knowledgebase_data();
	foreach ( $data as $category ) :
		$category = sanitize_category( $category );
		$posts    = $category->posts;
		?>
		<div class="cell cell--4@large">
			<div class="learnmore-category">
				<div class="learnmore-meta">
					<h2 class="learnmore-category-title">
						<?php
						echo $category->name;
						if ( true == get_theme_mod( 'kb_category_count', true ) ) :
							?>
							<span class="learnmore-category-count">
								(<?php echo $category->count; ?>)
							</span>
							<?php
						endif;
						?>
					</h2>
					<?php
					if ( true == get_theme_mod( 'kb_category_description', false ) ) {
						echo $category->description;
					}
					?>
				</div>
				<?php
				if ( isset( $posts ) ) :
					?>
					<ul class="learnmore-articles-list">
						<?php
						foreach ( $posts as $post ) :

							$post = sanitize_post( $post );
							?>
							<li class="learnmore-articles-item">
								<a class="learnmore-articles-link" href="<?php the_permalink( $post ); ?>">
									<span>
										<?php echo learnmore_get_svg( array( 'icon' => 'news' ) ); ?>
									</span>
									<?php echo $post->post_title; ?>
								</a>
							</li>
							<?php
						endforeach;
						?>
					</ul>
					<?php
				endif;
				?>

				<a class="learnmore-category-link" href="<?php echo esc_url( get_category_link( $category ) ); ?>">
					<?php esc_html_e( 'View all articles →', 'learnmore' ); ?>
				</a>
			</div>
		</div>
		<?php
	endforeach;
	?>

	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</main>
