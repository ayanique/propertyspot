<?php
/*
Template Name: Under Construction Template
*/
get_header(); 
$theid = (isset($skudo_uc_id)) ? $skudo_uc_id : get_the_ID();
$post = get_post($theid);
if (class_exists('Ultimate_VC_Addons')) {
	if(stripos($post->post_content, 'font_call:')){
		preg_match_all('/font_call:(.*?)"/',$post->post_content, $display);
		$skudo_import_fonts = array_unique( $display[1] );
		if (function_exists('enquque_ultimate_google_fonts_optimzed')) enquque_ultimate_google_fonts_optimzed($skudo_import_fonts);
		
		$standardfonts = array('Arial','Arial Black','Helvetica','Helvetica Neue','Courier New','Georgia','Impact','Lucida Sans Unicode','Times New Roman', 'Trebuchet MS','Verdana','');
		$importfonts = "";
	
		foreach ($skudo_import_fonts as $font){
			if (!in_array($font,$standardfonts)){
				$font = str_replace(" ","+",str_replace("|",":",$font));
				if ($importfonts=="") $importfonts .= $font;
				else {
					if (strpos($importfonts, $font) === false)
						$importfonts .= "|{$font}";
				}
			}
		}
	
		if ($importfonts!="") {
			$skudo_import_fonts = $importfonts;
			skudo_set_import_fonts($skudo_import_fonts);
			skudo_google_fonts_scripts();
		}
	}
}
?>

	<div class="fullwindow_rev">
		<?php
		$daslider = get_post_meta($theid, 'underconstruction_rev_value', true);
		if ($daslider){
			if (substr($daslider, 0, 10) === "revSlider_"){
				if (!function_exists('putRevSlider')){
					echo 'Please install the missing plugin - Revolution Slider.';
				} else {
					putRevSlider(substr($daslider, 10));
				}
			}
			if (substr($daslider, 0, 13) === "masterSlider_"){
				if (!function_exists('masterslider')){
					echo 'Please install the missing plugin - MasterSlider.';
				} else {
					echo do_shortcode( '[masterslider alias="'.substr($daslider, 13).'"]' );
				}
			}
			if (substr($daslider, 0, 12) === "layerSlider_"){
				if (!function_exists('layerslider')){
					echo 'Please install the missing plugin - LayerSlider.';
				} else {
					echo do_shortcode( '[layerslider id="'.substr($daslider, 12).'"]' );
				}
			}
		} else {
			echo "You need to create a Revolution, Master or Layer Slider instance and then choose it in this Page Options.";
		}
		?>
	</div>
	<div class="underconstructo fullwindow_content container">
		<div class="tb-row">
			<div class="tb-cell">
				<?php 
					echo do_shortcode($post->post_content);
					/* custom element css */
					$shortcodes_custom_css = get_post_meta( $theid, '_wpb_shortcodes_custom_css', true );
					if ( ! empty( $shortcodes_custom_css ) ) {
						skudo_set_custom_inline_css($shortcodes_custom_css);
					}
				?>
			</div>
		</div>
	</div>
	<?php skudo_get_custom_inline_css(); wp_footer(); ?>
</div> <!-- END OF MAIN -->