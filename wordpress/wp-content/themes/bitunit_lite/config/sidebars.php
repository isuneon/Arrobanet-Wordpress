<?php
/**
 * Sidebars configuration.
 *
 * @package Bitunit_lite
 */

add_action( 'after_setup_theme', 'bitunit_lite_register_sidebars', 5 );
function bitunit_lite_register_sidebars() {

	bitunit_lite_widget_area()->widgets_settings = apply_filters( 'tm_widget_area_default_settings', array(
		'sidebar'     => array(
			'name'           => esc_html__( 'Sidebar', 'bitunit_lite' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h6 class="widget-title">',
			'after_title'    => '</h6>',
			'before_wrapper' => '<div id="%1$s" %2$s role="complementary">',
			'after_wrapper'  => '</div>',
			'is_global'      => true,
		),
		'footer-area' => array(
			'name'           => esc_html__( 'Footer Area', 'bitunit_lite' ),
			'description'    => '',
			'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'   => '</aside>',
			'before_title'   => '<h6 class="widget-title">',
			'after_title'    => '</h6>',
			'before_wrapper' => '<section id="%1$s" %2$s>',
			'after_wrapper'  => '</section>',
			'is_global'      => true,
		),
	) );
}
