<?php
	
	$skudo_fonts_array = skudo_fonts_array_builder();
	
	$skudo_style_general_options= array( array(
		"name" => "Typography",
		"type" => "title",
	),
	
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"text", "name"=>"General Texts"), array("id"=>"blogstext","name"=>"Blog Templates"), array("id"=>"widgetstext","name"=>"Widgets"))
	),
	
	/* ------------------------------------------------------------------------*
	 * TYPOGRAPHY
	 * ------------------------------------------------------------------------*/
	
	array(
		"type" => "subtitle",
		"id"=>'text'
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Links</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_links_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_links_size",
		"type" => "slider",
		"std" => "15px",
		"desc" => "Choose the size of your &lt;a&gt; tag."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_links_color",
		"type" => "color",
		"desc" => 'Select a custom color for your &lt;a&gt; tag.',
		"std" => "8b8d94"
	),
	
	array(
		"name" => "Color (hover)",
		"id" => "skudo_links_color_hover",
		"type" => "color",
		"desc" => 'Select a custom color for your &lt;a&gt; tag hover state.',
		"std" => "4c9cff"
	),
	
	array(
		"name" => "Background Color (hover)",
		"id" => "skudo_links_bg_color_hover",
		"type" => "color",
		"desc" => 'Select a custom color for the background of your &lt;a&gt; tag hover state.'
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Paragraphs</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_p_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_p_size",
		"type" => "slider",
		"std" => "15px",
		"desc" => "Choose the size of your &lt;p&gt; tag."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_p_color",
		"type" => "color",
		"desc" => 'Select a custom color for your &lt;p&gt; tag.',
		"std" => "8b8d94"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H1 Tag</h3>"
	),
	
	
	array(
		"name" => "Font",
		"id" => "skudo_h1_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h1_size",
		"type" => "slider",
		"std" => "40px",
		"desc" => "Choose the size of your H1 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h1_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H1 tag.',
		"std"=> "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H2 Tag</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_h2_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h2_size",
		"type" => "slider",
		"std" => "38px",
		"desc" => "Choose the size of your H2 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h2_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H2 tag.',
		"std" => "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H3 Tag</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_h3_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h3_size",
		"type" => "slider",
		"std" => "25px",
		"desc" => "Choose the size of your H3 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h3_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H3 tag.',
		"std" => "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H4 Tag</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_h4_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h4_size",
		"type" => "slider",
		"std" => "22px",
		"desc" => "Choose the size of your H4 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h4_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H4 tag.',
		"std"=> "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H5 Tag</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_h5_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h5_size",
		"type" => "slider",
		"std" => "18px",
		"desc" => "Choose the size of your H5 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h5_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H5 tag.',
		"std" => "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>H6 Tag</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_h6_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica Neue'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_h6_size",
		"type" => "slider",
		"std" => "12px",
		"desc" => "Choose the size of your H6 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_h6_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H6 tag.',
		"std" => "7a7e82"
	),
	
	array(
		"type" => "close"
	),
	
	
	/* BLOGS */
	array(
		"type" => "subtitle",
		"id"=>'blogstext'
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Blog Normal Template Titles</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_blog_normal_title_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_blog_normal_title_size",
		"type" => "slider",
		"std" => "22px",
		"desc" => "Choose the size of your H6 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_blog_normal_title_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H6 tag.',
		"std" => "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Blog Masonry Template Titles</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_blog_masonry_title_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_blog_masonry_title_size",
		"type" => "slider",
		"std" => "22px",
		"desc" => "Choose the size of your H6 tag (pixels)."
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_blog_masonry_title_color",
		"type" => "color",
		"desc" => 'Select a custom color for your H6 tag.',
		"std" => "4d5054"
	),
	
	array(
		"type" => "close"
	),
	
	array(
		"type" => "subtitle",
		"id" => "widgetstext",
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Widget Titles on Sidebars</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_widgets_sidebars_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_widgets_sidebars_size",
		"type" => "slider",
		"std" => "15px",
	),
	
	array(
		"name" => "Color",
		"id" => "skudo_widgets_sidebars_color",
		"type" => "color",
		"std" => "4d5054"
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Widget Titles on Footer</h3>"
	),
	
	array(
		"name" => "Font",
		"id" => "skudo_widgets_footer_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_widgets_footer_size",
		"type" => "slider",
		"std" => "15px",
	),
	
	array(
		"type" => "documentation",
		"text" => "<h3>Widget Titles on Sliding Panel</h3>"
	),

	array(
		"name" => "Font",
		"id" => "skudo_widgets_sliding_panel_font",
		"type" => "select",
		"options" => $skudo_fonts_array,
		"desc" => 'You can select one of the fonts that the theme goes with or you can add google fonts (Style Options > Fonts).',
		"std" => 'Helvetica'
	),
	
	array(
		"name" => "Size",
		"id" => "skudo_widgets_sliding_panel_size",
		"type" => "slider",
		"std" => "15px"
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