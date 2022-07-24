<?php
/**
 * Template part for transparent Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bitunit_lite
 */

$search = get_theme_mod( 'header_search', bitunit_lite_theme()->customizer->get_default( 'header_search' ) );
?>

<div class="header-container__flex">

	<div class="site-branding">
		<?php bitunit_lite_header_logo() ?>
		<?php bitunit_lite_site_description(); ?>
	</div>

	<?php bitunit_lite_main_menu(); ?>
	<?php if ( $search ) : ?>
		<div class="header__search">
			<?php bitunit_lite_header_search( '<span class="search-form__toggle"></span>%s<span class="search-form__close"></span>' ); ?>
		</div>
	<?php endif; ?>
</div>
