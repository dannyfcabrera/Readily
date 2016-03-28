<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Readily
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="post-title">', '</h1>' );
			} else {
				the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="post-meta">
			<?php readily_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

	<div class="post-content">
		<?php
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'readily' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'readily' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="post-footer">
		<?php readily_post_footer(); ?>
	</footer>
</article>