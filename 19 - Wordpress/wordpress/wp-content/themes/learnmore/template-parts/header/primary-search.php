<div class="primary-search">
	<div class="primary-search-inner">
		<h2 class="primary-search-title">
			<?php echo esc_html( learnmore_get_option( 'main-heading' ) ); ?>
		</h2>

		<form role="search" method="get" class="primary-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
			<label class="primary-search-label">
				<span class="screen-reader-text">
					<?php echo _x( 'Search for:', 'label', 'learnmore' ); ?>
				</span>

				<input type="search" class="primary-search-field"
					placeholder="<?php echo esc_attr( learnmore_get_option( 'placeholder' ) ); ?>"
					value="<?php echo get_search_query(); ?>" name="s"
					title="<?php echo esc_attr_x( 'Search for:', 'label', 'learnmore' ); ?>" />
			</label>

			<button type="submit" class="primary-search-submit">
				<span class="screen-reader-text">
					<?php echo _x( 'Search for:', 'submit button', 'learnmore' ); ?>
				</span>
				<?php echo learnmore_get_svg( array( 'icon' => 'search-icon' ) ); ?>
			</button>
		</form>
	</div>
</div>
