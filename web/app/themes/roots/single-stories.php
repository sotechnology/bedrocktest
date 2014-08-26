<div class="wrap container" role="document">
  <div class="row">
    <div class="col-sm-9 col-sm-offset-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-8">
           <?php while(have_posts()):the_post();?>
           
           <article>
            <header>
             <h1>
               <?php the_title();?>
             </h1>
             <p class="meta">
              by <?php the_author_nickname();?>
             </p>
             <?php if(has_post_thumbnail()):?>
             <div class="image">
              
                 <?php the_post_thumbnail('large');?>
              
             </div>
             <?php endif;?>
            </header>
            <?php the_content();?>
            <footer>
              <h3>See Also: <a href="/stories">Other Success Stories</a></h3>
            </footer>

           </article>
           
           <?php endwhile;?>
         </div>
         <div class="col-sm-4">
          <?php include ('templates/sidebar-stories.php');?>
         </div>

       </div>
     </div>
   </div>
 </div>
</div><!-- /.wrap -->
