<?php
/**
 * Adding Theme menu page
 *
 * @package LearnMore
 */
add_action('admin_menu', 'learnmore_theme_pages');
function learnmore_theme_pages() {
	add_menu_page(
		esc_html__( 'LearnMore theme', 'learnmore' ),
		esc_html__( 'LearnMore theme', 'learnmore' ),
		'manage_options',
		'learnmore-page',
		'learnmore_page_content',
		'dashicons-welcome-learn-more',
		null
	);

}

function learnmore_page_content() { ?>
	<div>
		<div class="wrap about-wrap">
			<h1><?php esc_html_e( 'LearnMore', 'learnmore' ); ?></h1>
			<p class="about-text"><?php esc_html_e( 'LearnMore is a Knowledge Base theme that is minimal, elegant and modern. It allows you to create a top-notch solution for Knowledge Base, Customer Support System, FAQ, Helpdesk, Wiki, Link Portal or any type of online documentation. It\'s an ideal solution for providing support resource for your customers. It\'s also very user friendly and easy to use thanks to multiple customization options.', 'learnmore' ); ?></p>
			<?php settings_errors(); ?>
		</div>

		<div class="wrap about-wrap">
			<h2 style="font-size:23px;text-align:left;"><?php esc_html_e( 'Read Full Documentation Before Start', 'learnmore' ); ?></h2>
			<p><?php esc_html_e( 'Please check our full documentation for detailed information on how to Setup and Use LearnMore.', 'learnmore' ); ?></p>
			<p>
				<a class="button button-primary" target="_blank" href="<?php echo esc_url( 'https://docs.humblethemes.com/learnmore-theme-documentation/' ); ?>"><?php esc_html_e( 'View documentation', 'learnmore' ); ?></a>
			</p>
			<hr>

			<h2 style="font-size:23px;text-align:left;"><?php esc_html_e( 'Go to Customizer', 'learnmore' ); ?></h2>
			<p><?php esc_html_e( 'All Setting, Theme Options, Widgets and Menus are available via Customize screen. Have a quick look or start customization!', 'learnmore' ); ?></p>
			<p><?php esc_html_e( '(Make sure that you have Kirki plugin installed and active before you do so)', 'learnmore' ); ?></p>
			<p>
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php esc_html_e( 'Go to Customizer', 'learnmore' ); ?></a>
			</p>
		</div>
	</div>

<?php
}
