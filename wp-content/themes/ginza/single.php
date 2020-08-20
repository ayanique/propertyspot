<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
get_header();
$ginza_bloglayout = 'sidebar';
if(isset($ginza_opt['blog_layout']) && $ginza_opt['blog_layout']!=''){
	$ginza_bloglayout = $ginza_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$ginza_bloglayout = $_GET['layout'];
}
$ginza_blogsidebar = 'right';
if(isset($ginza_opt['sidebarblog_pos']) && $ginza_opt['sidebarblog_pos']!=''){
	$ginza_blogsidebar = $ginza_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$ginza_blogsidebar = $_GET['sidebar'];
}
if ( !is_active_sidebar( 'sidebar-1' ) )  {
	$ginza_bloglayout = 'nosidebar';
}
switch($ginza_bloglayout) {
	case 'nosidebar':
		$ginza_blogclass = 'blog-nosidebar';
		$ginza_blogcolclass = 12;
		$ginza_blogsidebar = 'none';
		break;
	default:
		$ginza_blogclass = 'blog-sidebar'; 
		$ginza_blogcolclass = 9;
}
?>
<div class="main-container <?php if(isset($ginza_opt['blog_banner']['url']) && ($ginza_opt['blog_banner']['url'])!=''){ echo 'has-image';} ?>">
	<div class="title-breadcumbs">
		<!-- blog banner -->
		<?php if(isset($ginza_opt['blog_banner']['url']) && ($ginza_opt['blog_banner']['url'])!=''){ ?>
			<div class="blog-banner banner-image">
				<img src="<?php echo esc_url($ginza_opt['blog_banner']['url']); ?>" alt="<?php esc_attr_e('Shop banner','ginza') ?>" />
			</div>
		<?php } ?>
		<!-- end blog banner -->
		<div class="title-breadcumbs-text">
			<div class="container">
				<header class="entry-header">
					<h2 class="entry-title"><?php if(isset($ginza_opt['blog_header_text']) && ($ginza_opt['blog_header_text'] !='')) { echo esc_html($ginza_opt['blog_header_text']); } else { esc_html_e('Blog', 'ginza');}  ?></h2>
				</header>
				<div class="breadcrumb-container">
					<div class="container">
						<?php Ginza_Class::ginza_breadcrumb(); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-12 <?php echo 'col-lg-'.$ginza_blogcolclass; ?>">
				<div class="page-content blog-page single <?php echo esc_attr($ginza_blogclass); if($ginza_blogsidebar=='left') {echo ' left-sidebar'; } if($ginza_blogsidebar=='right') {echo ' right-sidebar'; } ?> ">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php
			$customsidebar = get_post_meta( $post->ID, '_ginza_custom_sidebar', true );
			$customsidebar_pos = get_post_meta( $post->ID, '_ginza_custom_sidebar_pos', true );
			if($customsidebar != ''){
				if($customsidebar_pos == 'left' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-12 col-lg-3 order-lg-last">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				} 
			} else {
				if($ginza_blogsidebar=='left') {
					get_sidebar();
				}
			} ?>
			<?php
			if($customsidebar != ''){
				if($customsidebar_pos == 'right' && is_active_sidebar( $customsidebar ) ) {
					echo '<div id="secondary" class="col-12 col-lg-3">';
						dynamic_sidebar( $customsidebar );
					echo '</div>';
				} 
			} else {
				if($ginza_blogsidebar=='right') {
					get_sidebar();
				}
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
							<div class="title">
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