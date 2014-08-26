<div class="wrap container" role="document">
  <h1>Success Stories</h1>
  <p>
    Success Stories from entrepeneurs who have become successful from<br /> becoming a Key Person of Influence
  </p>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="container-fluid">
       <div class="row">
         <?php while (have_posts()): the_post();?>

         <div class="col-sm-4 no-gutter story-single-feed">
           <a href="<?php the_permalink();?>">
             <img src="<?php the_field('thumb');?>" alt="<?php the_field('thumb');?>" />
             <span class="overlay">
               <h2>
                 <?php the_field('name');?>
               </h2>
               <span class="rm">
                 Read Story
               </span>
             </span>
           </a>
         </div>
         
         <?php endwhile;?>
       </div>
     </div>
   </div>
 </div>
</div><!-- /.wrap -->