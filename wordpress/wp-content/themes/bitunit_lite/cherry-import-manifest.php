<?php
/**
 * Default manifest file
 *
 * @var array
 */
$settings = array(
	'xml'             => false,
	'advanced_import' => array(
		'default' => array(
			'label'    => esc_html__( 'Bitunit_lite', 'bitunit_lite' ),
			'full'     => get_template_directory() . '/assets/demo-content/default-full.xml',
			'thumb'    => get_template_directory_uri() . '/assets/demo-content/default-thumb.png',
			'demo_url' => 'http://ld-wp2.template-help.com/wptheme/bitunit_lite/',
		),

	),
	'import'          => array(
		'chunk_size'            => $this->chunk_size,
		'regenerate_chunk_size' => 3,
	),
	'remap'         => array(
		'post_meta' => array(),
		'term_meta' => array(),
		'options'   => array(),
	),
	'export'      => array(
		'message' => esc_html__( 'or export all content with TemplateMonster Data Export tool', 'bitunit_lite' ),
		'options' => array(
			'cherry_projects_options',
			'cherry_projects_options_default',
			'elementor_disable_color_schemes',
			'elementor_disable_typography_schemes'
		),
		'tables' => array(
			'nextend2_image_storage',
			'nextend2_section_storage',
			'nextend2_smartslider3_generators',
			'nextend2_smartslider3_sliders',
			'nextend2_smartslider3_sliders_xref',
			'nextend2_smartslider3_slides',
		),
	),
	'success-links'  => array(
		'home'       => array(
			'label'  => esc_html__( 'View your site', 'bitunit_lite' ),
			'type'   => 'primary',
			'target' => '_self',
			'url'    => esc_url( home_url( '/' ) ),
		),
		'customize'  => array(
			'label'  => esc_html__( 'Customize your theme', 'bitunit_lite' ),
			'type'   => 'default',
			'target' => '_self',
			'url'    => esc_url( admin_url( 'customize.php' ) ),
		),
	),
	'slider' => array(
		'path' => 'https://raw.githubusercontent.com/templatemonster/tm-wizard-slider/default/slides.json',
	),
);
