<?php
  get_header();
 while(have_posts()) {
     the_post()
     ?>
        <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>)"></div>
            <div class="page-banner__content container container--narrow">
              <h1 class="page-banner__title"><?php the_title();?></h1>
              <div class="page-banner__intro">
                <p>Study the latest blogs about the university</p>
              </div>
            </div>
          </div>
        </div>

        
        <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
            <a class="metabox__blog-home-link" href="/blog">
              <i class="fa fa-home" aria-hidden="true"></i> 
              Back to Blog
            </a> 
            <span class="metabox__main">
            Author <?php the_author_posts_link();?> Posted on <?php the_time( 'l, F jS, Y' ); ?> 
            </span>
            </p>
         </div>


         <div class="generic-content">
           <?php the_content();?>
         </div>
        </div>

     <?php
 }

 get_footer();
?>