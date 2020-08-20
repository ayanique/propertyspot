<?php
/**
 * The sidebar for shop page
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
$shopsidebar = 'left';
if(isset($ginza_opt['sidebarshop_pos']) && $ginza_opt['sidebarshop_pos']!=''){
	$shopsidebar = $ginza_opt['sidebarshop_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$shopsidebar = $_GET['sidebar'];
}
$ginza_shop_sidebar_extra_class = NULl;
if($shopsidebar=='left') {
	$ginza_shop_sidebar_extra_class = 'order-lg-first';
}
?>
<?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>
	<div id="secondary" class="col-12 col-lg-3 sidebar-shop <?php echo esc_attr($ginza_shop_sidebar_extra_class);?>">
		<?php dynamic_sidebar( 'sidebar-shop' ); ?>
	</div>
<?php endif; ?>