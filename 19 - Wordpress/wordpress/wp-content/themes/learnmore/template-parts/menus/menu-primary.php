<?php
/**
 * Primary menu.
 *
 * @package LearnMore
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : // Check do we have primary menu. ?>

	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'learnmore' ); ?>">
		<button id="js-menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php
				echo learnmore_get_svg( array( 'icon' => 'bars' ) );
				echo learnmore_get_svg( array( 'icon' => 'close' ) );
				esc_html_e( 'Menu', 'learnmore' );
			?>
		</button>
		<?php
			wp_nav_menu(
				array(
					'container_class' => 'primary-menu-wrapper',
					'theme_location'  => 'primary',
					'menu_id'         => 'primary-menu',
					'menu_class'      => 'primary-menu',
					'depth'           => '4',
				)
			);
		?>
	</nav><!-- #site-navigation -->

	<?php
endif; // End check for primary menu.
