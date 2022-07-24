<?php
/**
 * Menus configuration.
 *
 * @package Bitunit_lite
 */

add_action( 'after_setup_theme', 'bitunit_lite_register_menus', 5 );
function bitunit_lite_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'bitunit_lite' ),
		'main'   => esc_html__( 'Main', 'bitunit_lite' ),
		'footer' => esc_html__( 'Footer', 'bitunit_lite' ),
		'social' => esc_html__( 'Social', 'bitunit_lite' ),
	) );
}
