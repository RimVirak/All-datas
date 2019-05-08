
<?php

  /**
   Template Name: Custom Page Template
  */
   
get_header();
   if(have_posts()):
      while (have_posts()): the_post(); ?>
      <article class="post">
      <table border ="0" width="100%">
            <tr>
               <td class="tdtitle" width="40%">
               <h2><?php the_title()?></h2>
               </td>
               <td class="tdcontent">
                  <?php the_content()?>
               </td>
            </tr>
      </table>
      </article>
   <?php endwhile; 
     else:
         echo '<p>Page Not found</p>';

      endif;   
   get_footer(); 
      ?>
