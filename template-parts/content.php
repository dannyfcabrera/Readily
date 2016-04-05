<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Readily
 */

?>

<article itemprop="blogPost" itemscope itemtype='http://schema.org/BlogPosting' id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
    <?php if ( has_post_thumbnail() ) {
      echo '<div itemprop="image">';
      the_post_thumbnail();
      echo '</div>';
    } 
    ?>
		<?php
			if ( is_single() ) {
				the_title( '<h1 itemprop="headline name" class="page-title">', '</h1>' );
			} else {
				the_title( '<h2 itemprop="headline name" class="page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="page-meta">
			<?php readily_posted_on(); ?>
			<span itemprop="url" class="sr-only"><?php the_permalink(); ?></span>
		</div>
		<?php
		endif; ?>
	</header>
  
  <?php if (is_single()) : ?>
	<main itemprop="mainEntity" class="page-content">
       
    <?php get_template_part( 'template-parts/layout' ); ?>

	</main>
  <?php endif; ?>

	<footer class="page-footer">
    <?php if (! is_single()) :
        echo '<a class="btn btn-default" href="'. get_the_permalink() .'">View Post</a>';
      endif; ?>
		<?php readily_post_footer(); ?>
	</footer>
</article>