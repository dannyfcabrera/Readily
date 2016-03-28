<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package Readily
 */

get_header(); ?>

  	<main role id="main" role="main">

  		<?php
  		while ( have_posts() ) : the_post();
  
  			get_template_part( 'template-parts/content', 'page' );
  
  		endwhile;
  		?>

		</main><!-- #main -->

<?php
  
if ( ! (is_front_page() || is_home()) ) :
  get_sidebar();
endif;

get_footer();
