<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Bitunit_lite
 */
?>

<?php if ( is_active_sidebar( 'footer-area' ) ){ ?>
	<div class="footer-area-wrap invert">
		<div class="container">
			<?php do_action( 'bitunit_lite_render_widget_area', 'footer-area' ); ?>
		</div>
	</div>
<?php } ?>

<div class="footer-container">
	<div <?php echo bitunit_lite_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<?php
			bitunit_lite_social_list( 'footer' );
			bitunit_lite_footer_copyright();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->
