<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bitunit_lite
 */
$sidebar_position = get_theme_mod( 'sidebar_position' );

if ( 'fullwidth' === $sidebar_position ) {
	return;
}

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
} ?>

<?php do_action( 'bitunit_lite_render_widget_area', 'sidebar' ); ?>
