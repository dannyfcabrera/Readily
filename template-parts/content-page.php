<?php
/**
 * Template part for displaying pages.
 *
 * @package Readily
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
    <?php if ( has_post_thumbnail() ) {
      echo '<div itemprop="primaryImageOfPage">';
      the_post_thumbnail();
      echo '</div>';
    } 
    ?>
  	<?php if (is_page('success')) :
    	echo '<h1 itemprop="headline name" class="page-title">Thank you '. $_GET["fname"] .'</h1>';
    else :
      the_title( '<h1 itemprop="headline name" class="page-title">', '</h1>' ); 
		endif;
		?>
	</header>

	<main itemprop="mainEntity" class="page-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div itemprop="breadcrumb" class="page-links">' . esc_html__( 'Pages:', 'readily' ),
				'after'  => '</div>',
			) );
		?>
		
		<?php if (is_page('services')) :
  		get_template_part( 'template-parts/services');
    endif; ?>
    
	</main>

	<footer class="page-footer">
		<?php
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'readily' ),
					the_title( '<span class="sr-only">"', '"</span>', false )
				),
				'<span class="btn btn-default">',
				'</span>'
			);
		?>
	</footer>
</article>
