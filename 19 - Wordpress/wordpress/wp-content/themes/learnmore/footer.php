<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LearnMore
 */

?>

</div>

<footer class="site-footer" id="site-footer" role="contentinfo">
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/site-info' ); ?>
</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
