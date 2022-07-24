<?php
/**
 * Template part for showcase panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bitunit_lite
 */

// Don't show showcase panel if all elements are disabled.
if ( ! bitunit_lite_is_showcase_panel_visible() ) {
	return;
} ?>

<div <?php echo bitunit_lite_get_container_classes( array( 'showcase-panel' ), 'header' ); ?>>
	<div class="showcase-panel-inner container">
		<?php bitunit_lite_showcase_text_elements( '<h5 class="showcase-panel__subtitle">%s</h5>', 'subtitle' ); ?>
		<?php bitunit_lite_showcase_text_elements( '<h1 class="showcase-panel__title">%s</h1>', 'title' ); ?>
		<?php bitunit_lite_showcase_text_elements( '<p class="showcase-panel__description">%s</p>', 'description' ); ?>
		<?php bitunit_lite_showcase_btn(); ?>
		<?php bitunit_lite_showcase_btn_secondary(); ?>
	</div>
</div><!-- .showcase-panel -->
