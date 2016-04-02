<form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input class="form-control" type="search"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button class="btn btn-link form-control" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search"></i></button>
</form>