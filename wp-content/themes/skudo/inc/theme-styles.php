<?php
	
/*-----------------------------------------------------------------------------------*/
/*  Skudo Theme Styles
/*-----------------------------------------------------------------------------------*/

function skudo_custom_style() {
	
	global $skudo_custom, $skudo_styleColor, $post, $skudo_import_fonts, $skudo_header_bgstyle_pre, $skudo_header_bgstyle_after;
	$skudo_theid = get_the_ID();
	$skudo_styleColor = "#".get_option("skudo_style_color");
	if ("#".get_option("skudo_style_color") != $skudo_styleColor) $skudo_styleColor = "#".get_option("skudo_style_color");
	$skudo_color_code = substr($skudo_styleColor,1);
	$skudo_styleColor_rgb = skudo_hex2rgb($skudo_styleColor);

	$skudo_headerType = get_option("skudo_header_type");
	
	$skudo_header_bgstyle_pre = get_option('skudo_header_style_light_dark', 'light') == 'light' ? 'light' : 'dark';
	$skudo_header_bgstyle_after = get_option('skudo_header_after_scroll_style_light_dark', 'light') == 'light' ? 'light' : 'dark';
	
	if (is_singular() && get_post_meta($skudo_theid, 'skudo_enable_custom_header_options_value', true) == 'yes'){
		$skudo_header_bgstyle_pre = get_post_meta($skudo_theid, 'skudo_custom_header_pre_value', true);
		$skudo_header_bgstyle_after = get_post_meta($skudo_theid, 'skudo_custom_header_after_value', true);
	}
	
	$skudo_header_style_pre = $skudo_header_bgstyle_pre == 'dark' ? 'light' : 'dark';
	$skudo_header_style_after = $skudo_header_bgstyle_after == 'dark' ? 'light' : 'dark';
	
	global $skudo_import_fonts;
	
	$skudo_style_data = "";
	
	$skudo_style_data .= ".widget li a:after, .widget_nav_menu li a:after, .custom-widget.widget_recent_entries li a:after{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_p_color"))).";
	}
	body, p, .lovepost a, .widget ul li a, .widget p, .widget span, .widget ul li, .the_content ul li, .the_content ol li, #recentcomments li, .custom-widget h4, .widget.des_cubeportfolio_widget h4, .widget.des_recent_posts_widget h4, .custom-widget ul li a, .aio-icon-description, li, .smile_icon_list li .icon_description p, #recentcomments li span, .wpb-js-composer .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-title>a{
		";
		$font = get_option('skudo_p_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "" ;
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."' ,sans-serif;
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_p_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_p_color"))).";
	}
	
	.map_info_text{
		";
		$font = get_option('skudo_p_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."' ,sans-serif;
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_p_size')), 10)."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_p_color")))." !important;
	}
	
	a.pageXofY .pageX, .pricing .bestprice .name, .filter li a:hover, .widget_links ul li a:hover, #contacts a:hover, .title-color, .ms-staff-carousel .ms-staff-info h4, .filter li a:hover, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, a.go-about:hover, .text_color, .navbar-nav .dropdown-menu a:hover, .profile .profile-name, #elements h4, #contact li a:hover, #agency-slider h5, .ms-showcase1 .product-tt h3, .filter li a.active, .contacts li i, .big-icon i, .navbar-default.dark .navbar-brand:hover,.navbar-default.dark .navbar-brand:focus, a.p-button.border:hover, .navbar-default.light-menu .navbar-nav > li > a.selected, .navbar-default.light-menu .navbar-nav > li > a.hover_selected, .navbar-default.light-menu .navbar-nav > li > a.selected:hover, .navbar-default.light-menu .navbar-nav > li > a.hover_selected:hover, .navbar-default.light-menu .navbar-nav > li > a.selected, .navbar-default.light-menu .navbar-nav > li > a.hover_selected, .navbar-default.light-menu .navbar-nav > .open > a,.navbar-default.light-menu .navbar-nav > .open > a:hover, .navbar-default.light-menu .navbar-nav > .open > a:focus, .light-menu .dropdown-menu > li > a:focus, a.social:hover:before, .symbol.colored i, .icon-nofill, .slidecontent-bi .project-title-bi p a:hover, .grid .figcaption a.thumb-link:hover, .tp-caption a:hover, .btn-1d:hover, .btn-1d:active, #contacts .tweet_text a, #contacts .tweet_time a, .social-font-awesome li a:hover, h2.post-title a:hover, .tags a:hover, .skudo-button-color span, #contacts .form-success p, .nav-container .social-icons-fa a i:hover, .the_title h2 a:hover, .widget ul li a:hover, .des-pages .postpagelinks, .widget_nav_menu .current-menu-item > a, .team-position, .nav-container .skudo_minicart li a:hover, .metas-container i, .header_style2_contact_info .telephone-contact .email, .widget-contact-content i{
	  color: ".esc_html($skudo_styleColor).";
	}
	.special_tabs.horizontal.text .tab-selector .label.current,
	.woocommerce-page.woocommerce-page ul.products li.product a.add_to_cart_button, .woocommerce ul.products li.product a.add_to_cart_button, .woocommerce-page ul.products li.product a.add_to_cart_button,
	body .ls-roundedflat .ls-nav-prev:hover, body .ls-roundedflat .ls-nav-next:hover,
	body .ls-roundedflat .ls-bottom-slidebuttons a.ls-nav-active, body .ls-roundedflat .ls-bottom-slidebuttons a:hover,
	.widget > h2:after, .widget > h4:after, .custom-widget > h4:after, .widget .widget-contact-content > h4:after{
		background: ".esc_html($skudo_styleColor)." !important;
	}
	.testimonials.style1 .testimonial span a, .page-template-blog-masonry-template .posts_category_filter li:hover, .metas a:hover, .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a, .skudo_breadcrumbs a:hover{
		color: ".esc_html($skudo_styleColor)." !important;
	}
	.special_tabs.horizontal.text .tab-selector .label:hover .title a:before, .ult_btn10_span:hover:before, a.aio-icon-read:hover:before{
		border-bottom-color: ".esc_html($skudo_styleColor)." !important;
	}
	
	.ult_cl_link_1 .ult_btn10_span:hover:before, .ult_cl_link_1 .ult_btn10_span:before{border:none !important;}
	.testimonials .cover-test-img{background:rgba(".$skudo_styleColor_rgb[0].",".$skudo_styleColor_rgb[1].",".$skudo_styleColor_rgb[2].",.8);}
	.aio-icon-read, .tp-caption a.text_color{color: ".esc_html($skudo_styleColor)." !important;}
	
	#big_footer .social-icons-fa a i{color:#".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sec_footer_social_icons_color"))).";}
	#big_footer .social-icons-fa a i:hover{color:#".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sec_footer_social_icons_hover_color"))).";}
	
	.homepage_parallax .home-logo-text a.light:hover, .homepage_parallax .home-logo-text a.dark:hover, .widget li a:hover:before, .widget_nav_menu li a:hover:before, .footer_sidebar ul li a:hover:before, .custom-widget li a:hover:before, .single-portfolio .social-shares ul li a:hover i, .social-shares ul li i:hover,
	.archive .the_title h2 a:hover, .page-template-blog-template .the_title h2 a:hover, .home.blog .blog-default.wideblog .container .the_title h2 a:hover,
	.posts_category_filter li.selected,
	.blog-default-bg-masonry .the_title h2 a:hover{
		color: ".esc_html($skudo_styleColor)." !important;
	}
	
	
	a.sf-button.hide-icon, .tabs li.current, .readmore:hover, .navbar-default .navbar-nav > .open > a,.navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, a.p-button:hover, a.p-button.colored, .light #contacts a.p-button, .tagcloud a:hover, .rounded.fill, .colored-section, .pricing .bestprice .price, .pricing .bestprice .signup, .signup:hover, .divider.colored, .services-graph li span, .no-touch .hi-icon-effect-1a .hi-icon:hover, .hi-icon-effect-1b .hi-icon:hover, .no-touch .hi-icon-effect-1b .hi-icon:hover, .symbol.colored .line-left, .symbol.colored .line-right, .projects-overlay #projects-loader, .panel-group .panel.active .panel-heading, .double-bounce1, .double-bounce2, .skudo-button-color-1d:after, .container1 > div, .container2 > div, .container3 > div, .cbp-l-caption-buttonLeft:hover, .cbp-l-caption-buttonRight:hover, .post-content a:hover .post-quote, .post-listing .post a:hover .post-quote, .skudo-button-color-1d:after, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range, .btn-contact-left input, #commentform .form-submit #submit, a#send-comment, .errorbutton, .woocommerce span.onsale, .woocommerce-page span.onsale, .des-button-dark, .des-pages .pages, .page-template-blog-template .post-quote, .single-post .post-quote,
	.special_tabs.icontext .label.current,
	.bt-contact a span input,
	.page-template-blog-masonry-template .metas p[data-rel='metas-categories'] a,
	.archive .masonry .metas p[data-rel='metas-categories'] a,
	.page-template-blog-masonry-template .metas p[data-rel='metas-tags'] a,
	.post-listing .post .blog-default-bg-masonry .post-quote,
	.widget h2:after, .widget h4:after, .custom-widget h4:after,
	.woocommerce .woocommerce-info, .woocommerce-page .woocommerce-info,
	.nav-container a.button.skudo_minicart_cart_but,
	.nav-container a.button.skudo_minicart_checkout_but{
		background-color:".esc_html($skudo_styleColor).";
	}
	.woocommerce .woocommerce-info .showcoupon{color: #fff !important;opacity:0.8;}
	.aio-icon-tooltip .aio-icon:hover:after{box-shadow:0 0 0 1px ".esc_html($skudo_styleColor)." !important;}
	.just-icon-align-left .aio-icon:hover, .aio-icon-tooltip .aio-icon:hover, .btn-contact-left.inversecolor input:hover, .light .skudo_little_shopping_bag .overview span.minicart_items, .skudo_little_shopping_bag .overview span.minicart_items,
	#mc_embed_signup input#mc-embedded-subscribe,
	#mc_embed_signup input#mc-embedded-subscribe:focus, .team_member_profile_content .aio-icon.circle:hover,
	.special_tabs.icon .current .skudo_icon_special_tabs{
		background-color:".esc_html($skudo_styleColor)." !important;
	}
	.aio-icon-tooltip .aio-icon.none:hover{background-color: transparent !important;}
	
	.widget .slick-dots li.slick-active i{color: ".esc_html($skudo_styleColor).";opacity: 1;}
	
	
	.woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce #content div.product form.cart .button, .woocommerce div.product form.cart .button, .woocommerce-page #content div.product form.cart .button, .woocommerce-page div.product form.cart .button, .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale, .top-bar .phone-mail li.text_field,
		#primary_footer input[type='submit']{
		background-color:".esc_html($skudo_styleColor).";
		color: #fff !important;
	}
	.nav-container a.button.skudo_minicart_checkout_but:hover, .nav-container a.button.skudo_minicart_cart_but:hover{
		background-color: ".esc_html($skudo_styleColor)." !important;
		color: #fff !important;
		border: none !important;
		opacity: 0.8;
	}
	.skudo-button-color-1d:hover, .skudo-button-color-1d:active{
		border: 1px double ".esc_html($skudo_styleColor).";
	}
	
	.skudo-button-color{
		background-color:".esc_html($skudo_styleColor).";
		color: ".esc_html($skudo_styleColor).";
	}
	.cbp-l-caption-alignCenter .cbp-l-caption-buttonLeft:hover, .cbp-l-caption-alignCenter .cbp-l-caption-buttonRight:hover {
	    color: ".esc_html($skudo_styleColor)." !important;
	}
	.widget_posts .tabs li.current{border: 1px solid ".esc_html($skudo_styleColor).";}
	.hi-icon-effect-1 .hi-icon:after{box-shadow: 0 0 0 3px ".esc_html($skudo_styleColor).";}
	.colored-section:after {border: 20px solid ".esc_html($skudo_styleColor).";}
	.filter li a.active, .filter li a:hover, .panel-group .panel.active .panel-heading{border:1px solid ".esc_html($skudo_styleColor).";}
	.navbar-default.light-menu.border .navbar-nav > li > a.selected:before, .navbar-default.light-menu.border .navbar-nav > li > a.hover_selected:before, .navbar-default.light-menu.border .navbar-nav > li > a.selected:hover, .navbar-default.light-menu.border .navbar-nav > li > a.hover_selected:hover, .navbar-default.light-menu.border .navbar-nav > li > a.selected, .navbar-default.light-menu.border .navbar-nav > li > a.hover_selected{
		border-bottom: 1px solid ".esc_html($skudo_styleColor).";
	}
	
	.doubleborder{
		border: 6px double ".esc_html($skudo_styleColor).";
	}
	
	.special_tabs.icon .current .skudo_icon_special_tabs{
		border: 1px solid ".esc_html($skudo_styleColor).";
	}
	.skudo-button-color, .des-pages .postpagelinks, .tagcloud a:hover{
		border: 1px solid ".esc_html($skudo_styleColor).";
	}
	
	.navbar-collapse ul.menu-depth-1 li:not(.skudo_mega_hide_link) a, .dl-menuwrapper li:not(.skudo_mega_hide_link) a, .gosubmenu, .nav-container .skudo_minicart ul li, .nav-style-6 ul.menu-depth-1 li a {";
		$font = get_option('skudo_sub_menu_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."', sans-serif;
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_sub_menu_font_size'),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color'))).";";
		if (get_option('skudo_sub_menu_uppercase') === 'on') $skudo_style_data .= "text-transform: uppercase;\n";
		$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_sub_menu_letter_spacing'),10))."px;
	}
	.dl-back{color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color')).";}
	
	.navbar-collapse ul.menu-depth-1 li:not(.skudo_mega_hide_link):hover > a, .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > a, .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > a, .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > .gosubmenu, .dl-menuwrapper li.dl-back:hover, .navbar-nav:not(.cd-primary-nav) .dropdown-menu a:hover i, .dropdown-menu li.menu-item-has-children:not(.skudo_mega_hide_link):hover > a:before{
		color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color_hover'))." !important;
	}
		
	.menu-simple ul.menu-depth-1, .menu-simple ul.menu-depth-1 ul, .menu-simple ul.menu-depth-1, .menu-simple #dl-menu ul{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	
	
	.navbar-collapse .skudo_mega_menu ul.menu-depth-2, .navbar-collapse .skudo_mega_menu ul.menu-depth-2 ul {background-color: transparent !important;} 
	
	.dl-menuwrapper li:not(.skudo_mega_hide_link):hover > a{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color_hover")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	.menu-simple li:not(.skudo_mega_menu) li.menu-item-depth-1:hover > a, .menu-simple li.menu-item-depth-2:hover > a, .menu-simple li.menu-item-depth-3:hover > a{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color_hover")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	.menu-square li:not(.skudo_mega_menu) li.menu-item-depth-1:hover > a, .menu-square li.menu-item-depth-2:hover > a, .menu-square li.menu-item-depth-3:hover > a{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color_hover")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	
	
	.navbar-collapse li:not(.skudo_mega_menu) ul.menu-depth-1 li:not(:first-child){
		border-top: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
	}
	
	
	
	.navbar-collapse li.skudo_mega_menu ul.menu-depth-2{
		border-right: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
	}
	.rtl .navbar-collapse li.skudo_mega_menu ul.menu-depth-2{
		border-left: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
	}
		
	#dl-menu ul li:not(:last-child) a, .skudo_sub_menu_border_color{
		border-bottom: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
	}
	
	.navbar-collapse ul.navbar-nav > li > a, .navbar-collapse > .header_style2_menu > ul > li > a, .skudo-header-button a, div.nav-style-6 > ul > .menu_items_wrapper > li > a {";
		$font = get_option('skudo_menu_font_pre_'.$skudo_header_style_pre); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."', sans-serif;
		font-weight: ".esc_html($font[1])." !important;
		font-size: ".esc_html(intval(get_option('skudo_menu_font_size_pre_'.$skudo_header_style_pre),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_pre_'.$skudo_header_style_pre))).";";
		if (get_option('skudo_menu_uppercase_pre_'.$skudo_header_style_pre) === 'on') $skudo_style_data .= "text-transform: uppercase;\n"; else $skudo_style_data .= "text-transform:none;\n";
		$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_menu_letter_spacing_pre_'.$skudo_header_style_pre),10))."px;
	}
	
	.skudo-header-button a{
		background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_header_button_bg_color'))).";
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_header_button_text_color'))).";
		-webkit-border-radius:".esc_html(get_option("skudo_header_button_border_radius")).";-moz-border-radius:".esc_html(get_option("skudo_header_button_border_radius")).";-ms-border-radius:".esc_html(get_option("skudo_header_button_border_radius")).";-o-border-radius:".esc_html(get_option("skudo_header_button_border_radius")).";border-radius:".esc_html(get_option("skudo_header_button_border_radius")).";
	}
	.skudo-header-button a:hover{
		background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_header_button_bg_hover_color'))).";
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_header_button_text_hover_color'))).";
	}
	
	.navbar-collapse > .header_style2_menu > ul > li > a:hover, 
	.navbar-collapse > .header_style2_menu > ul > li.current-menu-ancestor > a, 
	.navbar-collapse > .header_style2_menu > ul > li.current-menu-item > a, 
	.navbar-collapse > .header_style2_menu > ul > li > a.selected,
	.navbar-collapse > .header_style2_menu > ul > li > a.hover_selected,
	.navbar-collapse ul.navbar-nav > li > a:hover, 
	.navbar-collapse ul.navbar-nav > li.current-menu-ancestor > a, 
	.navbar-collapse ul.navbar-nav > li.current-menu-item > a, 
	.navbar-collapse ul.navbar-nav > li > a.selected,
	.navbar-collapse ul.navbar-nav > li > a.hover_selected{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre)))." !important;
	}
	
	
	.header.navbar .navbar-collapse ul li:hover a 
	{
		background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre))).";
		color: #fff !important;
	}
	
	header.navbar-default.skudo-underlining .navbar-nav > li:hover > a:before{
		border-bottom-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre)))." !important;
	}
	
	header.navbar-default.header_after_scroll.skudo-underlining .navbar-nav > li:hover > a:before{
		border-bottom-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_after_'.$skudo_header_style_after)))." !important;
	}
	
	
	";
	
	if (get_option('skudo_menu_add_border_pre_'.$skudo_header_style_pre) == "on"){
		$skudo_style_data .= ".navbar-collapse ul.menu-depth-1, .nav-container .skudo_minicart{padding-top:3px !important;border-top:1px solid #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_border_color_pre_'.$skudo_header_style_pre))." !important;}";
	}
	
	$skudo_style_data .= "
	
	
	header.style2 .navbar-nav > li, .navbar-default.menu-square.style2 .navbar-nav > li {padding-top:0px;}
	header.style2{
		padding-bottom:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px;
	}
	header.style2 .header_style2_menu{
		margin-top:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px !important;
	}
	
	.navbar-default .navbar-nav > li > a{
		padding-right:".esc_html(intval(get_option('skudo_menu_side_margin_pre_'.$skudo_header_style_pre),10))."px;
		padding-left:".esc_html(intval(get_option('skudo_menu_side_margin_pre_'.$skudo_header_style_pre),10))."px;
		padding-top:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px;
		padding-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10))."px;
		//margin-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10)-2)."px;
	}
	
