<?php
	
	/**
	 * Load the patterns into arrays.
	 */
	$patterns=array();
	$patterns[0]='none';
	for($i=1; $i<=22; $i++){
		$patterns[]='pattern'.$i.'.jpg';
	}
	
	$skudo_fonts_array = skudo_fonts_array_builder();
	
	$skudo_style_general_options= array( array(
		"name" => "Footer",
		"type" => "title",
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"style-footer", "name"=>"Footer"))
	),
	
	/* ------------------------------------------------------------------------*
	 * FOOTER
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id" => 'style-footer'
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Primary Footer</h3>'
	),
	
	array(
		"name" => "Show Primary Footer?",
		"id" => "skudo_show_primary_footer",
		"type" => "checkbox",
		"std" => 'off'
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_footerbg_type",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern'), array('id'=>'custom_pattern','name'=>'Custom Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_footerbg_image",
		"type" => "upload_from_media",
		"desc" => 'Here you can choose the image for your footer.'
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_footerbg_color",
		"type" => "color",
		"std" => '1a1c21'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_footerbg_color_opacity",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_footerbg_pattern",
		"type" => "pattern",
		"options" => $patterns,
		"desc" => 'Here you can choose the pattern for your footer.'
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_footerbg_custom_pattern",
		"type" => "upload_from_media",
		"desc" => 'Here you can choose the custom pattern for your footer. It will replace the pattern you choose above.'
	),
	
	array(
		"name" => "Borders Color",
		"id" => "skudo_footerbg_borderscolor",
		"type" => "color",
		"std" => '0f1114'
	),
	
	array(
		"name" => "Padding Top",
		"id" => "skudo_primary_footer_padding_top",
		"type" => "text",
		"std" => "80px"
	),
	
	array(
		"name" => "Padding Bottom",
		"id" => "skudo_primary_footer_padding_bottom",
		"type" => "text",
		"std" => "80px"
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Primary Footer - Text Colors</h3>'
	),
	
	array(
		"name" => "Links Color",
		"id" => "skudo_footerbg_linkscolor",
		"type" => "color",
		"std" => '4f5258'
	),
	
	array(
		"name" => "Paragraphs Color",
		"id" => "skudo_footerbg_paragraphscolor",
		"type" => "color",
		"std" => '4f5258'
	),
	
	array(
		"name" => "Headings Color",
		"id" => "skudo_footerbg_headingscolor",
		"type" => "color",
		"std" => '9b9fa9'
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Secondary Footer</h3>'
	),
	
	array(
		"name" => "Show Secondary Footer?",
		"id" => "skudo_show_sec_footer",
		"type" => "checkbox",
		"std" => 'on'
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_sec_footerbg_type",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern'), array('id'=>'custom_pattern','name'=>'Custom Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_sec_footerbg_image",
		"type" => "upload_from_media",
		"desc" => 'Here you can choose the image for your footer.'
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_sec_footerbg_color",
		"type" => "color",
		"std" => '151619'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_sec_footerbg_color_opacity",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_sec_footerbg_pattern",
		"type" => "pattern",
		"options" => $patterns,
		"desc" => 'Here you can choose the pattern for your footer.'
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_sec_footerbg_custom_pattern",
		"type" => "upload_from_media",
		"desc" => 'Here you can choose the custom pattern for your footer. It will replace the pattern you choose above.'
	),
	
	array(
		"name" => "Padding Top",
		"id" => "skudo_secondary_footer_padding_top",
		"type" => "text",
		"std" => "20px"
	),
	
	array(
		"name" => "Padding Bottom",
		"id" => "skudo_secondary_footer_padding_bottom",
		"type" => "text",
		"std" => "20px"
	),
	
	array(
		"name" => "Social Icons Size",
		"id" => "skudo_sec_footer_social_icons_size",
		"type" => "text",
		"std" => "14px"
	),
	
	array(
		"name" => "Social Icons Color",
		"id" => "skudo_sec_footer_social_icons_color",
		"type" => "color",
		"std" => "4b4e54"
	),
	
	array(
		"name" => "Social Icons Hover Color",
		"id" => "skudo_sec_footer_social_icons_hover_color",
		"type" => "color",
		"std" => "d7dbe0"
	),
	
	array(
		"type" => "close"
	),

	
	/*close array*/
	
	array(
		"type" => "close"
	));
	
	skudo_add_style_options($skudo_style_general_options);
	
?>