<?php
	
	$skudo_fonts_array = skudo_fonts_array_builder();
	
	$skudo_style_general_options= array( array(
		"name" => "Logotype",
		"type" => "title",
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"logotype", "name"=>"Logotype"))
	),
	
	/* ------------------------------------------------------------------------*
	 * LOGO OPTIONS
	 * ------------------------------------------------------------------------*/
	
	
	array(
		"type" => "subtitle",
		"id" => 'logotype'
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Logo on Primary Header</h3>"
	),
	
	array(
		"name" => "Margin Top",
		"id" => "skudo_logo_margin_top",
		"type" => "slider",
		"std" => "40px",
		"desc" => "Choose a top margin for your logo."
	),
	
	array(
		"name" => "Margin Left",
		"id" => "skudo_logo_margin_left",
		"type" => "slider",
		"std" => "0px",
		"desc" => "Choose a left margin for your logo."
	),
	
	array(
		"name" => "Height",
		"id" => "skudo_logo_height",
		"type" => "text",
		"desc" => "Insert the height of your logo (pixels).",
		"std"=>"25px"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Logo on Header After Scroll & Shrinked</h3>"
	),
	
	array(
		"name" => "Margin Top After Scroll",
		"id" => "skudo_logo_after_scroll_margin_top",
		"type" => "slider",
		"std" => "14px",
		"desc" => "Choose a top margin for your logo."
	),
	
	array(
		"name" => "Margin Left After Scroll",
		"id" => "skudo_logo_after_scroll_margin_left",
		"type" => "slider",
		"std" => "0px",
		"desc" => "Choose a left margin for your logo."
	),
	
	array(
		"name" => "Height",
		"id" => "skudo_logo_reduced_height",
		"type" => "text",
		"desc" => "Insert the height of the header (pixels) after scroll.",
		"std" => "25px"
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