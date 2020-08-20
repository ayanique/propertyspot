<?php

$skudo_translation_options= array( array(
"name" => "Language Settings",
"type" => "title",
"img" => SKUDO_IMAGES_URL."icon_translate.png"
),

( defined('SKUDO_PLG_ACTIVE') === true ? 
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"general", "name"=>"General"), array("id"=>"projects", "name"=>"Projects"), array("id"=>"blog", "name"=>"Blog"), array("id"=>"comment", "name"=>"Comments"), array("id"=>"search", "name"=>"Search"), array("id"=>"contactform", "name"=>"Contact Form"), array("id"=>"twitter","name"=>"Twitter"), array("id"=>"page404", "name"=>"404"))
	)
	:
	array(
		"type" => "open",
		"subtitles"=>array(array("id"=>"general", "name"=>"General"), array("id"=>"projects", "name"=>"Projects"), array("id"=>"blog", "name"=>"Blog"), array("id"=>"comment", "name"=>"Comments"), array("id"=>"search", "name"=>"Search"))
	)
),

/* ------------------------------------------------------------------------*
 * GENERAL TEXTS
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'general'
),

array(
	"name" => "Breadcrumbs Home",
	"id" => "skudo_breadcrumbs_home_text",
	"type" => "text",
	"std" => "Home"
),

array(
	"name" => "You are here text",
	"id" => "skudo_you_are_here",
	"type" => "text",
	"std" => "You are here:"
),

( defined('SKUDO_PLG_ACTIVE') === true ? 
	array(
		"name" => "Latest from Twitter",
		"id" => "skudo_latest_for_twitter",
		"type" => "text",
		"std" => "Latest from <span class=text_color>Twitter</span>"
	) : NULL
),

array(
	"name" => "Open Menu",
	"id" => "skudo_open_menu",
	"type" => "text",
	"std" => "Open Menu"
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * PROJECTS TEXTS
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'projects'
),

array(
"name" => "Next Project",
"id" => "skudo_next_single_proj",
"type" => "text",
"std" => "Next Project"
),

array(
"name" => "Previous Project",
"id" => "skudo_prev_single_proj",
"type" => "text",
"std" => "Previous Project"
),

array(
"name" => "Share Project Text",
"id" => "skudo_share_proj_text",
"type" => "text",
"std" => "SHARE THIS PROJECT"
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * BLOG TEXTS
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'blog'
),

array(
"name" => "Read more text",
"id" => "skudo_read_more",
"type" => "text",
"std" => "read more"
),

array(
"name" => "Previous Post (Blogs/Archives)",
"id" => "skudo_previous_text",
"type" => "text",
"std" => "Previous posts"
),

array(
"name" => "Next Post (Blogs/Archives)",
"id" => "skudo_next_text",
"type" => "text",
"std" => "Next posts"
),

array(
"name" => "Previous Post (Single)",
"id" => "skudo_single_previous_text",
"type" => "text",
"std" => "Previous post"
),

array(
"name" => "Next Post (Single)",
"id" => "skudo_single_next_text",
"type" => "text",
"std" => "Next post"
),

array(
"name" => "By text",
"id" => "skudo_by_text",
"type" => "text",
"std" => "by"
),

array(
"name" => "In text",
"id" => "skudo_in_text",
"type" => "text",
"std" => "In"
),

array(
"name" => "Tags text",
"id" => "skudo_tags_text",
"type" => "text",
"std" => "Tags"
),

array(
"name" => "Categories text",
"id" => "skudo_categories_text",
"type" => "text",
"std" => "Categories"
),

array(
"name" => "Load More Posts text",
"id" => "skudo_load_more_posts_text",
"type" => "text",
"std" => "Load More Posts"
),

array(
"name" => "No more posts text",
"id" => "skudo_no_more_posts_text",
"type" => "text",
"std" => "No more posts to load."
),

array(
"name" => "Loading Posts text",
"id" => "skudo_loading_posts_text",
"type" => "text",
"std" => "Loading posts..."
),

array(
"name" => "Share Post Text",
"id" => "skudo_share_post_text",
"type" => "text",
"std" => "SHARE THIS"
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * COMMENTS TEXTS
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'comment'
),


array(
"name" => "No comments text",
"id" => "skudo_no_comments_text",
"type" => "text",
"std" => "No comments"
),

array(
"name" => "Comment text",
"id" => "skudo_comment_text",
"type" => "text",
"std" => "comment"
),

array(
"name" => "Comments text",
"id" => "skudo_comments_text",
"type" => "text",
"std" => "comments"
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * SEARCH TEXTS
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'search'
),

array(
"name" => "Search box text",
"id" => "skudo_search_box_text",
"type" => "text",
"std" => "Find what you want..."
),

array(
"name" => "Search results text",
"id" => "skudo_search_results_text",
"type" => "text",
"std" => "Search results for"
),

array(
"name" => "No results found text",
"id" => "skudo_no_results_text",
"type" => "text",
"std" => "No results found."
),

array(
"name" => "Next results text",
"id" => "skudo_next_results",
"type" => "text",
"std" => "Next results"
),

array(
"name" => "Previous results text",
"id" => "skudo_previous_results",
"type" => "text",
"std" => "Previous results"
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * CONTACT FORM
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'contactform'
),

array(
"name" => "Name text",
"id" => "skudo_cf_name",
"type" => "text",
"std" => "Name"
),

array(
"name" => "Email text",
"id" => "skudo_cf_email",
"type" => "text",
"std" => "Email"
),

array(
"name" => "Message text",
"id" => "skudo_cf_message",
"type" => "text",
"std" => "Message"
),

array(
"name" => "Send Button text",
"id" => "skudo_cf_send",
"type" => "text",
"std" => "Send"
),

array(
"type" => "close"),


/* ------------------------------------------------------------------------*
 * TWITTER
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=>'twitter'
),

array(
"name" => "Follow us",
"id" => "skudo_twitter_follow_us",
"type" => "text",
"std" => "Follow us on Twitter."
),

array(
"name" => "Pre Tweet",
"id" => "skudo_twitter_pre_tweet",
"type" => "text",
"std" => "I was looking at "
),

array(
"type" => "close"),

/* ------------------------------------------------------------------------*
 * 404
 * ------------------------------------------------------------------------*/

array(
"type" => "subtitle",
"id"=> "page404"
),

array(
	"name" => "Heading Text",
	"id" => "skudo_404_heading",
	"type"=>"text",
	"std" => "Oops! There is nothing here..."
),

array(
	"name" => "Text",
	"id" => "skudo_404_text",
	"type"=>"text",
	"std" => "It seems we can't find what you're looking for. Perhaps searching one of the links in the above menu, can help."
),

array(
	"name" => "Button Text",
	"id" => "skudo_404_button_text",
	"type"=>"text",
	"std" => "GO TO HOMEPAGE"
),

array("type"=>"close"),


array(
"type" => "close"));

skudo_add_options($skudo_translation_options);