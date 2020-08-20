<?php
/**
 * @package WordPress
 * @subpackage Skudo
**/

get_header(); skudo_print_menu(); $skudo_color_code = get_option("skudo_style_color");

	/* pagetitle options related. */
	$type = get_option("skudo_header_type");
	$thecolor = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_color"))); 
	$opacity = intval(str_replace("%","",get_option("skudo_header_opacity")))/100;
	$color = "rgba(".$thecolor[0].",".$thecolor[1].",".$thecolor[2].",".$opacity.")";
	$image = get_option("skudo_header_image"); 
	$background_position = get_option("skudo_pagetitle_background_position");
	$pattern = is_string(get_option("skudo_header_pattern")) ? SKUDO_PATTERNS_URL.get_option("skudo_header_pattern") : ""; 
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
	$pt_overlay_the_color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_pagetitle_overlay_color")));
	$pt_overlay_pattern = (is_string(get_option("skudo_pagetitle_overlay_pattern"))) ? SKUDO_PATTERNS_URL.get_option("skudo_pagetitle_overlay_pattern") : "";
	$pt_overlay_opacity = intval(str_replace("%","",get_option("skudo_pagetitle_overlay_opacity")))/100;
	$pt_overlay_color = "rgba(".$pt_overlay_the_color[0].",".$pt_overlay_the_color[1].",".$pt_overlay_the_color[2].",".$pt_overlay_opacity.")";
	$breadcrumbs = get_option("skudo_breadcrumbs");
	$breadcrumbs_margintop = get_option('skudo_breadcrumbs_text_margin_top');
	$pagetitlepadding = get_option('skudo_page_title_padding');
	$height = "auto";
	$sidebar_scheme = get_option('skudo_search_archive_sidebar', 'right');
	$sidebar = skudo_convert_to_class(get_option('skudo_search_sidebars_available'));
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

	/* endof pagetitle options stuff. */
	
	/* search code related. counters and stuff. */
	$skudo_reading_option = get_option('skudo_blog_reading_type');
	$skudo_more = 0;

	$orderby="";
	$category="";
	$nposts = "";

	$pag = 1;
	$pag = $wp_query->query_vars['paged'];
	if (!is_numeric($pag)) $pag = 1;
 
	
	$se = get_option("skudo_enable_search_everything");
	
	if ($se == "on"){
		$args = array(
			'showposts' => get_option('posts_per_page'),
			'post_status' => 'publish',
			'paged' => $pag,
			's' => esc_html($_GET['s'])
		);
	    
	    $skudo_the_query = new WP_Query( $args );
	    
	    $args2 = array(
			'showposts' => -1,
			'post_status' => 'publish',
			's' => esc_html($_GET['s'])
		);
		
		$counter = new WP_Query($args2);
		
	} else {
		$args = array(
			'showposts' => get_option('posts_per_page'),
			'post_status' => 'publish',
			'paged' => $pag,
			'post_type' => 'post',
			's' => esc_html($_GET['s'])
		);
			
	    $skudo_the_query = new WP_Query( $args );
	    
	    $args2 = array(
			'showposts' => -1,
			'post_status' => 'publish',
			'post_type' => 'post',
			's' => esc_html($_GET['s'])
		);
		
		$counter = new WP_Query($args2);
	}
	/* endof search stuff. */
	
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
								<?php
									if (function_exists('icl_t')){
										echo wp_kses_post($counter->post_count . " " . sprintf(esc_html__("%s", "skudo"), icl_t( 'skudo', 'Search results for', get_option('skudo_search_results_text'))) . " &#8216;" . $_GET['s'] ."&#8217;");
									} else {
										echo wp_kses_post($counter->post_count . " " . sprintf(esc_html__("%s", "skudo"), get_option("skudo_search_results_text")) . " &#8216;" . $_GET['s'] ."&#8217;");
									}
								?>
							</h1>
							<?php
							$skudo_output = ".present-container h1.page_title{color: #$tcolor; font-size: $tsize; font-family: '{$principalfont[0]}';font-weight: {$principalfont[1]};";
							if ($margintop != "") $skudo_output .= esc_attr("margin-top: ".intval($margintop,10)."px;");
							$skudo_output .= "}";
							skudo_set_custom_inline_css($skudo_output);
						}
		    			if ($showsectitle){
			    			if (is_string(get_option("skudo_search_secondary_title")) && get_option("skudo_search_secondary_title") != ""){
						    	?>
							    <h2 class="secondaryTitle">
							    	<?php echo wp_kses_post(get_option("skudo_search_secondary_title")); ?>
							    </h2>
					    		<?php
					    	}
			    			$skudo_output = ".present-container .secondaryTitle{color: #$stcolor; font-size: $stsize; line-height: $stsize; font-family: '{$secondaryfont[0]}';font-weight:{$secondaryfont[1]}; margin-top:{$stmargin};}";
							skudo_set_custom_inline_css($skudo_output);
		    			}
		    		?>

		    		</div>
				</div>
		<?php }
		?>
		</div><!-- end of fullwidth section -->
		<?php 
	}
	
	if (!$sidebar) $sidebar = "defaultblogsidebar";
	switch ($sidebar_scheme){
		case "none":
			?>
			<div class="master_container master_container_bgwhite" >
				<div class="container">
					<section class="page_content">
						<?php skudo_print_search_results(); ?>
					</section>
				</div>
			</div>
			<?php
		break;
		case "left":
			?>
			<div class="master_container master_container_bgwhite" >
				<div class="container">
					<section class="page_content left sidebar col-xs-12 col-md-3">
						<?php 
						if ($sidebar === "defaultblogsidebar") $sidebar = 'sidebar-widgets';
						if ( function_exists('dynamic_sidebar') && is_active_sidebar( $sidebar )) { 
							ob_start();
							do_shortcode(dynamic_sidebar($sidebar));
							$html = ob_get_contents();
							ob_end_clean();
							$html = wp_kses_no_null( $html, array( 'slash_zero' => 'keep' ) );
							$html = wp_kses_normalize_entities($html);
							echo wp_kses_hook($html, 'post', array());  
						} else get_sidebar();
						wp_reset_postdata();
						?>
					</section>
					<section class="page_content right col-xs-12 col-md-9">
						<?php skudo_print_search_results(); ?>
					</section>
				</div>
			</div>
			<?php
		break;
		case "right":
			?>
			<div class="master_container master_container_bgwhite" >
				<div class="container">
					<section class="page_content left col-xs-12 col-md-9">
						<?php skudo_print_search_results(); ?>
					</section>
					<section class="page_content right sidebar col-xs-12 col-md-3">
						<?php 
						wp_reset_postdata();
						if ($sidebar === "defaultblogsidebar") $sidebar = 'sidebar-widgets';
						if ( function_exists('dynamic_sidebar') && is_active_sidebar( $sidebar )) { 
							ob_start();
							do_shortcode(dynamic_sidebar($sidebar));
							$html = ob_get_contents();
							ob_end_clean();
							$html = wp_kses_no_null( $html, array( 'slash_zero' => 'keep' ) );
							$html = wp_kses_normalize_entities($html);
							echo wp_kses_hook($html, 'post', array());  
						} else get_sidebar();
						?>
					</section>
				</div>
			</div>
			<?php
		break;
		default:
			?>
			<div class="master_container master_container_bgwhite" >
				<div class="container">
					<section class="page_content">
						<?php skudo_print_search_results(); ?>
					</section>
				</div>
			</div>
			<?php
		break;
	}
	
	function skudo_print_search_results(){
		global $skudo_the_query;
		if ($skudo_the_query->have_posts()){
			
			$skudo_animate_results = get_option( 'skudo_animate_results_on_scroll', 'on' ) == 'on' ? true : false;
			$skudo_layout_is_masonry = get_option( 'skudo_search_results_layout', 'normal' ) == 'masonry' ? true : false;
			$skudo_show_featured_image = get_option( 'skudo_show_results_featured_image', 'on' ) == 'on' ? true : false;
			$skudo_inline_script = "";
		?> 
		
		<div class="post-listing <?php  if ($skudo_layout_is_masonry) echo " journal isotope not-ready "; if ($skudo_animate_results) echo " skudo-animate-results "; ?>" <?php if ($skudo_layout_is_masonry) echo ' data-columns="4" data-gutter-space="60" '; ?>>
			<?php			    
			    while ( $skudo_the_query->have_posts() ) : 
						
			    	$skudo_the_query->the_post();
		    		global $skudo_more;
			    		$skudo_more = 0;
			    	$post_classes = array();
			    	if ($skudo_animate_results) $post_classes[] = "not-in-view";
					if ($skudo_layout_is_masonry){
						$post_classes[] = "journal-post isotope-item";
					}
					?>
			    	
			    	<article id="post-<?php esc_attr(the_ID()); ?>" <?php post_class($post_classes); ?>>
				    	
				    	<?php
					    	if ($skudo_layout_is_masonry){
						    	?>
						<div class="result_type_tag"><?php echo get_post_type( get_the_ID() ); ?></div>
						    	<?php
					    	}
				    	?>
				    	
				    	<?php
					    	if ($skudo_show_featured_image && wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())) != false){
						    	?>
						    <div class="featured-image-box">

								<div class="featured-image">
									
									<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
									<img alt="<?php echo esc_attr(get_the_title()); ?>" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()))); ?>" title="<?php echo esc_attr(get_the_title()); ?>"/>
									<span class="post_overlay">
											<i class="fa fa-plus" aria-hidden="true"></i>
										</span>
									</a>
								</div>
								
							</div>
						    	<?php
					    	}
				    	?>
				    	
				    	<div class="the_title"><h2><a href="<?php esc_url(the_permalink()); ?>"><?php wp_kses_post(the_title()); ?></a></h2></div>
					<?php
						if (get_option("skudo_display_metas") == "on"){
							
							if (!$skudo_layout_is_masonry){
								?>
								<div class="metas-container">
								<?php
					    			$metas = explode(",", get_option("skudo_metas_to_display"));
					    			if (!empty($metas)){
						    			$firstMeta = true;
						    			foreach ($metas as $meta){
							    			switch ($meta){
								    			case "date": 
								    				if (!$firstMeta){
										    			echo '<p class="metas-sep">|</p>';
									    			} else {
										    			$firstMeta = false;
									    			}
								    				?>
								    				<p class="blog-date"><?php echo get_the_date(); ?></p>
								    				<?php
								    			break;
								    			case "author":
								    				if (!$firstMeta){
										    			echo '<p class="metas-sep">|</p>';
									    			} else {
										    			$firstMeta = false;
									    			}
								    				?>
								    				<p data-rel="metas-author"><?php
									    				if (function_exists('icl_t')){
										    				printf(esc_html__("%s","skudo"), icl_t( 'skudo', 'by', get_option('skudo_by_text')));
									    				} else {
										    				printf(esc_html__("%s","skudo"), get_option("skudo_by_text"));
									    				}
								    				?>: <a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"> <?php  esc_html(the_author_meta('nickname')); ?></a></p>
								    				<?php
								    			break;
								    			case "tags":
								    				$posttags = get_the_tags();
													if ($posttags) {
														if (!$firstMeta){
											    			echo '<p class="metas-sep">|</p>';
										    			} else {
											    			$firstMeta = false;
										    			}
														$first = true;
														echo '<p data-rel="metas-tags">';
														if (function_exists('icl_t')){
										    				printf(esc_html__("%s","skudo"), icl_t( 'skudo', 'by', get_option('skudo_tags_text')));
									    				} else {
										    				printf(esc_html__("%s","skudo"), get_option("skudo_tags_text"));
									    				}
														echo ': ';
														foreach($posttags as $tag) {
															if ($tag->name != "uncategorized"){
																if ($first){
																	echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																	$first = false;
																} else {
																	echo "<span>, </span><a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																}
															}
													  	}
													  	echo '</p>';
													}
								    			break;
								    			case "categories":
								    				$postcats = get_the_category();
													if ($postcats) {
														if (!$firstMeta){
											    			echo '<p class="metas-sep">|</p>';
										    			} else {
											    			$firstMeta = false;
										    			}
														$first = true;
														echo '<p data-rel="metas-categories">';
														if (function_exists('icl_t')){
										    				printf(esc_html__("%s","skudo"), icl_t( 'skudo', 'by', get_option('skudo_categories_text')));
									    				} else {
										    				printf(esc_html__("%s","skudo"), get_option("skudo_categories_text"));
									    				}
														echo ': ';
														foreach($postcats as $cat) {
															if ($cat->name != "uncategorized"){
																if ($first){
																	echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																	$first = false;
																} else {
																	echo "<span>, </span><a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																}	
															}
													  	}
													  	echo '</p>';
													}
								    			break;
								    			case "comments":
								    				if (!$firstMeta){
										    			echo '<p class="metas-sep">|</p>';
									    			} else {
										    			$firstMeta = false;
									    			}
								    				echo '<p data-rel="metas-comments">';
								    				printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'skudo' ), number_format_i18n( get_comments_number() ) );
								    				echo '</p>';
								    			break;
								    			case "customtext":
								    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
										    			echo '<p class="metas-sep">|</p>';
										    			echo '<p data-rel="metas-customtext">'.wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) ).'</p>';
									    			} else {
										    			if (strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0){
											    			echo '<p data-rel="metas-customtext">'.wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) ).'</p>';
											    			$firstMeta = false;
										    			}
									    			}
								    			break;
							    			}
						    			}
					    			}
				    			?>
				    		</div>
								<?php
							}
								
								if ($skudo_layout_is_masonry){
									?>
							<div class="results_excerpt">
								<?php
									$content = get_the_content('...',true);
									$pos=strpos($content, '<!--more-->');
									if ($pos){
										$text = explode('<!--more-->', $content);
										$text = $text[0];
										$text = preg_replace( '/\[[^\]]+\]/', '', $text );
										$text = apply_filters('the_content', $text);
										$text = str_replace(']]>', ']]&gt;', $text);
										echo wp_kses_post($text);
									} else {
										$text = preg_replace( '/\[[^\]]+\]/', '', $content );
										$text = apply_filters('the_content', $text);
										$text = str_replace(']]>', ']]&gt;', $text);
										$text = wp_trim_words( $text, 13 );
										echo apply_filters('wp_trim_excerpt', $text );
									}
								?>
							</div>
									<?php
								}
						}
				    ?> 
			    		
			    		<?php
			    		if (!is_sticky()){
				    		if (!$skudo_layout_is_masonry){
					    		?>
					    	<div class="des-sc-dots-divider"></div>
					    		<?php
				    		}
			    		}
			    		?>
						
				    </article> <!-- end of post -->
				    	
			    <?php endwhile; ?>
			    		
	    	</div> <!-- end of post-listing -->
					
			<div class="navigation">
				<?php
					$skudo_reading_option = get_option('skudo_blog_reading_type');
					if ($skudo_reading_option != "paged" && $skudo_reading_option != "dropdown"){ 
						$skudo_the_query = new WP_Query();
						if (function_exists('icl_t')){
							next_posts_link('<div class="next-posts">&laquo; ' . sprintf(esc_html__("%s", "skudo"), icl_t( 'skudo', 'Previous results', get_option('skudo_previous_results'))).'</div>', $skudo_the_query->max_num_pages);
							previous_posts_link('<div class="prev-posts">'.sprintf(esc_html__("%s", "skudo"), icl_t( 'skudo', 'Next results', get_option('skudo_next_results'))) . ' &raquo;</div>', $skudo_the_query->max_num_pages);
						} else {
							next_posts_link('<div class="next-posts">&laquo; ' . sprintf(esc_html__("%s", "skudo"), get_option("skudo_previous_results")).'</div>', $skudo_the_query->max_num_pages);
							previous_posts_link('<div class="prev-posts">'.sprintf(esc_html__("%s", "skudo"), get_option("skudo_next_results")) . ' &raquo;</div>', $skudo_the_query->max_num_pages);
						}
					} else { 
						skudo_wp_pagenavi();
					}
				?>
			</div>

		<?php  
			
			if ($skudo_layout_is_masonry){
				$skudo_inline_script .= '
					"use strict";
					var forceGutter = 50;
					(function(e){"use strict";e.Isotope.prototype._getMasonryGutterColumns=function(){var e=this.options.masonry&&this.options.masonry.gutterWidth||0;var t=this.element.width();this.masonry.columnWidth=this.options.masonry&&this.options.masonry.columnWidth||this.$filteredAtoms.outerWidth(true)||t;this.masonry.columnWidth+=e;this.masonry.cols=Math.floor((t+e)/this.masonry.columnWidth);this.masonry.cols=Math.max(this.masonry.cols,1)};e.Isotope.prototype._masonryReset=function(){this.masonry={};this._getMasonryGutterColumns();var e=this.masonry.cols;this.masonry.colYs=[];while(e--){this.masonry.colYs.push(0)}};e.Isotope.prototype._masonryResizeChanged=function(){var e=this.masonry.cols;this._getMasonryGutterColumns();return this.masonry.cols!==e};e(document).ready(function(){"use strict";var t=e(".journal");var n=0;var r=0;var i=function(){var e=parseInt(t.data("columns"));var i=t.data("gutterSpace");var s=t.width();var o=0;if(isNaN(i)){i=.02}else if(i>.05||i<0){i=.02}if(s<568){e=1}else if(s<768){e-=2}else if(s<991){e-=1;if(e<2){e=2}}if(e<1){e=1}r=forceGutter!=false ? forceGutter : Math.floor(s*i);var u=r*(e-1);var a=s-u;n=Math.floor(a/e);o=r;if(1==e){o=20}t.children(".journal-post").css({width:n+"px",marginBottom:o+"px"})};i();window.iso = t.isotope({itemSelector:".journal-post",resizable:false,masonry:{columnWidth:n,gutterWidth:r}});    t.imagesLoaded(function(){i(); t.isotope({itemSelector:".journal-post",resizable:true,masonry:{columnWidth:n,gutterWidth:r}})});e(window).smartresize(function(){i();t.isotope({masonry:{columnWidth:n,gutterWidth:r}})});var s=e(".wc-shortcodes-filtering .wc-shortcodes-term");s.on("click",function(i){i.preventDefault();s.removeClass("wc-shortcodes-term-active");e(this).addClass("wc-shortcodes-term-active");var o=e(this).attr("data-filter"); t.isotope({filter:o,masonry:{columnWidth:n,gutterWidth:r} });return false})})})(jQuery);
					
					jQuery(window).load(function(){ jQuery(window).resize(); jQuery(".post-listing.skudo-animate-results").removeClass("not-ready"); });
				';
			}
			
			if ($skudo_animate_results){
				$skudo_inline_script .= '
					jQuery(document).ready(function(){
						"use strict";
						jQuery(".not-in-view").waypoint({
							handler: function(event, direction){
								jQuery(this.element).removeClass("not-in-view");
							},
							offset: "80%"
						});
					});
				';
			}
			
			wp_add_inline_script( 'skudo-global', $skudo_inline_script, 'after' );
			
		}  else { ?>
	
		<div class="post-listing">
			<div class="pageTitle">
				<h2 class="hsearchtitle"><?php
					if (function_exists('icl_t')){
						echo sprintf(esc_html__("%s", "skudo"), icl_t( 'skudo', 'No results found.', get_option('skudo_no_results_text')));
					} else {
						echo sprintf(esc_html__("%s", "skudo"), get_option("skudo_no_results_text"));
					}
				?></h2>
				<p class="titleSep"></p>
			</div>
		</div>
		
		
	<?php }
	}
	?>
	
<?php get_footer(); ?>