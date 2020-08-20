<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header( 'shop' ); ?>
<div class="main-container shop-page <?php if(isset($ginza_opt['product_banner']['url']) && ($ginza_opt['product_banner']['url'])!=''){ echo 'has-image';} ?>">
	<div class="title-breadcumbs">
		<!-- shop banner -->
		<?php if(isset($ginza_opt['product_banner']['url']) && ($ginza_opt['product_banner']['url'])!=''){ ?>
			<div class="shop-banner banner-image">
				<img src="<?php echo esc_url($ginza_opt['product_banner']['url']); ?>" alt="<?php esc_attr_e('Shop banner','ginza') ?>" />
			</div>
		<?php } ?>
		<div class="title-breadcumbs-text">
			<div class="container">
				<header class="entry-header shop-title">
					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>
				<div class="breadcrumb-container">
					<div class="container">
						<?php
							/**
							 * woocommerce_before_main_content hook
							 *
							 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
							 * @hooked woocommerce_breadcrumb - 20
							 */
							do_action( 'woocommerce_before_main_content' );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product-page">
		<div class="product-view">
			<div class="container">
				<div class="product-view-inner">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php wc_get_template_part( 'content', 'single-product' ); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						/**
						 * woocommerce_after_main_content hook
						 *
						 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
						 */
						do_action( 'woocommerce_after_main_content' );
					?>
					<?php
						/**
						 * woocommerce_sidebar hook
						 *
						 * @hooked woocommerce_get_sidebar - 10
						 */
						//do_action( 'woocommerce_sidebar' );
					?>
				</div>
			</div>
		</div> 
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
<?php get_footer( 'shop' ); ?>