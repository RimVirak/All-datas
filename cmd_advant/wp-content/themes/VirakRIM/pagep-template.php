
<?php

  /**
   Template Name: Custom Page Template
  */
   
get_header();
   if(have_posts()):
      while (have_posts()): the_post(); ?>
      <article class="post page">
      <table border="0" width="100%">
            <tr>
               <td class="tdtitle" width="32%">
               <h2><?php the_title()?></h2>
               </td>
               <td class="tdcontent"><?php the_content()?></td>
            </tr>
      </table>
      </article>
   <?php endwhile; 
     else:
         echo '<p>No Post found</p>';

      endif;   
   get_footer(); 
      ?>
