<?php
/**
 * @package WordPress
 * @subpackage Skudo
 */

get_header(); skudo_print_menu();

	$skudo_reading_option = get_option("skudo_blog_reading_type");
	$skudo_more = 0;
	$skudo_color_code = get_option("skudo_style_color");

	$type = get_option("skudo_header_type");
	$thecolor = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_color"))); 
	$opacity = intval(str_replace("%","",get_option("skudo_header_opacity")),10)/100;
	$color = "rgba(".$thecolor[0].",".$thecolor[1].",".$thecolor[2].",".$opacity.")";
	$image = get_option("skudo_header_image"); 
	$background_position = get_option("skudo_pagetitle_background_position");
	$pattern = is_string(get_option("skudo_header_pattern")) ? SKUDO_PATTERNS_URL.get_option("skudo_header_pattern") : ""; 
	$custompattern = get_option("skudo_header_custom_pattern"); 
	$height = get_option("skudo_header_height"); 
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
	
	skudo_set_import_fonts($skudo_import_fonts);
	
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
								<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
								<?php 
									/* If this is a category archive */ if (is_category()) { 
									esc_html_e('Archive for the','skudo'); echo "<br/>&#8216;"; single_cat_title(); echo "&#8217; "; esc_html_e('Category','skudo'); 
						
									/* If this is a tag archive */ } elseif( is_tag() ) { 
									esc_html_e('Posts Tagged','skudo'); echo "<br/>&#8216;"; single_tag_title(); echo "&#8217;";
						
									/* If this is a daily archive */ } elseif (is_day()) {
									esc_html_e('Archive for ','skudo'); echo get_the_date('F jS, Y'); 
		
									/* If this is a monthly archive */ } elseif (is_month()) { 
									esc_html_e('Archive for ','skudo'); echo get_the_date('F, Y'); 
		
									/* If this is a yearly archive */ } elseif (is_year()) {
									esc_html_e('Archive for ','skudo'); echo get_the_date('Y'); 
		
									/* If this is an author archive */ } elseif (is_author()) {
									esc_html_e('Author Archive','skudo');
						
									/* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged']))
									esc_html_e('Blog Archives','skudo');
								?>
							</h1>
							<?php
							$skudo_output = ".present-container h1.page_title{color: #$tcolor; font-size: $tsize; font-family: '{$principalfont[0]}';font-weight: {$principalfont[1]};";
							if ($margintop != "") $skudo_output .= esc_attr("margin-top: ".intval($margintop,10)."px;");
							$skudo_output .= "}";
							skudo_set_custom_inline_css($skudo_output);
						}
		    			if ($showsectitle){
			    			if (is_string(get_option('skudo_archive_secondary_title')) && get_option('skudo_archive_secondary_title') != ""){
						    	?>
							    <h2 class="secondaryTitle">
							    	<?php echo wp_kses_post(get_option("skudo_archive_secondary_title")); ?>
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
		</div> <!-- end of fullwidth section -->
		<?php	
	}
	
	$sidebar = skudo_convert_to_class(get_option("skudo_blog_archive_sidebars_available"));
	switch (get_option("skudo_blog_archive_sidebar")){
		case "none":
			?>
			<div class="blog-default wideblog">
				<div class="master_container container">
					
					<section class="page_content col-xs-12 col-md-12">
						<div class="blog-default-bg <?php echo esc_attr( get_option("skudo_blog_archive_style") ); ?>">
							<?php skudo_print_blog_archive(); ?>
						</div>
					</section>
				</div>
			</div>
			<?php
		break;
		case "left":
			?>
			<div class="blog-default">
				<div class="master_container container">
					<section class="page_content left sidebar col-xs-12 col-md-3">
						
						<div class="blog-sidebar-bg">
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
							?>
						</div>
					</section>
					<section class="page_content right col-xs-12 col-md-9">
						<div class="blog-default-bg <?php echo esc_attr( get_option("skudo_blog_archive_style") ); ?>">
							<?php skudo_print_blog_archive(); ?>
						</div>
					</section>
				</div>
			</div>
			<?php
		break;
		case "right":
			?>
			
			<div class="blog-default">
				<div class="master_container container">
					<section class="page_content left col-xs-12 col-md-9">
						<div class="blog-default-bg <?php echo esc_attr( get_option("skudo_blog_archive_style") ); ?>">
							<?php skudo_print_blog_archive(); ?>
						</div>
					</section>
					<section class="page_content right sidebar col-xs-12 col-md-3">
						<div class="blog-sidebar-bg">
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
							?>
						</div>
					</section>
				</div>
			</div>
			
			<?php
		break;
		default:
			?>
			<section class="page_content">
				<div class="container">
				<?php
					$thepost = get_post($i->object_id);
					echo apply_filters( 'the_content', $thepost->post_content );
				?>
				</div>
			</section>
			<?php
		break;
	}
	
		
	function skudo_print_blog_archive(){
		
		global $skudo_import_fonts;
		$skudo_inline_script = "";
		$skudo_animate_posts = get_option('skudo_animate_posts_on_scroll', 'on') == 'on' ? true : false;
		if (have_posts()){
		
			if (get_option("skudo_blog_archive_style") === "normal"){
				$skudo_import_fonts[] = get_option('skudo_blog_normal_title_font');
				$titlefont = explode("|",get_option('skudo_blog_normal_title_font'));
				$titlefont[0] = $titlefont[0]."', 'Arial', 'sans-serif";
				if (!isset($titlefont[1])) $titlefont[1] = "";
				$titlecolor = intval(get_option('skudo_blog_normal_title_color'),10);
				$titlesize = get_option('skudo_blog_normal_title_size');
			?> 			
			<div class="post-listing<?php if ($skudo_animate_posts) echo " skudo-animate-posts "; ?>">
	    	
	    	<?php
		    
			    while (have_posts()){
				the_post();
			    $postid = get_the_ID();
			    $post_classes = array();
			    if ($skudo_animate_posts) $post_classes[] = "not-in-view";
			    ?>
			    
			    <article id="post-<?php esc_attr(the_ID()); ?>" <?php post_class($post_classes); ?>>
				    
				    <?php
					    $posttype = get_post_meta(get_the_ID(), 'posttype_value', true);
					    switch($posttype){
				    		case "image":
				    		
				    			if (wp_get_attachment_url( get_post_thumbnail_id($postid))){
								?>
									<div class="featured-image-box">
										<?php
											if (get_option('skudo_show_author_avatar') == "on"){
												?>
										<div class="author-thumbnail">
											<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
										</div>
												<?php
											}
										?>
										<div class="featured-image">
											
											<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
											<img alt="<?php echo esc_attr(get_the_title()); ?>" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($postid))); ?>" title="<?php echo esc_attr(get_the_title()); ?>"/>
											<span class="post_overlay">
													<i class="fa fa-plus" aria-hidden="true"></i>
												</span>
											</a>
										</div>
										
									</div>
									<?php 
								}
				    			
				    		break;

				    		case "slider": 
				    			$randClass = rand(0,1000);
								?>
									<div class="featured-image-box">
										<?php
											if (get_option('skudo_show_author_avatar') == "on"){
												?>
										<div class="author-thumbnail">
											<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
										</div>
												<?php
											}
										?>
										<div class="flexslider <?php echo esc_attr($posttype); ?>" id="<?php echo esc_attr($randClass); ?>">
											<ul class="slides">
												<?php
													$sliderData = get_post_meta($postid, "sliderImages_value", true);
													$slide = explode("|*|",$sliderData);
												    foreach ($slide as $s){
												    	if ($s != ""){
												    		$params = explode("|!|",$s);
												    		$attachment = get_post( $params[0] );
												    		$title = isset($attachment->post_excerpt) ? $attachment->post_excerpt : "";
												    		echo "<li>";
												    		echo "<img src='".esc_url($params[1])."' alt='' title='".esc_attr($title)."'>";
												    		echo "</li>";	
												    	}
												    }
												?>
											</ul>
										</div>
									</div>
								<?php
									$skudo_inline_script = '
										jQuery(document).ready(function(){
											"use strict";
											jQuery("#'.$randClass.'.flexslider").flexslider({
												animation: "'. esc_js( get_option('skudo_posts_flex_transition', 'fade') ) .'",
												slideshow: '. esc_js( (get_option('skudo_posts_flex_autoplay','on') == 'on') ? "true" : "false" ) .',
												slideshowSpeed: '. esc_js( get_option('skudo_posts_flex_slide_duration','5500') ) .',
												animationDuration: '. esc_js( get_option('skudo_posts_flex_transition_duration','500') ) .',
												directionNav: '. esc_js( (get_option('skudo_posts_flex_navigation','on') == 'on') ? "true" : "false" ) .',
												controlNav: '. esc_js( (get_option('skudo_posts_flex_controls','on') == 'on') ? "true" : "false" ) .',
												smootheHeight:false,
												start: function(slider) {
												  slider.removeClass("loading").css("overflow","").find(".slides").css("max-height", "'.esc_js( intval(get_option('skudo_posts_flex_height','400')) ).'px" );
												}
											});
										});
									';
									wp_add_inline_script('skudo-global', $skudo_inline_script, 'after');
				    		break;

				    		case "audio":
				    			?>
								<div class="audioContainer">
									<?php
										if (get_post_meta($postid, 'audioSource_value', true) == 'embed') echo get_post_meta($postid, 'audioCode_value', true); 
										else {
											$audio = explode("|!|",get_post_meta($postid, 'audioMediaLibrary_value', true));
											if (isset($audio[1])) {
												$ext = explode(".",$audio[1]);
												if (isset($ext)) $ext = $ext[count($ext)-1];
												?>
												<audio controls="controls"><source type="audio/<?php echo esc_attr($ext); ?>" src="<?php echo esc_url($audio[1]); ?>"></audio>
												<?php
											}
										}
									?>
								</div>
								<?php
				    		break;
				    		
				    		case "video":
				    			?>
				    			<div class="featured-image-box">
									<?php
										if (get_option('skudo_show_author_avatar') == "on"){
											?>
									<div class="author-thumbnail">
										<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
									</div>
											<?php
										}
									?>
					    			<div class="post-video <?php echo esc_attr(get_post_meta($postid, "videoSource_value", true)); ?>">
										<div class="video-thumb">
											<div class="video-wrapper vendor">
										<?php
											$videosType = get_post_meta($postid, "videoSource_value", true);
											if ($videosType != "embed"){
												$videos = get_post_meta($postid, "videoCode_value", true);
												$videos = preg_replace( '/\s+/', '', $videos );
												$vid = explode(",",$videos);
											}
											switch (get_post_meta($postid, "videoSource_value", true)){
												case "media":
													$video = explode("|!|",get_post_meta($postid, 'videoMediaLibrary_value', true));
													if (isset($video[1])) {
														$ext = explode(".",$video[1]);
														if (isset($ext)) $ext = $ext[count($ext)-1];
														?>
														<video controls="controls" class="video-controls"><source type="video/<?php echo esc_attr($ext); ?>" src="<?php echo esc_url($video[1]); ?>"></video>
														<?php
													}
												break;
												case "youtube":
													if (isset($vid[0])) echo "<iframe src='//www.youtube.com/embed/".esc_attr($vid[0])."' frameborder='0' allowfullscreen></iframe>";
													break;
												case "vimeo":
													if (isset($vid[0])) echo '<iframe src="https://player.vimeo.com/video/'.esc_attr($vid[0]).'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
													break;
											}						
										?>
											</div>
										</div>
									</div>
				    			</div>
								<?php
				    		break;
				    		
				    		case "gallery":
					    		$slider = get_post_meta($postid,'gallery_slider_value',true);
								if ($slider != '-1'){
									if (substr($slider, 0, 10) === "revSlider_"){
										?>
										<div class="featured-image-box">
											<?php
												if (get_option('skudo_show_author_avatar') == "on"){
													?>
											<div class="author-thumbnail">
												<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
											</div>
													<?php
												}
											?>
											<div class="gallery_container">
												<?php
													if (!function_exists('putRevSlider')){
														echo 'Please install the missing plugin - Revolution Slider.';
													} else {
														putRevSlider(substr($slider, 10));
													}
												?>
											</div>
										</div>
										<?php
									} else {
										?>
										<div class="featured-image-box">
											<?php
												if (get_option('skudo_show_author_avatar') == "on"){
													?>
											<div class="author-thumbnail">
												<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
											</div>
													<?php
												}
											?>
											<div class="gallery_container">
												<?php
													if (!function_exists('masterslider')){
														echo 'Please install the missing plugin - MasterSlider.';
													} else {
														echo do_shortcode( '[masterslider alias="'.substr($slider, 13).'"]' );
													}
												?>
											</div>
										</div>
										<?php
									}
								}
				    		break;
				    		
				    		case "quote":
				    			?>
				    			<a href="<?php esc_url(the_permalink()); ?>">
					    			<div class="post-quote">
			                        	<blockquote><i class="fa fa-quote-left"></i> <?php echo wp_kses_post(get_post_meta($postid, 'quote_text_value', true)); ?> <i class="fa fa-quote-right"></i></blockquote>
			                        	<span class="author-quote">-- <?php echo wp_kses_post(get_post_meta($postid, 'quote_author_value', true)); ?> --</span>
			                        </div>
		                        </a>
				    			<?php
				    		break;

							case "link":
								?>
								<h2 class="post-title post-link">
									<?php
										$linkurl = get_post_meta($postid, 'link_url_value', true) != '' ? get_post_meta($postid, 'link_url_value', true) : get_permalink();
										$linktext = get_post_meta($postid, 'link_text_value', true) != '' ? get_post_meta($postid, 'link_text_value', true) : $linkurl;
										$skudo_output = "#post-".$postid." .post-link{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
										skudo_set_custom_inline_css($skudo_output);
									?>
									<a href="<?php echo esc_url($linkurl); ?>" target="_blank"><?php echo esc_html($linktext); ?></a>
		                        </h2>
								<?php
							break;
				    		
				    		case "text": default:
								if ($posttype != "text"){
					    			if (wp_get_attachment_url( get_post_thumbnail_id($postid))){
									?>
										<div class="featured-image-box">
											<?php
												if (get_option('skudo_show_author_avatar') == "on"){
													?>
											<div class="author-thumbnail">
												<?php echo "<a href='".esc_url(get_author_posts_url( get_the_author_meta('ID') ))."'>".get_avatar( get_the_author_meta('ID'), 100 )."</a>"; ?>
											</div>
													<?php
												}
											?>
											<div class="featured-image">
												
												<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
												<img alt="<?php echo esc_attr(get_the_title()); ?>" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($postid))); ?>" title="<?php echo esc_attr(get_the_title()); ?>"/>
												<span class="post_overlay">
														<i class="fa fa-plus" aria-hidden="true"></i>
													</span>
												</a>
											</div>
											
										</div>
										<?php 
									}
				    			}
				    		break;
			    		}
				    ?>	
				    
				    <div class="the_title"><h2><a href="<?php esc_url(the_permalink()); ?>"><?php wp_kses_post(the_title()); ?></a></h2></div>
					<?php
					$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
					skudo_set_custom_inline_css($skudo_output);
					?>
					
					
					<?php
						if (get_option("skudo_display_metas") == "on"){
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
				    ?> 
				    
		    		
		    		<div class="blog_excerpt">
				    	<?php the_excerpt(); ?>
				    </div>
		    		
				    <div class="divider-posts"></div>
			    </article>
	    	<?php }
		    ?>
		    </div>
		    <?php
		    } else {
			    ?>
			    <div class="post-listing journal isotope <?php if ($skudo_animate_posts) echo ' skudo-animate-posts not-ready'; ?>" data-columns="3" data-gutter-space="0.25">
	    	
		    	<?php
			    	
			    	$skudo_import_fonts[] = get_option('skudo_blog_masonry_title_font');
					$titlefont = explode("|",get_option('skudo_blog_masonry_title_font'));
					$titlefont[0] = $titlefont[0]."', 'Arial', 'sans-serif";
					if (!isset($titlefont[1])) $titlefont[1] = "";
					$titlecolor = intval(get_option('skudo_blog_masonry_title_color'),10);
					$titlesize = get_option('skudo_blog_masonry_title_size');
			    
				    while (have_posts()){
					    the_post();
					    $postid = get_the_ID();
					    $post_classes = array("post", "journal-post", "isotope-item", get_post_meta(get_the_ID(), 'posttype_value', true));
					    if ($skudo_animate_posts) $post_classes[] = "not-in-view";
					    ?>
					    <article id="post-<?php esc_attr(the_ID()); ?>" <?php post_class($post_classes); ?>>
						
						<div class="blog-default-bg-masonry">
							
								<div class="post-content fadeInUpBig">
							    <?php
								    $posttype = get_post_meta($postid, 'posttype_value', true);
								    switch($posttype){
							    		case "image":
							    		
							    			if (wp_get_attachment_url( get_post_thumbnail_id($postid))){
											?>
												<div class="featured-image">
													<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas) && get_post_meta(get_the_ID(), 'skudo_display_featured_image_only_value', 'no') == 'yes'){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 
															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

 																					$first = true;
																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

 																					$first = true;
																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
// 																	    			echo '<p>|</p>';
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
											    		</div>
														<?php
													}
											    ?>
													
													<a href="<?php esc_url(the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
														<img alt="<?php echo esc_attr(get_the_title()); ?>" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($postid))); ?>" title="<?php echo esc_attr(get_the_title()); ?>"/>
														<span class="post_overlay">
															<i class="fa fa-plus" aria-hidden="true"></i>
														</span>
													</a>
												</div>
												<?php
													if (get_post_meta($postid, 'skudo_display_featured_image_only_value', 'no') != 'yes'){
														?>
														<div class="padding-box-masonry">
															<div class="the_title">
																<h2><?php wp_kses_post(the_title()); ?></a>
																	<div class="comments-masonry">
																		<i class="fa fa-comment-o" >
																			<span><?php echo wp_kses_post(get_comments_number()); ?></span>
																		</i>
																	</div>
																</h2>
															</div>
															<?php
																$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
																skudo_set_custom_inline_css($skudo_output);
															?>
															<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
															<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
															
														</div>
														<?php
													}
											}
							    			
							    		break;
		
							    		case "slider": 
											$randClass = rand(0,1000);
											?>
												<div class="light">
													<div class="flexslider <?php echo esc_attr($posttype); ?>">
														
														<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

 																					$first = true;
																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

																					$first = true;
																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
													?>
														
														<ul class="slides">
															<?php
																$sliderData = get_post_meta($postid, "sliderImages_value", true);
																$slide = explode("|*|",$sliderData);
															    foreach ($slide as $s){
															    	if ($s != ""){
															    		$params = explode("|!|",$s);
															    		$attachment = get_post( $params[0] );
															    		$title = isset($attachment->post_excerpt) ? $attachment->post_excerpt : "";
															    		echo "<li>";
															    		echo "<img src='".esc_url($params[1])."' alt='".esc_url($title)."' title='".esc_url($title)."'>";
															    		echo "</li>";	
															    	}
															    }
															?>
														</ul>
													</div>
												</div>
												
												<div class="padding-box-masonry">
													<div class="the_title">
														<h2>
															<a href="<?php esc_url(the_permalink()); ?>"><?php wp_kses_post(the_title()); ?></a>
															<div class="comments-masonry">
																<i class="fa fa-comment-o" >
																	<span><?php echo wp_kses_post(get_comments_number()); ?></span>
																</i>
															</div>
														</h2>
													</div>
													<?php
														$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
														skudo_set_custom_inline_css($skudo_output);
													?>
													<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
													<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
												</div>
											<?php
							    		break;
		
							    		case "audio":
											?>
											
											
											
											<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

 																					$first = true;
																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

																					$first = true;
																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
												?>
												
												
											<div class="audioContainer">
												<?php
													if (get_post_meta($postid, 'audioSource_value', true) == 'embed') echo get_post_meta($postid, 'audioCode_value', true); 
													else {
														$audio = explode("|!|",get_post_meta($postid, 'audioMediaLibrary_value', true));
														if (isset($audio[1])) {
															$ext = explode(".",$audio[1]);
															if (isset($ext)) $ext = $ext[count($ext)-1];
															?>
															<audio controls="controls"><source type="audio/<?php echo esc_attr($ext); ?>" src="<?php echo esc_url($audio[1]); ?>"></audio>
															<?php
														}
													}
												?>
											</div>
												
											<div class="padding-box-masonry">
													
												<div class="the_title">
													<h2>
														<a href="<?php the_permalink(); ?>"><?php wp_kses_post(the_title()); ?></a>
														<div class="comments-masonry">
															<i class="fa fa-comment-o" >
																<span><?php echo wp_kses_post(get_comments_number()); ?></span>
															</i>
														</div>
													</h2>
												</div>
												<?php
													$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
													skudo_set_custom_inline_css($skudo_output);
												?>
												<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
												
												<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
												
												
											</div>
											<?php
							    		break;
							    		
							    		case "video":
							    			?>
							    			
							    			
								    			<div class="post-video <?php echo get_post_meta($postid, "videoSource_value", true); ?>">
													
													
													
													<div class="vendor">
														
														<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"> <?php  esc_html(the_author_meta('nickname')); ?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

																					$first = true;
																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

 																					$first = true;
																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
												?>
												
												
													<?php
														$videosType = get_post_meta($postid, "videoSource_value", true);
														if ($videosType != "embed"){
															$videos = get_post_meta($postid, "videoCode_value", true);
															$videos = preg_replace( '/\s+/', '', $videos );
															$vid = explode(",",$videos);
														}
														switch (get_post_meta($postid, "videoSource_value", true)){
															case "media":
																$video = explode("|!|",get_post_meta($postid, 'videoMediaLibrary_value', true));
																if (isset($video[1])) {
																	$ext = explode(".",$video[1]);
																	if (isset($ext)) $ext = $ext[count($ext)-1];
																	?>
																	<video controls="controls" class="video-controls"><source type="video/<?php echo esc_attr($ext); ?>" src="<?php echo esc_url($video[1]); ?>"></video>
																	<?php
																}
															break;
															case "youtube":
																if (isset($vid[0])) echo "<iframe src='//www.youtube.com/embed/".esc_attr($vid[0])."' frameborder='0' allowfullscreen></iframe>";
																break;
															case "vimeo":
																if (isset($vid[0])) echo '<iframe src="https://player.vimeo.com/video/'.esc_attr($vid[0]).'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
																break;
														}						
													?>
													</div>
								    			</div>
											
											
											<div class="padding-box-masonry">
												<div class="the_title">
													<h2>
														<a href="<?php the_permalink(); ?>"><?php wp_kses_post(the_title()); ?></a>
														<div class="comments-masonry">
															<i class="fa fa-comment-o" >
																<span><?php echo wp_kses_post(get_comments_number()); ?></span>
															</i>
														</div>
													</h2>
												</div>
												<?php
													$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
													skudo_set_custom_inline_css($skudo_output);
												?>
												<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
												<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
											</div>
											<?php
							    		break;
							    		
							    		case "gallery":
											$slider = get_post_meta($postid,'gallery_slider_value',true);
											if ($slider != '-1'){
												if (substr($slider, 0, 10) === "revSlider_"){
													?>
													<div class="gallery_container">
														
														<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

 																					$first = true;
																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

																					$first = true;

																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
												?>
														
														<?php
															if (!function_exists('putRevSlider')){
																echo 'Please install the missing plugin - Revolution Slider.';
															} else {
																putRevSlider(substr($slider, 10));
															}
														?>
													</div>
													<?php
												} else {
													?>
													<div class="gallery_container">
														
														<?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

																					$first = true;

																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

																					$first = true;

																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
												?>
												
												
														<?php
															if (!function_exists('masterslider')){
																echo 'Please install the missing plugin - MasterSlider.';
															} else {
																echo do_shortcode( '[masterslider alias="'.substr($slider, 13).'"]' );
															}
														?>
													</div>
													<?php
												}
											}
											?>
											<div class="padding-box-masonry">
												<div class="the_title">
													<h2>
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														<div class="comments-masonry">
															<i class="fa fa-comment-o" >
																<span><?php echo wp_kses_post(get_comments_number()); ?></span>
															</i>
														</div>
													</h2>
												</div>
												<?php
													$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
													skudo_set_custom_inline_css($skudo_output);
												?>
												<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
												<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
											</div>
											<?php
										break;
							    		
							    		case "quote":
							    			?>
							    			<a href="<?php the_permalink(); ?>">
								    			<div class="post-quote">
						                        	<blockquote><i class="fa fa-quote-left"></i> <?php echo wp_kses_post(get_post_meta($postid, 'quote_text_value', true)); ?><i class="fa fa-quote-right"></i></blockquote><span class="author-quote"><?php echo wp_kses_post(get_post_meta($postid, 'quote_author_value', true)); ?></span>
						                        </div>
					                        </a>

							    			<?php
							    		break;
		
										case "link":
											?>
											<div class="padding-box-masonry">
												<h2 class="post-title post-link" >
													<?php
														$linkurl = get_post_meta($postid, 'link_url_value', true) != '' ? get_post_meta($postid, 'link_url_value', true) : get_permalink();
														$linktext = get_post_meta($postid, 'link_text_value', true) != '' ? get_post_meta($postid, 'link_text_value', true) : $linkurl;
														$skudo_output = "#post-".$postid." .post-link{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
														skudo_set_custom_inline_css($skudo_output);
													?>
													
													<div class="comments-masonry">
														<i class="fa fa-comment-o" >
															<span><?php echo wp_kses_post(get_comments_number()); ?></span>
														</i>
													</div>
													
													
													<a href="<?php echo esc_url($linkurl); ?>" target="_blank"><?php echo esc_html($linktext); ?></a>
						                        </h2>
						                        
											</div>
											<?php
										break;
							    		
							    		case "text": default:
							    		
							    			if ($posttype != "text"){
												if (wp_get_attachment_url( get_post_thumbnail_id($postid))){
												?>
													<div class="featured-image">
														<?php
														if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
															?>
															<div class="metas">
																<div class="align-metas-center">
																<?php
													    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
													    			if (!empty($metas)){
														    			$firstMeta = true;
														    			foreach ($metas as $meta){
															    			switch ($meta){
																    			case "date": 
																    				?>
																    				<p class="blog-date"><?php echo get_the_date(); ?></p>
																    				<?php
																    			break;
																    			case "author":
	
																    				?>
																    				<p data-rel="metas-author">
																	    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
																    				<?php
																    			break;
																    			case "tags":
																    				$posttags = get_the_tags();
																					if ($posttags) {
	
	 																					$first = true;
																						echo '<p data-rel="metas-tags">';
	
																						foreach($posttags as $tag) {
																							if ($tag->name != "uncategorized"){
																								if ($first){
																									echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																									$first = false;
																								} else {
																									echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																								}
																							}
																					  	}
																					  	echo '</p>';
																					}
																    			break;
																    			case "categories":
																    				$postcats = get_the_category();
																					if ($postcats) {
	
	 																					$first = true;
																						echo '<p data-rel="metas-categories">';
	
																						foreach($postcats as $cat) {
																							if ($cat->name != "uncategorized"){
																								if ($first){
																									echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																									$first = false;
																								} else {
																									echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								}	
																							}
																					  	}
																					  	echo '</p>';
																					}
																    			break;
																    			
																    			case "customtext":
																    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
	// 																	    			echo '<p>|</p>';
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
												    		</div>
															<?php
														}
												    ?>
														
														<a href="<?php esc_url(the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
															<img alt="<?php echo esc_attr(get_the_title()); ?>" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($postid))); ?>" title="<?php echo esc_attr(get_the_title()); ?>"/>
															<span class="post_overlay">
																<i class="fa fa-plus" aria-hidden="true"></i>
															</span>
														</a>
													</div>
													<?php
												}
												
												if (get_post_meta($postid, 'skudo_display_featured_image_only_value', 'no') != 'yes'){
													?>
													<div class="padding-box-masonry">
														<div class="the_title">
															<h2><a href="<?php esc_attr(the_permalink()); ?>"><?php wp_kses_post(the_title()); ?></a>
																<div class="comments-masonry">
																	<i class="fa fa-comment-o" >
																		<span><?php echo wp_kses_post(get_comments_number()); ?></span>
																	</i>
																</div>
															</h2>
														</div>
														<?php
															$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
															skudo_set_custom_inline_css($skudo_output);
														?>
														<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
														<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
														
													</div>
													<?php
												}
												break;
											}
							    		
							    			?>
							    			
							    			 <?php
													if (get_post_meta( $postid , 'upper_single_display_metas_value' , true ) == "yes"){
														?>
														<div class="metas">
															<div class="align-metas-center">
															<?php
												    			$metas = explode(",", get_post_meta( $postid , 'upper_single_metas_value' , true ));
												    			if (!empty($metas)){
													    			$firstMeta = true;
													    			foreach ($metas as $meta){
														    			switch ($meta){
															    			case "date": 

															    				?>
															    				<p class="blog-date"><?php echo get_the_date(); ?></p>
															    				<?php
															    			break;
															    			case "author":

															    				?>
															    				<p data-rel="metas-author">
																    				<a class="the_author" href="<?php echo get_author_posts_url( get_the_author_meta('ID') );?>"><?php  esc_html(the_author_meta('nickname'));?></a></p>
															    				<?php
															    			break;
															    			case "tags":
															    				$posttags = get_the_tags();
																				if ($posttags) {

																					$first = true;

																					echo '<p data-rel="metas-tags">';

																					foreach($posttags as $tag) {
																						if ($tag->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($tag) )."'>".esc_html($tag->name)."</a>";
																							}
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "categories":
															    				$postcats = get_the_category();
																				if ($postcats) {

																					$first = true;

																					echo '<p data-rel="metas-categories">';

																					foreach($postcats as $cat) {
																						if ($cat->name != "uncategorized"){
																							if ($first){
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																								$first = false;
																							} else {
																								echo "<a href='".esc_url( get_term_link($cat) )."'>".esc_html($cat->name)."</a>"; 
																							}	
																						}
																				  	}
																				  	echo '</p>';
																				}
															    			break;
															    			case "customtext":
															    				if (!$firstMeta && strlen(wp_kses_post( get_post_meta( $postid , 'upper_single_meta_custom_text_value' , true ) )) > 0 ){
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
											    		</div>
														<?php
													}
												?>
												
												
												
							    			<div class="padding-box-masonry">
							    				<div class="the_title no-feature">
								    				<h2>
									    				<div class="comments-masonry">
															<i class="fa fa-comment-o" >
																<span><?php echo wp_kses_post(get_comments_number()); ?></span>
															</i>
														</div>
									    				<a href="<?php the_permalink(); ?>"><?php wp_kses_post(the_title()); ?></a>
													</h2>
												</div>
												<div class="post-summary"><?php wp_kses_post(the_excerpt()); ?></div>
												<a class="aio-icon-read" href="<?php echo esc_url(get_the_permalink($postid)); ?>"><?php esc_html_e(get_option("skudo_read_more"),"skudo"); ?> &rarr;</a>
							    			
							    			<?php
											$skudo_output = "#post-".$postid." .the_title h2{color: #$titlecolor; font-size: $titlesize; font-family: '{$titlefont[0]}'; font-weight: {$titlefont[1]};}";
											skudo_set_custom_inline_css($skudo_output);
							    		break;
						    		}
								    ?>
							</div>
						</div>
				    </article>
					    <?php
				    }
				    
				    ?>
		    	</div>
		    	
			    <?php    
				    $skudo_inline_script .= '
						jQuery(document).ready(function(){
							"use strict";
							var forceGutter = 50;
							(function(e){"use strict";e.Isotope.prototype._getMasonryGutterColumns=function(){var e=this.options.masonry&&this.options.masonry.gutterWidth||0;var t=this.element.width();this.masonry.columnWidth=this.options.masonry&&this.options.masonry.columnWidth||this.$filteredAtoms.outerWidth(true)||t;this.masonry.columnWidth+=e;this.masonry.cols=Math.floor((t+e)/this.masonry.columnWidth);this.masonry.cols=Math.max(this.masonry.cols,1)};e.Isotope.prototype._masonryReset=function(){this.masonry={};this._getMasonryGutterColumns();var e=this.masonry.cols;this.masonry.colYs=[];while(e--){this.masonry.colYs.push(0)}};e.Isotope.prototype._masonryResizeChanged=function(){var e=this.masonry.cols;this._getMasonryGutterColumns();return this.masonry.cols!==e};e(document).ready(function(){"use strict";var t=e(".journal");var n=0;var r=0;var i=function(){var e=parseInt(t.data("columns"));var i=t.data("gutterSpace");var s=t.width();var o=0;if(isNaN(i)){i=.02}else if(i>.05||i<0){i=.02}if(s<568){e=1}else if(s<768){e-=2}else if(s<991){e-=1;if(e<2){e=2}}if(e<1){e=1}r=forceGutter!=false ? forceGutter : Math.floor(s*i);var u=r*(e-1);var a=s-u;n=Math.floor(a/e);o=r;if(1==e){o=20}t.children(".journal-post").css({width:n+"px",marginBottom:o+"px"})};i();window.iso = t.isotope({itemSelector:".journal-post",resizable:false,masonry:{columnWidth:n,gutterWidth:r}});t.imagesLoaded(function(){i();t.isotope({itemSelector:".journal-post",resizable:true,masonry:{columnWidth:n,gutterWidth:r}})});e(window).smartresize(function(){i();t.isotope({masonry:{columnWidth:n,gutterWidth:r}})});var s=e(".wc-shortcodes-filtering .wc-shortcodes-term");s.on("click",function(i){i.preventDefault();s.removeClass("wc-shortcodes-term-active");e(this).addClass("wc-shortcodes-term-active");var o=e(this).attr("data-filter");t.isotope({filter:o,masonry:{columnWidth:n,gutterWidth:r}});return false})})})(jQuery);
							jQuery(".flexslider").flexslider({
								animation: "fade",
								slideshow: true,
								slideshowSpeed: 3500,
								animationDuration: 1000,
								directionNav: true,
								controlNav: true,
								smootheHeight:false,
								start: function(slider) {
								  slider.removeClass("loading").css("overflow","");
								}
							});
						});
						jQuery(window).load(function(){ jQuery(window).resize(); jQuery(".gallery_container").css("opacity",1); jQuery(".post-listing.skudo-animate-posts").removeClass("not-ready"); });
					';
		    	}
	    	?> 
					
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
			
			if ($skudo_animate_posts){
			    $skudo_inline_script .= '
			    	jQuery(".not-in-view").waypoint({
						handler: function(event, direction){
							jQuery(this.element).removeClass("not-in-view");
						},
						offset: "80%"
					});
			    ';
		    }
			
			if ($skudo_inline_script != "") wp_add_inline_script( 'skudo-global', $skudo_inline_script, 'after' );
			
		} else echo "<br/><br/><h2>There are no posts in this archive.</h2><br/><br/>";
	}
		
	?>

	<div class="clear"></div>
			
<?php get_footer(); ?>