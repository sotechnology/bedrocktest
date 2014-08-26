<?php dynamic_sidebar('sidebar-primary'); ?>
<div class="social-sidebar sidebar-block">
	<h3>
		Follow Us
	</h3>
	<?php while (the_repeater_field('social_sidebar', 'option')):?>
		<a href="<?php the_sub_field('url');?>">
			<img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('name');?>" />
		</a>
	<?php endwhile;?>
</div>
<div class="newsletter-sidebar sidebar-block">
	<h3>Subscribe for Updates</h3>
	<form>
		<input type="text" placeholder="First Name" />
		<input type="text" placeholder="Last Name" />
		<input type="Email" placeholder="Email Address" />
		<input type="submit" value="Submit" />
	</form>
</div>
<div class="authors-sidebar sidebar-block">
	<h3>Featured Authors</h3>
	<?php //while(enter logic here): ?>
	<div class="author-sidebar">
		<img src="<?php bloginfo('template_url');?>/assets/img/author-icon.png" alt="Authors Name" />
		<h4>Caroline Cross</h4>
		<p>Entreprenuer and CEO of Venture Beats.</p>
		<a>Read Bio |</a> <a>View Posts</a>
	</div>
	<div class="author-sidebar">
		<img src="<?php bloginfo('template_url');?>/assets/img/author-icon.png" alt="Authors Name" />
		<h4>Caroline Cross</h4>
		<p>Entreprenuer and CEO of Venture Beats.</p>
		<a>Read Bio |</a> <a>View Posts</a>
	</div>
	<div class="author-sidebar">
		<img src="<?php bloginfo('template_url');?>/assets/img/author-icon.png" alt="Authors Name" />
		<h4>Caroline Cross</h4>
		<p>Entreprenuer and CEO of Venture Beats.</p>
		<a>Read Bio |</a> <a>View Posts</a>
	</div>
	<div class="author-sidebar">
		<img src="<?php bloginfo('template_url');?>/assets/img/author-icon.png" alt="Authors Name" />
		<h4>Caroline Cross</h4>
		<p>Entreprenuer and CEO of Venture Beats.</p>
		<a>Read Bio |</a> <a>View Posts</a>
	</div>
	<?php // endwhile;?>
	<a class="world" href="/authors">
		Meet all our authors
	</a>
</div>
<div class="ads">
	
	<?php while(the_repeater_field('left_sidebar_ads', 'option')):?>
		<div class="adspace">
			<?php the_sub_field('ad');?>
		</div>
	<?php endwhile;?>

</div>

