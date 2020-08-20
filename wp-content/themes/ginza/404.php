<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
$ginza_opt = get_option( 'ginza_opt' );
get_header();
?>
	<div class="main-container error404">
		<div class="container">
			<div class="search-form-wrapper">
				<h2><?php esc_html_e( "OOPS! PAGE NOT BE FOUND", 'ginza' ); ?></h2>
				<p class="home-link"><?php esc_html_e( "Sorry but the page you are looking for does not exist, has been removed, changed or is temporarity unavailable.", 'ginza' ); ?></p>
				<?php get_search_form(); ?>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Back to home', 'ginza' ); ?>"><?php esc_html_e( 'Back to home page', 'ginza' ); ?></a>
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