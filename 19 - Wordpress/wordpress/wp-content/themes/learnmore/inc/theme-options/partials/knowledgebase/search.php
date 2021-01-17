<?php
// ----------------------------------------------------------------
// Knowledgebase: Search
// ----------------------------------------------------------------
Kirki::add_field( 'learnmore_config', [
	'type'     => 'text',
	'settings' => 'kb_main_heading',
	'label'    => esc_html__( 'Main heading content', 'learnmore' ),
	'section'  => 'kb_options',
	'default'  => esc_html__( 'Hello, how can we help you today?', 'learnmore' ),
	'priority' => 10,
] );

Kirki::add_field( 'learnmore_config', [
	'type'     => 'text',
	'settings' => 'kb_form_placeholder',
	'label'    => esc_html__( 'Main form placeholder content', 'learnmore' ),
	'section'  => 'kb_options',
	'default'  => esc_html__( 'Search the knowledge base...', 'learnmore' ),
	'priority' => 10,
] );