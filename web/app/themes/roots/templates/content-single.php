<?php
while (have_posts()) : the_post(); 
$author_id = get_the_author_meta( 'ID' );?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail('large');?>
      <?php endif;?>
      <br />
      <div class="socio-share pull-right">
        <div class="counter">
          <span class="total-shares">
          </span>
          Shares
        </div>
        <?php echo do_shortcode('[ssba]'); ?>
      </div>
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="entry-content col-sm-8 pull-right">
          <?php the_content(); ?>
        </div>
        <div class="col-sm-4 post-author">
          <?php // get the author ?>
          <img src="<?php the_field('image', 'user_'.$author_id);?>" alt="<?php the_author_nickname();?>" /><br />
          by <span class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_nickname();?></a></span><br />
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="btn-clear">
            View Profile
          </a><br />
          <?php while (the_repeater_field('social_channels', 'user_'.$author_id)):?>
            <a href="<?php the_sub_field('url');?>">
              <img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('channel');?>" />
            </a>
          <?php endwhile;?>
        </div>
      </div>
      <footer class="row">
        <h2 class="col-sm-12">
          Other Posts by This Author
        </h2>
        <?php include('posts-by-author.php');?>
      </footer>
    </div>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