/*
	.navbar-default .navbar-nav > li > ul {
		margin-top:-".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10)-2)."px !important;
	}
*/
	
	header .skudo-header-button{margin-top:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px;}
	
	header.style5 .skudo_right_header_icons,
	header.style1 .skudo_right_header_icons,
	header.style2 .skudo_right_header_icons,
	header.style4 .skudo_right_header_icons,
	header.style6 .skudo_right_header_icons
	{
		padding-top:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px;
		padding-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10))."px;
		
	}
	
	header .skudo_right_header_icons .icon, header .skudo_right_header_icons{
		height: 25px;
		
	}
	header .skudo_right_header_icons{
		margin-left: 50px;
		
	}
	
	header.style2 .header_style2_menu{ ";
	$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color")));
	$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	header:not(.header_after_scroll) .navbar-nav > li > ul{
		margin-top:".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10))."px;
	}

	header:not(.header_after_scroll) .dl-menuwrapper button:after{
		background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre))).";
		box-shadow: 0 6px 0 #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre))).", 0 12px 0 #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_pre_'.$skudo_header_style_pre))).";
	}

	.skudo_minicart_wrapper{
		padding-top: ".esc_html(intval(get_option('skudo_menu_padding_bottom_pre_'.$skudo_header_style_pre),10))."px;
	}
	
	li.skudo_mega_hide_link > a, li.skudo_mega_hide_link > a:hover{";
		$font = get_option('skudo_label_menu_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."' !important;
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_label_menu_font_size'),10))."px !important;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_label_menu_color')))." !important;";
		if (get_option('skudo_label_menu_uppercase') === 'on') $skudo_style_data .= "text-transform: uppercase !important;\n";
		$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_label_menu_letter_spacing'),10))."px !important;
	}
	
