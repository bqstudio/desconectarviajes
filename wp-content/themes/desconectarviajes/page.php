<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Palermo
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( strpos( $post->post_content , 'hero--') === false ) {
			get_template_part( "modules/components/default-header" );
			} 
		?>			
			
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php get_footer(); 