<?php
// ----------------------------------------------------------------
// Knowledgebase: Categories
// ----------------------------------------------------------------
Kirki::add_field( 'learnmore_config', [
	'type'        => 'custom',
	'settings'    => 'section_divider_1',
	'section'     => 'kb_options',
	'default'     => '<div style="padding: 10px 30px;background-color:#fff; margin-left: -15px; margin-right: -15px; margin-bottom: 10px;">' . esc_html__( 'Category options', 'learnmore' ) . '</div>',
	'priority'    => 10,
] );

Kirki::add_field(
	'learnmore_config',
	[
		'type'     => 'custom',
		'settings' => 'section_divider_single_3',
		'section'  => 'kb_options',
		'default'  => '<div class="learnmore-line-divider"></div>',
		'priority' => 10,
	]
);

Kirki::add_field( 'learnmore_config', [
	'type'        => 'toggle',
	'settings'    => 'kb_category_count',
	'label'       => esc_html__( 'Show categories count', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => '1',
	'priority'    => 10,
] );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'toggle',
	'settings'    => 'kb_category_description',
	'label'       => esc_html__( 'Show category description', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => '0',
	'priority'    => 10,
] );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'select',
	'settings'    => 'kb_category_orderby',
	'label'       => esc_html__( 'Category orderby', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => 'name',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'name' => esc_html__( 'Name', 'learnmore' ),
        'count' => esc_html__( 'Count', 'learnmore' ),
        'slug' => esc_html__( 'Slug', 'learnmore' ),
        'ID' => esc_html__( 'ID', 'learnmore' ),
	],
] );

Kirki::add_field( 'learnmore_config', [
	'type'        => 'select',
	'settings'    => 'kb_category_order',
	'label'       => esc_html__( 'Category order', 'learnmore' ),
	'section'     => 'kb_options',
	'default'     => 'ASC',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'ASC' => esc_html__( 'ASC', 'learnmore' ),
		'DESC' => esc_html__( 'DESC', 'learnmore' ),
	],
] );
