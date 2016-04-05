<?php if( have_rows('post_content') ): ?>

  <?php while ( have_rows('post_content') ) : the_row(); ?>

    <?php if( get_row_layout() == 'text' ): ?>
    
      <div class="text post-block">
        <?php	the_sub_field('text'); ?>
      </div>

    <?php elseif( get_row_layout() == 'text_with_figure' ): ?>
  
      
      <?php get_template_part( 'template-parts/layout', 'text-figure' ); ?>
    

    <?php elseif( get_row_layout() == 'code' ): ?>
    
      <div class="code post-block">
        <?php	the_sub_field('caption'); ?>
        <pre><code><?php the_sub_field('code');?></code></​pre>
      </div>

    <?php endif; ?>

  <?php endwhile; ?>

<?php else : ?>


<?php endif; ?>