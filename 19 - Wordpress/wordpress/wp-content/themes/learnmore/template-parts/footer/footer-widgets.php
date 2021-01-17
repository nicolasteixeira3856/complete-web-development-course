<?php
/**
 * The area containing the footer widget areas.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LearnMore
 */

if (
	! is_active_sidebar( 'footer-1' ) &&
	! is_active_sidebar( 'footer-2' ) &&
	! is_active_sidebar( 'footer-3' ) &&
	! is_active_sidebar( 'footer-4' ) ) {
		return;
	}
?>

<aside class="footer-widgets" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'learnmore' ); ?>">
	<div class="container container-default-widgets">

		<?php
		if ( is_active_sidebar( 'footer-1' ) ) :
			?>
			<div id="footer-area-1" class="footer-area-1 widget-area-footer grid-auto" role="complementary">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div><!-- .widget-area -->
			<?php
		endif;
		?>

		<?php
		if ( is_active_sidebar( 'footer-2' ) ) :
			?>
			<div id="footer-area-2" class="footer-area-2 widget-area-footer grid-auto" role="complementary">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div><!-- .widget-area -->
			<?php
		endif;
		?>

		<?php
		if ( is_active_sidebar( 'footer-3' ) ) :
			?>
			<div id="footer-area-3" class="footer-area-3 widget-area-footer grid-auto" role="complementary">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div><!-- .widget-area -->
			<?php
		endif;
		?>

		<?php
		if ( is_active_sidebar( 'footer-4' ) ) :
			?>
			<div id="footer-area-4" class="footer-area-3 widget-area-footer grid-auto" role="complementary">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div><!-- .widget-area -->
			<?php
		endif;
		?>

	</div><!-- .grid-wrapper -->
</aside><!-- .footer-widgets-wrapper -->
