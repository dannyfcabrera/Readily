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

<aside id="sidebar" class="sidebar" role="complementary">
  <?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside>