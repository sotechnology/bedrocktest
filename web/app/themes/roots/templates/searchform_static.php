<form role="search" method="get" class="search-form-static" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="input-group">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
  </div>
</form>
