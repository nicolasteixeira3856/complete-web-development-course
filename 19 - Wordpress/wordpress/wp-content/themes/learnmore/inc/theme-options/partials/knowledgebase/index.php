<?php
// ----------------------------------------------------------------
// Registering 'knowledgebase' section
// ----------------------------------------------------------------
Kirki::add_section( 'kb_options', array(
	'title'      => esc_html__( 'Knowledgebase', 'learnmore' ),
	'priority'   => 90,
	'capability' => 'edit_theme_options',
) );
