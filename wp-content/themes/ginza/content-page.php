<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Ginza_Theme
 * @since Ginza 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ginza' ), 'after' => '</div>', 'pagelink' => '<span>%</span>' ) ); ?>
		</div>
	</article>