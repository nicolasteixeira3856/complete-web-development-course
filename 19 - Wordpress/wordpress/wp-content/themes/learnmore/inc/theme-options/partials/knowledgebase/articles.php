<?php
// ----------------------------------------------------------------
// Knowledgebase: Articles
// ----------------------------------------------------------------
Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'custom',
		'settings' => 'section_divider_single',
		'section'  => 'kb_options',
		'default'  => '<div class="learnmore-line-divider"></div>',
		'priority' => 10,
	]
);

Kirki::add_field( 'learnmore_config', [
	'type'        => 'select',
	'settings'    => 'kb_article_orderby',
	'label'       => esc_html__( 'Article orderby', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => 'date',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
        'date' => esc_html__( 'Date', 'learnmore' ),
        'modified' => esc_html__( 'Modified date', 'learnmore' ),
		'name' => esc_html__( 'Name', 'learnmore' ),
        'ID' => esc_html__( 'ID', 'learnmore' ),
        'rand' => esc_html__( 'rand', 'learnmore' ),
        'comment_count' => esc_html__( 'Comment count', 'learnmore' ),
	],
] );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'select',
	'settings'    => 'kb_article_order',
	'label'       => esc_html__( 'Article order', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => 'ASC',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'ASC' => esc_html__( 'ASC', 'learnmore' ),
		'DESC' => esc_html__( 'DESC', 'learnmore' ),
	],
] );

Kirki::add_field( 'theme_config_id', [
	'type'        => 'slider',
	'settings'    => 'kb_article_count',
	'label'       => esc_html__( 'How many posts to show?', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => 4,
	'choices'     => [
		'min'  => 1,
		'max'  => 5,
		'step' => 1,
	],
] );