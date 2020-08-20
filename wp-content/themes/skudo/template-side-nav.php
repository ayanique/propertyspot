<?php
/**
 * Template Name: Page with Side Navigation
 * @package WordPress
 * @subpackage Skudo
**/

get_header(); skudo_print_menu();
wp_enqueue_script('upper-template-side-nav',get_template_directory_uri().'/js/utils/upper-template-page-side-nav.js', array('jquery'), '1', true);
$skudo_thisPostID = get_the_ID(); $skudo_color_code = get_option("skudo_style_color");
?>
	
	<div class="master_container master_container_bgwhite" >
		<section class="page_content" id="section-<?php echo esc_attr(get_the_ID()); ?>">
			<div class="container">
				<?php
					if ((function_exists('vc_is_inline') && vc_is_inline()) || is_preview()){
						wp_reset_postdata();
						the_content();
					} else {
						$content_post = get_post($skudo_thisPostID);
						$content = $content_post->post_content;
						$upper_theme_main_color = "#".get_option('skudo_style_color');
						$content = str_replace( '__USE_THEME_MAIN_COLOR__', $upper_theme_main_color, $content );
						
						// it's necessary to add these parameters to the sections otherwise all hell breaks loose x)
						$content = str_replace( '[vc_section ', '[vc_section full_width="stretch_row" full_height="yes" content_placement="middle" ', $content );
						
						skudo_content_shortcoder($content);
						$content = apply_filters('the_content', $content);
						if (function_exists('wpb_js_remove_wpautop') == true)
							echo wpb_js_remove_wpautop($content);
						else echo wp_kses_post( shortcode_unautop( $content )); 
						$shortcodes_custom_css = get_post_meta( $skudo_thisPostID, '_wpb_shortcodes_custom_css', true );
						if ( isset($shortcodes_custom_css) && ! empty( $shortcodes_custom_css ) ) {
							skudo_set_custom_inline_css($shortcodes_custom_css);
						}
					}
				?>
			</div>
		</section>
	</div>
	
<?php get_footer(); ?>