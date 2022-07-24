<?php
/**
 * Plugins configuration example.
 *
 * @var array
 */
$plugins = array(
	'elementor' => array(
		'name'   => esc_html__( 'Elementor', 'bitunit_lite' ),
		'access' => 'skins',
	),
	'jet-elements' => array(
		'name'   => esc_html__( 'Jet Elements', 'bitunit_lite' ),
		'source' => 'local',
		'path'   => BITUNIT_LITE_THEME_DIR . '/inc/plugins/jet-elements.zip',
		'access' => 'skins',
	),
	'cherry-testi' => array(
		'name'   => esc_html__( 'Cherry Testimonials', 'bitunit_lite' ),
		'access' => 'skins',
	),
	'cherry-sidebars' => array(
		'name'   => esc_html__( 'Cherry Sidebars', 'bitunit_lite' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'bitunit_lite' ),
		'access' => 'skins',
	),
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'bitunit_lite' ),
		'source' => 'remote',
		'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		'access' => 'base',
	),
	'power-builder' => array(
		'name'   => esc_html__( 'Power Builder', 'bitunit_lite' ),
		'source' => 'local',
		'path'   => BITUNIT_LITE_THEME_DIR . '/inc/plugins/power-builder.zip',
		'access' => 'skins',
		'required'  => false,
	),
	'tm-builder-integrator' => array(
		'name'   => esc_html__( 'Builder Integrator', 'bitunit_lite' ),
		'source' => 'remote',
		'path'   => 'https://github.com/templatemonster/power-builder-integrator/archive/master.zip',
		'access' => 'skins',
		'required'  => false,
	),
);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'elementor',
				'jet-elements',
				'cherry-testi',
				'cherry-sidebars',
				'contact-form-7',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp2.template-help.com/wptheme/bitunit_lite/',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default-thumb.png',
			'name'  => esc_html__( 'Bitunit_lite', 'bitunit_lite' ),
		),
	),
);

$texts = array(
	'theme-name' => 'Bitunit_lite'
);

