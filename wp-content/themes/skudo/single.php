<?php
/**
 * @package WordPress
 * @subpackage Skudo
 */

get_header(); skudo_print_menu(); ?>
	
	<?php 
		if (have_posts()) {
			the_post(); 
			$skudo_type = get_post_type();
			$skudo_portfolio_permalink = get_option("skudo_portfolio_permalink");
			switch ($skudo_type){
				case "post":
					get_template_part('post-single', 'single');
				break;
				case $skudo_portfolio_permalink:
					get_template_part('proj-single', 'single');
				break;
				default:
					the_content();
				break;
			}
		}
	?>
	
<?php get_footer(); ?>