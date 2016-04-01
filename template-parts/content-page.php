<?php
/**
 * Template part for displaying pages.
 *
 * @package Readily
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
  	<?php if (is_page('success')) :
    	echo '<h1 class="page-title">Thank you '. $_GET["fname"] .'</h1>';
    else :
      the_title( '<h1 class="page-title">', '</h1>' ); 
		endif;
		?>
	</header>

	<div class="page-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'readily' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="page-footer">
		<?php
			edit_post_link(
				sprintf(
					esc_html__( 'Edit %s', 'readily' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article>
