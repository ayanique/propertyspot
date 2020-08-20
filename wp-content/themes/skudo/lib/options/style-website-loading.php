<?php
	
	$skudo_fonts_array = skudo_fonts_array_builder();
	
	$skudo_style_general_options= array( array(
		"name" => "Website Loading",
		"type" => "title"
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"website_loading", "name"=>"Website Loading"))
	),
	
	/* ------------------------------------------------------------------------*
	 * WEBSITE LOADING
	 * ------------------------------------------------------------------------*/
	array(
		"type" => "subtitle",
		"id" => 'website_loading'
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Website Loading</h3>'
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_loader_background",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Loader Color",
		"id" => "skudo_loader_color",
		"type" => "color",
		"std" => "e6e6e6"
	),
	
	array(
		"name" => "Percentage Font",
		"id" => "skudo_loader_percentage_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => "Helvetica Neue"
	),
	
	array(
		"name" => "Percentage Font Size",
		"id" => "skudo_loader_percentage_font_size",
		"type" => "slider",
		"std" => "16px",
	),
	
	array(
		"name" => "Percentage Font Color",
		"id" => "skudo_loader_percentage_font_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"type" => "close"
	),
	
	array(
		"type" => "close"
	));
	
	skudo_add_style_options($skudo_style_general_options);
	
?>