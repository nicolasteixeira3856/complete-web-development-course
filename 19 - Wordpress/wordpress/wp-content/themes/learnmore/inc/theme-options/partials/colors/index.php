<?php
// ----------------------------------------------------------------
// Registering 'Color' section
// ----------------------------------------------------------------
Kirki::add_section( 'color_options', array(
	'title'      => esc_html__( 'Colors', 'learnmore' ),
	'priority'   => 90,
	'capability' => 'edit_theme_options',
) );
