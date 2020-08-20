<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 4.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product, $woocommerce_loop;
$ginza_opt = get_option( 'ginza_opt' );
$ginza_viewmode = Ginza_Class::ginza_show_view_mode();
$ginza_productsfound = Ginza_Class::ginza_shortcode_products_count();
// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;
// Extra post classes
$classes = array();
$count   = $product->get_rating_count();
$colwidth = 3;
if($woocommerce_loop['columns'] > 0){
	$colwidth = round(12/$woocommerce_loop['columns']);
}
$classes[] = ' item-col col-12 col-full-hd col-md-'.$colwidth ;?>
<?php if ( ( 0 == ( $woocommerce_loop['loop'] ) % 2 ) && ( $woocommerce_loop['columns'] == 2 ) ) {
	echo '<div class="group">';
} ?>
<?php if ( ( 0 == ( $woocommerce_loop['loop'] ) % 3 ) && ( $woocommerce_loop['columns'] == 3 ) ) {
	echo '<div class="group">';
} ?>
<?php if ( ( 0 == ( $woocommerce_loop['loop'] ) % 4 ) && ( $woocommerce_loop['columns'] == 4 ) ) {
	echo '<div class="group">';
} ?>
<?php if ( ( 0 == ( $woocommerce_loop['loop'] ) % 5 ) && ( $woocommerce_loop['columns'] == 5 ) ) {
	echo '<div class="group">';
} ?>
<div <?php post_class( $classes ); ?>>
	<div class="product-wrapper gridview">
		<div class="list-col4">
			<div class="product-image">
				<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
				<?php 
					echo wp_kses($product->get_image('shop_catalog', array('class'=>'primary_image')), array(
						'a'=>array(
							'href'=>array(),
							'title'=>array(),
							'class'=>array(),
						),
						'img'=>array(
							'src'=>array(),
							'height'=>array(),
							'width'=>array(),
							'class'=>array(),
							'alt'=>array(),
						)
					));
					if(isset($ginza_opt['second_image'])){
						if($ginza_opt['second_image']){
							$attachment_ids = $product->get_gallery_image_ids();
							if ( $attachment_ids ) {
								echo wp_get_attachment_image( $attachment_ids[0], apply_filters( 'single_product_small_thumbnail_size', 'shop_catalog' ), false, array('class'=>'secondary_image') );
							}
						}
					}
				?>
				<?php if ( $product->is_on_sale() ) : ?>
					<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale"><span class="sale-bg"></span><span class="sale-text">' . esc_html__( 'Sale', 'ginza' ) . '</span></span>', $post, $product ); ?>
				<?php endif; ?>
				<!-- end sale label -->
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
				<div class="product-buttons">
					<div class="add-to-cart">
						<?php echo do_shortcode('[add_to_cart id="'.$product->get_id().'"]') ?>
					</div>
					<ul class="actions">
						<?php if ( class_exists( 'YITH_WCWL' ) ) { ?>
							<li class="add-to-wishlist"> 
								<?php echo preg_replace("/<img[^>]+\>/i", " ", do_shortcode('[yith_wcwl_add_to_wishlist]')); ?>
							</li>
						<?php } ?>
						<?php if( class_exists( 'YITH_Woocompare' ) ) { ?>
							<li class="add-to-compare">
								<?php echo do_shortcode('[yith_compare_button]'); ?>
							</li>
						<?php } ?>
						<li class="quickviewbtn">
							<a class="detail-link quickview fa fa-external-link" data-quick-id="<?php the_ID();?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php esc_html_e('Quick View', 'ginza');?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="list-col8">
			<div class="product-category-rating">
				<?php if ($count) { ?>
					<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
					<!-- hook rating -->
				<?php } ?>
				<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div class="product-category">', '</div>' ); ?>
			</div>
			<div class="product-name">
				<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<?php if ( $product->get_price() != '' )  { ?>
				<div class="price-box">
					<div class="price-box-inner">
						<?php echo ''.$product->get_price_html(); ?>
					</div>
				</div>
			<?php } ?>
			<!-- end price -->
			<div class="count-down">
				<?php
				$countdown = false;
				$sale_end = get_post_meta( $product->get_id(), '_sale_price_dates_to', true );
				/* simple product */
				if($sale_end){
					$countdown = true;
					$sale_end = date('Y/m/d', (int)$sale_end);
					?>
					<div class="countbox hastime" data-time="<?php echo esc_attr($sale_end); ?>"></div>
				<?php } ?>
				<?php /* variable product */
				if($product->has_child()){
					$vsale_end = array();
					$pvariables = $product->get_children();
					foreach($pvariables as $pvariable){
						$vsale_end[] = (int)get_post_meta( $pvariable, '_sale_price_dates_to', true );
						if( get_post_meta( $pvariable, '_sale_price_dates_to', true ) ){
							$countdown = true;
						}
					}
					if($countdown){
						/* get the latest time */
						$vsale_end_date = max($vsale_end);
						$vsale_end_date = date('Y/m/d', $vsale_end_date);
						?>
						<div class="countbox hastime" data-time="<?php echo esc_attr($vsale_end_date); ?>"></div>
					<?php
					}
				}
				?>
			</div>
		</div>
	</div>
	<div class="product-wrapper listview">
		<div class="list-col4 <?php if($ginza_viewmode=='list-view'){ echo ' col-12 col-md-4';} ?>">
			<div class="product-image">
				<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
				<?php 
					echo wp_kses($product->get_image('shop_catalog', array('class'=>'primary_image')), array(
						'a'=>array(
							'href'=>array(),
							'title'=>array(),
							'class'=>array(),
						),
						'img'=>array(
							'src'=>array(),
							'height'=>array(),
							'width'=>array(),
							'class'=>array(),
							'alt'=>array(),
						)
					));
					if(isset($ginza_opt['second_image'])){
						if($ginza_opt['second_image']){
							$attachment_ids = $product->get_gallery_image_ids();
							if ( $attachment_ids ) {
								echo wp_get_attachment_image( $attachment_ids[0], apply_filters( 'single_product_small_thumbnail_size', 'shop_catalog' ), false, array('class'=>'secondary_image') );
							}
						}
					}
				?>
				<?php if ( $product->is_on_sale() ) : ?>
					<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale"><span class="sale-bg"></span><span class="sale-text">' . esc_html__( 'Sale', 'ginza' ) . '</span></span>', $post, $product ); ?>
				<?php endif; ?>
				<!-- end sale label -->
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
				<div class="product-buttons">
					<div class="add-to-cart">
						<?php echo do_shortcode('[add_to_cart id="'.$product->get_id().'"]') ?>
					</div>
					<ul class="actions">
						<?php if ( class_exists( 'YITH_WCWL' ) ) { ?>
							<li class="add-to-wishlist"> 
								<?php echo preg_replace("/<img[^>]+\>/i", " ", do_shortcode('[yith_wcwl_add_to_wishlist]')); ?>
							</li>
						<?php } ?>
						<?php if( class_exists( 'YITH_Woocompare' ) ) { ?>
							<li class="add-to-compare">
								<?php echo do_shortcode('[yith_compare_button]'); ?>
							</li>
						<?php } ?>
						<li class="quickviewbtn">
							<a class="detail-link quickview fa fa-external-link" data-quick-id="<?php the_ID();?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php esc_html_e('Quick View', 'ginza');?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="list-col8 <?php if($ginza_viewmode=='list-view'){ echo ' col-12 col-md-8';} ?>">
			<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div class="product-category">', '</div>' ); ?>
			<div class="product-name">
				<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<?php if ($count) { ?>
				<div class="product-rating-review">
					<div class="product-rating">
						<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
					</div>
					<div class="product-review-count">
						<?php 
							$review_count = $product->get_review_count();
							if ( $review_count > 0 ) { ?>
								<a href="<?php echo get_permalink() ?>#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s review','%s reviews', $review_count, 'ginza' ), esc_html( $review_count ) ); ?>)</a>
							<?php }
						?>
					</div>
				</div>
			<?php } ?>
			<!-- hook rating -->
			<?php if ( $product->get_price() != '' )  { ?>
				<div class="price-box">
					<div class="price-box-inner">
						<?php echo ''.$product->get_price_html(); ?>
					</div>
				</div>
			<?php } ?>
			<!-- end price -->
			<?php if ( has_excerpt() ) { ?>
				<div class="product-desc">
					<?php the_excerpt(); ?>
				</div>
			<?php } ?>
			<!-- end desc -->
			<div class="count-down">
				<?php
				$countdown = false;
				$sale_end = get_post_meta( $product->get_id(), '_sale_price_dates_to', true );
				/* simple product */
				if($sale_end){
					$countdown = true;
					$sale_end = date('Y/m/d', (int)$sale_end);
					?>
					<div class="countbox hastime" data-time="<?php echo esc_attr($sale_end); ?>"></div>
				<?php } ?>
				<?php /* variable product */
				if($product->has_child()){
					$vsale_end = array();
					$pvariables = $product->get_children();
					foreach($pvariables as $pvariable){
						$vsale_end[] = (int)get_post_meta( $pvariable, '_sale_price_dates_to', true );
						if( get_post_meta( $pvariable, '_sale_price_dates_to', true ) ){
							$countdown = true;
						}
					}
					if($countdown){
						/* get the latest time */
						$vsale_end_date = max($vsale_end);
						$vsale_end_date = date('Y/m/d', $vsale_end_date);
						?>
						<div class="countbox hastime" data-time="<?php echo esc_attr($vsale_end_date); ?>"></div>
					<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php if ( ( ( 0 == $woocommerce_loop['loop'] % 2 || $ginza_productsfound == $woocommerce_loop['loop'] ) && $woocommerce_loop['columns'] == 2 )  ) { /* for odd case: $ginza_productsfound == $woocommerce_loop['loop'] */
	echo '</div>';
} ?>
<?php if ( ( ( 0 == $woocommerce_loop['loop'] % 3 || $ginza_productsfound == $woocommerce_loop['loop'] ) && $woocommerce_loop['columns'] == 3 )  ) { /* for odd case: $ginza_productsfound == $woocommerce_loop['loop'] */
	echo '</div>';
} ?>
<?php if ( ( ( 0 == $woocommerce_loop['loop'] % 4 || $ginza_productsfound == $woocommerce_loop['loop'] ) && $woocommerce_loop['columns'] == 4 )  ) { /* for odd case: $ginza_productsfound == $woocommerce_loop['loop'] */
	echo '</div>';
} ?>
<?php if ( ( ( 0 == $woocommerce_loop['loop'] % 5 || $ginza_productsfound == $woocommerce_loop['loop'] ) && $woocommerce_loop['columns'] == 5 )  ) { /* for odd case: $ginza_productsfound == $woocommerce_loop['loop'] */
	echo '</div>';
} ?>