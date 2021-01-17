<?php
// ----------------------------------------------------------------
// Registering 'Single layout' section
// ----------------------------------------------------------------
Kirki::add_section( 'xx_single_options', array(
	'priority'    => 95,
	'title'       => esc_html__( 'Single layouts', 'learnmore' ),
) );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'toggle',
	'settings'    => 'singular_meta',
	'label'       => esc_html__( 'Show article meta tags?', 'learnmore' ),
	'section'     => 'xx_single_options',
	'default'     => '0',
	'priority'    => 10,
] );


Kirki::add_field( 'learnmore_config', [
	'type'        => 'toggle',
	'settings'    => 'singular_next_prev',
	'label'       => esc_html__( 'Show article next/previous posts?', 'learnmore' ),
	'section'     => 'xx_single_options',
	'default'     => '0',
	'priority'    => 10,
] );
