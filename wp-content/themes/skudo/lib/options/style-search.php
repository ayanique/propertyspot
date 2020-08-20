<?php
	
	$skudo_fonts_array = skudo_fonts_array_builder();
	
	$skudo_style_general_options= array( array(
		"name" => "Search",
		"type" => "title",
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"search", "name"=>"Search"))
	),
	
	/* ------------------------------------------------------------------------*
	 * Search
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id"=>"search"
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Search Input</h3>'
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_search_input_background_color",
		"type" => "color",
		"std" => "292929"
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_search_input_background_opacity",
		"type" => "opacity_slider",
		"std" => "100"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_search_input_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"std" => "Helvetica Neue"
	),
	
	array(
		"name" => "Font Size",
		"id" => "skudo_search_input_font_size",
		"type" => "slider",
		"std" => "22px"
	),
	
	array(
		"name" => "Font Color",
		"id" => "skudo_search_input_font_color",
		"type" => "color",
		"std" => "e6e6e6"
	),
	
	array(
		"type" => "documentation",
		"text" => '<h3>Search Results</h3>'
	),
	
	array(
		"name" => "Background Color",
		"id" => "skudo_search_result_background_color",
		"type" => "color",
		"std" => "ffffff"
	),
	
	array(
		"name" => "Selected Result Background Color",
		"id" => "skudo_search_selected_result_background_color",
		"type" => "color",
		"std" => "f2f2f2"
	),
	
	array(
		"name" => "Background Opacity",
		"id" => "skudo_search_result_background_opacity",
		"type" => "opacity_slider",
		"std" => "98"
	),
	
	array(
		"name" => "Borders",
		"id" => "skudo_search_result_borders",
		"type" => "color",
		"std" => "dedede"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_search_result_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"std" => "Helvetica Neue"
	),
	
	array(
		"name" => "Font Size",
		"id" => "skudo_search_result_font_size",
		"type" => "slider",
		"std" => "14px"
	),
	
	array(
		"name" => "Font Color",
		"id" => "skudo_search_result_font_color",
		"type" => "color",
		"std" => "696969"
	),
	
	array(
		"name" => "Selected Result Font Color",
		"id" => "skudo_search_selected_result_font_color",
		"type" => "color",
		"std" => "3d3d3d"
	),
	
	array(
		"type" => "documentation",
		"text" => '<h5>Search Results Details</h5>'
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_search_result_details_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"std" => "Helvetica Neue"
	),
	
	array(
		"name" => "Font Size",
		"id" => "skudo_search_result_details_font_size",
		"type" => "slider",
		"std" => "12px"
	),
	
	array(
		"name" => "Font Color",
		"id" => "skudo_search_result_details_font_color",
		"type" => "color",
		"std" => "c2c2c2"
	),
	
	array(
		"name" => "Select Result Font Color",
		"id" => "skudo_search_selected_result_details_font_color",
		"type" => "color",
		"std" => "c2c2c2"
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