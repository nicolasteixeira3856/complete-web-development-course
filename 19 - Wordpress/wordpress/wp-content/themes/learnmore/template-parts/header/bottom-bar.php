<div class="bottom-bar">
	<div class="container grid">
		<div class="cell cell--6@medium u-align-vertically">
			<?php
			if ( true == get_theme_mod( 'archive_breadcrumbs', true ) ) {
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<div class="site-breadcrumbs" id="breadcrumbs">', '</div>' );
				}
			} ?>
		</div>
		<div class="cell cell--6@medium">
			<?php
			if ( true == get_theme_mod( 'archive_secondary_search', true ) ) {
				get_template_part( 'template-parts/header/secondary-search' );
			}
			?>
		</div>
	</div>
</div>
