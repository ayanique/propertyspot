<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
$customsidebar = get_post_meta( $post->ID, '_ginza_custom_sidebar', true );
$customsidebar_pos = get_post_meta( $post->ID, '_ginza_custom_sidebar_pos', true );
$ginza_page_main_extra_class = NULl;
if (is_active_sidebar( $customsidebar )) {
	if ($customsidebar_pos == 'left') {
		$ginza_page_main_extra_class = 'order-lg-last';
	}
} elseif (is_active_sidebar('page') && isset($ginza_opt['sidebarse_pos']) && $ginza_opt['sidebarse_pos']=='left') {
	$ginza_page_main_extra_class = 'order-lg-last';
}
get_header();
?>
<div class="main-container default-page">
	<div class="title-breadcumbs">
		<div class="container">
			<header class="entry-header">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header>
			<div class="breadcrumb-container">
				<?php Ginza_Class::ginza_breadcrumb(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row"> 
			<div class="col-12 <?php if ( (is_active_sidebar( $customsidebar ) && $customsidebar !='') || is_active_sidebar( 'sidebar-page' ) ) : ?>col-lg-9<?php endif; ?> <?php echo esc_attr($ginza_page_main_extra_class);?>">
				<div class="page-content default-page single">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php
			if($customsidebar != ''){
				if($customsidebar_pos == 'left' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-12 col-lg-3 order-lg-first">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				}
				if($customsidebar_pos == 'right' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-12 col-lg-3">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				} 
			} else {
				get_sidebar('page');
			} ?>
		</div>
	</div> 
	<!-- brand logo -->
	<?php 
		if(isset($ginza_opt['inner_brand']) && function_exists('ginza_brands_shortcode') && shortcode_exists( 'ourbrands' ) ){
			if($ginza_opt['inner_brand'] && isset($ginza_opt['brand_logos'][0]) && $ginza_opt['brand_logos'][0]['thumb']!=null) { ?>
				<div class="inner-brands">
					<div class="container">
						<?php if(isset($ginza_opt['inner_brand_title']) && $ginza_opt['inner_brand_title']!=''){ ?>
							<div class="heading-title style1 ">
								<h3><?php echo esc_html( $ginza_opt['inner_brand_title'] ); ?></h3>
							</div>
						<?php } ?>
						<?php echo do_shortcode('[ourbrands]'); ?>
					</div>
				</div>
			<?php }
		}
	?>
	<!-- end brand logo --> 
</div>
<?php get_footer(); ?>