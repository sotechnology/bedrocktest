<?php //args to get post by same author
        // $args = array(
        //  'post_type' => 'post',
        //  'post_status' => 'publish'
        //  'posts_per_page' => '8',
        //  'author' => $authorID
        //); 
        // and the while loop, repeated six times
        //for now, just staying in the current loop ?>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <article class="article-mini col-sm-4">
          <?php if (has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail('medium');?>
            </a>
          <?php endif;?>
          <?php get_template_part('templates/entry-meta'); ?>
          <h3 class="entry-title">
            <a href="<?php the_permalink();?>">
              <?php the_title();?>
            </a>
          </h3>
        </article>
        <?php // endwhile
        // wp_reset_query();?>