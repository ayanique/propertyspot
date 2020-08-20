<?php
	
function skudo_print_menu($ispagephp = true, $isfirstpage = false){
	global $skudo_header_bgstyle_pre, $skudo_header_bgstyle_after;
	$header_shrink = "";
	if (get_option('skudo_fixed_menu') == 'on'){
		if (get_option('skudo_header_after_scroll') == 'on'){
			if (get_option('skudo_header_shrink_effect') == 'on'){
				$header_shrink = " header_shrink";
			}
		}
	}
	$header_after_scroll = false;
	if (get_option('skudo_fixed_menu') == 'on'){
		if (get_option('skudo_header_after_scroll') == 'on'){
			$header_after_scroll = true;
		}
	}
	$typeofheader = get_option("skudo_header_style_type");
	$skudo_underlining_effect = get_option("skudo_menu_underline_".$skudo_header_bgstyle_pre,"on") == "on" ? " skudo-underlining " : "";
	$skudo_content_at_top = (get_post_meta(get_the_ID(),'skudo_enable_custom_header_options_value', true) == "on") ? get_post_meta(get_the_ID(),'skudo_content_to_the_top_value', true) : get_option('skudo_content_to_the_top');
	$skudo_content_at_top = ($skudo_content_at_top == "on") ? false : true;
	?>
	
	<header class="header-init navbar navbar-default navbar-fixed-top <?php echo esc_attr($typeofheader . $skudo_underlining_effect); ?> <?php if (get_option('skudo_fixed_menu') == 'off') echo " header_not_fixed"; else if (get_option('skudo_header_hide_on_start') == "on" && !$ispagephp) echo " hide-on-start"; ?><?php if (get_option("skudo_header_full_width") == "on") echo " header-full-width"; ?><?php if (get_option("skudo_header_full_width") == "off") echo " header-with-container"; ?><?php if (get_option("skudo_header_menu_itens_style") == "rounded") echo " menu-rounded"; ?><?php if (get_option("skudo_header_menu_itens_style") == "simple") echo " menu-simple"; ?><?php if (get_option("skudo_header_menu_itens_style") == "square") echo " menu-square"; ?><?php echo " ".esc_attr($skudo_header_bgstyle_pre); ?><?php if ($skudo_content_at_top) echo " header-init-force-fixed "; ?>" data-rel="<?php echo esc_attr($skudo_header_bgstyle_pre."|".$skudo_header_bgstyle_after); ?>">
		
		<?php
		if (get_option("skudo_info_above_menu") == "on"){
			?>
			<div class="top-bar">
				<div class="top-bar-bg">
					<div class="container clearfix">
						<div class="slidedown">
						    <div class="col-xs-12 col-sm-12">
							<?php
								//search trigger
								if (get_option("skudo_enable_search") == "on"){
									?>
									<div class="search_trigger"><div class="icon dripicons-search"></div></div>
									<?php
								}
							?>
							<?php
								/* social icons */
								if (get_option("skudo_enable_socials") == "on"){
									?>
										<div class="social-icons-fa">
									        <ul>
											<?php
												$icons = array(array("facebook","Facebook"),array("twitter","Twitter"),array("tumblr","Tumblr"),array("stumbleupon","Stumble Upon"),array("flickr","Flickr"),array("linkedin","LinkedIn"),array("delicious","Delicious"),array("skype","Skype"),array("digg","Digg"),array("google-plus","Google+"),array("vimeo-square","Vimeo"),array("deviantart","DeviantArt"),array("behance","Behance"),array("instagram","Instagram"),array("wordpress","WordPress"),array("youtube","Youtube"),array("reddit","Reddit"),array("rss","RSS"),array("soundcloud","SoundCloud"),array("pinterest","Pinterest"),array("dribbble","Dribbble"),array("vk","Vk"),array("yelp","Yelp"),array("twitch","Twitch"),array("houzz","Houzz"),array("foursquare","Foursquare"),array("slack","Slack"),array("whatsapp","Whatsapp"));
												foreach ($icons as $i){
													if (is_string(get_option("skudo_icon-".$i[0])) && get_option("skudo_icon-".$i[0]) != ""){
													?>
													<li>
														<a href="<?php echo esc_url(get_option("skudo_icon-".$i[0])); ?>" target="_blank" class="<?php echo esc_attr(strtolower($i[0])); ?>" title="<?php echo esc_attr($i[1]); ?>"><i class="fa fa-<?php echo esc_attr(strtolower($i[0])); ?>"></i></a>
													</li>
													<?php
													}
												}
											?>
										    </ul>
										</div>
									<?php	
								}
								/* company infos */
								if ( get_option("skudo_telephone_menu") != "" || get_option("skudo_email_menu") != "" || get_option("skudo_address_menu") != "" || get_option("skudo_text_field_menu") != "" ){
									?>
									<ul class="phone-mail">
										<?php if ( is_string(get_option("skudo_telephone_menu")) && get_option("skudo_telephone_menu") != "" ){ ?>
											<li><div class="icon dripicons-phone"></div><?php printf(esc_html__("%s", "skudo"), get_option("skudo_telephone_menu")); ?></li>
										<?php } ?>
										<?php if ( is_string(get_option("skudo_email_menu")) && get_option("skudo_email_menu") != "" ){ ?>
											<li><div class="icon dripicons-message"></div><a href="mailto:<?php echo esc_attr(get_option("skudo_email_menu")); ?>"><?php echo esc_html(get_option("skudo_email_menu")); ?></a></li>
										<?php } ?>
										<?php if ( is_string(get_option("skudo_address_menu")) && get_option("skudo_address_menu") != "" ){ ?>
											<li><div class="icon dripicons-pin"></div><?php echo wp_kses_post(get_option("skudo_address_menu")); ?></li>
										<?php } ?>
										<?php if ( is_string(get_option("skudo_text_field_menu")) && get_option("skudo_text_field_menu") != "" ){ ?>
											<li><i class="fa fa-info-circle"></i><?php echo wp_kses_post(get_option("skudo_text_field_menu")); ?></li>
										<?php } ?>
									</ul>
									<?php
								}
								
								/* wpml menu */
								if (get_option("skudo_wpml_menu_widget") == "on") {
									if (function_exists('icl_object_id')) { ?>
										<div class="menu_wpml_widget">	
											<?php do_action('icl_language_selector'); ?>
										</div>
									<?php 
									}
								}
								
								
								/* topbar menu */
								if (get_option("skudo_top_bar_menu") == "on"){
									?>
									<div class="top-bar-menu">
										<?php wp_nav_menu( array( 'theme_location' => 'topbarnav', 'container' => false, 'menu_class' => 'sf-menu', 'menu_id' => 'menu_top_bar', 'fallback_cb' => false )); ?>
									</div>
									<?php
								}
							?>
							
							</div>
							
							
						</div>
					</div>
				</div>
				<a href="#" class="down-button"><i class="fa fa-plus"></i></a><!-- this appear on small devices -->
			</div>
			<?php
			$skudo_inline_script = '
				jQuery(document).ready(function(){
					"use strict";
					if (jQuery(this).width() > 768) {
						jQuery("a.down-button").removeClass("current");
						jQuery(".slidedown").removeAttr("style");
					}
					jQuery("a.down-button").on("click", function () {
					  if (jQuery(this).hasClass("current")) {
						  jQuery(this).removeClass("current");
						  jQuery(this).parent().parent().find(".slidedown").slideUp("slow", function(){ jQuery(this).closest(".top-bar").removeClass("opened"); });
						  return false;
					  } else {
						  jQuery(this).addClass("current").closest(".top-bar").addClass("opened");
						  jQuery(this).parent().parent().find(".slidedown").slideDown("slow");
						  return false;
					  }
					});
				});
				jQuery(window).resize(function(){
					if (jQuery(this).width() > 768) {
						jQuery("a.down-button").removeClass("current");
						jQuery(".slidedown").removeAttr("style");
					}
				});
			';
			wp_add_inline_script('skudo-global', $skudo_inline_script, 'after');
		}
		?>
		
		<div class="nav-container container">
	    	<div class="navbar-header">
				<a class="navbar-brand nav-to" href="<?php echo esc_url(home_url("/")); ?>" tabindex="-1">
	        	<?php 
					$skudo_header_style_pre = $skudo_header_bgstyle_pre == 'dark' ? 'light' : 'dark';
					$skudo_header_style_after = $skudo_header_bgstyle_after == 'dark' ? 'light' : 'dark';
					
					$alone = true;
    				if (get_option("skudo_logo_retina_image_url_".$skudo_header_style_pre) != ""){
	    				$alone = false;
    				}
					?>
					<img class="logo_normal <?php if (!$alone) echo "notalone"; ?>" src="<?php echo esc_url(get_option("skudo_logo_image_url_".$skudo_header_style_pre)); ?>" alt="<?php esc_attr_e("", "skudo"); ?>" title="<?php esc_attr_e("", "skudo"); ?>">
    					
    				<?php 
    				if (get_option("skudo_logo_retina_image_url_".$skudo_header_style_pre) != ""){
    				?>
	    				<img class="logo_retina" src="<?php echo esc_url(get_option("skudo_logo_retina_image_url_".$skudo_header_style_pre)); ?>" alt="<?php esc_attr_e("", "skudo"); ?>" title="<?php esc_attr_e("", "skudo"); ?>">
    				<?php
					}
					/* skudo_header_after_scroll option */
	    			if ($header_after_scroll || get_option('skudo_header_hide_on_start') == 'on'){
		    			$alone = true;
	    				if (get_option("skudo_logo_retina_image_url_".$skudo_header_style_after) != ""){
		    				$alone = false;
	    				}
    					?>
    					<img class="logo_normal logo_after_scroll <?php if (!$alone) echo "notalone"; ?>" alt="<?php esc_attr_e("", "skudo"); ?>" title="<?php esc_attr_e("", "skudo"); ?>" src="<?php echo esc_url(get_option("skudo_logo_image_url_".$skudo_header_style_after)); ?>">
	    					
	    				<?php 
	    				if (get_option("skudo_logo_retina_image_url_".$skudo_header_style_after) != ""){
	    				?>
		    				<img class="logo_retina logo_after_scroll" src="<?php echo esc_url(get_option("skudo_logo_retina_image_url_".$skudo_header_style_after)); ?>" alt="<?php esc_attr_e("", "skudo"); ?>" title="<?php esc_attr_e("", "skudo"); ?>">
	    				<?php
    					}
	    			}
	    		?>
		        </a>
			</div>
	
						
			
			<div class="header_social_icons <?php if (get_option("skudo_social_icons_menu") == "on") echo "with-social-icons"; ?>">
				<?php 
					if (get_option("skudo_social_icons_menu") == "on"){
						?>
						<div class="header_social_icons_wrapper">
						<?php
							global $howmany_header_social_icons; $howmany_header_social_icons = 0;
							$icons = array_reverse(array(array("facebook","Facebook"),array("twitter","Twitter"),array("tumblr","Tumblr"),array("stumbleupon","Stumble Upon"),array("flickr","Flickr"),array("linkedin","LinkedIn"),array("delicious","Delicious"),array("skype","Skype"),array("digg","Digg"),array("google-plus","Google+"),array("vimeo-square","Vimeo"),array("deviantart","DeviantArt"),array("behance","Behance"),array("instagram","Instagram"),array("wordpress","WordPress"),array("youtube","Youtube"),array("reddit","Reddit"),array("rss","RSS"),array("soundcloud","SoundCloud"),array("pinterest","Pinterest"),array("dribbble","Dribbble"),array("vk","Vk"),array("yelp","Yelp"),array("twitch","Twitch"),array("houzz","Houzz"),array("foursquare","Foursquare"),array("slack","Slack"),array("whatsapp","Whatsapp")));
							foreach ($icons as $i){
								if (is_string(get_option("skudo_icon-".$i[0])) && get_option("skudo_icon-".$i[0]) != ""){
									$howmany_header_social_icons++;
								?>
								<div class="social_container <?php echo esc_attr(strtolower($i[0])); ?>_container" data-href="<?php echo esc_attr(esc_url(get_option('skudo_icon-'.$i[0]))); ?>" >
									<i class="fa fa-<?php echo esc_attr(strtolower($i[0])); ?>"></i>
			                    </div>
								<?php
								}
							}
							$skudo_inline_script = '
								jQuery(document).ready(function(){
									"use strict";
									jQuery(document).on("click", ".header_social_icons_wrapper .social_container", function(){
										window.open( jQuery(this).attr("data-href"), "_blank" );
									});
								});
							';
							wp_add_inline_script('skudo-global', $skudo_inline_script, 'after');
						?>	
						</div>
						<?php
					}
					//search trigger
					if (get_option("skudo_enable_search") == "on"){
						?>
						<div class="search_trigger_mobile"><div class="icon dripicons-search"></div></div>
						<?php
					}
				?>
				<div class="skudo_right_header_icons <?php
				if (class_exists( 'WooCommerce' ) && get_option("skudo_woocommerce_cart") == "on") echo "with-woocommerce-cart";
			?>">
			
				
				<?php skudo_print_woocommerce_button();?>
				
				<?php
				if (get_option("skudo_sliding_panel") == "on"){
					?>					
						<div class="menu-controls sliderbar-menu-controller" title="Sidebar Menu Controller">
                            <div class="font-icon custom-font-icon">
	                            <div data-icon="c" class="icon"></div>
	                            <div class="icon dripicons-cross"></div>
                            </div>
                        </div>
					<?php
				}
				
			?>
			</div>

			</div>
			
			<div class="navbar-collapse collapse">
				<?php 
					if (!$isfirstpage){
						if ($ispagephp){
							wp_nav_menu( array( 'theme_location' => 'PrimaryNavigation', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'walker' => new skudo_walker_nav_menu_outsider, 'fallback_cb' => esc_html__('You need to assign a Menu to the Main Navigation Location.','skudo') ) );
						} 
						else {
							global $homes;
							$homes = 0;
							wp_nav_menu( array( 'theme_location' => 'PrimaryNavigation', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right', 'walker' => new skudo_walker_nav_menu, 'fallback_cb' => esc_html__('You need to assign a Menu to the Main Navigation Location.','skudo') ) );
						} 	
					}
				?>
			</div>
			
			
			
			 
			<?php
				if (!$isfirstpage){
					?>
					<div id="dl-menu" class="dl-menuwrapper">
						<div class="dl-trigger-wrapper">
							<button class="dl-trigger"></button>
						</div>
						<?php 
							if ($ispagephp){
								wp_nav_menu( array( 'theme_location' => 'PrimaryNavigation', 'container' => false, 'menu_class' => 'dl-menu', 'walker' => new skudo_walker_nav_menu_outsider, 'fallback_cb' => esc_html__('You need to assign a Menu to the Main Navigation Location.','skudo') ) );
							} 
							else {
								global $homes;
								$homes = 0;
								wp_nav_menu( array( 'theme_location' => 'PrimaryNavigation', 'container' => false, 'menu_class' => 'dl-menu', 'walker' => new skudo_walker_nav_menu, 'fallback_cb' => esc_html__('You need to assign a Menu to the Main Navigation Location.','skudo') ) );
							} 
						?>
					</div>
					<?php
				}
			?>
			
		</div>
		
	</header>
	<?php
}
	
?>