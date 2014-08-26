<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <div class="socio">
        <?php while (the_repeater_field('social_channels', 'option')):?>
          <a href="<?php the_sub_field('url', 'option');?>">
            <img src="<?php the_sub_field('img', 'option');?>" alt="<?php the_sub_field('action');?>" />
          </a>
        <?php endwhile;?>
      </div>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>

</header>
<?php if(get_field('custom_header')):?>
  <div id="lead" style="background:url(<?php get_field('custom_header');?> no-repeat">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="col-sm-9">
          <?php the_field("custom_header_text");?>
        </div>
      </div>
    </div>
  </div>
<?php elseif(is_home()) : ?>
  <div id="lead" class="isblog" style="background:url(<?php the_field('blog_header', 'option');?>) no-repeat">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="col-sm-9">
          <?php the_field('blog_header_text', 'option');?>
          <a class="btn-black btn-large" href="<?php the_field('blog_header_link','option');?>">
            Become a KPI
          </a>
        </div>
      </div>
    </div>
  </div>
<?php else :?>  
  <div id="lead" style="background:url(<?php the_field('default_header_img', 'option');?>) no-repeat">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url');?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="col-sm-9 hidden-xs">
          <?php the_field('ad_code_header', 'option');?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
