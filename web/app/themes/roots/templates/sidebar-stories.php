<h2 class="arrow">
	Related Events
	<i class="glyphicon glyphicon-chevron-down">
	</i>
</h2>
<?php //to point to events when they exist
$latest = new wp_query('post_type=post&showposts=5&post_status=publish');
while ($latest->have_posts()):$latest->the_post();?>
	<article class="article-mini">
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
<?php endwhile;?>