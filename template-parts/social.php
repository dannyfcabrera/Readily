<?php if( have_rows('social','option') ): ?>

	<ul class="list-inline list-unstyled" itemscope itemtype="http://schema.org/Organization">
  	<link class="sr-only" itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"> 

	<?php while( have_rows('social','option') ): the_row(); 

		// vars
		$name = get_sub_field('social_name','option');
		$link = get_sub_field('social_link','option');
		$icon = get_sub_field('social_icon','option');

		?>

		<li class="social-link">
		  <a itemprop="sameAs" title="Follow us on <?php echo $name; ?>" href="<?php echo $link; ?>" target="_blank">
				<span class="sr-only"><?php echo $name; ?></span>
				<i class="fa <?php echo $icon; ?> fa-lg"></i>
		  </a>
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>