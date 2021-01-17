<?php
// ----------------------------------------------------------------
// Typography: Font-families
// ----------------------------------------------------------------
Kirki::add_section( 'typography_font_families', array(
	'title'          => esc_html__( 'Font families', 'learnmore' ),
	'panel'          => 'typography_options',
) );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'typography',
	'settings'    => 'main_font',
	'label'       => esc_html__( 'Please select your preferred main font', 'learnmore' ),
	'section'     => 'typography_font_families',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => 'regular',
	],
	'choices' => [
		'fonts' => [
			'google' => [ 'Roboto', 'Open Sans', 'Oswald', 'Montserrat', 'Poppins' ],
		],
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body',
		],
	],
] );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'typography',
	'settings'    => 'heading_font',
	'label'       => esc_html__( 'Please select your preferred headings font', 'learnmore' ),
	'section'     => 'typography_font_families',
	'default'     => [
		'font-family'    => 'Poppins',
		'variant'        => '500',
	],
	'choices' => [
		'fonts' => [
			'google' => [ 'Roboto', 'Open Sans', 'Oswald', 'Montserrat', 'Poppins' ],
		],
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.learnmore-category-title, .page-title, .archive .entry-title a',
		],
	],
] );
