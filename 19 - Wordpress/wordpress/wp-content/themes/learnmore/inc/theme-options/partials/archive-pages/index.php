<?php
// ----------------------------------------------------------------
// Registering 'knowledgebase' section
// ----------------------------------------------------------------
Kirki::add_section(
	'archive_options',
	array(
		'title'      => esc_html__( 'Archive Pages', 'learnmore' ),
		'priority'   => 90,
		'capability' => 'edit_theme_options',
	)
);
