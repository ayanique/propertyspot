<?php

get_header(); skudo_print_menu();

	$skudo_thisPostID = get_the_ID(); 	

	if (get_post_meta($skudo_thisPostID, "skudo_enable_custom_pagetitle_options_value", true) == "no" || !get_post_meta($skudo_thisPostID, "skudo_enable_custom_pagetitle_options_value", true)){
		$type = get_option("skudo_header_type");
		$thecolor = skudo_hex2rgb(get_option("skudo_header_color")); 
		$opacity = intval(str_replace("%","",get_option("skudo_header_opacity")))/100;
		$color = "rgba(".$thecolor[0].",".$thecolor[1].",".$thecolor[2].",".$opacity.")";
		$image = get_option("skudo_header_image"); 
		$background_position = get_option("skudo_pagetitle_background_position");
		$pattern = SKUDO_PATTERNS_URL.get_option("skudo_header_pattern"); 
		$custompattern = get_option("skudo_header_custom_pattern"); 
		$margintop = get_option("skudo_header_text_margin_top");	
		$banner = get_option("skudo_banner_slider");
		$showtitle = get_option("skudo_hide_pagetitle") == "on" ? true : false;
		$showsectitle = get_option("skudo_hide_sec_pagetitle") == "on" ? true : false;
		$tcolor = get_option("skudo".'_header_text_color');
		$tsize = intval(str_replace(" ", "", get_option("skudo".'_header_text_size')),10)."px";
		$tfont = get_option("skudo".'_header_text_font');
		$stcolor = get_option("skudo".'_secondary_title_text_color');
		$stsize = intval(str_replace(" ", "", get_option("skudo".'_secondary_title_text_size')),10)."px";
		$stfont = get_option("skudo".'_secondary_title_font');
		$stmargin = intval(str_replace(" ", "", get_option("skudo".'_header_sec_text_margin_top')),10)."px";
		$originalalign = get_option("skudo_header_text_alignment");
		$pt_parallax = get_option("skudo_pagetitle_image_parallax") == "on" ? true : false;
		$pt_overlay = get_option("skudo_pagetitle_image_overlay") == "on" ? true : false;
		$pt_overlay_type = get_option("skudo_pagetitle_overlay_type");
		$pt_overlay_the_color = skudo_hex2rgb(get_option("skudo_pagetitle_overlay_color"));
		$pt_overlay_pattern = (is_string(get_option("skudo_pagetitle_overlay_pattern"))) ? SKUDO_PATTERNS_URL.get_option("skudo_pagetitle_overlay_pattern") : "";
		$pt_overlay_opacity = intval(str_replace("%","",get_option("skudo_pagetitle_overlay_opacity")))/100;
		$pt_overlay_color = "rgba(".$pt_overlay_the_color[0].",".$pt_overlay_the_color[1].",".$pt_overlay_the_color[2].",".$pt_overlay_opacity.")";
		$breadcrumbs = get_option("skudo_breadcrumbs");
		$breadcrumbs_margintop = get_option('skudo_breadcrumbs_text_margin_top');
		$pagetitlepadding = get_option('skudo_page_title_padding');
	} else {
		$type = get_post_meta($skudo_thisPostID, "skudo_header_type_value", true);
		$thecolor = skudo_hex2rgb(get_post_meta($skudo_thisPostID, "skudo_header_color_value", true)); 
		$opacity = intval(str_replace("%","",get_post_meta($skudo_thisPostID, "skudo_header_color_opacity_value", true)))/100;
		$color = "rgba(".$thecolor[0].",".$thecolor[1].",".$thecolor[2].",".$opacity.")";
		$image = get_post_meta($skudo_thisPostID, "skudo_header_image_value", true);
		$image = explode('|!|',$image);
		if (isset($image[1])) $image = explode('|*|',$image[1]);
		$image = $image[0];
		$background_position = get_post_meta($skudo_thisPostID, "skudo_header_background_position_value", true);
		$pattern = SKUDO_PATTERNS_URL.get_post_meta($skudo_thisPostID, "skudo_header_pattern_value", true).".jpg";
		$custompattern = get_option("skudo_header_custom_pattern_value"); 
		$margintop = get_post_meta($skudo_thisPostID, "skudo_header_text_margin_top_value", true);
		$banner = get_post_meta($skudo_thisPostID, "skudo_banner_slider_value", true);
		$showtitle = get_post_meta($skudo_thisPostID, "skudo_hide_pagetitle_value", true) == "yes" ? true : false;
		$showsectitle = get_post_meta($skudo_thisPostID, "skudo_hide_sec_pagetitle_value", true) == "yes" ? true : false;
		$tcolor = get_post_meta($skudo_thisPostID, "skudo_header_text_color_value", true);
		$tsize = intval(str_replace(" ", "", get_post_meta($skudo_thisPostID, "skudo_header_text_size_value", true)),10)."px";
		$tfont = get_post_meta($skudo_thisPostID, "skudo_header_text_font_value", true);
		$stcolor = get_post_meta($skudo_thisPostID, "skudo_secondary_title_text_color_value", true);
		$stsize = intval(str_replace(" ", "", get_post_meta($skudo_thisPostID, "skudo_secondary_title_text_size_value", true)),10)."px";
		$stfont = get_post_meta($skudo_thisPostID, "skudo_secondary_title_font_value", true);
		$stmargin = intval(str_replace(" ", "", get_post_meta($skudo_thisPostID, "skudo_header_secondary_text_margin_top_value", true)),10)."px";
		$originalalign = get_post_meta($skudo_thisPostID, "skudo_header_text_alignment_value", true);
		$pt_parallax = get_post_meta($skudo_thisPostID, "skudo_pagetitle_image_parallax_value", true) == "on" ? true : false;
		$pt_overlay = get_post_meta($skudo_thisPostID, "skudo_pagetitle_image_overlay_value", true) == "on" ? true : false;
		$pt_overlay_type = get_post_meta($skudo_thisPostID, "skudo_pagetitle_overlay_type_value", true);
		$pt_overlay_the_color = skudo_hex2rgb(get_post_meta($skudo_thisPostID, "skudo_pagetitle_overlay_color_value", true));
		$pt_overlay_pattern = SKUDO_PATTERNS_URL.get_post_meta($skudo_thisPostID, "skudo_pagetitle_overlay_pattern_value", true).".jpg";
		$pt_overlay_opacity = intval(str_replace("%","",get_post_meta($skudo_thisPostID, "skudo_pagetitle_overlay_opacity_value", true)))/100;
		$pt_overlay_color = "rgba(".$pt_overlay_the_color[0].",".$pt_overlay_the_color[1].",".$pt_overlay_the_color[2].",".$pt_overlay_opacity.")";
		$breadcrumbs = get_post_meta($skudo_thisPostID, "skudo_enable_breadcrumbs_value", true) == "yes" ? "on" : "off";
		$breadcrumbs_margintop = intval(str_replace(" ", "", get_post_meta($skudo_thisPostID, "skudo_breadcrumbs_margin_top_value", true)),10)."px";
		$pagetitlepadding = intval(str_replace(" ", "", get_post_meta($skudo_thisPostID, "skudo_page_title_padding_value", true)),10)."px";
	}
	$height = "auto";

	$textalign = $originalalign;
	if ($originalalign == "titlesleftcrumbsright") $textalign = "left";
	if ($originalalign == "titlesrightcrumbsleft") $textalign = "right";

	$skudo_import_fonts[] = $tfont;
	$principalfont = explode("|",$tfont);
	$principalfont[0] = $principalfont[0]."', 'Arial', 'sans-serif";
	if (!isset($principalfont[1])) $principalfont[1] = "";
		
	$skudo_import_fonts[] = $stfont;
	$secondaryfont = explode("|",$stfont);
	$secondaryfont[0] = $secondaryfont[0]."', 'Arial', 'sans-serif";
	if (!isset($secondaryfont[1])) $secondaryfont[1] = "";
		
	if ($type != "without"){
		
		$ptitleaux = $bcaux = "";
		if ($originalalign == "titlesleftcrumbsright" || $originalalign == "titlesrightcrumbsleft"){
    		$ptitleaux .= "max-width: 50%;";
    		$bcaux .= "max-width: 50%;";
    		if ($originalalign == "titlesleftcrumbsright"){
				$ptitleaux .= "float:left;";
				$bcaux .= "float:right;";
			} else {
				$ptitleaux .= "float:right;";
				$bcaux .= "float:left;";
			}
		}
		$bcaux .= "margin-top:".intval($breadcrumbs_margintop,10)."px;";
		switch($originalalign){
			case "left": case "titlesrightcrumbsleft":
				$bcaux .= "text-align: left;";
			break;
			case "right": case "titlesleftcrumbsright":
				$bcaux .= "text-align:right;";
			break;
			case "center": 
				$bcaux .= "text-align:center;";
			break;
		}
		
		?>
		<div class="fullwidth-container <?php if ($type == "pattern") echo "bg-pattern"; ?> <?php if ($pt_parallax) echo "parallax"; ?><?php if (($type == "image" || $type == "pattern") && get_option('skudo_enable_grayscale') == 'on') echo " skudo_grayscale "; ?>" <?php if ($pt_parallax) echo 'data-stellar-ratio="0.5"'; ?> 
	    	<?php
		    	$skudo_output = ".fullwidth-container{";
		 		if ($height != "") $skudo_output.= "height: ". $height . ";";
				if ($type == "none") $skudo_output.= "background: none;"; 
				if ($type == "color") $skudo_output.= "background: " . $color . ";";
				if ($type == "image") $skudo_output.= "background: url(" . $image . ") no-repeat; background-size: 100% auto;";  
	 			if ($type == "pattern") $skudo_output.= "background: url('" . $pattern . "') 0 0 repeat;";
				$skudo_output .= "}";
				skudo_set_custom_inline_css($skudo_output);
		
		
	    	?> <?php if ($type == "image" && !$pt_parallax) echo ' data-background-alignment="'. esc_attr( $background_position ) .'" '; ?>>
	    	<?php
		    	if ($type == "image" && $pt_overlay){
			    	$skudo_output = ".pagetitle_overlay{";
			    	echo '<div class="pagetitle_overlay"></div> '; 
			    	if ($pt_overlay_type == "color") $skudo_output.= 'background-color:'.$pt_overlay_color.' !important';
			    	else $skudo_output.= 'background:url('.$pt_overlay_pattern.') repeat;opacity:'.$pt_overlay_opacity.' !important;';
			    	$skudo_output .= "}";
					skudo_set_custom_inline_css($skudo_output);
		    	}
		    	if ($type === "banner"){
			    	?> 
			    	<div class="revBanner">
				    	<?php
					    	if (substr($banner, 0, 10) === "revSlider_"){
								if (!function_exists('putRevSlider')){
									echo esc_html__('Please install the missing plugin - Revolution Slider.', 'skudo');
								} else {
									putRevSlider(substr($banner, 10));
								}
							} 
							if (substr($banner, 0, 13) === "masterSlider_"){
								if (!function_exists('masterslider')){
									echo esc_html__('Please install the missing plugin - MasterSlider.', 'skudo');
								} else {
									echo do_shortcode( '[masterslider alias="'.substr($banner, 13).'"]' );
								}
							}
							if (substr($banner, 0, 12) === "layerSlider_"){
								if (!function_exists('layerslider')){
									echo esc_html__('Please install the missing plugin - LayerSlider.', 'skudo');
								} else {
									echo do_shortcode( '[layerslider id="'.substr($banner, 12).'"]' );
								}
							}
				    	?>
				    </div> 
				    <?php
		    	} else {
		    	?>
				<div class="container present-container <?php echo esc_attr($originalalign); ?>">
					<?php
						$skudo_output = ".present-container{padding: ".esc_attr($pagetitlepadding)." 15px;}";
						skudo_set_custom_inline_css($skudo_output);
					?>
					<div class="pageTitle">
					<?php
						$skudo_output = ".present-container .pageTitle{text-align: ".esc_attr($textalign).";".esc_attr($ptitleaux)."}";
						skudo_set_custom_inline_css($skudo_output);
						if ($showtitle){
							?>
							<h1 class="page_title">
								<?php if (is_front_page() && is_home()) echo wp_kses_post(get_option('skudo_blog_single_primary_title')); else echo wp_kses_post(get_the_title($skudo_thisPostID)); ?>
							</h1>
							<?php
							$skudo_output = ".present-container h1.page_title{color: #$tcolor; font-size: $tsize; font-family: '{$principalfont[0]}';font-weight: {$principalfont[1]};";
							if ($margintop != "") $skudo_output .= esc_attr("margin-top: ".intval($margintop,10)."px;");
							$skudo_output .= "}";
							skudo_set_custom_inline_css($skudo_output);
						}
		    			if ($showsectitle){
			    			if (get_post_meta($post->ID, 'secondaryTitle_value', true) != "" || get_option('skudo_blog_secondary_title') != ""){
						    	?>
							    <h2 class="secondaryTitle">
							    	<?php echo wp_kses_post(get_post_meta($post->ID, 'secondaryTitle_value', true)); ?>
							    </h2>
					    		<?php
						    	$skudo_output = ".present-container .secondaryTitle{color: #$stcolor; font-size: $stsize; line-height: $stsize; font-family: '{$secondaryfont[0]}';font-weight:{$secondaryfont[1]}; margin-top:{$stmargin};}";
								skudo_set_custom_inline_css($skudo_output);
					    	}
		    			}
		    		?>

		    		</div>
		    		<?php
		    		if ($breadcrumbs == "on"){
			    		?>
			    		<div class="skudo_breadcrumbs">
							<?php 
								skudo_the_breadcrumb(); 
								$skudo_output = ".skudo_breadcrumbs{".esc_attr($bcaux)."}";
								skudo_set_custom_inline_css($skudo_output);
							?>
			    		</div>
			    		<?php
					}
					?>
				</div>
		<?php }
		?>
		</div>	
		<?php
	}
	?>
	
	<div class="master_container master_container_bgwhite">
		<section class="page_content">
			<div class="container buddypress-container">
				<?php
				while (have_posts()) : the_post(); ?>
				 	<?php the_content(); ?>
				<?php endwhile; ?>	
			</div>
		</section>
	</div>
	<?php get_footer(); ?>