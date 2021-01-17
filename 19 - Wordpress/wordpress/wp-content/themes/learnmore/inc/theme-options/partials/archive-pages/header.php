<?php

Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'toggle',
		'settings' => 'archive_bottom_bar',
		'label'    => esc_html__( 'Show bottom bar under header?', 'learnmore' ),
		'section'  => 'archive_options',
		'default'  => '1',
		'priority' => 10,
	]
);

Kirki::add_field(
	'learnmore_config',
	[
		'type'            => 'toggle',
		'settings'        => 'archive_breadcrumbs',
		'label'           => esc_html__( 'Show breadcrumbs?', 'learnmore' ),
		'section'         => 'archive_options',
		'default'         => '1',
		'priority'        => 10,
		'active_callback' => [
			[
				'setting'  => 'archive_bottom_bar',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

Kirki::add_field(
	'learnmore_config',
	[
		'type'            => 'toggle',
		'settings'        => 'archive_secondary_search',
		'label'           => esc_html__( 'Show search field?', 'learnmore' ),
		'section'         => 'archive_options',
		'default'         => '1',
		'priority'        => 10,
		'active_callback' => [
			[
				'setting'  => 'archive_bottom_bar',
				'operator' => '==',
				'value'    => true,
			],
		],
	]
);

Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'toggle',
		'settings' => 'archive_meta',
		'label'    => esc_html__( 'Show article meta tags?', 'learnmore' ),
		'section'  => 'archive_options',
		'default'  => '0',
		'priority' => 10,
	]
);

Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'toggle',
		'settings' => 'archive_excerpt',
		'label'    => esc_html__( 'Show article excerpt?', 'learnmore' ),
		'section'  => 'archive_options',
		'default'  => '0',
		'priority' => 10,
	]
);
