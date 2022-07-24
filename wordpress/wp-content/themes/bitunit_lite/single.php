<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bitunit_lite
 */

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content-single', get_post_format() );

	the_post_navigation( array(
		'prev_text' => '<span class="nav-text">' . esc_html__( 'Previous Post', 'bitunit_lite' ) . '</span><span class="post-title">%title</span>',
		'next_text' => '<span class="nav-text">' . esc_html__( 'Next Post', 'bitunit_lite' ) . '</span><span class="post-title">%title</span>',
	));


	bitunit_lite_post_author_bio();

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
