<?php
	
	$skudo_general_options= array( array(
		"name" => "Sliders Settings",
		"type" => "title",
		"img" => SKUDO_IMAGES_URL."icon_general.png"
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"flex", "name"=>"Flex Slider - POSTS"), array("id"=>"flexprojs", "name"=>"Flex Slider - PROJECTS"), array("id"=>"rev","name" => "Revolution Slider"))
	),
	
		
	/* ------------------------------------------------------------------------*
	 * Flex Slider
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id"=>'flex'
	),
	
	/* NORMAL */
	
	array(
		"type" => "documentation",
		"text" => "<h3>Blog Normal Style</h3>"
	),

	array(
		"name" => "Show Direction Controls",
		"id" => "skudo_posts_flex_navigation",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),

	array(
		"name" => "Show Controls",
		"id" => "skudo_posts_flex_controls",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Transition Effect",
		"id" => "skudo_posts_flex_transition",
		"type" => "select",
		"options" => array(array("name"=>"Slide", "id"=>"slide"), array("name"=>"Fade", "id"=>"fade")),
		"std" => "random",
		"description" => ""
	),
	
	array(
		"name" => "Transition Duration",
		"id" => "skudo_posts_flex_transition_duration",
		"type" => "text",
		"std" => 500,
		"description" => "The duration of the transition between slides."
	),
	
	array(
		"name" => "Slide Duration",
		"id" => "skudo_posts_flex_slide_duration",
		"type" => "text",
		"std" => 5500,
		"description" => "The duration of each slide"
	),
	
	array(
		"name" => "Autoplay",
		"id" => "skudo_posts_flex_autoplay",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Pause on Hover",
		"id" => "skudo_posts_flex_pause_hover",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => "Play/Pause on mouse out/over"
	),
	
	array(
		"name" => "Slider Height",
		"id" => "skudo_posts_flex_height",
		"type" => "text",
		"std" => "400px",
		"description" => "The height of the slider."
	),

	/* MASONRY */
	
	array(
		"type" => "documentation",
		"text" => "<h3>Blog Masonry Style</h3>"
	),

	array(
		"name" => "Show Direction Controls",
		"id" => "skudo_posts_flex_navigation_masonry",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),

	array(
		"name" => "Show Controls",
		"id" => "skudo_posts_flex_controls_masonry",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Transition Effect",
		"id" => "skudo_posts_flex_transition_masonry",
		"type" => "select",
		"options" => array(array("name"=>"Slide", "id"=>"slide"), array("name"=>"Fade", "id"=>"fade")),
		"std" => "random",
		"description" => ""
	),
	
	array(
		"name" => "Transition Duration",
		"id" => "skudo_posts_flex_transition_duration_masonry",
		"type" => "text",
		"std" => 500,
		"description" => "The duration of the transition between slides."
	),
	
	array(
		"name" => "Slide Duration",
		"id" => "skudo_posts_flex_slide_duration_masonry",
		"type" => "text",
		"std" => 5500,
		"description" => "The duration of each slide"
	),
	
	array(
		"name" => "Autoplay",
		"id" => "skudo_posts_flex_autoplay_masonry",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Pause on Hover",
		"id" => "skudo_posts_flex_pause_hover_masonry",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => "Play/Pause on mouse out/over"
	),
	
	array(
		"name" => "Slider Height",
		"id" => "skudo_posts_flex_height_masonry",
		"type" => "text",
		"std" => "400px",
		"description" => "The height of the slider."
	),

	/* SINGLES */
	
	array(
		"type" => "documentation",
		"text" => "<h3>Singles</h3>"
	),

	array(
		"name" => "Show Direction Controls",
		"id" => "skudo_posts_flex_navigation_singles",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),

	array(
		"name" => "Show Controls",
		"id" => "skudo_posts_flex_controls_singles",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Transition Effect",
		"id" => "skudo_posts_flex_transition_singles",
		"type" => "select",
		"options" => array(array("name"=>"Slide", "id"=>"slide"), array("name"=>"Fade", "id"=>"fade")),
		"std" => "random",
		"description" => ""
	),
	
	array(
		"name" => "Transition Duration",
		"id" => "skudo_posts_flex_transition_duration_singles",
		"type" => "text",
		"std" => 500,
		"description" => "The duration of the transition between slides."
	),
	
	array(
		"name" => "Slide Duration",
		"id" => "skudo_posts_flex_slide_duration_singles",
		"type" => "text",
		"std" => 5500,
		"description" => "The duration of each slide"
	),
	
	array(
		"name" => "Autoplay",
		"id" => "skudo_posts_flex_autoplay_singles",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Pause on Hover",
		"id" => "skudo_posts_flex_pause_hover_singles",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => "Play/Pause on mouse out/over"
	),
	
	array(
		"name" => "Slider Height",
		"id" => "skudo_posts_flex_height_singles",
		"type" => "text",
		"std" => "400px",
		"description" => "The height of the slider."
	),
	
	array(
		"type" => "close"
	),
	
	array(
		"type" => "subtitle",
		"id"=>'flexprojs'
	),
	
	/* PROJECTS */
	
	array(
		"type" => "documentation",
		"text" => "<h3>Flex Slider Settings</h3>"
	),

	array(
		"name" => "Show Direction Controls",
		"id" => "skudo_projs_flex_navigation",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),

	array(
		"name" => "Show Controls",
		"id" => "skudo_projs_flex_controls",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Transition Effect",
		"id" => "skudo_projs_flex_transition",
		"type" => "select",
		"options" => array(array("name"=>"Slide", "id"=>"slide"), array("name"=>"Fade", "id"=>"fade")),
		"std" => "random",
		"description" => ""
	),
	
	array(
		"name" => "Transition Duration",
		"id" => "skudo_projs_flex_transition_duration",
		"type" => "text",
		"std" => 500,
		"description" => "The duration of the transition between slides."
	),
	
	array(
		"name" => "Slide Duration",
		"id" => "skudo_projs_flex_slide_duration",
		"type" => "text",
		"std" => 5500,
		"description" => "The duration of each slide"
	),
	
	array(
		"name" => "Autoplay",
		"id" => "skudo_projs_flex_autoplay",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => ""
	),
	
	array(
		"name" => "Pause on Hover",
		"id" => "skudo_projs_flex_pause_hover",
		"type" => "checkbox",
		"options" => array(array("name"=>"Yes", "id"=>"true"), array("name"=>"No", "id"=>"false")),
		"std" => "true",
		"description" => "Play/Pause on mouse out/over"
	),
	
	array(
		"name" => "Slider Height",
		"id" => "skudo_projs_flex_height",
		"type" => "text",
		"std" => "400px",
		"description" => "The height of the slider."
	),
	
	array(
		"type" => "close"
	),
	
	/* ------------------------------------------------------------------------*
	 * Revolution Slider
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id"=>'rev'
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Revolution Slider Settings</h3>"
	),

	
	array(
		"type" => "documentation",
		"text" => "<p>You can adjust the settings indivually for each created Revolution Slider in the <a href='admin.php?page=revslider'>Revolution Slider menu page</a>.</p>"
	),	
	/*close array*/
	
	array(
		"type" => "close"
	),
	
	array(
		"type" => "close"
	));
	
	skudo_add_options($skudo_general_options);
	
?>