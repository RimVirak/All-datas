<?php
get_header();
   if(have_posts()):
      while (have_posts()): the_post(); ?>
      <article class="post">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
      <p class="post-meta"><?php the_time('F jS, Y');?> | <?php the_author(); ?></p>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
         <?php the_author();?>
      </a>
      |<?php
        $categories = get_the_category();
        $comma  = ', ';
        $output = '';

        if ($catgories) {
           foreach ( $categories as $category){
              $output.= '<a href="'. get_category_link($category->term_id).'">'
                     . $category->cat_name .'</a>'. $comma;
           }
           echo trim($output, $comma);
        }
      ?>
      <p><?php the_content(); ?></p>
      </article>
   <?php endwhile; 
     else:
         echo '<p>No Post found</p>';

      endif;   
   get_footer(); 
      ?>
