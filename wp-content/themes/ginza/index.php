<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
get_header();
$ginza_bloglayout = 'blog-sidebar';
if(isset($ginza_opt['blog_layout']) && $ginza_opt['blog_layout']!=''){
	$ginza_bloglayout = $ginza_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$ginza_bloglayout = $_GET['layout'];
}
$ginza_blogsidebar = 'right';
if(isset($ginza_opt['sidebarblog_pos']) && $ginza_opt['sidebarblog_pos']!=''){
	$ginza_blogsidebar = $ginza_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$ginza_blogsidebar = $_GET['sidebar'];
}
if ( !is_active_sidebar( 'sidebar-1' ) )  {
	$ginza_bloglayout = 'nosidebar';
}
$ginza_blog_main_extra_class = NULl;
if($ginza_blogsidebar=='left') {
	$ginza_blog_main_extra_class = 'order-lg-last';
}
$main_column_class = NULL;
switch($ginza_bloglayout) {
	case 'nosidebar':
		$ginza_blogclass = 'blog-nosidebar';
		$ginza_blogcolclass = 12;
		$ginza_blogsidebar = 'none';
		Ginza_Class::ginza_post_thumbnail_size('ginza-post-thumb');
		break;
	case 'largeimage':
		$ginza_blogclass = 'blog-large';
		$ginza_blogcolclass = 9;
		$main_column_class = 'main-column';
		Ginza_Class::ginza_post_thumbnail_size('ginza-post-thumbwide');
		break;
	case 'grid':
		$ginza_blogclass = 'grid';
		$ginza_blogcolclass = 9;
		$main_column_class = 'main-column';
		Ginza_Class::ginza_post_thumbnail_size('ginza-post-thumbwide');
		break;
	default:
		$ginza_blogclass = 'blog-sidebar';
		$ginza_blogcolclass = 9;
		$main_column_class = 'main-column';
		Ginza_Class::ginza_post_thumbnail_size('ginza-post-thumb');
}
?>
<div class="main-container <?php if(isset($ginza_opt['blog_banner']['url']) && ($ginza_opt['blog_banner']['url'])!=''){ echo 'has-image';} ?>">
	<div class="title-breadcumbs">
		<!-- blog banner -->
		<?php if(isset($ginza_opt['blog_banner']['url']) && ($ginza_opt['blog_banner']['url'])!=''){ ?>
			<div class="blog-banner banner-image">
				<img src="<?php echo esc_url($ginza_opt['blog_banner']['url']); ?>" alt="<?php esc_attr_e('Shop banner','ginza') ?>" />
			</div>
		<?php } ?>
		<!-- end blog banner -->
		<div class="title-breadcumbs-text">
			<div class="container">
				<header class="entry-header">
					<h1 class="entry-title"><?php if(isset($ginza_opt['blog_header_text']) && ($ginza_opt['blog_header_text'] !='')) { echo esc_html($ginza_opt['blog_header_text']); } else { esc_html_e('Blog', 'ginza');}  ?></h1>
				</header>
				<div class="breadcrumb-container">
					<div class="container">
						<?php Ginza_Class::ginza_breadcrumb(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 <?php echo 'col-lg-'.$ginza_blogcolclass; ?> <?php echo ''.$main_column_class; ?> <?php echo esc_attr($ginza_blog_main_extra_class);?>">
				<div class="page-content blog-page blogs <?php echo esc_attr($ginza_blogclass); ?>">
					<div class="blog-wrapper">
						<?php if ( have_posts() ) : ?>
							<div class="post-container">
								<?php /* Start the Loop */ ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'content', get_post_format() ); ?>
								<?php endwhile; ?>
							</div>
							<?php Ginza_Class::ginza_pagination(); ?>
						<?php else : ?>
							<article id="post-0" class="post no-results not-found">
							<?php if ( current_user_can( 'edit_posts' ) ) :
								// Show a different message to a logged-in user who can add posts.
							?>
								<header class="entry-header">
									<h1 class="entry-title"><?php esc_html_e( 'No posts to display', 'ginza' ); ?></h1>
								</header>
								<div class="entry-content">
									<p><?php printf( wp_kses(__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'ginza' ), array('a'=>array('href'=>array()))), admin_url( 'post-new.php' ) ); ?></p>
								</div><!-- .entry-content -->
							<?php else :
								// Show the default message to everyone else.
							?>
								<header class="entry-header">
									<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'ginza' ); ?></h1>
								</header>
								<div class="entry-content">
									<p><?php esc_html_e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'ginza' ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							<?php endif; // end current_user_can() check ?>
							</article><!-- #post-0 -->
						<?php endif; // end have_posts() check ?>
					</div>
				</div>
			</div>
			<?php if($ginza_bloglayout!='nosidebar' && is_active_sidebar('sidebar-1')): ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
	<!-- brand logo -->
	<?php 
		if(isset($ginza_opt['inner_brand']) && function_exists('ginza_brands_shortcode') && shortcode_exists( 'ourbrands' ) ){
			if($ginza_opt['inner_brand'] && isset($ginza_opt['brand_logos'][0]) && $ginza_opt['brand_logos'][0]['thumb']!=null) { ?>
				<div class="inner-brands">
					<div class="container">
						<?php if(isset($ginza_opt['inner_brand_title']) && $ginza_opt['inner_brand_title']!=''){ ?>
							<div class="heading-title style1 ">
								<h3><?php echo esc_html( $ginza_opt['inner_brand_title'] ); ?></h3>
							</div>
						<?php } ?>
						<?php echo do_shortcode('[ourbrands]'); ?>
					</div>
				</div>
			<?php }
		}
	?>
	<!-- end brand logo --> 
</div>
<?php get_footer(); ?>