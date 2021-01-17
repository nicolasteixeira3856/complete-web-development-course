<?php
/**
 * Entry meta content for displaying post date and author.
 *
 * @package LearnMore
 */

if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta-outer">
		<div class="entry-meta">
			<span class="tags-outer">
				<?php echo learnmore_get_svg( array( 'icon' => 'tags' ) ); ?>
				<?php echo learnmore_get_post_terms(); ?>
			</span>

			<span class="posted-on-outer">
				<?php echo learnmore_get_svg( array( 'icon' => 'calendar' ) ); ?>
				<?php learnmore_posted_on(); ?>
			</span>
		</div><!-- .entry-meta -->
	</div>
<?php endif; ?>