/*
	.nav-container .skudo_minicart li a:hover {";
		$font = get_option('skudo_label_menu_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_label_menu_color')))." !important;
		text-decoration: none;
	}
*/
	.nav-container .skudo_minicart li a{";
		$font = get_option('skudo_sub_menu_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_sub_menu_font_size'),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color'))).";";
		if (get_option('skudo_sub_menu_uppercase') === 'on') $skudo_style_data .= "text-transform: uppercase;\n";
		$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_sub_menu_letter_spacing')),10)."px;
	}
	
	.dl-trigger{";
		$font = get_option('skudo_menu_font_pre_'.$skudo_header_style_pre); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."' !important;
		font-weight: ".esc_html($font[1])." !important;
		font-size: ".esc_html(intval(get_option('skudo_menu_font_size_pre_'.$skudo_header_style_pre),10))."px;";
		if (get_option('skudo_menu_uppercase_pre_'.$skudo_header_style_pre) === 'on') $skudo_style_data .= "text-transform: uppercase;\n";
		$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_menu_letter_spacing_pre_'.$skudo_header_style_pre),10))."px;
	}
	
	.skudo_minicart{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	.page_content a, header a, #big_footer a{";
		$font = get_option('skudo_links_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_links_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_links_color")))."
	}
	
	
	.archive .the_title h2 a, .page-template-blog-template .the_title h2 a, .home.blog .blog-default.wideblog .container .the_title h2 a{";
		$font = get_option('skudo_blog_normal_title_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1])." !important;
		font-size: ".esc_html(intval(get_option('skudo_blog_normal_title_size'), 10))."px !important;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_blog_normal_title_color")))."
	}
	
	
	.blog-default-bg-masonry .the_title h2 a{";
		$font = get_option('skudo_blog_masonry_title_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1])." !important;
		font-size: ".esc_html(intval(get_option('skudo_blog_masonry_title_size'), 10))."px !important;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_blog_masonry_title_color")))."
	}
	
	
	.page_content .vc_column-inner a:not(.vc_btn3):not(.ult_price_action_button):hover, header a:hover, #big_footer a:hover, .page-template-blog-masonry-template .posts_category_filter li:active,.page-template-blog-masonry-template .posts_category_filter li:focus,.metas-container a:hover, .master_container a:active, .master_container .vc_column-inner a:not(.vc_btn3):hover{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_links_color_hover")))." !important;
		background-color: #".esc_html( is_array(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_links_bg_color_hover"))) ? "" : str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_links_bg_color_hover")) ).";
	}
	.ult_tabmenu.style2 li.ult_tab_li a:hover, .special_tabs.text .label.current a:hover, .special_tabs.icontext .label.current a:hover, .special_tabs.text .label.current a:hover {
    color: #fff !important;
}
	.single_about_author a:hover{ color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_links_color_hover")))." !important; }
	
	h1{";
		$font = get_option('skudo_h1_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h1_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_h1_color"))).";
	}
	
	h2{";
		$font = get_option('skudo_h2_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h2_size'), 10))."px;
		color: #".esc_html(get_option('skudo_h2_color')).";
	}
	
	h3{";
		$font = get_option('skudo_h3_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h3_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_h3_color"))).";
	}
	
	h4{";
		$font = get_option('skudo_h4_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h4_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_h4_color"))).";
	}
	
	.ult-item-wrap .title h4{font-size: 16px !important;}
	.wpb_content_element .wpb_accordion_header.ui-accordion-header-active a{color: ".esc_html($skudo_styleColor).";}
	h5{";
		$font = get_option('skudo_h5_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h5_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_h5_color"))).";
	}
	
	h6{";
		$font = get_option('skudo_h6_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option('skudo_h6_size'), 10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_h6_color"))).";
	}
		
	header.navbar{";
		if (is_singular() && get_post_meta($skudo_theid, 'skudo_enable_custom_header_options_value', true) == 'yes' && get_post_meta($skudo_theid, 'skudo_custom_header_pre_transparent_value', true) == "on"){
			$skudo_style_data .= " background-color: transparent; ";
		} else {
			switch (get_option('skudo_headerbg_type_'.$skudo_header_bgstyle_pre)){
				case "color":
					$color = skudo_hex2rgb( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_headerbg_color_".$skudo_header_bgstyle_pre) ));
					$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_headerbg_opacity_".$skudo_header_bgstyle_pre)))/100).");";
				break;
				case "image":
					$skudo_style_data .= "background-repeat:no-repeat; background-position:center center; -o-background-size: cover !important; -moz-background-size: cover !important; -webkit-background-size: cover !important; background-size: cover !important;";
					$skudo_style_data .= "background: url(" . esc_url(get_option("skudo_headerbg_image_".$skudo_header_bgstyle_pre)) . ") no-repeat fixed !important; background-size: cover !important;";  
				break;
				case "pattern":
					$skudo_style_data .= "background: url('" . esc_url(get_template_directory_uri()) . "/images/skudo_patterns/" . get_option("skudo_headerbg_pattern_".$skudo_header_bgstyle_pre) . "') 0 0 repeat !important;";
				break;
				case "custom_pattern":
					$skudo_style_data .= "background: url('" . esc_url(get_option("skudo_headerbg_custom_pattern_".$skudo_header_bgstyle_pre)) . "') 0 0 repeat !important;";
				break;
			}
		}
	$skudo_style_data .= "
	}
	
	body#boxed_layout{";
		switch (get_option("skudo_bodybg_type")){
			case "image":
				$skudo_style_data .= "background-repeat:no-repeat; background-position:center center; -o-background-size: cover !important; -moz-background-size: cover !important; -webkit-background-size: cover !important; background-size: cover !important;width: 100%;height: 100%;
	background-attachment: fixed !important;";
				$skudo_style_data .= "background: url(" . esc_url(get_option("skudo_bodybg_type_image")) . ") no-repeat;";  
			break;
			case "color":
	 			$skudo_style_data .= "background-color: #" . esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_bodybg_type_color"))) . ";";
			break;
		}
	$skudo_style_data .= "
	}
	
	header .header_style2_contact_info{";
		if (get_option("skudo_logo_margin_top")) 
			$skudo_style_data .= "margin-top: " . str_replace(" ", "", get_option("skudo_logo_margin_top")) . " !important;margin-bottom: " . str_replace(" ", "", get_option("skudo_logo_margin_top")) . " !important;
	}
	
	header .navbar-header, header.style4 .nav-container .navbar-header .navbar-brand{";
		if (get_option("skudo_logo_margin_top")) 
			$skudo_style_data .= "margin-top: " . str_replace(" ", "", get_option("skudo_logo_margin_top")) . ";margin-bottom: " . str_replace(" ", "", get_option("skudo_logo_margin_top")) . ";"; 
		if (get_option("skudo_logo_margin_left")) $skudo_style_data .= "margin-left: " . str_replace(" ", "", get_option("skudo_logo_margin_left")) . ";"; 
		if (get_option("skudo_logo_height")) $skudo_style_data .= "height:" . get_option("skudo_logo_height") . ";";
	$skudo_style_data .= "
	}
	header a.navbar-brand img{max-height: ".esc_html(intval(get_option('skudo_logo_height'),10))."px;}";
			
	$header_after_scroll = false;
	if (get_option('skudo_fixed_menu') == 'on'){
		if (get_option('skudo_header_after_scroll') == 'on'){
			$header_after_scroll = true;
			$skudo_style_data .= "
			header.navbar.header_after_scroll, header.header_after_scroll .navbar-nav > li.skudo_mega_menu > .dropdown-menu, header.header_after_scroll .navbar-nav > li:not(.skudo_mega_menu) .dropdown-menu{";
				switch (get_option('skudo_headerbg_after_scroll_type_'.$skudo_header_bgstyle_after)){
					case "color":
						$color = skudo_hex2rgb( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_headerbg_after_scroll_color_".$skudo_header_bgstyle_after) ));
						$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_headerbg_after_scroll_opacity_".$skudo_header_bgstyle_after)))/100).")";
					break;
					case "image":
						$skudo_style_data .= "background-repeat:no-repeat; background-position:center center; -o-background-size: cover !important; -moz-background-size: cover !important; -webkit-background-size: cover !important; background-size: cover !important;";
						$skudo_style_data .= "background: url(" . esc_url(get_option("skudo_headerbg_after_scroll_image_".$skudo_header_bgstyle_after)) . ") no-repeat fixed !important; background-size: cover !important;";  
					break;
					case "pattern":
						$skudo_style_data .= "background: url('" . esc_url(get_template_directory_uri()) . "/images/skudo_patterns/" . get_option("skudo_headerbg_after_scroll_pattern_".$skudo_header_bgstyle_after) . "') 0 0 repeat !important;";
					break;
					case "custom_pattern":
						$skudo_style_data .= "background: url('" . esc_url(get_option("skudo_headerbg_after_scroll_custom_pattern_".$skudo_header_bgstyle_after)) . "') 0 0 repeat !important;";
					break;
				}
			$skudo_style_data .= "
			}
			";
			$header_shrink = false;
			if (get_option('skudo_fixed_menu') == 'on'){
				if (get_option('skudo_header_after_scroll') == 'on'){
					if (get_option('skudo_header_shrink_effect') == 'on'){
						$header_shrink = true;
						$skudo_style_data .= "header.header_after_scroll a.navbar-brand img.logo_after_scroll{max-height: ". esc_html(intval(get_option('skudo_logo_reduced_height'),10))."px;}";
					}
				}
			}
			
			$skudo_style_data .= "
			header.header_after_scroll .navbar-collapse ul.menu-depth-1 li:not(.skudo_mega_hide_link) a, header.header_after_scroll .dl-menuwrapper li:not(.skudo_mega_hide_link) a, header.header_after_scroll .gosubmenu {
				color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color'))).";
			}
			header.header_after_scroll .dl-back{color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color'))).";}
			
			header.header_after_scroll .navbar-collapse ul.menu-depth-1 li:not(.skudo_mega_hide_link):hover > a, header.header_after_scroll .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > a, header.header_after_scroll .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > a, header.header_after_scroll .dl-menuwrapper li:not(.skudo_mega_hide_link):hover > header.header_after_scroll .gosubmenu, header.header_after_scroll .dl-menuwrapper li.dl-back:hover, header.header_after_scroll.navbar .nav-container .dropdown-menu li:hover{
				color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_color_hover')))." !important;
			}
			
			header ul.menu-depth-1,
			header ul.menu-depth-1 ul,
			header ul.menu-depth-1 ul li,
			header #dl-menu ul,
			header.header_after_scroll ul.menu-depth-1,
			header.header_after_scroll ul.menu-depth-1 ul,
			header.header_after_scroll ul.menu-depth-1 ul li,
			header.header_after_scroll #dl-menu ul{";
				$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color")));
				$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
			}
			
			header.header_after_scroll .navbar-collapse .skudo_mega_menu ul.menu-depth-2, header.header_after_scroll .navbar-collapse .skudo_mega_menu ul.menu-depth-2 ul {background-color: transparent !important;} 
			

			header li:not(.skudo_mega_menu) ul.menu-depth-1 li:hover, header li.skudo_mega_menu li.menu-item-depth-1 li:hover, header #dl-menu ul li:hover
			,header.header_after_scroll li:not(.skudo_mega_menu) ul.menu-depth-1 li:hover, header.header_after_scroll li.skudo_mega_menu li.menu-item-depth-1 li:hover, header.header_after_scroll #dl-menu ul li:hover{";
				$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color_hover")));
				$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
			}

			
			header.header_after_scroll .navbar-collapse li:not(.skudo_mega_menu) ul.menu-depth-1 li:not(:first-child){
				border-top: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
			}
			header.header_after_scroll .navbar-collapse li.skudo_mega_menu ul.menu-depth-2{
				border-right: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
			}
			header.header_after_scroll #dl-menu li:not(:last-child) a, header.header_after_scroll #dl-menu ul li:not(:last-child) a{
				border-bottom: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_sub_menu_border_color'))).";
			}
			
			.header_after_scroll .navbar-collapse ul.navbar-nav > li > a, .header_after_scroll .navbar-collapse > .header_style2_menu > ul > li > a{";
				$font = get_option('skudo_menu_font_after_'.$skudo_header_style_after); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
				$skudo_style_data .= "
				font-family: '".wp_kses_post($font[0])."';
				font-weight: ".esc_html($font[1]).";
				font-size: ".esc_html(intval(get_option('skudo_menu_font_size_after_'.$skudo_header_style_after),10))."px;
				color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_after_'.$skudo_header_style_after))).";";
				if (get_option('skudo_menu_uppercase_after_'.$skudo_header_style_after) === 'on') $skudo_style_data .= "text-transform: uppercase;\n"; else $skudo_style_data .= "text-transform:none;\n";
				$skudo_style_data .= "letter-spacing: ".esc_html(intval(get_option('skudo_menu_letter_spacing_after_'.$skudo_header_style_after),10))."px;
			}
			
			.header_after_scroll .navbar-collapse > .header_style2_menu > ul > li > a:hover,
			.header_after_scroll .navbar-collapse > .header_style2_menu > ul > li.current-menu-ancestor > a,
			.header_after_scroll .navbar-collapse > .header_style2_menu > ul > li.current-menu-item > a,
			.header_after_scroll .navbar-collapse > .header_style2_menu > ul > li > a.selected,
			.header_after_scroll .navbar-collapse > .header_style2_menu > ul > li > a.hover_selected,
			.header_after_scroll .navbar-collapse ul.navbar-nav > li > a:hover,
			.header_after_scroll .navbar-collapse ul.navbar-nav > li.current-menu-ancestor > a,
			.header_after_scroll .navbar-collapse ul.navbar-nav > li.current-menu-item > a,
			.header_after_scroll .navbar-collapse ul.navbar-nav > li > a.selected, .header_after_scroll .navbar-collapse ul.navbar-nav > li > a.hover_selected{
				color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_after_'.$skudo_header_style_after)))." !important;
			}
			
			.header_after_scroll .dl-menuwrapper button:after{
				background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_after_'.$skudo_header_style_after))).";
				box-shadow: 0 6px 0 #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_after_'.$skudo_header_style_after))).", 0 12px 0 #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_color_hover_after_'.$skudo_header_style_after))).";
			}";
			
			if (get_option('skudo_menu_add_border_after_'.$skudo_header_style_after) == "on"){
				$skudo_style_data .= ".header_after_scroll .navbar-collapse ul.menu-depth-1, .header_after_scroll .nav-container .skudo_minicart{padding-top:3px !important;border-top:3px solid #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option('skudo_menu_border_color_after_'.$skudo_header_style_after))." !important;}";
			}
			$skudo_style_data .= "
			header.header_after_scroll li.skudo_mega_hide_link > a, header.header_after_scroll li.skudo_mega_hide_link > a:hover{
				color: #".esc_html(get_option('skudo_label_menu_after_scroll_color'))." !important;
			}";
			
			$header_shrink = false;
			if (get_option('skudo_fixed_menu') == 'on'){
				if (get_option('skudo_header_after_scroll') == 'on'){
					if (get_option('skudo_header_shrink_effect') == 'on'){
						$header_shrink = true;
						$skudo_style_data .= "
						header.header_after_scroll.navbar-default .navbar-nav > li > a, header.headerclone.navbar-default .navbar-nav > li > a {
							padding-right:".esc_html(intval(get_option('skudo_menu_side_margin_after_'.$skudo_header_style_after),10))."px;
							padding-left:".esc_html(intval(get_option('skudo_menu_side_margin_after_'.$skudo_header_style_after),10))."px;
							padding-top:".esc_html(intval(get_option('skudo_menu_margin_top_after_'.$skudo_header_style_after),10))."px;
							padding-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_after_'.$skudo_header_style_after),10))."px;
							 /*margin-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_after_'.$skudo_header_style_after),10))."px;*/
							 margin-bottom: 0px;
						}
						
						 /*header.header_after_scroll.navbar-default .navbar-nav > li > a::before{
							margin-top:".esc_html(intval(get_option('skudo_menu_padding_bottom_after_'.$skudo_header_style_after),10)-2)."px;
							margin-bottom: 0px;
						}*/
						
						header.header_after_scroll .skudo-header-button{margin-top:".esc_html(intval(get_option('skudo_menu_margin_top_after_'.$skudo_header_style_after),10))."px;}
						
						header.header_after_scroll.style2 .navbar-nav > li, .navbar-default.menu-square.style2 .navbar-nav > li {padding-top:0px;}
						header.header_after_scroll.style2{
							padding-bottom:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_after),10))."px;
						}
						header.header_after_scroll.style2 .header_style2_menu{
							margin-top:".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_after),10))."px !important;
						}
						
						header.style5.header_after_scroll .skudo_right_header_icons,
						header.style1.header_after_scroll .skudo_right_header_icons,
						header.style2.header_after_scroll .skudo_right_header_icons,
						header.style4.header_after_scroll .skudo_right_header_icons,
						header.style6.header_after_scroll .skudo_right_header_icons
						{
							padding-top:".esc_html(intval(get_option('skudo_menu_margin_top_after_'.$skudo_header_style_after),10))."px;
							padding-bottom:".esc_html(intval(get_option('skudo_menu_padding_bottom_after_'.$skudo_header_style_after),10))."px;
						}
						
						header.header_after_scroll .navbar-nav > li > ul{
							margin-top:0px !important;
						}
					
						header.header_after_scroll .skudo_minicart_wrapper{
							padding-top:".esc_html(intval(get_option('skudo_menu_padding_bottom_after_'.$skudo_header_style_after),10))."px;
						}
						";
					}
				}
			}
		}
	}
		
		
	$header_shrink = false;
	if (get_option('skudo_fixed_menu') == 'on'){
		if (get_option('skudo_header_after_scroll') == 'on'){
			if (get_option('skudo_header_shrink_effect') == 'on'){
				$header_shrink = true;
				$skudo_style_data .= "
				header.header_after_scroll .header_style2_contact_info{";
					if (get_option("skudo_logo_after_scroll_margin_top")) $skudo_style_data .= "margin-top: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_margin_top")) . " !important;margin-bottom: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_margin_top")) . " !important;
				}
				header.header_after_scroll .navbar-header, header.style4.header_after_scroll .nav-container .navbar-header .navbar-brand{";
					if (get_option("skudo_logo_after_scroll_margin_top")) $skudo_style_data .= "margin-top: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_margin_top")) . ";margin-bottom: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_margin_top")) . ";"; 
					if (get_option("skudo_logo_after_scroll_margin_left")) $skudo_style_data .= "margin-left: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_margin_left")) . ";"; 
					if (get_option("skudo_logo_reduced_height")) $skudo_style_data .= "height:" . get_option("skudo_logo_reduced_height") . ";"; 
					else {
						if (get_option("skudo_logo_height")) $skudo_style_data .= "height:" . get_option("skudo_logo_height") . ";";
					}
				$skudo_style_data .= "
				}
				header.header_after_scroll a.navbar-brand h1{
					font-size: " . str_replace(" ", "", get_option("skudo_logo_after_scroll_size")) . " !important;
				}
				";
			}
		}
	}
	
	if (get_option("skudo_info_above_menu") == "on"){
		$color = skudo_hex2rgb( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_bg_color") ));
		$skudo_style_data .= "
		header .top-bar .top-bar-bg, header .top-bar #lang_sel a.lang_sel_sel, header .top-bar #lang_sel > ul > li > ul > li > a{
			background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_topbar_bg_opacity")))/100).");
		}
		header .top-bar ul.phone-mail li, header .top-bar ul.phone-mail li i{
			color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_text_color") )).";
		}
		header .top-bar a, header .top-bar ul.phone-mail li a{
			color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_links_color") ))." !important;
		}
		header .top-bar a:hover, header .top-bar ul.phone-mail li a:hover{
			color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_links_hover_color") ))." !important;
		}
		header .top-bar .social-icons-fa li a, header.style3 .search_trigger .icon{
			color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_social_color") ))." !important;
		}
		header .top-bar .social-icons-fa li a:hover, header.style3 .search_trigger .icon:hover{
			color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_social_hover_color") ))." !important;
		}
		header .top-bar *{
			border-color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_borders_color") ))." !important;
		}
		header .top-bar .down-button{
			border-color: transparent rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_topbar_bg_opacity")))/100).") transparent transparent !important;
		}
		header .top-bar.opened .down-button{
			border-color: transparent #fff transparent transparent !important;
		}
		";
	}
	$skudo_style_data .= "
	#primary_footer > .container, #primary_footer > .no-fcontainer{
		padding-top:".esc_html(intval(get_option('skudo_primary_footer_padding_top'),10))."px;
		padding-bottom:".esc_html(intval(get_option('skudo_primary_footer_padding_bottom'),10))."px;
	}
