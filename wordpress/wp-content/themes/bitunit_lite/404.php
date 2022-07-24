<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bitunit_lite
 */
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( '404', 'bitunit_lite' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<h2><?php esc_html_e( 'The page not found.', 'bitunit_lite' ); ?></h2>
		<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Visit home page', 'bitunit_lite' ); ?></a></p>
		<h4><?php esc_html_e( 'Unfortunately the page you were looking for could not be found. Maybe search can help.', 'bitunit_lite' ); ?></h4>

		<?php get_search_form(); ?>

	</div><!-- .page-content -->
</section><!-- .error-404 -->
