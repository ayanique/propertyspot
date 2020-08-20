<?php

function skudo_print_woocommerce_button(){
	global $woocommerce;
	if (isset($woocommerce) && get_option("skudo_woocommerce_cart") == "on"){ ?>
		<div class="skudo_dynamic_shopping_bag">
			<div class="skudo_little_shopping_bag_wrapper">
				<div class="skudo_little_shopping_bag">
					<div class="title">
						<div class="icon dripicons-cart"></div>
					</div>
					<div class="overview">
						<span class="minicart_items"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'skudo'), $woocommerce->cart->cart_contents_count); ?></span>
					</div>
				</div>
				<div class="skudo_minicart_wrapper">
					<div class="skudo_minicart">
					<?php
						if (sizeof($woocommerce->cart->cart_contents)>0){
							echo '<ul class="cart_list">';
							foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item){
								$_product = $cart_item['data'];
								if ($_product->exists() && $cart_item['quantity']>0){
									echo '<li class="cart_list_product">';
										echo '<a class="cart_list_product_img" href="'.esc_url(get_permalink($cart_item['product_id'])).'">' . $_product->get_image().'</a>';
										echo '<div class="cart_list_product_title">';
											$skudo_product_title = $_product->get_title();
											$skudo_short_product_title = (strlen($skudo_product_title) > 28) ? substr($skudo_product_title, 0, 25) . '...' : $skudo_product_title;
											echo '<a href="'.esc_url(get_permalink($cart_item['product_id'])).'">' . apply_filters('woocommerce_cart_widget_product_title', $skudo_short_product_title, $_product) . '</a>';
											echo '<div class="cart_list_product_quantity">'.$cart_item['quantity'].'x</div>';
										echo '</div>';
										echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">x</a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), esc_html__('Remove this item', 'skudo') ), $cart_item_key );
										echo '<div class="cart_list_product_price">'.woocommerce_price($_product->get_price()).'</div>';
										echo '<div class="clr"></div>';
									echo '</li>';
								}
							}
							echo '</ul>';
							?>
							<div class="minicart_total_checkout">
							<?php esc_html_e('Cart subtotal', 'skudo'); ?><span><?php echo wp_kses_post($woocommerce->cart->get_cart_total()); ?></span>
							</div>
							<a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="button skudo_minicart_cart_but"><?php esc_html_e('View Bag', 'skudo'); ?></a>
							<a href="<?php echo esc_url( $woocommerce->cart->get_checkout_url() ); ?>" class="button skudo_minicart_checkout_but"><?php esc_html_e('Checkout', 'skudo'); ?></a>
							<?php
						} else {
							echo '<ul class="cart_list"><li class="empty">'.esc_html__('No products in the cart.','skudo').'</li></ul>';
						}
						?>
					</div>
				</div>
			</div>
			<a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="skudo_little_shopping_bag_wrapper_mobiles"><span><?php echo wp_kses_post($woocommerce->cart->cart_contents_count); ?></span></a>
		</div>
	<?php
	}
}

function skudo_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	if (isset($woocommerce) && get_option("skudo_woocommerce_cart") == "on"){
		$skudo_woo_output = '
		<div class="skudo_dynamic_shopping_bag" >
			<div class="skudo_little_shopping_bag_wrapper">
				<div class="skudo_little_shopping_bag">
					<div class="title">
						<div class="icon dripicons-cart"></div>
					</div>
					<div class="overview">
						<span class="minicart_items">'.sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'skudo'), $woocommerce->cart->cart_contents_count).'</span>
					</div>
				</div>
				<div class="skudo_minicart_wrapper">
					<div class="skudo_minicart">';
						if (sizeof($woocommerce->cart->cart_contents)>0){
							$skudo_woo_output .= '<ul class="cart_list">';
							foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item){
								$_product = $cart_item['data'];
								if ($_product->exists() && $cart_item['quantity']>0){
									$skudo_woo_output .= '<li class="cart_list_product">';
										$skudo_woo_output .= '<a class="cart_list_product_img" href="'.esc_url(get_permalink($cart_item['product_id'])).'">' . $_product->get_image().'</a>';
										$skudo_woo_output .= '<div class="cart_list_product_title">';
											$skudo_product_title = $_product->get_title();
											$skudo_short_product_title = (strlen($skudo_product_title) > 28) ? substr($skudo_product_title, 0, 25) . '...' : $skudo_product_title;
											$skudo_woo_output .= '<a href="'.esc_url(get_permalink($cart_item['product_id'])).'">' . apply_filters('woocommerce_cart_widget_product_title', $skudo_short_product_title, $_product) . '</a>';
											$skudo_woo_output .= '<div class="cart_list_product_quantity">'.$cart_item['quantity'].'x</div>';
										$skudo_woo_output .= '</div>';
										$skudo_woo_output .= apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">x</a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), esc_html__('Remove this item', 'skudo') ), $cart_item_key );
										$skudo_woo_output .= '<div class="cart_list_product_price">'.woocommerce_price($_product->get_price()).'</div>';
										$skudo_woo_output .= '<div class="clr"></div>';
									$skudo_woo_output .= '</li>';
								}
							}
							$skudo_woo_output .= '</ul>';
							$skudo_woo_output .= '
							<div class="minicart_total_checkout">
								'.esc_html__('Cart subtotal', 'skudo').'<span>'.wp_kses_post($woocommerce->cart->get_cart_total()).'</span>
						</div>
						<a href="'.esc_url( $woocommerce->cart->get_cart_url() ).'" class="button skudo_minicart_cart_but">'.esc_html__('View Bag', 'skudo').'</a>
						<a href="'.esc_url( $woocommerce->cart->get_checkout_url() ).'" class="button skudo_minicart_checkout_but">'. esc_html__('Checkout', 'skudo').'</a>';
						} else {
							$skudo_woo_output .= '<ul class="cart_list"><li class="empty">'.esc_html__('No products in the cart.','skudo').'</li></ul>';
						}
						$skudo_woo_output .= '
					</div>
				</div>
			</div>
			<a href="'.esc_url( $woocommerce->cart->get_cart_url() ).'" class="skudo_little_shopping_bag_wrapper_mobiles"><span>'. wp_kses_post($woocommerce->cart->cart_contents_count).'</span></a>
		</div>';
		$fragments['div.skudo_dynamic_shopping_bag'] = $skudo_woo_output;
		return $fragments;
	} else return "";
}

?>