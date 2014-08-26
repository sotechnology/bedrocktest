<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
  		<div class="col-md-6 col-sm-8">
  			<a href="/">
  				<img src="<?php the_field('footer_logo', 'option');?>" alt="Key Person Of Influence" />
  			</a>
  			<?php the_field('footer_content', 'option');?>
  		</div>
  		<div class="col-sm-4 col-md-offset-2">
  			<?php while (the_repeater_field('social_sidebar', 'option')):?>
				<a class="soc-icon" href="<?php the_sub_field('url');?>">
					<img src="<?php the_sub_field('icon');?>" alt="<?php the_sub_field('name');?>" />
				</a>
			<?php endwhile;?>
			<?php
        		if (has_nav_menu('footer')) :
          wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'footnav hidden-xs'));
        endif;
      ?>
		</div>
  </div>
</footer>

<?php wp_footer(); ?>
