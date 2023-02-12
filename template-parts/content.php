
<?php ?>

<article <?php post_class(); ?>>
  <h2 class="post-title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2> 

  <div class="post-meta">
   Posted on
    <span>
      <?php the_modified_date(); ?>
    </span>
  </div>

  <div class="post-feature-image">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>
  
  <div class="post-content">
    <?php 
      if( is_single() ): 
        the_content();
      else:
        the_excerpt();
      endif;
    ?>
  </div>

  <div class="post-footer">
    <div class="category-wrapper">
      <span>category:</span>

      <div class="categories">
        <?php the_category(" • "); ?>
      </div>
    </div>

    <div class="tags-wrapper">
      <span>tagged:</span>

      <div class="tags">
        <?php the_tags("", " • "); ?>
      </div>
    </div>
  </div>

</article>

