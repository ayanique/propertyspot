<?php
/**
 * The sidebar for content page
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
$ginza_page_sidebar_extra_class = NULl;
if($ginza_opt['sidebarse_pos']=='left') {
	$ginza_page_sidebar_extra_class = 'order-lg-first';
}
?>
<?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>
<div id="secondary" class="col-12 col-lg-3 <?php echo esc_attr($ginza_page_sidebar_extra_class);?>">
	<?php dynamic_sidebar( 'sidebar-page' ); ?>
</div>
<?php endif; ?>