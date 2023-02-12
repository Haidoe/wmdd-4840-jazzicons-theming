<?php 
get_header();

if (have_posts()):

  while (have_posts()):
    the_post();

    get_template_part("template-parts/content");
  endwhile;

  the_posts_navigation();
  
else:
  echo "we have no posts";
endif;

get_footer();