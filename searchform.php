<form class="form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <div class="form-group has-feedback">
    <label>
        <span class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input class="form-control" type="search"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            <i class="fa fa-search form-control-feedback" aria-hidden="true"></i>
    </label>
    <button class="sr-only" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search"></i></button>
  </div>
</form>