<div class="secondary-search">
	<div class="secondary-search-inner">
		<form role="search" method="get" class="secondary-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
			<label class="secondary-search-label">
				<span class="screen-reader-text">
					<?php echo _x( 'Search for:', 'label', 'learnmore' ); ?>
				</span>

				<input type="search" class="secondary-search-field"
					placeholder="<?php echo esc_attr_x( 'Type to search...', 'placeholder', 'learnmore' ); ?>"
					value="<?php echo get_search_query(); ?>" name="s" />
			</label>

			<button type="submit" class="secondary-search-submit">
				<span class="screen-reader-text">
					<?php echo _x( 'Search for:', 'submit button', 'learnmore' ); ?>
				</span>
				<?php echo learnmore_get_svg( array( 'icon' => 'search-icon' ) ); ?>
			</button>
		</form>
	</div>
</div>
