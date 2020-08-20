<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
get_header();
$ginza_bloglayout = 'sidebar';
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
				<div class="page-content blog-page blogs <?php echo esc_attr($ginza_blogclass); if($ginza_blogsidebar=='left') {echo ' left-sidebar'; } if($ginza_blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<?php
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							 *
							 * We reset this later so we can run the loop
							 * properly with a call to rewind_posts().
							 */
							the_post();
						?>
						<?php
						// If a user has filled out their description, show a bio on their entries.
						if ( get_the_author_meta( 'description' ) ) : ?>
							<div class="archive-header">
								<div class="author-info archives">
									<div class="author-avatar">
										<?php
										/**
										 * Filter the author bio avatar size.
										 *
										 * @since Ginza 1.0
										 *
										 * @param int $size The height and width of the avatar in pixels.
										 */
										$author_bio_avatar_size = apply_filters( 'ginza_author_bio_avatar_size', 68 );
										echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
										?>
									</div><!-- .author-avatar -->
									<div class="author-description">
										<h3 class="archive-title"><?php printf( esc_html__( 'Author Archives: %s', 'ginza' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '">' . get_the_author() . '</a></span>' ); ?></h3>
										<p><?php the_author_meta( 'description' ); ?></p>
									</div><!-- .author-description	-->
								</div><!-- .author-info -->
							</div><!-- .archive-header -->
						<?php endif; ?>
						<?php
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
						?>
						<div class="post-container">
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', get_post_format() ); ?>
							<?php endwhile; ?>
						</div>
						<?php Ginza_Class::ginza_pagination(); ?>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
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