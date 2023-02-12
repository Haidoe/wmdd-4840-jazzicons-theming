<?php get_header(); ?>

<?php if( is_search() ): ?>
  <div class="search-results-heading-meta-wrapper">
    <h2 class="search-results-title">
      Search Results
    </h2>

    <div class="search-results-info">
      You searched for 
      <b> <?php the_search_query(); ?> </b>
      
      <?php   if (!have_posts()): ?>
        <p>
          Sorry, there are no posts matching that query.
        </p>
        <p>
          Try modifying your search or going back to  
          <a href="<?php echo home_url(); ?>">
            the homepage.
          </a>
        </p>
        <?php get_search_form(); ?>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>

<?php if( is_404() ): ?>
  <div class="error-page-wrapper">
    <div class="error-page-contents">
      <h2 class="error-page-title">
        Our apologies: 404 Error.
      </h2>

      <p>Sorry, we can't seem to find what you're looking for.</p>
      
      <p>
        Try searching or go to 
        <a href="<?php echo home_url(); ?>">
          the homepage.
        </a>
      </p>

      <?php get_search_form(); ?>
    </div>
  </div>
<?php endif; ?>

<?php
  if (have_posts()):
    while (have_posts()):
      the_post();

      get_template_part("template-parts/content");
    endwhile;

    the_posts_navigation();
  endif;

  get_footer();