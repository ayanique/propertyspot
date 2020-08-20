<?php
/**
 * @package WordPress
 * @subpackage Skudo
 */
?><!DOCTYPE html>
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
	<?php wp_head(); ?>
</head>

<?php
	if (get_option('skudo_enable_under_construction') === "on" && get_option('skudo_under_construction_page') != "0" && !is_user_logged_in()){
		add_action('template_redirect', skudo_under_construction());
	}
?>

<body <?php body_class(); if (get_option("skudo_body_type") == "body_boxed") echo esc_attr('id=boxed_layout');?>>
	
	<?php
		if (get_option("skudo_sliding_panel") == "on" && !is_page_template( 'template-under-construction.php') ){
			?>
			<div class="skudo-push-sidebar skudo-push-sidebar-right">
			    <i class="overlay-menu-close font-icon icon-icon_close"></i>
			    <div class="display-table">
			        <div id="skudo-push-sidebar-content" class="skudo-push-sidebar-content ajaxable">
				        <?php
					        if (function_exists('dynamic_sidebar')){
						        dynamic_sidebar('sliding_panel_sidebar');
					        }
				        ?>
			        </div>
			    </div>
			</div>
			<?php
		}

		//the search input
		if (get_option("skudo_enable_search") == "on"){
			?>
			<form autocomplete="off" role="search" method="get" class="search_input <?php echo esc_attr(get_option("skudo_header_style_type")); if (get_option("skudo_header_full_width")=="on") echo " full-width-header"; ?>" action="<?php echo esc_url(home_url("/")); ?>">
				<?php
				if ( function_exists('wp_nonce_field') ){
					wp_nonce_field('skudo-theme-search','skudo-theme-search');
				}
				?>
				<div class="search_close">
					<div class="icon dripicons-cross"></div>
				</div>
				<div class="searchinput <?php if (get_option("skudo_header_full_width") == "off") echo "container"; ?>">
					<input value="" name="s" class="search_input_value" type="text" placeholder="<?php
						if (function_exists('icl_t')){
							printf(esc_html__("%s","skudo"), icl_t( 'skudo', 'Type your search and hit enter...', get_option('skudo_search_box_text')));
						} else {
							printf(esc_html__("%s","skudo"), get_option("skudo_search_box_text"));
						}
					?>" />
					<input class="hidden" type="submit" id="searchsubmit" value="Search" />
					<div class="ajax_search_results"><ul></ul></div>
				</div>
				<?php
					if (function_exists('icl_t')){
						?>
						<input class="hidden" name="lang" type="text" value="<?php echo ICL_LANGUAGE_CODE; ?>" />
						<?php
					}
				?>
			</form>	
			<?php
		}
	?>
	
	<div id="main">
	<?php
		$loader = ((is_page_template() && get_post_meta(get_the_ID(), 'skudo_enable_custom_header_options_value', true) == "yes") || (is_single() && get_post_meta(get_the_ID(), 'skudo_enable_custom_header_options_value', true) == "yes")) ? get_post_meta(get_the_ID(), 'skudo_enable_website_loading_value', true) : get_option("skudo_enable_website_loader");
		if ($loader == "on"){
			?>
			<div id="skudo_website_load">
			  	<div class="spinner">
				  	<?php
					  	$divs = "";
					  	$howMany = 0;
					  	$spinner = get_option("skudo_website_loader");
					  	switch($spinner){
							case "ball-clip-rotate": case "square-spin": case "ball-rotate": case "ball-scale": case "ball-scale-ripple":
								$howMany = 1;
							break;
							case "ball-clip-rotate-pulse": case "ball-clip-rotate-multiple": case "cube-transition": case "ball-zig-zag":
								$howMany = 2;
							break;
							case "ball-pulse": case "ball-triangle-path": case "ball-scale-multiple": case "ball-pulse-sync": case "ball-beat": case "ball-scale-ripple-multiple":
								$howMany = 3;
							break;
							case "line-scale-party":
								$howMany = 4;
							break;
							case "ball-pulse-rise": case "line-scale": case "line-scale-pulse-out": case "line-scale-pulse-out-rapid": case "pacman":
								$howMany = 5;
							break;
							case "ball-spin-fade-loader": case "line-spin-fade-loader":
								$howMany = 8;
							break;
							case "ball-grid-pulse":
								$howMany = 9;
							break;
						}
						for ($i=0; $i<$howMany; $i++) $divs .= "<div class='loader_build_helper-{$i}'></div>";
						
						if ($spinner == "load2" || $spinner == "load3" || $spinner == "load6"){
							echo wp_kses_post('<div class="loaders-style-box '.$spinner.'"><div class="loader"></div></div>');
						} else {
							echo wp_kses_post('<div class="loaders-style-box loader-inner '.$spinner.'">'.$divs.'</div>');
						}
				  	?>
				</div>
				<?php
					if (get_option("skudo_enable_website_loader_percentage") == "on"){
						?>
						<div class="percentage">0%</div>
						<?php
					}
				?>
		  	</div>
			<?php
		}
	?>
	
	<?php
		if (get_option("skudo_body_type") == "body_boxed"){
			?>
			<div class="boxed_layout">
			<?php
		}
	?>