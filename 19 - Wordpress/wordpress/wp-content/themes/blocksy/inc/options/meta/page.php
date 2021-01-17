<?php

$options = [
	[
		'page_title_panel' => [
			'label' => __( 'Page Title', 'blocksy' ),
			'type' => 'ct-panel',
			'wrapperAttr' => [ 'data-label' => 'heading-label' ],
			'setting' => [ 'transport' => 'postMessage' ],
			'inner-options' => [
				blocksy_get_options('general/page-title', [
					'has_default' => true,
					'is_single' => true,
					'is_page' => true
				])
			]
		],

		blocksy_rand_md5() => [
			'type' => 'ct-title',
			'label' => __( 'Page Structure', 'blocksy' ),
		],

		blocksy_rand_md5() => [
			'title' => __( 'General', 'blocksy' ),
			'type' => 'tab',
			'options' => [
				'page_structure_type' => [
					'label' => false,
					'type' => 'ct-image-picker',
					'value' => 'default',
					'design' => 'block',
					'attr' => [
						'data-type' => 'background',
						'data-state' => 'sync',
					],
					'setting' => [ 'transport' => 'postMessage' ],
					'choices' => [

						'default' => [
							'src'   => blocksy_image_picker_url( 'default.svg' ),
							'title' => __( 'Inherit from customizer', 'blocksy' ),
						],

						'type-3' => [
							'src'   => blocksy_image_picker_url( 'narrow.svg' ),
							'title' => __( 'Narrow Width', 'blocksy' ),
						],

						'type-4' => [
							'src'   => blocksy_image_picker_url( 'normal.svg' ),
							'title' => __( 'Normal Width', 'blocksy' ),
						],

						'type-2' => [
							'src'   => blocksy_image_picker_url( 'left-single-sidebar.svg' ),
							'title' => __( 'Left Sidebar', 'blocksy' ),
						],

						'type-1' => [
							'src'   => blocksy_image_picker_url( 'right-single-sidebar.svg' ),
							'title' => __( 'Right Sidebar', 'blocksy' ),
						],

					],
				],

				'content_style' => [
					'label' => __('Content Area Style', 'blocksy'),
					'type' => 'ct-radio',
					'value' => 'inherit',
					'view' => 'text',
					'design' => 'block',
					'divider' => 'top',
					'choices' => [
						'inherit' => __( 'Inherit', 'blocksy' ),
						'wide' => __( 'Wide', 'blocksy' ),
						'boxed' => __( 'Boxed', 'blocksy' ),
					],
				],

				'vertical_spacing_source' => [
					'label' => __('Content Area Vertical Spacing', 'blocksy'),
					'type' => 'ct-radio',
					'value' => 'inherit',
					'view' => 'text',
					'divider' => 'top',
					'choices' => [
						'inherit' => __('Inherit', 'blocksy'),
						'custom' => __('Custom', 'blocksy'),
					],
				],

				blocksy_rand_md5() => [
					'type' => 'ct-condition',
					'condition' => [ 'vertical_spacing_source' => 'custom' ],
					'options' => [

						'content_area_spacing' => [
							'label' => false,
							'desc' => __( 'You can customize the spacing value in general settings panel.', 'blocksy' ),
							'type' => 'ct-radio',
							'value' => 'both',
							'view' => 'text',
							'design' => 'block',
							'disableRevertButton' => true,
							'attr' => [ 'data-type' => 'content-spacing' ],
							'setting' => [ 'transport' => 'postMessage' ],
							'choices' => [
								'both'   => '<span></span>
								<i class="ct-tooltip-top">' . __( 'Top & Bottom', 'blocksy' ) . '</i>',

								'top'    => '<span></span>
								<i class="ct-tooltip-top">' . __( 'Only Top', 'blocksy' ) . '</i>',

								'bottom' => '<span></span>
								<i class="ct-tooltip-top">' . __( 'Only Bottom', 'blocksy' ) . '</i>',

								'none'   => '<span></span>
								<i class="ct-tooltip-top">' . __( 'Disabled', 'blocksy' ) . '</i>',
							],
							'desc' => sprintf(
								// translators: placeholder here means the actual URL.
								__( 'You can customize the global spacing value in General ➝ Layout ➝ %sContent Area Spacing%s.', 'blocksy' ),
								sprintf(
									'<a data-trigger-section="general" href="%s">',
                                    admin_url('/customize.php?autofocus[section]=general&ct_autofocus=general:layout_panel')
								),
								'</a>'
							),
						],
					],
				],
			]
		],

		blocksy_rand_md5() => [
			'title' => __('Design', 'blocksy'),
			'type' => 'tab',
			'options' => [
				blocksy_get_options('single-elements/structure-design')
			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-title',
			'label' => __( 'Page Elements', 'blocksy' ),
		],

		'disable_featured_image' => [
			'label' => __( 'Disable Featured Image', 'blocksy' ),
			'type' => 'ct-switch',
			'value' => 'no',
		],
	],

	in_array('post_tag', get_object_taxonomies('page')) ? [
		'disable_post_tags' => [
			'label' => __( 'Disable Page Tags', 'blocksy' ),
			'type' => 'ct-switch',
			'value' => 'no',
		],
	] : [],

	[
		'disable_header' => [
			'label' => __( 'Disable Header', 'blocksy' ),
			'type' => 'ct-switch',
			'value' => 'no',
		],

		'disable_footer' => [
			'label' => __( 'Disable Footer', 'blocksy' ),
			'type' => 'ct-switch',
			'value' => 'no',
		],
	],

	apply_filters(
		'blocksy_extensions_metabox_page_bottom',
		[]
	)
];
