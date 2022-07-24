<?php
/**
 * Thumbnails configuration.
 *
 * @package Bitunit_lite
 */

add_action( 'after_setup_theme', 'bitunit_lite_register_image_sizes', 5 );
function bitunit_lite_register_image_sizes() {
	set_post_thumbnail_size( 640, 506, true );

	// Registers a new image sizes.
	add_image_size( 'bitunit_lite-thumb-s', 130, 136, true );
	add_image_size( 'bitunit_lite-thumb-blog-masonry', 736, 9999, true );
	add_image_size( 'bitunit_lite-thumb-l', 1280, 506, true );
	add_image_size( 'bitunit_lite-thumb-project', 370, 260, true );
}
