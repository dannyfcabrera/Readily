<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Readily
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
	return;
}
?>

<aside itemscope itemtype="http://schema.org/WPSideBar" id="sidebar" class="sidebar" role="complementary">
  
  <?php if (! is_page() ) : 
    get_template_part( 'template-parts/user', 'login' );
  endif; ?>

  <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  
</aside>