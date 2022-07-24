<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bitunit_lite
 */

// Don't show top panel if all elements are disabled.
if ( ! bitunit_lite_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel invert">
	<div class="top-panel-container container">
		<div <?php echo bitunit_lite_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>>
			<?php bitunit_lite_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			<?php bitunit_lite_top_menu(); ?>
			<?php bitunit_lite_social_list( 'header' ); ?>
		</div>
	</div>
</div><!-- .top-panel -->
