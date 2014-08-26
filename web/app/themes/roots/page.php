<div class="wrap container" role="document">
    <div class="content row">
      <main class="main pull-right" role="main">
        <?php include ('templates/searchform_static.php');?>
        <h1>
          <?php the_title();?>
        </h1>
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile; ?>        
      </main><!-- /.main -->
      <div class="clearfix visible-xs"></div>
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->