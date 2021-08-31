<?php
  get_header();
 while(have_posts()) {
     the_post()
     ?>
      <h1>The Page</h1>
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
      <hr>
     <?php
 }

 get_footer();
?>