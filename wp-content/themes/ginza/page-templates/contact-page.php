<?php
/**
 * Template Name: Contact Template
 *
 * Description: Contact page template
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );

get_header();
?>
<div class="main-container contact-page">
	<div class="title-breadcumbs">
		<div class="container">
			<header class="entry-header">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</header>
			<div class="breadcrumb-container">
				<?php Ginza_Class::ginza_breadcrumb(); ?>
			</div>
		</div>
	</div>
	<div class="page-content contact-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="container">
				<?php get_template_part( 'content', 'page' ); ?>
			</div>
		<?php endwhile; ?>
	</div>
	<!-- brand logo -->
	<?php 
		if(isset($ginza_opt['inner_brand']) && function_exists('ginza_brands_shortcode') && shortcode_exists( 'ourbrands' ) ){
			if($ginza_opt['inner_brand'] && isset($ginza_opt['brand_logos'][0]) && $ginza_opt['brand_logos'][0]['thumb']!=null) { ?>
				<div class="inner-brands">
					<div class="container">
						<?php if(isset($ginza_opt['inner_brand_title']) && $ginza_opt['inner_brand_title']!=''){ ?>
							<div class="title">
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
<?php get_footer('contact'); ?>