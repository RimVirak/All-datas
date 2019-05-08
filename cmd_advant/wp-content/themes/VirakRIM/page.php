<?php
get_header();
   if(have_posts()):
      while (have_posts()): the_post(); ?>
      <article class="post">
       <?php 
           $args =  [
               'child_of'=> get_top_ancestor_id() ,
               'title_li' =>''
           ];
       wp_list_pages($args); ?>  
       <h1><?php the_title();?></a></h1>
       <p><?php the_content();?></p>
      </article>
   <?php endwhile; 
     else:
         echo '<p>No Post found</p>';

      endif;   
   get_footer(); 
      ?>
