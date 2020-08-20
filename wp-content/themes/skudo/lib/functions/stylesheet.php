<?php
function skudo_styles(){

	 if (!is_admin()){
		
		wp_enqueue_style('skudo-blog', SKUDO_CSS_PATH .'blog.css'); 
	 	wp_enqueue_style('skudo-bootstrap', SKUDO_CSS_PATH .'bootstrap.css');
		wp_enqueue_style('skudo-icons-font', SKUDO_CSS_PATH .'icons-font.css');
		wp_enqueue_style('skudo-component', SKUDO_CSS_PATH .'component.css');
		
		wp_enqueue_style('skudo-IE', SKUDO_CSS_PATH .'IE.css');	
		wp_style_add_data('skudo-IE','conditional','lt IE 9');
		
		wp_enqueue_style('skudo-shortcodes', get_template_directory_uri().'/functions/css/shortcodes.css');
		wp_enqueue_style('skudo-woo-layout', SKUDO_CSS_PATH .'skudo-woo-layout.css');
		wp_enqueue_style('skudo-woocommerce', SKUDO_CSS_PATH .'skudo-woocommerce.css');
		wp_enqueue_style('skudo-mb-ytplayer', SKUDO_CSS_PATH .'mb.YTPlayer.css');
		wp_enqueue_style('skudo-retina', SKUDO_CSS_PATH .'retina.css');
		
		
	}
}
add_action('wp_enqueue_scripts', 'skudo_styles', 1);

?>