<?php
function skudo_the_breadcrumb(){
	$delimiter = $delimiter1 = "<span class='breadcrumbs-separator'> / </span>";
    $main = sprintf(esc_html__("%s", 'skudo'), get_option('skudo_breadcrumbs_home_text'));
    if (function_exists('icl_t')){
	    $main = sprintf(esc_html__("%s", 'skudo'), icl_t( 'skudo', 'Home', get_option('skudo_breadcrumbs_home_text')));
    }
    $maxLength= 30;
    $arc_year = get_the_time('Y');
    $arc_month = get_the_time('F');
    $arc_day = get_the_time('d');
    $arc_day_full = get_the_time('l');
    $url_year = get_year_link($arc_year);
    $url_month = get_month_link($arc_year,$arc_month);
 
    if (!is_front_page()) {         
        global $post, $cat;         
        $homeLink = home_url('/');
        echo '<a href="' . esc_url($homeLink) . '">' . wp_kses_post($main) . '</a>' . wp_kses_post($delimiter);
        if (is_single()) {
			if (function_exists('is_product') && is_product()){
				$prod_cats = wp_get_post_terms( $post->ID, 'product_cat' );
				if (!empty($prod_cats)){
					$parents = array();
					foreach ($prod_cats as $key => $row){
					    $parents[$key] = $row->parent;
					}
					array_multisort($parents, SORT_ASC, $prod_cats);
					echo "<a href='".wc_get_page_permalink( 'shop' )."' >". get_the_title( wc_get_page_id('shop') ) ."</a>". wp_kses_post($delimiter);
					foreach ($prod_cats as $cat){
						echo "<a href='".wc_get_page_permalink( 'shop' ).$cat->slug."' >".$cat->name."</a>". wp_kses_post($delimiter);
					}
				}
			}
    		$terms2 = get_the_terms($post->ID, 'portfolio_type');
			$first = true;
			if(!empty($cat_type)) echo "<span>".esc_html($cat_type)."</span>".wp_kses_post($delimiter);
            if (is_single()) {
                echo "<span>".wp_kses_post(get_the_title())."</span>";
            }
        }
        elseif (is_category()) { 
            echo get_category_parents($cat, true,' ');
        }       
        elseif ( is_tag() ) { 
            echo "<span>".wp_kses_post(single_tag_title("", false))."</span>" ;
        }        
        elseif ( is_day()) { 
            echo '<a href="' . esc_url($url_year) . '">' . wp_kses_post($arc_year) . '</a> ' . wp_kses_post($delimiter) . ' ';
            echo '<a href="' . esc_url($url_month) . '">' . wp_kses_post($arc_month) . '</a> ' . wp_kses_post($delimiter . $arc_day . ' (' . $arc_day_full . ')');
        } 
        elseif ( is_month() ) {  
            echo '<a href="' . esc_url($url_year) . '">' . wp_kses_post($arc_year) . '</a> ' . wp_kses_post($delimiter) . "<span>" . wp_kses_post($arc_month) . "</span>";
        } 
        elseif ( is_year() ) {  
            echo "<span>".esc_html($arc_year)."</span>";
        }       
        elseif ( is_search() ) {  
            echo "<span>".esc_html__('Search Results for "', 'skudo') . get_search_query() . '"</span>';
        }       
        elseif ( is_page() && !$post->post_parent ) { 
            echo "<span>".esc_html(get_the_title())."</span>"; 
        }           
        elseif ( is_page() && $post->post_parent ) { 
            $post_array = get_post_ancestors($post);
             
            krsort($post_array); 
            foreach($post_array as $key=>$postid){
                $post_ids = get_post($postid);
                $title = $post_ids->post_title; 
                echo "<a href='".esc_url(get_the_permalink($postid, false))."'>".wp_kses_post($title)."</a>".wp_kses_post( $delimiter );
            }
            echo "<span>".get_the_title()."</span>"; 
        }           
        elseif ( is_author() ) {
            global $author;
            $user_info = get_userdata($author);
            echo  "<span>".esc_html__('Author&#39;s Article(s) ', 'skudo') . wp_kses_post($delimiter . $user_info->display_name)."</span>" ;
        }       
        elseif ( is_404() ) {}    
        else {
           	global $wpdb;
           	$bc = get_body_class();
           	if (isset($bc[3])){
	           	$aidee = substr($bc[3], 5);
				$table_name = $wpdb->base_prefix."terms";
	            $q = "SELECT name FROM {$table_name} WHERE term_id=%d";
	            $res = $wpdb->get_results($wpdb->prepare($q, $aidee), OBJECT);
	            if (isset($res[0]))
	            echo "<span>".esc_html($res[0]->name)."</span>";
           	} else {
	           	if (isset($bc[0])) echo "<span>".esc_html($bc[0])."</span>";
           	}
        }
    } else {
	    $homeLink = home_url('/');
        echo '<a href="' . esc_url($homeLink) . '">' . wp_kses_post($main) . '</a>';
    }
}
?>
