<div class="wrap container" role="document">
    <div class="content row">
      <main class="main pull-right" role="main">
        <?php include ('templates/searchform_static.php');?>
        <?php
          $author_id = get_the_author_meta( 'ID' );
          $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
        ?>
        <div class="container-fluid">
          <div class="row bio">
            <div class="col-sm-4 author-intro">
              <h1><?php echo $curauth->nickname; ?></h1>
              <img src="<?php the_field('image', 'user_'.$author_id);?>" alt="<?php echo $curauth->nickname; ?>" /><br />
              <?php while (the_repeater_field('social_channels', 'user_'.$author_id)):?>
                <a href="<?php the_sub_field('url');?>">
                  <img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('channel');?>" />
                </a>
              <?php endwhile;?>
            </div>
            <div class="col-sm-8 author-bio">
              <p><?php echo $curauth->user_description; ?></p>
          <div class="socio-share">
            <div class="counter">
              <span class="total-shares">
              </span>
              Shares
            </div>
            <?php echo do_shortcode('[ssba]'); ?>
          </div>
              <?php while (the_repeater_field('featured', 'user_'.$author_id)):?>
              <div class="featured">
                <a href="<?php the_sub_field('url');?>">
                  <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('name');?>" />
                </a>
              </div>
              <?php endwhile;?>
            </div>
          </div>
          <div class="row author-posts">
            <h2 class="col-sm-12">
              Posts by <?php echo $curauth->nickname; ?>
            </h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="author-article col-sm-12">
                    <?php if (has_post_thumbnail()):?>
                    <a class="pull-left" href="<?php the_permalink();?>">
                      <?php the_post_thumbnail('medium');?>
                    </a>
                    <?php endif;?>
                    
                    <p class="date">
                      <?php the_time('F j, Y'); ?>
                    </p>
                    <h3>
                      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>
                </article>
        
            <?php endwhile; else: ?>
                <p><?php _e('No posts by this author.'); ?></p>
        
            <?php endif; ?>
          </div>
        </div>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->