<article <?php post_class(); ?>>
  <header>
  	<?php if(has_post_thumbnail()):?>
  	<div class="image">
  		<a href="<?php the_permalink();?>">
  			<?php the_post_thumbnail('large');?>
  		</a>
  		<div class="time">
  			<i class="glyphicon glyphicon-time"></i>
  			<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
  		</div>
  	</div>
  	<?php endif;?>
  	<?php get_template_part('templates/entry-meta'); ?>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