/* 	#primary_footer */#big_footer{";
		switch (get_option("skudo_footerbg_type")){
			case "image":
				$skudo_style_data .= "background-repeat:no-repeat; background-position:center center; -o-background-size: cover !important; -moz-background-size: cover !important; -webkit-background-size: cover !important; background-size: cover !important;";
				$skudo_style_data .= "background: url(" . esc_url(get_option("skudo_footerbg_image")) . ") no-repeat; background-size: cover !important;";  
			break;
			case "color":
				$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_color")));
				$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_footerbg_color_opacity")))/100).");";
			break;
			case "pattern":
				$skudo_style_data .= "background: url('" . esc_url(get_template_directory_uri()) . "/images/skudo_patterns/" . esc_html(get_option("skudo_footerbg_pattern")) . "') 0 0 repeat !important;";
			break;
			case "custom_pattern":
				$skudo_style_data .= "background: url('" . esc_url(get_option("skudo_footerbg_custom_pattern")) . "') 0 0 repeat !important;";
			break;
		}
	$skudo_style_data .= "
	}
	
	#primary_footer input, 
	#primary_footer textarea{";
		switch (get_option("skudo_footerbg_type")){
			case "image": case "pattern": case "custom_pattern":
				$skudo_style_data .= "background: transparent;";  
			break;
			case "color":
				$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_color")));
				$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_footerbg_color_opacity")))/100).");";
			break;
		}
	$skudo_style_data .= "
	}
	header.header_not_fixed ul.menu-depth-1,
	header.header_not_fixed ul.menu-depth-1 ul,
	header.header_not_fixed ul.menu-depth-1 ul li,
	header.header_not_fixed #dl-menu ul{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}

	header.header_not_fixed li:not(.skudo_mega_menu) ul.menu-depth-1 li:hover, header.header_not_fixed li.skudo_mega_menu li.menu-item-depth-1 li:hover, header.header_not_fixed #dl-menu ul li:hover{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sub_menu_bg_color_hover")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sub_menu_bg_opacity")))/100).") !important;
	}
	
	
 	#primary_footer input:not(input.button), 
	#primary_footer textarea{
		border: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_borderscolor")))." !important;
	}
	
	#big_footer .widget-newsletter input{
		background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_borderscolor")))." !important;
	}
	
	.footer_sidebar ul:not(.instagram-pics) li{
		border-bottom: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_borderscolor")))." !important;
	}
	.footer_sidebar ul:not(.instagram-pics) li:first-child{
		border-top: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_borderscolor")))." !important;
	}
	
	
	.footer_sidebar table td, .footer_sidebar table th, .footer_sidebar .wp-caption{
		border: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_borderscolor"))).";
	}
	#primary_footer a, .widget-contact-info-content{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_linkscolor"))).";
	}
	
	#primary_footer, #primary_footer p, #big_footer input, #big_footer textarea{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_paragraphscolor"))).";
	}
	
	#primary_footer .footer_sidebar > h4, #primary_footer .footer_sidebar > .widget > h4, #primary_footer .widget .widget-contact-content h4 {
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_footerbg_headingscolor"))).";
	}
	
	#secondary_footer{";
		switch (get_option("skudo_sec_footerbg_type")){
			case "image":
				$skudo_style_data .= "background-repeat:no-repeat; background-position:center center; -o-background-size: cover !important; -moz-background-size: cover !important; -webkit-background-size: cover !important; background-size: cover !important;";
				$skudo_style_data .= "background: url(" . esc_url(get_option("skudo_sec_footerbg_image")) . ") no-repeat fixed !important; background-size: cover !important;";  
			break;
			case "color":
				$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sec_footerbg_color")));
				$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_sec_footerbg_color_opacity")))/100).");";
			break;
			case "pattern":
				$skudo_style_data .= "background: url('" . esc_url(get_template_directory_uri()) . "/images/skudo_patterns/" . esc_html(get_option("skudo_sec_footerbg_pattern")) . "') 0 0 repeat !important;";
			break;
			case "custom_pattern":
				$skudo_style_data .= "background: url('" . esc_url(get_option("skudo_sec_footerbg_custom_pattern")) . "') 0 0 repeat !important;";
			break;
		}
		$skudo_style_data .= "
		padding-top:".esc_html(intval(get_option('skudo_secondary_footer_padding_top'),10))."px;
		padding-bottom:".esc_html(intval(get_option('skudo_secondary_footer_padding_bottom'),10))."px;
	}";
	
	if (get_option("skudo_show_sec_footer") == "on"){
		if (get_option("skudo_footer_display_logo") == "on"){
			if (get_option('skudo_footer_logo_type') == "text"){
				$skudo_style_data .= "
				#secondary_footer .footer_logo .logo{";
					$font = get_option('skudo_sec_footer_logo_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
					$skudo_style_data .= "
					font-family: '".wp_kses_post($font[0])."';
					font-weight: ".esc_html($font[1]).";
					font-size: ".esc_html(intval(get_option('skudo_sec_footer_logo_font_size'), 10))."px;
					color: #".esc_html(get_option('skudo_sec_footer_logo_font_color')).";
				}
				#secondary_footer .footer_logo .logo:hover{
					color: #".esc_html(get_option('skudo_sec_footer_logo_font_hover_color')).";
				}";
			}
		}
	}
	$skudo_style_data .= "
	
	#secondary_footer .social-icons-fa a i{
		font-size: ".esc_html(intval(get_option('skudo_sec_footer_social_icons_size'),10))."px;
		line-height: ".esc_html(intval(get_option('skudo_sec_footer_social_icons_size'),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sec_footer_social_icons_color"))).";
	}
	#secondary_footer .social-icons-fa a i:before{
		font-size: ".esc_html(intval(get_option('skudo_sec_footer_social_icons_size'),10))."px;
	}
	#secondary_footer .social-icons-fa a:hover i{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sec_footer_social_icons_hover_color"))).";
	}
	
	header.style2 .search_input{
		height: calc(100% + ".esc_html(intval(get_option('skudo_menu_margin_top_pre_'.$skudo_header_style_pre),10))."px);
	}
	
	body > .search_input{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_input_background_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_search_input_background_opacity")))/100).");
	}
	body > .search_input input.search_input_value{";
		$font = get_option("skudo_search_input_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; 	if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
	}
	body > .search_input input.search_input_value, body > .search_input .search_close{
		font-size: ".esc_html(intval(get_option("skudo_search_input_font_size"),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_input_font_color"))).";
	}
	
	body > .search_input input.search_input_value::placeholder{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_input_font_color"))).";
	}
	
	
	body > .search_input input.search_input_value::-webkit-input-placeholder, body > .search_input input.search_input_value::-moz-placeholder, body > .search_input input.search_input_value:-ms-input-placeholder, body > .search_input input.search_input_value:-moz-placeholder, body > .search_input input.search_input_value::placeholder{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_input_font_color"))).";
	}
	
	
	body > .search_input .ajax_search_results ul{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_result_background_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_search_result_background_opacity")))/100).");
	}
	body > .search_input .ajax_search_results ul li.selected{";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_selected_result_background_color")));
		$skudo_style_data .= "background-color: rgba(".esc_html($color[0].",".$color[1].",".$color[2].",".intval(str_replace("%","",get_option("skudo_search_result_background_opacity")))/100).");
	}
	body > .search_input .ajax_search_results ul li{
		border-bottom: 1px solid #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_result_borders"))).";
	}
	body > .search_input .ajax_search_results ul li a{";
		$font = get_option("skudo_search_input_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; 	if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option("skudo_search_result_font_size"),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_result_font_color")))."
	}
	body > .search_input .ajax_search_results ul li.selected a{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_selected_result_font_color")))."
	}
	body > .search_input .ajax_search_results ul li a span, body > .search_input .ajax_search_results ul li a span i{";
		$font = get_option("skudo_search_result_details_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		font-size: ".esc_html(intval(get_option("skudo_search_result_details_font_size"),10))."px;
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_result_details_font_color")))."
	}
	body > .search_input .ajax_search_results ul li.selected a span{
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_search_selected_result_details_font_color")))."
	}";
	
	
	$loader = ((is_page_template() && get_post_meta(get_the_ID(), 'skudo_enable_custom_header_options_value', true) == "yes") || (is_single() && get_post_meta(get_the_ID(), 'skudo_enable_custom_header_options_value', true) == "yes")) ? get_post_meta(get_the_ID(), 'skudo_enable_website_loading_value', true) : get_option("skudo_enable_website_loader");
	if ($loader == "on"){
		$skudo_style_data .= "
		body #skudo_website_load, #skudo_website_load .load2 .loader:before, #skudo_website_load .load2 .loader:after, #skudo_website_load .load3 .loader:after{background: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_background"))).";}
		
		.ball-pulse>div, .ball-pulse-sync>div, .ball-scale>div, .ball-rotate>div, .ball-rotate>div:before, .ball-clip-rotate>div, .ball-clip-rotate-pulse>div:first-child, .ball-beat>div, .ball-scale-multiple>div, .ball-triangle-path>div, .ball-pulse-rise>div, .ball-grid-beat>div, .ball-grid-pulse>div, .ball-spin-fade-loader>div, .ball-zig-zag>div, .ball-zig-zag-deflect>div, .line-scale>div, .line-scale-party>div, .line-scale-pulse-out>div, .line-scale-pulse-out-rapid>div, .line-spin-fade-loader>div, .square-spin>div, .pacman>div:nth-child(3),.pacman>div:nth-child(4),.pacman>div:nth-child(5),.pacman>div:nth-child(6), .cube-transition>div, .ball-rotate>div:after, .ball-rotate>div:before, #skudo_website_load .load3 .loader:before, #skudo_website_load .load3 .loader:before{background-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}

		.ball-clip-rotate>div{border-top-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-left-color: #". esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-right-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}

		.ball-clip-rotate-pulse>div:last-child, .ball-clip-rotate-multiple>div:last-child{border-top-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-bottom-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}
		
		.ball-clip-rotate-multiple>div{border-right-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-left-color:#". esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}

		.ball-triangle-path>div, .ball-scale-ripple>div, .ball-scale-ripple-multiple>div{border-color:#".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}
		
		.pacman>div:first-of-type, .pacman>div:nth-child(2){border-top-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-left-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";border-bottom-color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}
		
		.load2 .loader{box-shadow:inset 0 0 0 1em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}";
		$color = skudo_hex2rgb(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")));
		$skudo_style_data .= "
		.load3 .loader{background:#".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";background:-moz-linear-gradient(left, #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")))." 10%, rgba(".esc_html($color[0].",".$color[1].",".$color[2]).", 0) 42%);background:-webkit-linear-gradient(left, #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")))." 10%, rgba(".esc_html($color[0].",".$color[1].",".$color[2]).", 0) 42%);background:-o-linear-gradient(left, #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")))." 10%, rgba(".esc_html($color[0].",".$color[1].",".$color[2]).", 0) 42%);background:-ms-linear-gradient(left, #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")))." 10%, rgba(".esc_html($color[0].",".$color[1].",".$color[2]).", 0) 42%);background:linear-gradient(to right, #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color")))." 10%, rgba(".esc_html($color[0].",".$color[1].",".$color[2]).", 0) 42%);}
			
		.load6 .loader{font-size:50px;text-indent:-9999em;overflow:hidden;width:1em;height:1em;border-radius:50%;position:relative;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0);-webkit-animation:load6 1.7s infinite ease;animation:load6 1.7s infinite ease}@-webkit-keyframes 'load6'{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}5%,95%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}10%,59%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.087em -0.825em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.173em -0.812em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.256em -0.789em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.297em -0.775em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}20%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.338em -0.758em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.555em -0.617em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.671em -0.488em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.749em -0.34em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}38%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.377em -0.74em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.645em -0.522em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.775em -0.297em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.82em -0.09em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}}@keyframes 'load6'{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg);box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}5%,95%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}10%,59%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.087em -0.825em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.173em -0.812em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.256em -0.789em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.297em -0.775em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}20%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.338em -0.758em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.555em -0.617em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.671em -0.488em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.749em -0.34em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}38%{box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.377em -0.74em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.645em -0.522em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.775em -0.297em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", -0.82em -0.09em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg);box-shadow:0 -0.83em 0 -0.4em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.42em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.44em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.46em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).", 0 -0.83em 0 -0.477em #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_color"))).";}}";
		
		if (get_option("skudo_enable_website_loader_percentage") == "on"){
			$skudo_style_data .= "
			body #skudo_website_load .percentage{";
				$font = get_option("skudo_loader_percentage_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
				$skudo_style_data .= "
				font-family: '".wp_kses_post($font[0])."', sans-serif;
				font-weight: ".esc_html($font[1]).";
				font-size: ".esc_html(intval(get_option("skudo_loader_percentage_font_size"),10))."px;
				color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_loader_percentage_font_color"))).";
			}
			";
		}
	}
	
	$skudo_style_data .= "
	.skudo_breadcrumbs, .skudo_breadcrumbs a, .skudo_breadcrumbs span{";
		$font = get_option("skudo_breadcrumbs_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; 		if (!isset($font[1])) $font[1] = "";
		$skudo_style_data .= "
		font-family: '".wp_kses_post($font[0])."';
		font-weight: ".esc_html($font[1]).";
		color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_breadcrumbs_color"))).";
		font-size: ".esc_html(intval(get_option("skudo_breadcrumbs_size"),10))."px;
	}

	#menu_top_bar > li ul{background: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_submenu_bg_color")).";}
	#menu_top_bar > li ul li:hover{background: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_submenu_bg_hover_color")).";}
	#menu_top_bar > li ul a{color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_submenu_text_color"))." !important;}
	#menu_top_bar > li ul a:hover, #menu_top_bar > li ul li:hover > a{color: #".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_topbar_submenu_text_hover_color")))." !important;}
	
	header.navbar .nav-container .skudo_right_header_icons .icon, header .menu-controls .icon, header.style2 span.social_container i, header .menu-controls .icon, header .social_container i{color: #". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_icons_color_".$skudo_header_bgstyle_pre) )." !important;}
	
	header.style6 .cd-nav-trigger .cd-icon, header.style6 .cd-nav-trigger .cd-icon::before, header.style6 .cd-nav-trigger .cd-icon:after{background-color:#". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_icons_color_".$skudo_header_bgstyle_pre) )." !important;}
	
	header.navbar .nav-container .skudo_right_header_icons .icon:hover, header .menu-controls .skudo_right_header_icons .icon:hover, header.style2 span.social_container:hover i, header .social_container:hover i{color: #". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_icons_hover_color_".$skudo_header_bgstyle_pre) )." !important;}
	
	header.style6 .cd-nav-trigger:not(.close-nav) .cd-icon:hover, header.style6 .cd-nav-trigger .cd-icon:hover::before, header.style6 .cd-nav-trigger .cd-icon:hover:after{background-color:#". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_icons_hover_color_".$skudo_header_bgstyle_pre) )." !important}
	
	header.header_after_scroll.navbar .nav-container .skudo_right_header_icons .icon, header .menu-controls .skudo_right_header_icons .icon, header.header_after_scroll .social_container i{color: #". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_after_scroll_icons_color_".$skudo_header_bgstyle_after) )." !important;}
	
	header.header_after_scroll.style6 .cd-nav-trigger .cd-icon, header.header_after_scroll.style6 .cd-nav-trigger .cd-icon::before, header.header_after_scroll.style6 .cd-nav-trigger .cd-icon:after{background-color:#". str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_after_scroll_icons_color_".$skudo_header_bgstyle_after) )." !important;}
	
	header.header_after_scroll.navbar .nav-container .skudo_right_header_icons .icon:hover, header .menu-controls .skudo_right_header_icons .icon:hover, header.header_after_scroll .social_container:hover i{color: #".esc_html( str_replace( "__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_header_after_scroll_icons_hover_color_".$skudo_header_bgstyle_after) ))." !important;}
	
	header.header_after_scroll.style6 .cd-nav-trigger .cd-icon:hover, header.header_after_scroll.style6 .cd-nav-trigger .cd-icon:hover::before, header.header_after_scroll.style6 .cd-nav-trigger .cd-icon:hover:after{background-color:#". str_replace( "__USE_THEME_MAIN_COLOR_", $skudo_color_code, get_option("skudo_header_after_scroll_icons_hover_color_".$skudo_header_bgstyle_after) )." !important;}
	
// 	nav.nav-style-6 .navbar-nav, .cd-overlay-nav span, .cd-nav-trigger .cd-nav-bg{background-color:#{$skudo_color_code}; }
	
	.cd-overlay-content span, .cd-nav-bg-fake{background-color:#".esc_html(str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_bodybg_type_color")))." !important;}
	
	";
	
	
	//sliding panel
	$skudo_style_data .= "
		.skudo-push-sidebar.skudo-push-sidebar-right{background-color:#".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sliding_panel_background_color"))." !important;}
		
		.skudo-push-sidebar .widget h2 > .widget_title_span, .skudo-push-sidebar .wpb_content_element .wpb_accordion_header a, .skudo-push-sidebar .custom-widget h4, .skudo-push-sidebar .widget.des_cubeportfolio_widget h4, .skudo-push-sidebar .widget.des_recent_posts_widget h4, .skudo-push-sidebar, .skudo-push-sidebar .widget h4{
			";
			$font = get_option("skudo_sliding_panel_titles_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data .= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sliding_panel_titles_color"))." !important;
			font-size: ".esc_html(intval(get_option("skudo_sliding_panel_titles_font_size"),10))."px;
		}
		
		.skudo-push-sidebar a:not(.vc_btn3 a){
			";
			$font = get_option("skudo_sliding_panel_links_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data .= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sliding_panel_links_color"))." !important;
			font-size: ".esc_html(intval(get_option("skudo_sliding_panel_links_font_size"),10))."px;
		}
		
		.skudo-push-sidebar a:not(.vc_btn3):hover{
			color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sliding_panel_links_color_hover"))." !important;
		}
		
		.skudo-push-sidebar p, .skudo-push-sidebar a:not(.vc_btn3), .skudo-push-sidebar .widget ul li, .skudo-push-sidebar .widget span{
			";
			$font = get_option("skudo_sliding_panel_p_font"); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data .= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_sliding_panel_p_color"))." !important;
			font-size: ".esc_html(intval(get_option("skudo_sliding_panel_p_font_size"),10))."px;
		}
	";
	
	/* new typography stuffs */
	$skudo_style_data .= "
		.widget h2 > .widget_title_span, .custom-widget h4, .widget.des_cubeportfolio_widget h4, .widget.des_recent_posts_widget > h4, .sidebar .widget > h4,.widget .widget-contact-content > h4{
			";
			$font = get_option('skudo_widgets_sidebars_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data.= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			color: #".str_replace("__USE_THEME_MAIN_COLOR__", $skudo_color_code, get_option("skudo_widgets_sidebars_color")).";
			font-size: ".esc_html(intval(get_option("skudo_widgets_sidebars_size"),10))."px;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		
		#big_footer .widget h2 > .widget_title_span, #big_footer .custom-widget h4, #big_footer .widget.des_cubeportfolio_widget h4, #big_footer .widget.des_recent_posts_widget > h4, #primary_footer .footer_sidebar > h4, #primary_footer .widget h4, #primary_footer .widget .widget-contact-content h4{
			";
			$font = get_option('skudo_widgets_footer_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data.= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			font-size: ".esc_html(intval(get_option("skudo_widgets_footer_size"),10))."px !important;
		}
		
		#skudo-push-sidebar-content .widget h2 > .widget_title_span, #skudo-push-sidebar-content .custom-widget h4, #skudo-push-sidebar-content .widget.des_cubeportfolio_widget h4, #skudo-push-sidebar-content .widget.des_recent_posts_widget h4{
			";
			$font = get_option('skudo_widgets_sliding_panel_font'); $skudo_import_fonts[] = $font; $font = explode("|",$font); $font[0] = $font[0]."', 'Arial', 'sans-serif"; if (!isset($font[1])) $font[1] = "";
			$skudo_style_data.= "
			font-family: '".wp_kses_post($font[0])."';
			font-weight: ".esc_html($font[1]).";
			font-size: ".esc_html(intval(get_option("skudo_widgets_sliding_panel_size"),10))."px;
		}
	";
	
	if (get_option("enable_custom_css") == "on"){
		$skudo_customcss = get_option("skudo_custom_css");
		if (gettype($skudo_customcss) === "string" && $skudo_customcss != "") {
			$skudo_style_data .= stripslashes($skudo_customcss);
		}
	}

	wp_add_inline_style('skudo-style', $skudo_style_data);
	
}
add_action( 'wp_enqueue_scripts', 'skudo_custom_style', 2 );

?>