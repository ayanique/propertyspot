<?php
//Shortcodes for Visual Composer
add_action( 'vc_before_init', 'ginza_vc_shortcodes' );
function ginza_vc_shortcodes() { 
	//Site logo
	vc_map( array(
		'name' => esc_html__( 'Logo', 'ginza'),
		'description' => __( 'Insert logo image', 'ginza' ),
		'base' => 'roadlogo',
		'class' => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params' => array(
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload logo image', 'ginza' ),
				'description'=> esc_html__( 'Note: For retina screen, logo image size is at least twice as width and height (width is set below) to display clearly', 'ginza' ),
				'param_name' => 'logo_image',
				'value'      => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Insert logo link or not', 'ginza' ),
				'param_name' => 'logo_link',
				'value'      => array(
					'Yes'	=> 'yes',
					'No'	=> 'no',
				),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Logo width (unit: px)', 'ginza' ),
				'description'=> esc_html__( 'Insert number. Leave blank if you want to use original image size', 'ginza' ),
				'param_name' => 'logo_width',
				'value'      => esc_html__( '150', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )                  => 'style1',
					__( 'Style 2 (footer)', 'ginza' )         => 'style2',
					__( 'Style 3 (demo 3 header)', 'ginza' )  => 'style3',
				),
			),
		)
	) );
	//Main Menu
	vc_map( array(
		'name'        => esc_html__( 'Main Menu', 'ginza'),
		'description' => __( 'Set Primary Menu in Apperance - Menus - Manage Locations', 'ginza' ),
		'base'        => 'roadmainmenu',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'        => '',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => __( 'Set Primary Menu in Apperance - Menus - Manage Locations', 'ginza' ),
				'description' => esc_html__( 'More settings in Theme Options - Main Menu', 'ginza' ),
				'param_name'  => 'no_settings',
				'value'       => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1 (Default)', 'ginza' )        => 'style1',
					__( 'Style 2 (Demo 2+3)', 'ginza' )       => 'style2',
				),
			),
		),
	) );
	//Sticky Menu
	vc_map( array(
		'name'        => esc_html__( 'Sticky Menu', 'ginza'),
		'description' => __( 'Set Sticky Menu in Apperance - Menus - Manage Locations', 'ginza' ),
		'base'        => 'roadstickymenu',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'        => '',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => __( 'Set Sticky Menu in Apperance - Menus - Manage Locations', 'ginza' ),
				'description' => esc_html__( 'More settings in Theme Options - Main Menu', 'ginza' ),
				'param_name'  => 'no_settings',
				'value'       => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )            => 'style1',
				),
			),
		),
	) );
	//Mobile Menu
	vc_map( array(
		'name'        => esc_html__( 'Mobile Menu', 'ginza'),
		'description' => __( 'Set Mobile Menu in Apperance - Menus - Manage Locations', 'ginza' ),
		'base'        => 'roadmobilemenu',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'        => '',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => __( 'Set Mobile Menu in Apperance - Menus - Manage Locations', 'ginza' ),
				'description' => esc_html__( 'More settings in Theme Options - Main Menu', 'ginza' ),
				'param_name'  => 'no_settings',
				'value'       => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'      => 'div',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )             => 'style1',
					__( 'Style 2 (Demo 2+3)', 'ginza' )  => 'style2',
				),
			),
		),
	) );
	//Categories Menu
	vc_map( array(
		'name'        => esc_html__( 'Categories Menu', 'ginza'),
		'description' => __( 'Set Categories Menu in Apperance - Menus - Manage Locations', 'ginza' ),
		'base'        => 'roadcategoriesmenu',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'        => '',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => __( 'Set Categories Menu in Apperance - Menus - Manage Locations', 'ginza' ),
				'description' => esc_html__( 'More settings in Theme Options - Categories Menu', 'ginza' ),
				'param_name'  => 'no_settings',
				'value'       => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Show full Categories in home page ?', 'ginza' ),
				'description' => esc_html__( 'In inner pages, it only shows the toogle', 'ginza' ),
				'param_name' => 'categories_show_home',
				'value'      => array(
					__( 'No', 'ginza' )  => 'false',
					__( 'Yes', 'ginza' ) => 'true',
				),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
					__( 'Style 2', 'ginza' )  => 'style2',
				),
			),
		),
	) );
	//Social Icons
	vc_map( array(
		'name'        => esc_html__( 'Social Icons', 'ginza'),
		'description' => __( 'Configure icons and links in Theme Options', 'ginza' ),
		'base'        => 'roadsocialicons',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => '',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Configure icons and links in Theme Options > Social Icons', 'ginza' ),
				'param_name' => 'no_settings',
				'value'      => '',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Social title element', 'ginza' ),
				'param_name' => 'social_title',
				'value'      => 'Title',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Social sub-title element', 'ginza' ),
				'param_name' => 'sub_social_title',
				'value'      => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1 (header)', 'ginza' ) => 'style1',
					__( 'Style 2 (footer)', 'ginza' ) => 'style2',
				),
			),
		),
	) );
	//Mini Cart
	vc_map( array(
		'name'        => esc_html__( 'Mini Cart', 'ginza'),
		'description' => __( 'Mini Cart', 'ginza' ),
		'base'        => 'roadminicart',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => '',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'This widget does not have settings', 'ginza' ),
				'param_name' => 'no_settings',
				'value'      => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )              => 'style1',
					__( 'Style 2 (demo 2 +3)', 'ginza' )  => 'style2',
				),
			),
		),
	) );
	//Wishlist
	vc_map( array(
		'name'        => esc_html__( 'Wishlist', 'ginza'),
		'description' => __( 'Wishlist', 'ginza' ),
		'base'        => 'roadwishlist',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
					__( 'Style 2', 'ginza' )  => 'style2',
				),
			),
		),
	) );
	//Products Search without dropdown
	vc_map( array(
		'name'        => esc_html__( 'Product Search (No dropdown)', 'ginza'),
		'description' => __( 'Product Search (No dropdown)', 'ginza' ),
		'base'        => 'roadproductssearch',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
				),
			),
		),
	) );
	//Products Search with dropdown
	vc_map( array(
		'name'        => esc_html__( 'Product Search (Dropdown)', 'ginza'),
		'description' => __( 'Product Search (Dropdown)', 'ginza' ),
		'base'        => 'roadproductssearchdropdown',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => '',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'This widget does not have settings', 'ginza' ),
				'param_name' => 'no_settings',
				'value'      => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )               => 'style1',
					__( 'Style 2 (demo 2 + 3)', 'ginza' )  => 'style2',
				),
			),
		),
	) );
	//Image slider
	vc_map( array(
		'name'        => esc_html__( 'Image slider', 'ginza' ),
		'description' => __( 'Upload images and links in Theme Options', 'ginza' ),
		'base'        => 'image_slider',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number of rows', 'ginza' ),
				'param_name' => 'rows',
				'value'      => array(
					'1'	=> '1',
					'2'	=> '2',
					'3'	=> '3',
					'4'	=> '4',
					'5'	=> '5',
					'6'	=> '6',
				),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: over 1500px)', 'ginza' ),
				'param_name' => 'items_1500up',
				'group'      => __( 'Slider Options', 'ginza' ),
				'value'      => esc_html__( '4', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 1200px - 1499px)', 'ginza' ),
				'param_name' => 'items_1200_1499',
				'group'      => __( 'Slider Options', 'ginza' ),
				'value'      => esc_html__( '4', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 992px - 1199px)', 'ginza' ),
				'param_name' => 'items_992_1199',
				'value'      => esc_html__( '4', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 768px - 991px)', 'ginza' ),
				'param_name' => 'items_768_991',
				'value'      => esc_html__( '3', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 640px - 767px)', 'ginza' ),
				'param_name' => 'items_640_767',
				'value'      => esc_html__( '2', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 480px - 639px)', 'ginza' ),
				'param_name' => 'items_480_639',
				'value'      => esc_html__( '2', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: under 479px)', 'ginza' ),
				'param_name' => 'items_0_479',
				'value'      => esc_html__( '1', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Navigation', 'ginza' ),
				'param_name' => 'navigation',
				'value'      => array(
					__( 'Yes', 'ginza' ) => true,
					__( 'No', 'ginza' )  => false,
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Pagination', 'ginza' ),
				'param_name' => 'pagination',
				'value'      => array(
					__( 'No', 'ginza' )  => false,
					__( 'Yes', 'ginza' ) => true,
				),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Item Margin (unit: pixel)', 'ginza' ),
				'param_name' => 'item_margin',
				'value'      => 30,
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Slider speed number (unit: second)', 'ginza' ),
				'param_name' => 'speed',
				'value'      => '500',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider loop', 'ginza' ),
				'param_name' => 'loop',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider Auto', 'ginza' ),
				'param_name' => 'auto',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Navigation style', 'ginza' ),
				'param_name'  => 'navigation_style',
				'value'       => array(
					__( 'Navigation top-right', 'ginza' )          => 'navigation-style1',
					__( 'Navigation center horizontal', 'ginza' )  => 'navigation-style2',
				),
			),
		),
	) );
	//Brand logos
	vc_map( array(
		'name'        => esc_html__( 'Brand Logos', 'ginza' ),
		'description' => __( 'Upload images and links in Theme Options', 'ginza' ),
		'base'        => 'ourbrands',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number of rows', 'ginza' ),
				'param_name' => 'rows',
				'value'      => array(
					'1'	=> '1',
					'2'	=> '2',
					'3'	=> '3',
					'4'	=> '4',
				),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'heading'    => __( 'Number of columns (screen: over 1500px)', 'ginza' ),
				'param_name' => 'items_1500up',
				'value'      => esc_html__( '5', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 1200px - 1499px)', 'ginza' ),
				'param_name' => 'items_1200_1499',
				'value'      => esc_html__( '5', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 992px - 1199px)', 'ginza' ),
				'param_name' => 'items_992_1199',
				'value'      => esc_html__( '5', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 768px - 991px)', 'ginza' ),
				'param_name' => 'items_768_991',
				'value'      => esc_html__( '4', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 640px - 767px)', 'ginza' ),
				'param_name' => 'items_640_767',
				'value'      => esc_html__( '3', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 480px - 639px)', 'ginza' ),
				'param_name' => 'items_480_639',
				'value'      => esc_html__( '2', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: under 479px)', 'ginza' ),
				'param_name' => 'items_0_479',
				'value'      => esc_html__( '1', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Navigation', 'ginza' ),
				'param_name' => 'navigation',
				'value'      => array(
					__( 'Yes', 'ginza' ) => true,
					__( 'No', 'ginza' )  => false,
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Pagination', 'ginza' ),
				'param_name' => 'pagination',
				'value'      => array(
					__( 'No', 'ginza' )  => false,
					__( 'Yes', 'ginza' ) => true,
				),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Item Margin (unit: pixel)', 'ginza' ),
				'param_name' => 'item_margin',
				'value'      => 0,
			),
			array(
				'type'       => 'textfield',
				'heading'    =>  __( 'Slider speed number (unit: second)', 'ginza' ),
				'param_name' => 'speed',
				'value'      => '500',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider loop', 'ginza' ),
				'param_name' => 'loop',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider Auto', 'ginza' ),
				'param_name' => 'auto',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )       => 'style1',
				),
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'heading'     => esc_html__( 'Navigation style', 'ginza' ),
				'param_name'  => 'navigation_style',
				'value'       => array(
					__( 'Navigation center horizontal', 'ginza' )  => 'navigation-style1',
					__( 'Navigation top-right', 'ginza' )          => 'navigation-style2',
				),
			),
		),
	) );
	//Latest posts
	vc_map( array(
		'name'        => esc_html__( 'Latest posts', 'ginza' ),
		'description' => __( 'List posts', 'ginza' ),
		'base'        => 'latestposts',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"        => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number of posts', 'ginza' ),
				'param_name' => 'posts_per_page',
				'value'      => esc_html__( '10', 'ginza' ),
			),
			array(
				'type'        => 'textfield',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Category', 'ginza' ),
				'param_name'  => 'category',
				'value'       => esc_html__( '0', 'ginza' ),
				'description' => esc_html__( 'Slug of the category (example: slug-1, slug-2). Default is 0 : show all posts', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Image scale', 'ginza' ),
				'param_name' => 'image',
				'value'      => array(
					'Wide'	=> 'wide',
					'Square'=> 'square',
				),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Excerpt length', 'ginza' ),
				'param_name' => 'length',
				'value'      => esc_html__( '20', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number of columns', 'ginza' ),
				'param_name' => 'colsnumber',
				'value'      => array(
					'1'	=> '1',
					'2'	=> '2',
					'3'	=> '3',
					'4'	=> '4',
					'5'	=> '5',
					'6'	=> '6',
				),
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1', 'ginza' )           => 'style1',
					__( 'Style 2 (footer)', 'ginza' )  => 'style2',
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Enable slider', 'ginza' ),
				'param_name'  => 'enable_slider',
				'value'       => true,
				'save_always' => true, 
				'group'       => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'class'      => '',
				'heading'    => esc_html__( 'Number of rows', 'ginza' ),
				'param_name' => 'rowsnumber',
				'group'      => __( 'Slider Options', 'ginza' ),
				'value'      => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Number of columns (screen: 1200px - 1499px)', 'ginza' ),
				'param_name' => 'items_1200_1499',
				'group'      => __( 'Slider Options', 'ginza' ),
				'value'      => esc_html__( '3', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 992px - 1199px)', 'ginza' ),
				'param_name' => 'items_992_1199',
				'value'      => esc_html__( '3', 'ginza' ),
				'group'      => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 768px - 991px)', 'ginza' ),
				'param_name' => 'items_768_991',
				'value'      => esc_html__( '3', 'ginza' ),
				'group'      => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 640px - 767px)', 'ginza' ),
				'param_name' => 'items_640_767',
				'value'      => esc_html__( '2', 'ginza' ),
				'group'      => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: 480px - 639px)', 'ginza' ),
				'param_name' => 'items_480_639',
				'value'      => esc_html__( '2', 'ginza' ),
				'group'      => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'class'      => '',
				'heading'    => __( 'Number of columns (screen: under 479px)', 'ginza' ),
				'param_name' => 'items_0_479',
				'value'      => esc_html__( '1', 'ginza' ),
				'group'      => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Navigation', 'ginza' ),
				'param_name'  => 'navigation',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'ginza' ),
				'value'       => array(
					__( 'Yes', 'ginza' ) => true,
					__( 'No', 'ginza' )  => false,
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Pagination', 'ginza' ),
				'param_name'  => 'pagination',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'ginza' ),
				'value'       => array(
					__( 'No', 'ginza' )  => false,
					__( 'Yes', 'ginza' ) => true,
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Item Margin (unit: pixel)', 'ginza' ),
				'param_name'  => 'item_margin',
				'value'       => 30,
				'save_always' => true,
				'group'       => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => __( 'Slider speed number (unit: second)', 'ginza' ),
				'param_name'  => 'speed',
				'value'       => '500',
				'save_always' => true,
				'group'       => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider loop', 'ginza' ),
				'param_name'  => 'loop',
				'value'       => true,
				'group'       => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => __( 'Slider Auto', 'ginza' ),
				'param_name'  => 'auto',
				'value'       => true,
				'group'       => __( 'Slider Options', 'ginza' ),
			),
			array(
				'type'        => 'dropdown',
				'holder'      => 'div',
				'heading'     => esc_html__( 'Navigation style', 'ginza' ),
				'param_name'  => 'navigation_style',
				'group'       => __( 'Slider Options', 'ginza' ),
				'value'       => array(
					__( 'Navigation center horizontal', 'ginza' )  => 'navigation-style1',
					__( 'Navigation top-right', 'ginza' )          => 'navigation-style2',
				),
			),
		),
	) );
	//Testimonials
	vc_map( array(
		'name'        => esc_html__( 'Testimonials', 'ginza' ),
		'description' => __( 'Testimonial slider', 'ginza' ),
		'base'        => 'testimonials',
		'class'       => '',
		'category'    => esc_html__( 'Theme', 'ginza'),
		"icon"     	  => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'      => array(
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number of testimonial', 'ginza' ),
				'param_name' => 'limit',
				'value'      => esc_html__( '10', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Display Author', 'ginza' ),
				'param_name' => 'display_author',
				'value'      => array(
					'Yes'	=> '1',
					'No'	=> '0',
				),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Display Avatar', 'ginza' ),
				'param_name' => 'display_avatar',
				'value'      => array(
					'Yes'=> '1',
					'No' => '0',
				),
			),
			array(
				'type'        => 'textfield',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Avatar image size', 'ginza' ),
				'param_name'  => 'size',
				'value'       => '150',
				'description' => esc_html__( 'Avatar image size in pixels. Default is 150', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Display URL', 'ginza' ),
				'param_name' => 'display_url',
				'value'      => array(
					'Yes'	=> '1',
					'No'	=> '0',
				),
			),
			array(
				'type'        => 'textfield',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Category', 'ginza' ),
				'param_name'  => 'category',
				'value'       => esc_html__( '0', 'ginza' ),
				'description' => esc_html__( 'Slug of the category. Default is 0 : show all testimonials', 'ginza' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Navigation', 'ginza' ),
				'param_name' => 'navigation',
				'value'      => array(
					__( 'No', 'ginza' )  => false,
					__( 'Yes', 'ginza' ) => true,
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Pagination', 'ginza' ),
				'param_name' => 'pagination',
				'value'      => array(
					__( 'Yes', 'ginza' ) => true,
					__( 'No', 'ginza' )  => false,
				),
			),
			array(
				'type'       => 'textfield',
				'heading'    =>  __( 'Slider speed number (unit: second)', 'ginza' ),
				'param_name' => 'speed',
				'value'      => '500',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider loop', 'ginza' ),
				'param_name' => 'loop',
			),
			array(
				'type'       => 'checkbox',
				'value'      => true,
				'heading'    => __( 'Slider Auto', 'ginza' ),
				'param_name' => 'auto',
			),
			array(
				'type'        => 'dropdown',
				'holder'      => 'div',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1', 'ginza' )                => 'style1',
				),
			),
			array(
				'type'        => 'dropdown',
				'holder'      => 'div',
				'heading'     => esc_html__( 'Navigation style', 'ginza' ),
				'param_name'  => 'navigation_style',
				'value'       => array(
					__( 'Navigation top-right', 'ginza' )          => 'navigation-style1',
					__( 'Navigation center horizontal', 'ginza' )  => 'navigation-style2',
				),
			),
		),
	) );
	//Counter
	vc_map( array(
		'name'     => esc_html__( 'Counter', 'ginza' ),
		'description' => __( 'Counter', 'ginza' ),
		'base'     => 'ginza_counter',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'        => 'attach_image',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Image icon', 'ginza' ),
				'param_name'  => 'image',
				'value'       => '',
				'description' => esc_html__( 'Upload icon image', 'ginza' ),
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Number', 'ginza' ),
				'param_name' => 'number',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Text', 'ginza' ),
				'param_name' => 'text',
				'value'      => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
				),
			),
		),
	) );
	//Heading title
	vc_map( array(
		'name'     => esc_html__( 'Heading Title', 'ginza' ),
		'description' => __( 'Heading Title', 'ginza' ),
		'base'     => 'roadthemes_title',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Heading title element', 'ginza' ),
				'param_name' => 'heading_title',
				'value'      => 'Title',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Heading sub-title element', 'ginza' ),
				'param_name' => 'sub_heading_title',
				'value'      => '',
			),
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload heading title image', 'ginza' ),
				'param_name' => 'heading_image',
				'value'      => '',
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (Default)', 'ginza' )             => 'style1',
					__( 'Style 2 (Footer title)', 'ginza' )        => 'style2',
					__( 'Style 3 (Tab title)', 'ginza' )           => 'style3',
					__( 'Style 4 (Demo 2)', 'ginza' )              => 'style4',
					__( 'Style 5 (Demo 2 style 2)', 'ginza' )      => 'style5',
					__( 'Style 6 (Demo 3 style 1)', 'ginza' )      => 'style6',
					__( 'Style 7 (Demo 3 style 2)', 'ginza' )      => 'style7',
				),
			),
		),
	) );
	//Countdown
	vc_map( array(
		'name'     => esc_html__( 'Countdown', 'ginza' ),
		'description' => __( 'Countdown', 'ginza' ),
		'base'     => 'roadthemes_countdown',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'End date (day)', 'ginza' ),
				'param_name' => 'countdown_day',
				'value'      => '1',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'End date (month)', 'ginza' ),
				'param_name' => 'countdown_month',
				'value'      => '1',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'End date (year)', 'ginza' ),
				'param_name' => 'countdown_year',
				'value'      => '2020',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Style', 'ginza' ),
				'param_name' => 'style',
				'value'      => array(
					__( 'Style 1', 'ginza' )  => 'style1',
				),
			),
		),
	) );
	//Mailchimp newsletter
	vc_map( array(
		'name'     => esc_html__( 'Mailchimp Newsletter', 'ginza' ),
		'description' => __( 'Mailchimp Newsletter ', 'ginza' ),
		'base'     => 'roadthemes_newsletter',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'        => 'textarea',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Newsletter title', 'ginza' ),
				'param_name'  => 'newsletter_title',
				'value'       => '',
			),
			array(
				'type'        => 'textarea',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Newsletter sub-title', 'ginza' ),
				'param_name'  => 'newsletter_sub_title',
				'value'       => '',
			),
			array(
				'type'        => 'attach_image',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Upload newsletter title image', 'ginza' ),
				'param_name'  => 'newsletter_image',
				'value'       => '',
			),
			array(
				'type'        => 'textfield',
				'holder'      => 'div',
				'class'       => '',
				'heading'     => esc_html__( 'Insert id of Mailchimp Form', 'ginza' ),
				'description' => esc_html__( 'See id in admin -> MailChimp for WP -> Form, under the form title', 'ginza' ),
				'param_name'  => 'newsletter_form_id',
				'value'       => '',
			),
			array(
				'type'       => 'dropdown',
				'holder'     => 'div',
				'class'      => '',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (Default)', 'ginza' )    => 'style1',
					__( 'Style 2', 'ginza' )              => 'style2',
				),
			),
		),
	) );
	//Custom Menu
	$custom_menus = array();
	if ( 'vc_edit_form' === vc_post_param( 'action' ) && vc_verify_admin_nonce() ) {
		$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
		if ( is_array( $menus ) && ! empty( $menus ) ) {
			foreach ( $menus as $single_menu ) {
				if ( is_object( $single_menu ) && isset( $single_menu->name, $single_menu->term_id ) ) {
					$custom_menus[ $single_menu->name ] = $single_menu->term_id;
				}
			}
		}
	}
	vc_map( array(
		'name'     => esc_html__( 'Custom Menu', 'ginza' ),
		'description' => __( 'Custom Menu', 'ginza' ),
		'base'     => 'roadthemes_menu',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload menu image', 'ginza' ),
				'param_name' => 'menu_image',
				'value'      => '',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Menu title', 'ginza' ),
				'param_name' => 'menu_title',
				'value'      => 'Title',
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Choose Menu', 'ginza' ),
				'param_name'  => 'nav_menu',
				'value'       => $custom_menus,
				'description' => empty( $custom_menus ) ? __( 'Custom menus not found. Please visit <b>Appearance > Menus</b> page to create new menu.', 'ginza' ) : __( 'Select menu to display.', 'ginza' ),
				'admin_label' => true,
				'save_always' => true,
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Menu text', 'ginza' ),
				'param_name' => 'menu_text',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Menu link text', 'ginza' ),
				'param_name' => 'menu_link_text',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Menu link url', 'ginza' ),
				'param_name' => 'menu_link_url',
				'value'      => '',
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (Default)', 'ginza' )    => 'style1',
				),
			),
		),
	) );
	//Policy
	vc_map( array(
		'name'     => esc_html__( 'Policy', 'ginza' ),
		'description' => __( 'Policy content', 'ginza' ),
		'base'     => 'roadthemes_policy',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload Policy icon', 'ginza' ),
				'param_name' => 'policy_icon',
				'value'      => '',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Policy title', 'ginza' ),
				'param_name' => 'policy_title',
				'value'      => 'Title',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Policy text', 'ginza' ),
				'param_name' => 'policy_text',
				'value'      => '',
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (Default)', 'ginza' )    => 'style1',
				),
			),
		),
	) );
	//Static block
	vc_map( array(
		'name'     => esc_html__( 'Static block 1', 'ginza' ),
		'description' => __( 'Static block with link text', 'ginza' ),
		'base'     => 'roadthemes_static_1',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload Static image', 'ginza' ),
				'param_name' => 'static_image',
				'value'      => '',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static title', 'ginza' ),
				'param_name' => 'static_title',
				'value'      => 'Title',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static text', 'ginza' ),
				'param_name' => 'static_text',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static link text', 'ginza' ),
				'param_name' => 'static_link_text',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static link url', 'ginza' ),
				'param_name' => 'static_link_url',
				'value'      => '',
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (demo 1 style 1)', 'ginza' )    => 'style1',
					__( 'Style 2 (demo 1 style 2)', 'ginza' )    => 'style2',
				),
			),
		),
	) );
	vc_map( array(
		'name'     => esc_html__( 'Static block 2', 'ginza' ),
		'description' => __( 'Static block without link text', 'ginza' ),
		'base'     => 'roadthemes_static_2',
		'class'    => '',
		'category' => esc_html__( 'Theme', 'ginza'),
		"icon"     => get_template_directory_uri() . "/images/road-icon.jpg",
		'params'   => array(
			array(
				'type'       => 'attach_image',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Upload Static image', 'ginza' ),
				'param_name' => 'static_image',
				'value'      => '',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static title', 'ginza' ),
				'param_name' => 'static_title',
				'value'      => 'Title',
			),
			array(
				'type'       => 'textarea',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static text', 'ginza' ),
				'param_name' => 'static_text',
				'value'      => '',
			),
			array(
				'type'       => 'textfield',
				'holder'     => 'div',
				'class'      => '',
				'heading'    => esc_html__( 'Static link url', 'ginza' ),
				'param_name' => 'static_link_url',
				'value'      => '',
			),
			array(
				'type'        => 'dropdown',
				'holder'     => 'div',
				'heading'     => esc_html__( 'Style', 'ginza' ),
				'param_name'  => 'style',
				'value'       => array(
					__( 'Style 1 (demo 3 style 1)', 'ginza' )    => 'style1',
				),
			),
		),
	) );
}
?>