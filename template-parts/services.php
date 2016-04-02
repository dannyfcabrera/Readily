<div class="services">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#web-services" aria-controls="web-services" role="tab" data-toggle="tab">Web</a></li>
    <li role="presentation"><a href="#design-services" aria-controls="design-services" role="tab" data-toggle="tab">Design</a></li>
    <li role="presentation"><a href="#marketing-services" aria-controls="marketing-services" role="tab" data-toggle="tab">Marketing</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="web-services">
    <?php if( have_rows('web_services') ): ?>
    
    	<ul class="list-group">
    
    	<?php while( have_rows('web_services') ): the_row(); 
    
    		// vars
    		$name = get_sub_field('web_service_name');
    		$description = get_sub_field('web_service_description');
    
    		?>
    
    		<li class="list-group-item">
    		  <h3><?php echo $name; ?></h3>
    		  <?php if ($description) : ?><p><?php echo $description; ?></p><?php endif; ?>
    		</li>
    
    	<?php endwhile; ?>
    
    	</ul>
    
    <?php endif; ?>
    </div> <!-- /#web-services -->
    <div role="tabpanel" class="tab-pane" id="design-services">
    <?php if( have_rows('design_services') ): ?>
    
    	<ul class="list-group">
    
    	<?php while( have_rows('design_services') ): the_row(); 
    
    		// vars
    		$name = get_sub_field('design_service_name');
    		$description = get_sub_field('design_service_description');
    
    		?>
    
    		<li class="list-group-item">
    		  <h3><?php echo $name; ?></h3>
    		  <?php if ($description) : ?><p><?php echo $description; ?></p><?php endif; ?>
    		</li>
    
    	<?php endwhile; ?>
    
    	</ul>
    
    <?php endif; ?>
    </div> <!-- /#design-services -->
    <div role="tabpanel" class="tab-pane" id="marketing-services">
    <?php if( have_rows('marketing_services') ): ?>
    
    	<ul class="list-group">
    
    	<?php while( have_rows('marketing_services') ): the_row(); 
    
    		// vars
    		$name = get_sub_field('marketing_service_name');
    		$description = get_sub_field('marketing_service_description');
    
    		?>
    
    		<li class="list-group-item">
    		  <h3><?php echo $name; ?></h3>
    		  <?php if ($description) : ?><p><?php echo $description; ?></p><?php endif; ?>
    		</li>
    
    	<?php endwhile; ?>
    
    	</ul>
    
    <?php endif; ?>
    </div> <!-- /#marketing-services -->
  </div>
</div>