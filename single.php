<?php
/**
 * The template for displaying all single posts.
 *
 *
 * @package Readily
 */

get_header(); ?>

  	<main itemprop="mainContentOfPage" role id="main" role="main">

  		<?php
    		
  		while ( have_posts() ) : the_post();

  			get_template_part( 'template-parts/content', get_post_format() );
  
  			the_post_navigation();

  		endwhile;
  		
  		?>

		</main><!-- #main -->

<?php
get_sidebar();
get_footer();
