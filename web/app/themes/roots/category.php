<div class="wrap container" role="document">
    <div class="content row">
      <main class="main pull-right" role="main">
        <?php include ('templates/searchform_static.php');?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8">
        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>
        <h2 class="arrow">
          Category: <?php single_cat_title();?>
          <i class="glyphicon glyphicon-chevron-down">
          </i>
        </h2>
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/content', get_post_format()); ?>
        <?php endwhile; ?>
        
        <?php if ($wp_query->max_num_pages > 1) : ?>
          <nav class="post-nav">
            <ul class="pager">
              <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
              <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
            </ul>
          </nav>
        <?php endif; ?>
            </div>
            <div class="col-sm-4">
              <?php include ('templates/sidebar-right.php');?>
            </div>
          </div>
        </div>
      </main><!-- /.main -->
      <div class="clearfix visible-xs"></div>
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->