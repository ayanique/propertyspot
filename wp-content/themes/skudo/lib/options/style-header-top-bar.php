<?php
	
	$patterns=array();
	$patterns[0]='none';
	for($i=1; $i<=22; $i++){
		$patterns[]='pattern'.$i.'.jpg';
	}

	
	$skudo_style_general_options= array( array(
		"name" => "Header and Top Bar",
		"type" => "title",
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"header-light", "name"=>"Header Light Style"), array("id"=>"header-dark", "name"=>"Header Dark Style"), array("id"=>"topbar", "name"=>"Top Bar"), array("id"=>"headerbutton", "name" => "Header Button"))
	),
	
	/* ------------------------------------------------------------------------*
	 * HEADER LIGHT
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id" => "header-light"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Header</h3>"
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_headerbg_type_light",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern'), array('id'=>'custom_pattern','name'=>'Custom Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_headerbg_image_light",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_headerbg_color_light",
		"type" => "color",
		"std" => 'ffffff'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_headerbg_opacity_light",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_headerbg_pattern_light",
		"type" => "pattern",
		"options" => $patterns,
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_headerbg_custom_pattern_light",
		"type" => "upload_from_media"
	),
	
	array(
		"name" => "Icons Color",
		"id" => "skudo_header_icons_color_light",
		"type" => "color",
		"desc" => "This color applies to the social icons, search icons and WooCommerce icon.",
		"std" => "979a9e"
	),
	
	array(
		"name" => "Icons Hover Color",
		"id" => "skudo_header_icons_hover_color_light",
		"type" => "color",
		"std" => "494c4f"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Header After Scroll & Shrinked</h3>"
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_headerbg_after_scroll_type_light",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_headerbg_after_scroll_image_light",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_headerbg_after_scroll_color_light",
		"type" => "color",
		"std" => 'ffffff'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_headerbg_after_scroll_opacity_light",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_headerbg_after_scroll_pattern_light",
		"type" => "pattern",
		"options" => $patterns,
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_headerbg_after_scroll_custom_pattern_light",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Icons Color",
		"id" => "skudo_header_after_scroll_icons_color_light",
		"type" => "color",
		"desc" => "This applies to the social icons, search icons and WooCommerce icon.",
		"std" => "979a9e"
	),
	
	array(
		"name" => "Icons Hover Color",
		"id" => "skudo_header_after_scroll_icons_hover_color_light",
		"type" => "color",
		"std" => "494c4f"
	),
	
	array(
		"type" => "close"
	),
	
	/* ------------------------------------------------------------------------*
	 * HEADER DARK
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id" => "header-dark"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Header</h3>"
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_headerbg_type_dark",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern'), array('id'=>'custom_pattern','name'=>'Custom Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_headerbg_image_dark",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_headerbg_color_dark",
		"type" => "color",
		"std" => '101010'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_headerbg_opacity_dark",
		"type" => "opacity_slider",
		"std" => "0"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_headerbg_pattern_dark",
		"type" => "pattern",
		"options" => $patterns,
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_headerbg_custom_pattern_dark",
		"type" => "upload_from_media"
	),
	
	array(
		"name" => "Icons Color",
		"id" => "skudo_header_icons_color_dark",
		"type" => "color",
		"desc" => "This color applies to the social icons, search icons and WooCommerce icon.",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Icons Hover Color",
		"id" => "skudo_header_icons_hover_color_dark",
		"type" => "color",
		"std" => "333333"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Header After Scroll & Shrinked</h3>"
	),
	
	array(
		"name" => "Background Type",
		"id" => "skudo_headerbg_after_scroll_type_dark",
		"type" => "select",
		"options" => array(array('id'=>'color','name'=>'Color'), array('id'=>'image','name'=>'Image'), array('id'=>'pattern','name'=>'Pattern')),
		"std" => 'color'
	),
	
	array(
		"name" => "Image",
		"id" => "skudo_headerbg_after_scroll_image_dark",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_headerbg_after_scroll_color_dark",
		"type" => "color",
		"std" => '101010'
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_headerbg_after_scroll_opacity_dark",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Pattern",
		"id" => "skudo_headerbg_after_scroll_pattern_dark",
		"type" => "pattern",
		"options" => $patterns,
	),
	
	array(
		"name" => "Custom Pattern",
		"id" => "skudo_headerbg_after_scroll_custom_pattern_dark",
		"type" => "upload_from_media",
	),
	
	array(
		"name" => "Icons Color",
		"id" => "skudo_header_after_scroll_icons_color_dark",
		"type" => "color",
		"desc" => "This applies to the social icons, search icons and WooCommerce icon.",
		"std" => "ABABAB"
	),
	
	array(
		"name" => "Icons Hover Color",
		"id" => "skudo_header_after_scroll_icons_hover_color_dark",
		"type" => "color",
		"std" => "333333"
	),
	
	array(
		"type" => "close"
	),
	
	/* ------------------------------------------------------------------------*
	 * TOPBAR
	 * ------------------------------------------------------------------------*/
	array(
		"type" => "subtitle",
		"id" => "topbar"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Top Bar</h3>"
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_topbar_bg_color",
		"type" => "color",
		"std" => "4d5054"
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_topbar_bg_opacity",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Text Color",
		"id" => "skudo_topbar_text_color",
		"type" => "color",
		"std" => "999ba0"
	),
	
	array(
		"name" => "Links Color",
		"id" => "skudo_topbar_links_color",
		"type" => "color",
		"std" => "999ba0"
	),
	
	array(
		"name" => "Links Hover Color",
		"id" => "skudo_topbar_links_hover_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Social Icons Color",
		"id" => "skudo_topbar_social_color",
		"type" => "color",
		"std" => "999ba0"
	),
	
	array(
		"name" => "Social Icons Hover Color",
		"id" => "skudo_topbar_social_hover_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Borders Color",
		"id" => "skudo_topbar_borders_color",
		"type" => "color",
		"std" => "65686b"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Top Bar Submenu Items</h3>"
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_topbar_submenu_bg_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Background Hover Color",
		"id" => "skudo_topbar_submenu_bg_hover_color",
		"type" => "color",
		"std" => "fafafa"
	),
	
	array(
		"name" => "Text Color",
		"id" => "skudo_topbar_submenu_text_color",
		"type" => "color",
		"std" => "abacaf"
	),
	
	array(
		"name" => "Text Hover Color",
		"id" => "skudo_topbar_submenu_text_hover_color",
		"type" => "color",
		"std" => "4c9cff"
	),
	
	array(
		"type" => "close"
	),
	
	
	//header button
	array(
		"type" => "subtitle",
		"id" => "headerbutton"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Header Button</h3>"
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_header_button_bg_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Background Hover Color",
		"id" => "skudo_header_button_bg_hover_color",
		"type" => "color",
		"std" => "fafafa"
	),
	
	array(
		"name" => "Text Color",
		"id" => "skudo_header_button_text_color",
		"type" => "color",
		"std" => "abacaf"
	),
	
	array(
		"name" => "Text Hover Color",
		"id" => "skudo_header_button_text_hover_color",
		"type" => "color",
		"std" => "4c9cff"
	),
	
	array(
		"name" => "Border Radius",
		"id" => "skudo_header_button_border_radius",
		"type" => "text",
		"std" => "0px"
	),
	
	array(
		"type" => "close"
	),
	//endof header button
	
	/*close array*/
	
	array(
		"type" => "close"
	));
	
	skudo_add_style_options($skudo_style_general_options);
	
?>