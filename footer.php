<?php
/**
 * The template for displaying the footer.
 *
 * @package Readily
 */

?>

  	<footer itemscope itemtype="http://schema.org/WPFooter" id="footer" role="contentinfo">
    	<div class="contact-info">
      	<h6>Contact Us</h6>
      	<ul>
        	<li>Phone: 908-752-7651</li>
        	<li>Email: info@bereadily.com</li>
      	</ul>
    	</div>
    	<div class="sitemap">
      	<h6>Sitemap</h6>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_id' => 'footer-nav', 'walker' => new Bootstrap_Menu() ) ); ?>
    	</div>
    	<div class="newsletter">
      	<h6>Sign Up for Our Newsletter</h6>
      	<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' );?>
    	</div>
    	<div class="social-media">
      	<h6>Follow Us</h6>
      	<?php get_template_part( 'template-parts/social'); ?>
      	<p>&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?></p>
    	</div>
	  </footer>
  </div><!-- .wrapper -->

<?php wp_footer(); ?>
</body>
</html>
