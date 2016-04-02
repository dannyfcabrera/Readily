<?php      
  
$text = get_sub_field('text');
$figure = get_sub_field('figure');
$figureAlign = get_sub_field('figure_align');
$url = $figure['url'];
$title = $figure['title'];
$alt = $figure['alt'];
$caption = $figure['caption'];

$size = 'medium';
$thumb = $figure['sizes'][ $size ];
$width = $figure['sizes'][ $size . '-width' ];
$height = $figure['sizes'][ $size . '-height' ];

?>


<?php if( $figureAlign == 'right' ): ?>
<div class="text-figure post-block">
  <?php	the_sub_field('text'); ?>
</div>
<?php endif; ?>


<div class="text-figure post-block">
  <figure>
	  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
	
	<?php if( $caption ): ?>
		<figcaption><?php echo $caption; ?></figcaption>
	<?php endif; ?>
	</figure>
</div>

<?php if( $figureAlign == 'left' ): ?>
<div class="text-figure post-block">
  <?php	the_sub_field('text'); ?>
</div>
<?php endif; ?>