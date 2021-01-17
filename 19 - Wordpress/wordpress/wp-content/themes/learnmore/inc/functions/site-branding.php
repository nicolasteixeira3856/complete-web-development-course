<?php 
if ( ! function_exists( 'learnmore_site_branding' ) ) :
	/**
	 * Prints HTML with site branding: Logo, Site title and tagline.
	 *
	 * @package LearnMore
	 */
	function learnmore_site_branding() {
		// Display the logo
		learnmore_logo();
				
		// Site Title.
		if ( is_front_page() || is_home() ) : ?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<?php 
		else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</p>
			<?php
		endif;
				
		// Site Tagline.
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
		endif;
}
endif;
