<?php
// ----------------------------------------------------------------
// Colors: Primary color
// ----------------------------------------------------------------
Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'custom',
		'settings' => 'section_divider_1',
		'section'  => 'color_options',
		'default'  => '<div style="padding: 10px 30px;background-color:#fff; margin-left: -15px; margin-right: -15px; margin-bottom: 10px;">' . esc_html__( 'Select your color scheme', 'learnmore' ) . '</div>',
		'priority' => 10,
	]
);

Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'color-palette',
		'settings' => 'color_scheme_primary_color',
		'section'  => 'color_options',
		'default'  => '#6027ce',
		'choices'  => [
			'colors' => [ '#6027ce', '#00ab82', '#000000', '#F45C43', '#136a8a' ],
			'size'   => 40,
			'style'  => 'round',
		],
	]
);
